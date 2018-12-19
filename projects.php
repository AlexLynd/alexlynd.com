<!doctype html>
<html lang= "en-US">
	<head>
		<meta charset="utf-8">
		<title>Projects</title>
		<link rel="stylesheet" type= "text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Space Mono" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Work Sans" rel="stylesheet">
		<script src="typed.js" type="text/javascript"></script>
	</head>
	<body>
		<script>
			document.addEventListener('DOMContentLoaded',function() {
				var typed = new Typed('#typed', {
					strings: ['<b>Projects&nbsp;</b>'],
					typeSpeed: 10,
					backSpeed: 0,
					loop: false
				});
				var typed2 = new Typed('#typed2', {
					strings: ['^500My personal projects.'],
					typeSpeed: 0,
					backSpeed: 0,
					smartBackspace: true,
					showCursor: false,
					loop: false
				});
			});
		</script>
		<?php include "navbar.html";?>	
		<main>
			<titlewrap> <span id="typed" style="white-space:pre;"></span> </titlewrap>
			<p></p> <span id="typed2"></span>
			<div class="arrow bounce"><i class="fa fa-angle-down fa-5x" aria-hidden="true"></i></div>
		</main>
		<div class="bounce"></div>
	</body>
</html>