<!doctype html>

<!--
    ___    __             __                    __                           
   /   |  / /__  _  __   / /   __  ______  ____/ /       _________  ____ ___ 
  / /| | / / _ \| |/_/  / /   / / / / __ \/ __  /       / ___/ __ \/ __ `__ \
 / ___ |/ /  __/>  <   / /___/ /_/ / / / / /_/ /  _    / /__/ /_/ / / / / / /
/_/  |_/_/\___/_/|_|  /_____/\__, /_/ /_/\__,_/  (_)   \___/\____/_/ /_/ /_/ 
                            /____/                                           
feel free to snoop! | GitHub @alexlynd | Instagram @alex_lynd | Twitter @alexlynd

-->

<html lang= "en-US">
	<head>
		<title>Alex Lynd | Hacks, Fire and Electronics</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
		<meta charset="utf-8">
		<meta name="description" content="Haxx and spooky stuff">
  		<meta name="keywords"    content="Alex Lynd, blog, electronics, programming, hacking, diy, tutorials">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type= "text/css" href="css/style.css">
		<link rel="stylesheet" type= "text/css" href="css/menu.css">
		<script src="js/typed.js" type="text/javascript"></script>
	</head>
	<body>
		<script> 
			document.addEventListener('DOMContentLoaded',function() { 
				var typed= new Typed('.typed', {
					strings: ["Alex Lynd &nbsp;"],
					typeSpeed: 50,
					smartSpace: true,
					loop: false
				});
			});
		</script>
		<div id="particles-js"></div>
		<script src="js/particles.js"></script>
		<script src="js/particles-main.js"></script>
		<div class= "text">

			<?php include "menu.html";?>
			<main id="home">
				<div class="centered">
					<div class="title" id= "home"><br><span class="typed"></span></div>
					<p class= "float-fade-in" style="line-height: 2em">Well rounded hacker and maker looking for more opportunities to create cool CS projects and learn as much as I can.  I'm passionate about making YouTube videos and sharing my content with others.  Currently in high school and pursuing multiple hobbies including martial arts and music.</p>
					
				</div>
				<div class= "arrow">
					<a href="#light">
					<i class="fas fa-chevron-down"></i>
					</a>
				</div>
			</main>	
			<div class="block" id="light" >
				<div class="description" id="home" style="padding-left: 7%">
					<h1 style="color: #ee6352">About Me</h1>
					<p>I'm Alex Lynd, and a 16 year old maker/hacker from California.  I pursue a lot of hobbies including piano, skating, TaeKwonDo, parkour, hacking and more!  I spend most of my time hacking electonics / programming, and push my content to the internet and YouTube.  I'm interested in infosec and hacking, and have been teaching myself a lot about various CS subjects.  I'm a big fan of open-source and free content, and my goal is to keep learning and to spread my knowledge to as many people as I can.</p>
				</div>
				<div class="image" id="home" style="padding-right: 7%">
					<img src="img/profile.jpg" style="filter: grayscale(80%)">
				</div>
			</div>
			<div class="block" id="dark">
				<div class="image" id="home">
					<img src="img/fire.jpg" style="padding-left: 7%">
				</div>
				<div class="description" id="home" style="padding-right: 7%">
					<h1 style="color: #17bebb">My Work</h1>
					<p>I'm currently in high school, and am self taught in everything CS.  I've worked on a lot of personal projects aimed mostly at hardware hacking and auditing devices, which I've recently started to upload to the internet.  I've picked up a lot in programming, hacking, electronics, and webdev.  I coded this website myself from scratch, and you can check out some of my <a href="projects">projects</a>.  I prototype electronics, hack/fix consumer electronics, make websites, and much more.  My current projects include a device for portable wardriving and an AI-based trash sorting device.  I also love pyrotechnics and fire stuff.</p>
				</div>
			</div>	
			<footer>
				<p> Alex Lynd | © 2019 All Rights Reserved.</p>
			</footer>
		</div>
	</body>
</html>
