<!doctype html>
<html lang= "en-US">
	<head>
		<title>CreepDetector | Alex Lynd</title>
		<meta charset="utf-8">
		<meta name="description" content="Haxx and spooky stuff">
  		<meta name="keywords"    content="Alex Lynd, CreepDetector, Wardriving, Warskating, Kismet, Jupyter Notebook">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type= "text/css" href="../../css/style.css">
		<link rel="stylesheet" type= "text/css" href="../../css/menu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  	
	</head>
	<body>
		<?php include "../../menu.html";?>
		<header class="project" id="project-CreepDetector">
			<div class= "centered">
				<div class= "title">CreepDetector</div>
				<div class= "description" id="post">Detecting Stalkers with Wardriving</div>
			</div>
		</header>
		<main class="post">
			<h3>Overview</h3>
			<p>Wardriving is the act of plotting and mapping wireless devices for reconnaissance, and can be utilized for various practical applications even to normal people.  As a proof of concept, my friend Kody and I designed a program that analyzes wardriving data in Jupyter Notebook to see if someone is following you by detecting the presence of their phone or similar Wi-Fi enabled devices.  After gathering information on the "creep", we can plot their location on a map against our route to see where they were spotted.  This article will give you an overview of how the CreepDetector tool works, how we tested it, and how you can set it up yourself.</p>
			<h3>Components</h3>
			<ul>
				<li>Raspberry Pi 3B +</li>
				<li> 3.5" TFT Screen (optional)</li>
				<li>Panda PAU09 Wi-Fi Dongle</li>
				<li>USB GPS</li>
				<li>Portable Battery</li>
				<li>a Creep</li>
			</ul>
			<h3>Wardriving Setup</h3>
			<p>The first step before writing code was to set up our wardriving tools and capture some data, so I connected the GPS and Wi-Fi dongle to my Raspberry Pi and initialized a serial connection to the GPS with GPSD.  I started the Wi-Fi dongle into monitor mode, allowing me to capture Wi-Fi data promiscuously, and attached a 3.5” TFT so I could have a small monitor during the wardriving session. Then launching Kismet, a command-line wardriving utility, I was set to start capturing creeps.</p>  
			<a href="" style="color: white; font-size: 14px;">[Full installation instructions]</a>
			<div class="img-captioned">
				<img style="width: 100%" src="img/RPi_Kismet_TFT.png" alt = "Raspberry Pi running Kismet on TFT"/>
				<div class="post-caption" id="post-img"> <p>Raspberry Pi running Kismet</p> </div>
			</div>
			<p>
			Since we needed a recognizable wireless device to test as a definite “creep”, Kody wrote a program for an ESP8266 that starts a Wi-Fi access point with the name “Creeper”.  With my wardriving tools set up, I skated around the block while he followed me in a car, placing the device in two separate places along my ahead route as different instances of a “creep” showing up.  This would later allow us to parse through the wardriving data and locate the creep and information about it, if it was detected outside a certain range.</p>
			<div class="img-captioned">
			<img style="width: 100%;" src="img/CreepDetector.png" alt = "ESP8266 Wemos D1 Mini running Wi-Fi Access Point"/>
				<div class="post-caption" id="post-img"> <p>ESP8266 acting as Wi-Fi Access Point</p> </div>
			</div>
			
			<h3>Detecting Creeps</h3>
			<p>Python offers a variety of simple libraries for data analysis, and the Jupyter Notebook IDE provides a user friendly interface for rendering Python code output, so this will be the most viable option for handling the files.  Kismet generates a few file formats (all XML derivatives) after a session, but we only need to parse through the netxml and gpsxml files, which contain the devices detected and locations they were spotted at.  The CreepDetector extracts this information, and creates a database of all wireless devices found, and information including the ESSID, device type and spotted locations.</p>
			<div class="img-captioned">
			<img style="width: 100%" src="img/devices.png" alt = "Jupyter Notebook CreepDetector code"/>
				<div class="post-caption" id="post-img"> <p>List of over 1200 devices detected</p> </div>
			</div>
			
			<p>After creating this list, the CreepDetector filters out devices spotted within a threshold range (set to a quarter mile) using their max and min GPS locations.  Once the devices are filtered, a "creep list" is rendered, and sure enough the “Creeper” device appears!  It even picked up Kody’s phone as an unintended side-effect, since we initially didn't expect it to detect devices that are not Wi-Fi access points.</p>
			<div class="img-captioned">
			<img style="width: 100%" src="img/Creeps.png" alt = "Jupyter Notebook CreepDetector code"/>
				<div class="post-caption" id="post-img"> <p>We found the Creep!</p> </div>
			</div>
			<p>Finally to help visualise where the creeps were spotted, I used a Python library called Folium for map plotting.  I wrote a sketchy algorithm that plots my wardriving route and layers Creeps on top of it with all the places they were detected at. If you want to understand how any of this code works or the sketchy algorithm, you can check out my <a href="">blog here.</a></p>
			<iframe src="map.html" style="width:100%; height: 60vh;"></iframe>

			<h3>Conclusion</h3>
			<p>We initially didn't expect the CreepDetector to work as well as it did, and it certainly took a long time to code since I had to manually read over and try to understand the structure of the Kismet xml files to properly parse the files.  One shortcoming of the CreepDetector is that the detection must be done in post (after wardriving), meaning you're unable to pick up Creeps during the session.  However after talking to dragorn from <a href="https://twitter.com/KismetWireless" target="_blank">KismetWireless</a> on Twitter, they're considering adding this as a feature!  The CreepDetector also relies on the presence of a Wi-Fi enabled device carried by the Creep, such as a cell phone.  Since we initially thought only AP's would work, and wanted an isolated device, the ESP8266 was a quick, expendable platform to test this on, but it was an amazing accident that we picked up Kody's phone.</p>
			<p>There are still a few features I'm looking to fix in the CreepDetector, such as the current map plotting algorithm and making other code more efficient.  Im currently working on porting this concept to run on an ESP8266 in conjunction with my <a href="/projects/ESP-DriveBy">ESP-DriveBy</a> project.  To see  updates on this project, check the sidebar for news, or follow my <a href="https://twitter.com/alexlynd" target="_blank">Twitter page</a>.  I'm hoping on releasing a YouTube video soon giving an overview of this project, so stay posted!</p>
		</main>
		<sidebar>
			<h3>Project Logs</h3>
			<a href="/blog/Coding-the-CreepDetector">Writing the Code for CreepDetector</a>  
			<h3>Links</h3>
			<a href="https://github.com/skickar/CreepDetector" target="_blank">CreepDetector on GitHub</a>
			<a href="">Installation Guide</a>
		</sidebar>
	</body>
</html>