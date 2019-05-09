<!doctype html>
<html lang= "en-US">
	<head>
		<meta charset="utf-8">
		<title>Alex Lynd's Portfolio | Hacks, Fire and Electronics</title>
		<link rel="stylesheet" type= "text/css" href="css/home.css">
		<link rel="stylesheet" type= "text/css" href="css/menu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/typed.js" type="text/javascript"></script>
	</head>
	<body>
		<script>
			document.addEventListener('DOMContentLoaded',function() {
				var typed= new Typed('.typed', {
					strings: ['<b>Alex Lynd&nbsp;</b>'],
					typeSpeed: 50,
					loop: false
				});
			});
		</script>
		<div id="particles-js"></div>
		<script src="js/particles.js"></script>
		<script src="home.js"></script>
		<div class= "text">
			<?php include "menu.html";?>
			<main>
				<div class="section-wrap">
					<div class= "section1">
						<titlewrap><span class="typed" style="white-space:pre;"></span></titlewrap>
						<p class= "float-fade-in">Welcome to my website! This is my personal page where you can find my project documentation, portfolio, story, and other resources/tutorials on a variety of things including programming, hacking and more. This site is programmed and maintained by me, and you can view the source <a href="https://github.com/alexlynd/website">here</a>.  Click the icons below to head to my social media, or one of the links in the menu to check out my stuff!</p>
						<div class="iconwrap">
							<a href="https://github.com/alexlynd" target="_blank"><i class="fab fa-github-alt"></i></a>
							<a href="https://youtube.com/c/AlexLynd" target="_blank"><i class="fab fa-youtube"></i></a>
							<a href= "https://instagram.com/alex_lynd" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href= "https://twitter.com/alexlynd" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="https://patreon.com/alexlynd" target="_blank"><i class="fab fa-patreon"></i></a>
						</div>
					</div>
				</div>
				<div class="section-wrap">
					<div class="section1">
						<br><br><br><br><br>
					</div>
				</div>
				<div class="section-wrap" id="block3">
					<div class="section1" style="float: right; width: 40%">
						<a name="about"><h1 style="color: #111111">About Me</h1></a>
						<p>Hey! I'm Alex Lynd, a 16 year old hobbyist hacker/maker from California. My hobbies include hardware hacking, blowing stuff up and messing with Wi-Fi.  I want to get into infosec and learn more about SIGINT, and spend my free time learning about stuff like this.  I make a lot of cool projects and haxx, which you can find on my page here.</p>
					</div>
					<div class="section1" style="float: right; width: 40%">
						<img src="tmp/parrot.jpg" width=100%;>
					</div>
				</div>
				<div class="section-wrap" id="block2">
					<div class="section1" style="float: right; width: 30%">
						<img src="tmp/parrot.jpg" width=100%;>
					</div>
					<div class="section1" style="float: right">
						<h1>About Me</h1>
						<p>This is a test section where I will insert content about myself.  I am filling up space here to test the length of this div.</p>
					</div>
					
				</div>
			</main>
		</div>
	</body>
</html>
