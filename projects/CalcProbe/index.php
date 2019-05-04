<!doctype html>
<html lang= "en-US">
	<head>
		<meta charset="utf-8">
		<title>AuditPi</title>
		<link rel="stylesheet" type= "text/css" href="../../css/post.css">
		<link rel="stylesheet" type= "text/css" href="../../css/menu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 	
	</head>
	<body>
		<div id="particles-js"></div>
		<script src="../../js/particles.js"></script>
		<script src="../../home.js"></script>
		<div class="text">
			<?php include "../../menu.html";?>
		<header>
			<div class= "title">CalcProbe</div>
			<div class= "description">Exploiting 6 Function Calculators <i class="fas fa-link"></i> <i class="fab fa-github-alt"></i> <i class="fab fa-youtube"></i>
			</div>
			<center><p>Documentation for the CalcProbe project.</p></center>
		</header>
		<main>
			<h3>Description</h3>
			<p>CalcProbe is an exploit that allows you to hack any regular 6 function calculator into an internet-capable device that can execute code.</p>
			<h3>How It Works</h3>
			<p>A calculator's PCB contains an arrangement of the keys in a style known as a key matrix.  When keys are pressed and indexed to a certain row/column, this info is sent to the processor which updates the screen with relevant info.  By hijacking the key matrix on the PCB by adding an MCU piggy-backed on top, we can send  fake keypresses by probing the row and column of certain keystrokes.  We also can read input, and thus utilize the calculator as a full IO device.  We hook up the calculator PCB to a Raspberry Pi Zero W's GPIO pins, and can program anything we want.</p>
			<h3>Parts List</h3>
			<ul>
				<li>Calculator</li>
				<li>Raspberry Pi Zero W</li>
			</ul>
			<h3>Documentation</h3>
			<p>More info coming soon.</p>
			
			
		</main>
		<sidebar>
			<h3>Gallery</h3> <br>
			<h3>Files</h3>
			<p><a href="">Download all</a> (ZIP)</p>
			<p><a href="">sch01.png</a> (SCH)</p>
			<br>
			<h3>Links</h3>
			<p></p>
		</sidebar>
		</div>
	</body>
</html>