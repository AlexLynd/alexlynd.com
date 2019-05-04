<!doctype html>
<html lang= "en-US">
	<head>
	    <meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Projects</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type= "text/css" href="../css/portfolio.css">
		<link rel="stylesheet" type= "text/css" href="../css/menu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="../js/typed.js" type="text/javascript"></script>
	</head>
	<body>
		<script>
		document.addEventListener('DOMContentLoaded',function() {
				var typed = new Typed('#typed', {
					strings: ['Projects docs and things I create. Check portfolio for competitions/resume stuff.'],
					typeSpeed: 0,
					backSpeed: 0,
					smartBackspace: true,
					showCursor: false,
					loop: false
				});
			});
		</script>
		<div id="particles-js"></div>
		<script src="../js/particles.js"></script>
		<script src="../home.js"></script>
		<div class="text">
			<?php include "../menu.html";?>
			<header>
				<div class= "title">Projects</div>
				<center><span id="typed" style="white-space:pre;"></span></center>
			</header>
			<main>
				<div class="container">   
					<div class="element">
						<div class="post">
							<a href= "AuditPi/index.php"><img src="AuditPi/IMG_3891.jpg"></a>
						</div>
						<div class="cappy">
							<h1>AuditPi: A modular hackable PDA</h1>
						</div>
					</div>
					<div class="element">
						<div class="post">
							<a href="CalcProbe/index.php"><img src="fug.jpg"></a>
						</div><div class="cappy">
						<h1>CalcProbe: Exploiting Calculators</h1>
						</div>
					</div>
					<div class="element">
						<div class="post">
							<img src="bar.jpg">
						</div>
						<div class="cappy">
							<h1>TrashSort: AI Trash Classification</h1>
						</div>
					</div>
					<div class="element">
						<div class="post">
							<img src="fug.jpg">
						</div>
						<div class="cappy">
							<h1>ESP8266 WarDriving</h1>
						</div>
					</div>
				</div>
			</main>
		</div>
	</body>
</html>	