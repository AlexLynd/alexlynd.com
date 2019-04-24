<!doctype html>
<html lang= "en-US">
	<head>
		<meta charset="utf-8">
		<title>Alex Lynd's Portfolio | Hacks, Fire and Electronics</title>
		<link rel="stylesheet" type= "text/css" href="css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Space Mono" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Work Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/typed.js" type="text/javascript"></script>
	</head>
	<body>
		<script>
			document.addEventListener('DOMContentLoaded',function() {
				var typed = new Typed('.typed', {
					strings: ['<b>Alex Lynd&nbsp;</b>'],
					    typeSpeed: 50,
						loop: false
				});
				var typed2 = new Typed('#typed2', {
					strings: ['^500Welcome to my website! This is my personal page where you can find my project documentation, portfolio, story, and other resources/tutorials on a variety of things including programming, hacking and more. This site is programmed and maintained by me, and you can view the source <a href="https://github.com/alexlynd/website">here</a>.  Click the icons below to head to my social media, or one of the links in the menu to check out my stuff!'],
					typeSpeed: 0,
					backSpeed: 0,
					smartBackspace: true,
					showCursor: false,
					loop: false
				});
				var typed3 = new Typed('.iconwrap', {
					strings: ['^3500<a href="https://github.com/alexlynd" target="_blank"><i class="fab fa-github-alt"></i></a><i class="fab fa-youtube"></i><a href= "https://instagram.com/alex_lynd" target="_blank"><i class="fab fa-instagram"></i></a><a href= "https://twitter.com/alexlynd" target="_blank"><i class="fab fa-twitter"></i></a><i class="fab fa-patreon"></i>'],
					typeSpeed: 0,
					backSpeed: 0,
					smartBackspace: true,
					showCursor: false,
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
				<titlewrap><span class="typed" style="white-space:pre;"></span></titlewrap>
				<p></p> <span id="typed2"></span> <p></p>
				<span class="iconwrap"></span>
			</main>
		</div>
	</body>
</html>
