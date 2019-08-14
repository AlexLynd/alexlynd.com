<!-- PROJECTS -->
<!doctype html>
<html lang= "en-US">
	<head>
		<title>Projects | Alex Lynd</title>
		<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico"/>

		<meta charset="utf-8">
		<meta name="description" content="My projects">
  		<meta name="keywords"    content="Alex Lynd, projects">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type= "text/css" href="../css/style.css">
		<link rel="stylesheet" type= "text/css" href="../css/menu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		
		<?php include "../menu.html";?>

		<header>
			<div class= "title" style="font-size: 60px;">Projects</div>
			<p class="sub-title"><a href="/projects">Projects</a>  <a href="/software">Software</a>  <a href="">Contests</a> <a href="">Portfolio</a></p>
		</header>
		

		<main class="project">
		<div class="form-inline" style="margin-bottom: 3%;">
				<label for="sort-by-tag" style="margin-left: 10px;">Sort by tag: &nbsp</label>
				<div class="styled-select blue semi-square">	
					<select name="blog" onchange="process(this.value)">
						<option value="all">All</option>
						<option value="">Arduino</option>
						<option value="ESP8266">ESP8266</option>
						<option value="RPi">Raspberry Pi</option>
						
					</select>
				</div>
				<br><br>		
			</div>
			<div class="post-container"> 
				<div class="post">
					<div class="post-icon">
						<a href="ESP-DriveBy"><img src="ESP-DriveBy/img/EDB.JPG"></a>
					</div>
					<div class="post-caption">
						<h1>ESP-DriveBy</h1>
						<p>Wardriving with the ESP8266</p>
					</div>
				</div>
				<div class="post">
					<div class="post-icon">
						<a href= "AuditPi"><img src="AuditPi/img/AuditPi.jpg"></a>
					</div>
					<div class="post-caption">
						<h1>AuditPi</h1>
						<p>A modular hackable Raspberry Pi PDA</p>
					</div>
				</div>
				<div class="post">
					<div class="post-icon">
						<a href= "IR-Tester"><img src="IR-Tester/img/IR-Tester.jpg"></a>
					</div>
					<div class="post-caption">
						<h1>IR-Tester</h1>
						<p>Grab a quick IR value / protocol!</p>
					</div>
				</div>
				<div class="post">
					<div class="post-icon">
						<a href="CalcProbe"><img src="CalcProbe/img/CalcProbe.jpg"></a>
					</div>
					<div class="post-caption">
						<h1>CalcProbe</h1>
						<p>Exploiting 6 Function Calculators</p>
					</div>
				</div>
				<div class="post">
					<div class="post-icon">
						<a href="TrashSort"><img src="TrashSort/img/TrashSort.jpg"></a>
					</div>
					<div class="post-caption">
						<h1>TrashSort</h1>
						<p>AI based trash classification/sorting</p>
					</div>
				</div>
				<div class="post">
					<div class="post-icon">
						<a href="DIY-TV-B-Gone"><img src="DIY-TV-B-Gone/img/DIY-TV-B-Gone.jpg"></a>
					</div>
					<div class="post-caption">
						<h1>DIY TV-B-Gone</h1>
						<p>Kill TV's with IR playback codes</p>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>	