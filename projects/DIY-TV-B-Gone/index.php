<!doctype html>
<html lang= "en-US">
	<head>
		<title>DIY TV-B-Gone | Alex Lynd</title>
		<meta charset="utf-8">
		<meta name="description" content="TrashSort project documentation">
  		<meta name="keywords"    content="Alex Lynd, blog, electronics, programming, hacking, diy, tutorials, TrashSort, AI">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type= "text/css" href="/css/style.css">
		<link rel="stylesheet" type= "text/css" href="/css/menu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../../css/prettify.css">
		<script type="text/javascript" src="../../js/google-code-prettify/prettify.js"></script>

	</head>
	<body onload="PR.prettyPrint()">
		<?php include "../../menu.html";?>
		<header>
			<div class= "title">DIY TV-B-Gone</div>
			<div class= "description" id="post">Kill TV's with a button press</div>
		</header>
		<main id="post-only">
			<h3>Overview</h3>
			<p>The TV-B-Gone is a device created by Adafruit that can shut off almost any TV using IR.  Using their open-source documentation, I created my own TV-B-Gone for much cheaper and using a piece of perfboard.  This page documents the steps to how I created my TV-B-Gone, but I will do a more detailed tutorial soon.</p>
			<h3>How it Works</h3>
			<p>
			TV remotes operate using IR or infrared radiation, light at a wavelength not visible to humans.  By flashing pulses of IR light in timed intervals, a remote can communicate with the TV to send it codes like how morse code works.  For instance, something like "101101110001" could be a turn off code.  However, since TV manufacturers use different code instructions, we can't readily use one remote to control every TV.  
			</p>
			<p>
			Adafruit compiled a list of turn-off codes for 230 TV brands, which can be iterated through bruteforce until the TV turns off.  The TV-B-Gone utilizes an ATtiny85 as the processor, which runs through all these codes and emits them through IR LED's, hoping to turn off the target TV.
			</p>
			<hr>
			<h3>Parts</h3>
			<ul>
				<li><a href="">ATtiny85</a></li>
				<li><a href="">DIP Socket</a></li>
				<li><a href="">x4 950 nm IR LEDS</a></li>
				<li><a href="">x4 NPN transistors</a></li>
				<li><a href="">PNP transistor</a></li>
				<li><a href="">AVR ISP</a></li>
				<li><a href="">Battery Holder</a></li>
				<li><a href="">Tactile Switch</a></li>
				<li><a href="">Colored LED</a></li>
				
			</ul>
			<h3>Design</h3>
			<p>I started by looking at the <a href="https://raw.githubusercontent.com/adafruit/TV-B-Gone-kit/master/pcb/tvbgone3sch.png" target="_blank" class="link">Adafruit schematic for the TV-B-Gone 3</a>, and mapped the component layout to fit on a 12x18 piece of perfboard.  I am using the same style AAA double battery holder they use, for which the perfboard fits perfect.  All other components are the same, except I am using generic transistors and a different style resonator (but still 8mhz).</p>
			<img src="img/perf_sch0.png" style="width: 100%;">
			<h3>Software</h3>
			<p>Next, I programmed the ATtiny85 microcontroller which Adafruit calls for in their design.  Since the ATtiny chip comes in a DIP package instead of a dev board, we will need to use an ISP (in-system programmer) to upload code to it, which is wired by hand.  You can buy an ISP (preferrable) or make one using an Arduino like I did.  You can check out my guide <a href="">here</a>which gives a more detailed insight on programming ATtiny chips and choosing an ISP, as well as how to make an Arduino ISP.</p>
			<p>Since Adafruit provides compiled hex code, I used a command line tool called AVRDUDE to flash the code.  </p>
			<p>I installed AVRDUDE (Linux) :</p>
			<pre class="prettyprint lang-bash">
sudo apt install avrdude</pre>
			<p>Next, I wanted to set the ATtiny to use an external oscillator (an 8MHz resonator) for higher precision.  I wired the resonator to the ATtiny with the Adafruit schematic, and hooked my Arduino ISP, and placed a capcitor between reset and ground to prevent resetting on upload.  With wiring in place, I set the fuses in the ATtiny.  Replace -P with your ISP port.</p>
			<pre class="prettyprint lang-bash">
avrdude -c avrisp -p t85 -U lfuse:w:0xfe:m -U hfuse:w:0xdf:m -U efuse:w:0xff:m -P /dev/ttyACM0 -b 19200</pre>
			<p>Next I downloaded the Adafruit GitHub repository, moved into the firmware directory, and flashed the tvbgone.hex file to the ATtiny.</p>
			<pre class="prettyprint lang-bash">
git clone https://github.com/adafruit/TV-B-Gone-kit
cd TV-B-Gone-kit/firmware
avrdude -p t85 -P /dev/ttyACM0 -c avrisp -b 19200 -U flash:w:tvbgone.hex</pre>
			<hr>
			<h3>Assembly</h3>
			<p>Next I moved straight to assembling the perfboard, using the perfboard layout above.</p>
			<ol>
				<li>First, I soldered the IR LED's and their driver NPN transistors.  In the configuration below.  I tied all of the positive leads together, which I brought to the left side of the perfboard, creating a positive power railing.  I also tied all of transistor bases and tied the collectors, which I used to draw the negative power railing.</li>
				<br>
				<img src= "img/sch/0.png" style="width: 100%">
				<br> <br>
				<li>Next I placed the PNP transistor with the emitter inline with the positive power rail, and the collector to the NPN bases.</li>
				<img src= "img/sch/1.png" style="width: 100%">
				<li>I soldered down the DIP socket facing the left, and connected a 1k Ω resistor to pin 5 and to the base of the PNP transistor.</li>
				<img src= "img/sch/2.png" style="width: 100%">
				<li>I drew pin 8 of the DIP socket to the positive power line, and connected a 1k Ω resistor to pin 7.  I then connected the indicator LED to the other lead of the resistor and to power.</li>
				<img src= "img/sch/3.png" style="width: 100%">
				<li>After this, I connected pin 6 (MISO) to ground with a 10K Ω resistor.  I also connected the 8 MHz resonator to pins 2 & 3 of the DIP socket, and the middle pin to the negative power rail.</li>
				<img src= "img/sch/4.png" style="width: 100%">
				<li>I connected a tacticle switch between reset (pin 1) and ground of the DIP socket.</li>
				<img src= "img/sch/5.png" style="width: 100%">
				<li>Finally, I added the last two components, the two capcitors which do voltage regulation.</li>
				<img src= "img/sch/6.png" style="width: 100%">
				<li>I finished the board by adding the rest of the power connections, and attaching them to the double AAA battery pack power lines.</li>
				<img src= "img/sch/7.png" style="width: 100%">
				<li>Using some double-sided foam tape, I stuck the perfboard down to the battery pack.</li>
			</ol>
			<h3>Conclusion</h3>
			<p>I intended to closely replicate the Adafruit TV-B-Gone without having to buy their custom PCB at a pricey $20.  The main difference in my replication is the perfboard, and substitution of a few components.  While I chose to use the same battery pack they used, you can use any power supply between 3-5 V.  While I'm using wide-angled LEDs, I can still get a pretty good range on my TV-B-Gone, but will try to get some of the narrow-angled ones in the future.  I'm working on a micro iteration of the TV-B-Gone which I'm hoping to release soon.</p>
		</main>
	</body>
</html>