<!doctype html>
<html lang= "en-US">
	<head>
		<meta charset="utf-8">
		<title>About</title>
		<link rel="stylesheet" type= "text/css" href="css/home.css">
		<link rel="stylesheet" type= "text/css" href="css/menu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/typed.js" type="text/javascript"></script>
	</head>
	<body>
		<script>
			document.addEventListener('DOMContentLoaded',function() {
				var typed = new Typed('#typed', {
					strings: ['<b>About&nbsp;</b>'],
					typeSpeed: 10,
					backSpeed: 0,
					loop: false
				});
				var typed2 = new Typed('#typed2', {
					strings: ['^500About this website and me.'],
					typeSpeed: 0,
					backSpeed: 0,
					smartBackspace: true,
					showCursor: false,
					loop: false
				});
			});
		</script>
		<?php include "menu.html";?>	
		<main>
			<titlewrap> <span id="typed" style="white-space:pre;"></span> </titlewrap>
			<p></p> <span id="typed2"></span>
		</main>
	</body>
</html>