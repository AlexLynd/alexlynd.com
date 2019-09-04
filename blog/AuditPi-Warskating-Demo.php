<!doctype html>
<html lang= "en-US">
	<head>
		<title>AuditPi Warskating Demo [Vlog 0] | Alex Lynd</title>
		<meta charset="utf-8">
		<meta name="description" content="Blog">
  		<meta name="keywords"    content="Alex Lynd, projects, portfolio, electronics">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type= "text/css" href="../css/style.css">
		<link rel="stylesheet" type= "text/css" href="../css/menu.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../../css/prettify.css">
		<script type="text/javascript" src="../../js/google-code-prettify/prettify.js"></script>
	</head>
	<body onload="javascript:process('all')">
		<?php include "../menu.html";?>
		<header class="project" id="">
			<div class= "centered">
				<div class= "title">AuditPi Warskating Demo</div>
				<div class= "description" id="post">RPi Wardriving Demonstration</div>
			</div>
		</header>
		<main>
			<h3>Background</h3>
			<p>The <a href="">AuditPi</a> is a portable Raspberry Pi based device I created for mobile computing and specifically wireless reconaissance.  With a 2500 mAh battery and 3.5" screen, I figured it had enough power to run Kismet for a few hours, so I took it for a spin around my neighborhood.  This is my first vlog so I figured it would be good to do a demonstration of the device I created.</p>
			<br>
			<h3>What is Wardriving/Warskating/WarX?</h3>
			<p>WarX (insert any word) is basically tagging Wi-Fi and relevant information such as encryption, to a physical map location with GPS.  This is very useful to gather information on the fly while driving or walking, and is inconspicuous.  A hacker can simply look back at his map later to observe possible targets and attack vectors from the information he's gathered.  It's also a fun hobby like geocaching to rack up as many stats as you can, which you can check out on the <a href="">Wigle Database</a>.</p>
			<br>
			<h3>My setup with Kismet</h3>
			<p>A really popular tool for wardriving is <a href="">Kismet</a>, which can be used for all sorts of wireless recon.  With any GPS module and a Wi-Fi dongle capable of monitor mode, you can start wardriving.</p>
			<p>The GPS module I'm using is a cheap <a href="">Ublox module</a> that communicates over serial.  Since the UART pins are taken on the AuditPi, I used a <a href = "">USB ttl cable</a> to hook it up to the Pi, but in the next revision I hope to rectify this. The Wi-Fi dongle I am using is the cheap and lightweight <a href="">Panda PAU09</a> which is capable of scanning both bands of Wi-Fi.</p>
			<p>After enabling the GPS with gpsd, I launched the Kismet server, and started capturing.</p>
			<br>
			<h3>Warskating Vlog</h3>
			<p>Vlogging the warskating trip meant I was carrying about 15 pounds in my backpack, with a laptop, camera gear, water bottle, and some EDC stuff.  The AuditPi itself was less than a pound and sat snuggly at the bottom of my backpack and hardly a burden.  However, with the pointy Wi-Fi antennas and loose GPS module I was concerned that something might break or get damaged.  I skated for about 30 minutes around a local SoCal neighborhood in the vicinity of a small business hub with interesting activity around the Boeing center and some other aviation companies.  Nothing got damaged but it was a painfully video to shoot in the hot weather.</p>
			<br>
			<h3>Performance and Applications</h3>
			<p>The AuditPi held up well during the trip, and I was surprised the battery lasted the whole time considering the high power consumption from the peripherals.  The AuditPi has a really low profile when hidden in a backpack or even in your pocket, which I find ideal for auditing applications and recon.  Besides skating around with a camera, I obviously didn't attract much attention to doing anything nefarious, and a device like this could easily infltrate a building, or passby while gather information.  I captured something around 800 networks during my trip, which I uploaded to the Wigle database.</p>
			<p>The AuditPi was designed with portability and modularity in mind, and ideally you could mount it within a vehicle using the 1/4"-20 thread at the bottom to a tripod for more stability.  It could be used as a more stationary yet portable device, but my demonstration covered the application as a portable device.
			<br>
			<h3>Future Improvements</h3>
			<p>Being the first iteration of the AuditPi, there are a lot of fallibilities and features that I feel could be fixed.  While the form factor is already really small for a portable computer, I think I could significantly reduce the size by redesigning the enclosure and cutting some corners on components.  For instance, using a 2.8" tft would improve the latency significantly and also cut down power consumption which resultantly means I could use a smaller battery.  I also hope to embed a GPS module into the next iteration for an even more compact form factor.</p>
			<p>As the first stage of development, there's a lot to work out, and this demonstration showed me some flaws and limits that need to be worked out with the AuditPi and its capabilities.  Make sure to check out the documentation <a href="">here</a>, and of course the video.</p>
			<p>Thanks for reading this blog, if you enjoy this content please subscribe to my channel or check me out on <a href ="">social media</a>.

			<!-- insert video-->
			
		</main>
	</body>
</html>	