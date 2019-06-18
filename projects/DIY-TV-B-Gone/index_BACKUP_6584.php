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
<<<<<<< HEAD
			<h3>Design</h3>
			<p>I started by looking at the <a href="https://raw.githubusercontent.com/adafruit/TV-B-Gone-kit/master/pcb/tvbgone3sch.png" target="_blank" class="link">Adafruit schematic for the TV-B-Gone 3</a>, and mapped the component layout to fit on a 12x18 piece of perfboard.  I am using the same style AAA double battery holder they use, for which the perfboard fits perfect.  All other components are the same, except I am using generic transistors and a different style resonator (but still 8mhz).</p>
=======
			<hr>
			<p>I started by looking at the <a href="https://raw.githubusercontent.com/adafruit/TV-B-Gone-kit/master/pcb/tvbgone3sch.png" target="_blank" class="link">Adafruit schematic for the TV-B-Gone 3</a>, and mapped the component layout to fit on a 12x18 piece of perfboard.</p>
>>>>>>> 45b878e19eea7751aba686de7afd62d6f57aa11b
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
			<p></p>
			<p>Flash tvbgone.hex to ATtiny85</p>
			<pre class="prettyprint lang-bash">
avrdude -p t85 -P /dev/ttyACM0 -c avrisp -b 19200 -U flash:w:tvbgone.hex</pre>
<<<<<<< HEAD
			<hr>
=======
			</hr>
>>>>>>> 45b878e19eea7751aba686de7afd62d6f57aa11b
			<p></p>
			<b><p>more documentation coming soon...</p></b>
		</main>
	</body>
</html>