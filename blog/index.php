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
		<main>
			<header>
				<div class= "title">Blog</div>
			</header>
			<!--p>Check ouy my YouTube channel forates!</p-->
			<div class="form-inline">
				<label for="sort-by-tag">Sort by tag: &nbsp</label>
				<div class="styled-select blue semi-square">	
					<select name="blog" onchange="process(this.value)">
						<option value="all">All</option>
						<option value="RPi">Raspberry Pi</option>
						<option value="ESP8266">ESP8266</option>
						<option value="tutorial">Tutorials</option>
					</select>
				</div>
				<br><br>		
			</div>

			<div class = "grid-container">

			</div>
		</main>
		<script>
			var blogs=[
				["AuditPi WarSkating Demo",["RPi","AuditPi","Wardriving","Warskating"],"07-22-2019","AuditPi-Warskating-Demo", "Portable wardriving with Raspberry Pi demonstration by Alex Lynd",""],
				["[ Tutorial ] Programming the ATtiny",["DIY","electronics","tutorial"],"06-20-2019","../tutorials/programming-the-ATtiny", "Warskating",""],
				["Making a DIY TV-B-Gone",["DIY","electronics"],"06-20-2019","", "Warskating",""],
				["AuditPi: the modular handheld Raspberry Pi terminal",["RPi","AuditPi"],"05-27-2019","../projects/AuditPi", "Warskating",""],
				["Wifi controlled fireworks",["ESP8266","NodeMCU"],"05-23-2019","", "Warskating",""],
				["Creating a Kali drive",["Hacking","a"],"05-22-2019","", "Warskating",""]
			];
			/* name , tags , date , link , desc , img */
			var month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
			var date =[];
			var element = document.getElementsByClassName('grid-container');
			function process(str){
				date=[];
				element[0].innerHTML="";  // clear

				var date_header;
				if (str=="all") {
					for (var i = 0; i < blogs.length; i++) {
						getDate(blogs[i][2]);
						blog_wrap= document.createElement("div"); blog_wrap.className += "event";
						prof_wrap= document.createElement("div"); prof_wrap.className += "phot";

						desc_wrap= document.createElement("div"); desc_wrap.className += "grid-item"; desc_wrap.id = "desc";
						date_wrap= document.createElement("div"); date_wrap.className += "grid-item"; date_wrap.id = "date";

						blog_name= document.createElement("h1"); blog_name.innerHTML= blogs[i][0];
						blog_desc= document.createElement("p");  blog_desc.innerHTML= blogs[i][4];
						desc_wrap.appendChild(blog_name);
						desc_wrap.appendChild(blog_desc);

						blog_date= document.createElement("p"); blog_date.innerHTML= blogs[i][2];
						date_wrap.appendChild(blog_date);
						
						blog_wrap.appendChild(prof_wrap);
						blog_wrap.appendChild(desc_wrap)
						blog_wrap.appendChild(date_wrap);
						element[0].appendChild(blog_wrap);
					}
				}
				else {
					for (var i=0; i< blogs.length; i++) {
						for (var j=0; j<blogs[i][1].length; j++){
							if (str==blogs[i][1][j]) {
								getDate(blogs[i][2]);
						blog_wrap= document.createElement("div"); blog_wrap.className += "event";
						prof_wrap= document.createElement("div"); prof_wrap.className += "phot";

						desc_wrap= document.createElement("div"); desc_wrap.className += "grid-item"; desc_wrap.id = "desc";
						date_wrap= document.createElement("div"); date_wrap.className += "grid-item"; date_wrap.id = "date";

						blog_name= document.createElement("h1"); blog_name.innerHTML= blogs[i][0];
						blog_desc= document.createElement("p");  blog_desc.innerHTML= blogs[i][4];
						desc_wrap.appendChild(blog_name);
						desc_wrap.appendChild(blog_desc);

						blog_date= document.createElement("p"); blog_date.innerHTML= blogs[i][2];
						date_wrap.appendChild(blog_date);
						
						blog_wrap.appendChild(prof_wrap);
						blog_wrap.appendChild(desc_wrap)
						blog_wrap.appendChild(date_wrap);
						element[0].appendChild(blog_wrap);
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
					date_header = document.createElement("h2");
					date_header.innerHTML = full;
					element[0].appendChild(date_header);
				}
			}
		</script>
	</body>
</html>	