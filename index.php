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
			<header>
				<?php include "menu.html";?>
			</header>
			
			<main>
				<titlewrap><span class="typed" style="white-space:pre;"></span></titlewrap>
				<p class= "float-fade-in">Welcome to my website! This is my personal page where you can find my project documentation, portfolio, story, and other resources/tutorials on a variety of things including programming, hacking and more. This site is programmed and maintained by me, and you can view the source <a href="https://github.com/alexlynd/website">here</a>.  Click the icons below to head to my social media, or one of the links in the menu to check out my stuff!</p>
				<div class="iconwrap">
					<a href="https://github.com/alexlynd" target="_blank"><i class="fab fa-github-alt"></i></a>
					<a href="https://youtube.com/c/AlexLynd" target="_blank"><i class="fab fa-youtube"></i></a>
					<a href= "https://instagram.com/alex_lynd" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href= "https://twitter.com/alexlynd" target="_blank"><i class="fab fa-twitter"></i></a>
					<a href="https://patreon.com/alexlynd" target="_blank"><i class="fab fa-patreon"></i></a>
				</div>
			</main>
		</div>
	</body>
</html>
