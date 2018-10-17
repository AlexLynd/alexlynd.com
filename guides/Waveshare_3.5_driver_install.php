<!DOCTYPE html>
<html>
	<head>
		<title>Waveshare 3.5" TFT Driver Install</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type= "text/css" href="../style.css">
	</head>
	<body>
		<?php include "header.php"; ?>
		<div class="main">		
			<hr/>
			<p>
			This guide will show you how to put an operating system on an SD card for your Raspberry Pi.
			</p> <hr/>
			<h3>Materials:</h3>
			<ul>
				<li>Raspberry Pi</li>
				<li>SD card (with Raspbian or Ubuntu)</li>
				<li>USB flash drive (optional)</li>
				<li>Waveshare 3.5" TFT for RPi</li>				
			</ul>
			<h3>Links:</h3>
			<ul>
				<li><a href= "https://waveshare.com/wiki/">3.5" TFT Driver</a></li>			
			</ul>
			<h3>Instructions:</h3>
			<ol>
				<li>If you don't already have Raspbian or Ubuntu installed on your SD card, follow my guide <a href="RPi_OS_to_SD.html"> here</a> and install Ubuntu or Raspbian on your SD card.
				</li>				
				<li>There are many ways to download the driver, and I will go through the 2 easiest.</li>
				<p><b>Raspberry Pi only</b></p>
				<ol>
					<li>Start up your Raspberry Pi. You will need to be connected to the internet.</li>
					<li>Head over to the <a href="">Waveshare wiki</a> and scroll down until you find drivers.  Download the driver and drag it to your desktop.</li>
					<li>Move open the file explorer, and put it directly into the root directory (the first thing that opens up).</li>
				</ol>
				<p><b>With your computer</b></p>
				<ol>
					<li>Download the driver file from the <a href= "">Waveshare wiki</a>.  Put this file on your USB flash drive and eject it.</li>
					<li>Plug the flash drive in the Raspberry Pi and move put the drive file in the main directory of file explorer.</li>
					<li>Remove your flash drive.</li>
				</ol>
				<li>With the file now in the root directory, start up terminal and type:</li>
				<p class= "terminal"> sudo raspi-config</p>
				<li>Select Advanced options &#x25BA Expand Filesystem .  This allows the operating system to take up all the space on the SD card.</li>
				<li>Then choose Boot Options &#x25BA Desktop/CLI &#x25BA Desktop Autologin .  For this you can choose whatever you want, but you should boot to either Desktop option.  The command line is pretty buggy on the TFT from my experience.
				</li>
				<li>Reboot the system as prompted.</li>
				<li>Launch terminal again, and type: <p class= "terminal">tar xvf LCD-show-*.tar.gz</p> which extracts the compressed driver.</li>
				<li>Change your directory with: </li> <p class= "terminal">cd LCD-show</p>
				<li>Then type <p class= "terminal">chmod +x LCD35-show</p> to make the command executable.</li>
				<li>Finally, to boot on the LCD, type:</li><p class= "terminal">sudo LCD35-showssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
				
			</ol>
			<h3>Pictures:</h3>
	  	</div>
	  	<div class= "sidebar">
	  		<h3>Related</h3>
	  		
	  	</div>
  	</body>	
</html>
	