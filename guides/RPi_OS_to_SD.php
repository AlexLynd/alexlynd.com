<!DOCTYPE html>
<html>
	<head>
		<title>RPi OS to SD card</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type= "text/css" href="../style.css">
	</head>
	<body>
		<?php include "header.php"; ?>
	
		<div class="main">		
			<hr/><p>This guide will show you how to put an operating system on an SD card for your Raspberry Pi.</p><hr/>
			<h3>Materials:</h3>
			<ul>
				<li>(micro)SD card (16gb or larger preffered)</li>
				<li>(micro)SD to USB Adapter</li>
			</ul>
			<h3>Links to Common OS's:</h3>
			<ul>
				<li><a href= "">Kali</a></li>
				<li><a href= "">Raspbian</a></li>
				<li><a href= "">RetroPie</a></li>
				<li><a href= "">Ubuntu</a></li>
			</ul>
			<h3>Software:</h3>
			<ul>
				<a href= "http://www.7-zip.org/" target= "_blank">7zip</a>
				<li><a href= "https://etcher.io" target="_blank">Etcher</a></li>
			</ul>
			
			<h3>Instructions:</h3>
			<ol>
				<li>Download the operating system file you wish to use with the Raspberry Pi.  For example, <a href= "">Raspbian</a> or <a href= "">RetroPie</a>.  Above are links to some other common OS's.</li>		
				<li>Move the file to your computer's desktop.</li>
				<li>Download <a href= "http://www.7-zip.org/" target= "_blank">7zip</a>, which will be used to de-compress the file.  Follow the instructions to install 7zip on your computer.</li>
				<li>After installing 7zip, right click on the file you downloaded.  <br>Select [7-zip &#x25BA Extract Here].  The decompressed .img file should appear somewhere on your desktop, and you can delete the old file.</li>
				<li>Check if the file extension is a .img.  If not, repeat the process, as it may have double compression like Kali.</li>
				
				<li>Download <a href= "https://etcher.io" target= "_blank">Etcher</a> to write the image file to the SD card.  The file is called an image because its file extension is ".img" which is read by the Raspberry Pi.</li>
				<li>Plug your SD card into your computer.</li>
				<li>Launch Etcher.  From there it should be straight forward: select the location of the image file on your desktop, select your SD card drive, and then hit flash.</li>
				<li>Once complete eject your SD card (or pull it out like an idiot).</li>				
			</ol>
			<h3>Pictures:</h3>
	  	</div>
  	</body>	
</html>
	