<!doctype html>
<html lang= "en-US">
	<head>
		<title>Blog | Alex Lynd</title>
		<meta charset="utf-8">
		<meta name="description" content="Blog">
  		<meta name="keywords"    content="Alex Lynd, projects, portfolio, electronics">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type= "text/css" href="../css/style.css">
		<link rel="stylesheet" type= "text/css" href="../css/menu.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body onload="javascript:process('all')">
		<?php include "../menu.html";?>
		<main id="post-only">
			<header>
				<div class= "title">Blog</div>
			</header>

			<!--p class="labler">Sort by tag:</p-->
			<p>Check ouy my YouTube channel for vlogs and updates!</p>
			<div class="form-inline">
				<label for="sort-by-tag">Sort by tag: &nbsp</label>
				<div class="styled-select blue semi-square">	
					<select name="blog" onchange="process(this.value)">
						<option value="all">All</option>
						<option value="RPi">Raspberry Pi</option>
						<option value="ESP8266">ESP8266</option>
					</select>
				</div>
				<br><br>		
			</div>
			<hr>
			<div class="blog-container">   
				<!--js generate content-->
			</div>
		</main>
		<script>
			var blogs=[
				["AuditPi WarSkating Demo",["RPi","AuditPi","Wardriving","Warskating"],"07-22-2019","AuditPi-Warskating-Demo"],
				["Making a DIY TV-B-Gone",["DIY","electronics"],"06-20-2019",""],
				["AuditPi: the modular handheld Raspberry Pi terminal",["RPi","AuditPi"],"05-19-2019","../projects/AuditPi"],
				["Wifi controlled fireworks",["ESP8266","NodeMCU"],"05-23-2019",""],
				["Creating a Kali drive",["Hacking","a"],"06-22-2019",""]
			]
			var month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
			var date =[];
			var element = document.getElementsByClassName('blog-container');
			function process(str){
				date=[];
				element[0].innerHTML="";  // clear

				var date_header;
				if (str=="all") {
					for (var i = 0; i < blogs.length; i++) {
						getDate(blogs[i][2]);
						article_name = document.createElement("a");
						article_name.innerHTML= blogs[i][0];
						article_name.href= blogs[i][3];
						element[0].appendChild(article_name);
					}
				}
				else {
					for (var i=0; i< blogs.length; i++) {
						for (var j=0; j<blogs[i][1].length; j++){
							if (str==blogs[i][1][j]) {
								getDate(blogs[i][2]);
								article_name = document.createElement("a");
								article_name.innerHTML= blogs[i][0];
								article_name.href= blogs[i][3];
								element[0].appendChild(article_name);
							}
						}
					}
				}
			}
			function getDate(raw_date) {
				var full = month[parseInt(raw_date.substring(0,2))-1]+" "+raw_date.substring(6,10);
				if (date.includes(full)) return;
				else {
					date.unshift(full);
					date_header = document.createElement("h3");
					date_header.innerHTML = full;
					element[0].appendChild(date_header);
				}
			}
		</script>
	</body>
</html>	