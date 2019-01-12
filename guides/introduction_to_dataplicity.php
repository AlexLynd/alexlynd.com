<!doctype html>
<html lang= "en-US">
	<head>
		<meta charset="utf-8">
		<title>Alex Lynd's Blog</title>
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
					strings: ['<b>Alex Lynd&nbsp;</b>'],
					typeSpeed: 10,
					backSpeed: 0,
					loop: false
				});
				var typed2 = new Typed('#typed2', {
					strings: ['^500Welcome to my website!  This is my personal page where you can find my project portfolio, my story, and resources and tutorials on various things including programming, hacking and more.  This page is curently under development and you can view the source <a href= "https://github.com/alexlynd/alexlynd.com_source">here</a>.'],
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
			<div class="arrow bounce"></div>
		</main>
	</body>
</html>
