<!doctype html>
<html lang= "en-US">
	<head>
		<title>AuditPi | Alex Lynd</title>
		<meta charset="utf-8">
		<meta name="description" content="Haxx and spooky stuff">
  		<meta name="keywords"    content="Alex Lynd, electronics, hacking, diy, tutorials, AuditPi, Raspberry Pi">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type= "text/css" href="../../css/style.css">
		<link rel="stylesheet" type= "text/css" href="../../css/menu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  	
	</head>
	<body>
		<?php include "../../menu.html";?>
		<header class="project" id="AuditPi">
			<div class= "centered">
				<div class= "title">AuditPi</div>
				<div class= "description" id="post">A Modular Handheld Raspberry Pi PDA </div>
			</div>
		</header>
		<main class="post">
			<h3>Overview</h3>
			<p>AuditPi is a handheld pocket computer with a variety of uses, but aimed at mobile hacking and audits.  This device comes in a phone form factor and runs Linux, offering full functionality of a computer.  It's modular design allows it to easily be mounted in a variety of places and on standard tripods.</p>
			<p>Please check the archives under the video if you are looking for an in depth build process for each iteration of the project.</p>
			
			<h3>Description</h3>
			<p>AuditPi is a Linux computer that uses a Raspberry Pi 3 as the processor, and features a 3.5" screen driven over SPI using the WaveShare TFT drivers.  These components have been slimmed down to fit in a smaller form factor and for arrangement.  The unit is powered by a 3.7V battery, stepped up with an Adafruit PowerBoost 1000C.  There is a 1/4"-20 thread mount at the bottom of the case that allows it to be tethered to tripods and other stands.  The design is intended to be as modular as possible, so I am working on making this a more open and easier design to replicate by designing custom PCBs.</p>
			
			<h3>Specs/Features</h3>
			<ul>
				<li>3.5" Screen</li>
				<li>x4 USB</li>
				<li>Battery management system</li>
				<li>1/4" thread for tripod mount</li>
				<li>multiple operating systems</li>
				<li>ARM processor 1.2GHz (Raspberry Pi)</li>
				<li>2GB RAM</li>
			</ul>
			<hr/>
			<h3>Build Process</h3>
			<p>AuditPi is in it's first iteration, and the design isn't as modular and plug and play as I intended.  There is a lot of tricky solder work and fine wiring making this a hard project for beginners.  I am working on improving the design, and working on custom PCB's.</p>
			<h3>Parts List</h3>
			<ul>
				<a href= ""><li>Raspberry Pi</li></a>
				<a href= ""><li>3.5" SPI TFT</li></a>
				<a href= ""><li>Adafruit PowerBoost 1000C</li></a>
				<a href= ""><li>3.7v 2500maH Battery</li></a>
				<a href= ""><li>microSD extender</li></a>
				<a href= ""><li>microSD card</li></a>
				<a href= ""><li>3/8"-16 to 1/4"-20 thread reducer</li></a>
				<a href=""><li>slide switch</li></a>
			</ul>
			<h3>Material/Tools</h3>
			<p><i>*not required</i></p>
			<ul>
				<li>Soldering iron</li>
				<li>Solder</li>
				<li>Solder wick / flux*</li>
				<li>wire cutters/pliers</li>
				<li>heat gun*</li>
				<li>wire</li>
			</ul>
			<h3>Assembly</h3>
			<ol>
				<li>Start by downloading the 2 stl files for this project on the side of the page.</li>
				
			</ol>
		</main>
		<sidebar>
			<h3>Gallery</h3>
			<div class="video-container"><iframe width="853" height="200" src="https://www.youtube.com/embed/--w1xGTmC7Y" frameborder="0" allowfullscreen></iframe></div>
			<h3>Links</h3>
			<a href="https://blog.hackster.io/auditpi-portable-pi-setup-and-warskating-device-a152c2a0962f" target="_blank">Hackster.io Article</a>  
			<a href="">WarSkating Vlog</a>
		</sidebar>
	</body>
</html>