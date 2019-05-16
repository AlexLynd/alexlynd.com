<!doctype html>
<html lang= "en-US">
	<head>
		<title>TI-Codes 2019</title>
		<meta charset="utf-8">
		<meta name="description" content="TI-Codes 2019 Project">
  		<meta name="keywords"    content="Alex Lynd, electronics, TI, technology, Texas Instruments, TI-Codes">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type= "text/css" href="/css/post.css">
		<link rel="stylesheet" type= "text/css" href="/css/menu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 	
	</head>
	<body>
		<?php include "../menu.html";?>
		<header>
			<div class= "title">Straight Outta Compost</div>
			<div class= "description">TI-Codes 2019 | A smart compost system with TI tech</div>
		</header>
		<main>

			 <h3>Round 1: &nbsp; Description</h3>
			<p>
				The prolific impact of excess trash in our society has caused a multitude of issues stemming from a simple problem: poor organic waste management. Landfills are replete with compostables that can easily be repurposed to create valuable fertilizer. When organic waste decays inside a landfill it produces methane, a greenhouse gas, which contributes to air pollution and climate change. However, when organic waste is composted, fertile, nutrient-rich soil is created, providing a sustainable food source for deficient areas. While this may seem trivial, maintaining a compost system can be overwhelming and thus many people do not, even considering the benefits. As IOT devices become more prevalent to manage our daily lives, we propose the creation of an IOT composting system with integrated sensors and Wi-Fi connectivity to collect data and make smart predictions for simple maintenance. This system allows a user to easily monitor compost and gather data such as when to adjust water levels, add/remove compost, and other essential information. We plan on creating the following two-part system. The first node is comprised of a TI-Launchpad coupled with an ESP8266 and various sensors connected to the compost bin, gathering data to be transmitted over Wi-Fi. The other node is simply a TI calculator which we will rig with an ESP8266 to be utilized as a handheld receiving module, allowing us to monitor the compost remotely. This system is very modular and easy to implement, and we chose to design it this way for ease of access. The monitoring station will be able to gather data such as humidity, water level, and analyze this data to ensure compost is ready, and to make predictions in the future for optimal compost use. This system will allow people to use technology on hand (like calculators), with a few other parts to easily start helping the environment at home, while teaching the value of technology.
			</p>
			<hr>
			<h3>Round 2: &nbsp; Design</h3>
			<ol>
				<li><b>Describe the problem you are trying to solve and why you chose it.</b></li>
				<p>
					We aim to solve the issue of compostables ending up in landfills and creating harmful greenhouse gases such as methane and nitrous oxide. When organic waste that we create daily, such as orange peels and apple cores, get thrown in the trash and covered in a landfill, the natural process of decay has to occur anaerobically, resulting in the release of methane as the compostables rot. As the effects of climate change are rapidly becoming alarming, engineering new ways to minimize greenhouse gases is in greater demand. Not only does composting reduce greenhouse gas emissions but it also creates nutrient-rich soil to use on home-grown fruits and vegetables, thus the cycle of decomposition and growth starts again. However, while composting seems like the obvious solution, to many people this is an intimidating task, and many are resultantly turned away. We chose this problem because we believe that greenhouse gas emissions need to be reduced and eventually eliminated if we want to stop global warming and if we want to maintain the living conditions we currently have.
				</p>
				<li><b>Describe your solution and what your project does.</b></li>
				<p>
					We intend to solve this issue by making it easier to start and maintain a compost pile at home. Composting can seem overwhelming at times when trying to determine the moisture and temperature variables as well as when and what to put into a compost, leading many people away from starting their own. With the convenience of IOT for daily task management becoming more prevalent, we believe implementing IOT to conveniently monitor compost will rectify this problem. Our project, an IOT compost bin, will gather various data on the composition and state of the compost such as humidity, temperature, and various other factors. We will use machine learning to gather smart data and predictions for efficient processing of the compost and ensure creation of a nutrient-rich product. The convenience and accessibility of this device allows users to easily begin helping the environment.
				</p>
				<li><b>Describe how you will use TI technology in your project.</b></li>
				<p>
					Our modular design is comprised of two primary subsystems; one being the compost bin, and the other the receiving module. The compost bin utilizes the full force of the Innovator Hub's inputs with a variety of the offered sensors including a temperature, water level, humidity and servo motor. The sensors will allow the compost bin to gather relevant statistical data on the state of the compost like when to add more water. The servo is used to control the air flap on the compost bin to allow air intake. A TI-Nspire will be coupled with the Innovator Hub as a processing unit to crunch numbers and build smart predictions off the data, adapting based on previous results. The Innovator Hub communicates with an ESP8266 over UART using the onboard IO headers, and encode sdata to JSON to send over Wi-Fi to our other unit. It will send data such as water levels, humidity, when to add more compost, and more. To allow flexibility, the second module can be a range of handheld devices with Wi-Fi capabilities, focused around TI dev. boards. We want to pair a TI calculator directly with an ESP8266 through a bitbanged connection as a portable recieving module, but we also plan on working with other popular boards such as the BeagleBone Black SBC.
				</p>
				<li><b>List the materials and costs necessary for this project. The Reference Guide may provide useful guidance when considering materials. Although there is no budget limit for a project, efficient use of materials will be part of the evaluation.</b></li>
				<br>
				<ul>
					<li>TI-Nspire x2 ($ 145) (one provided)</li>
					<li>Innovator Hub (provided)</li>
					<li>Servo (provided)</li>
					<li>DHT sensor (provided)</li>
					<li>Water level sensor $3</li>
					<li>ESP-01 Module x2 $7</li>
					<li>Compost Bin $80</li>
				</ul>
				<br>
				<li>
					<b>Illustrate a design schematic or diagram of your solution. It may be hand-drawn or digitally created, but must be submitted as a separate file. (File types accepted: .PDF, .PNG, .JPG)
					</b>
				</li>
				<div class=subcontain>
					<img src= "TI-Codes/schematic_TI-Codes_2019.png">
				</div>
				<li><b>Explain how your team will work together, and identify each person’s role in the project.</b></li>
				<p>
					Our team has three main components: programmers, hardware design, and system design. The programmers work with all software design for this project including sensor interaction. The hardware design team creates schematics for the technical aspects of the project and physical design. System design is the broad overlook of the project, and ensuring that the team works together to work out issues and brainstorm. We work together by holding constructive meetings where we systematically identify one problem at a time and find the best solution, and leave it up to individual teams to work with a more specific solution. 
				</p>
				<ul>
					<li>Alex: Head programmer | hardware design</li>
					<li>Carina: Environmental/compost researcher | system design (compost science) | writer</li>
					<li>Ian: System design | Hardware design</li>
					<li>Robin: Head system design | programmer</li>
					<li>Simon: System design | hardware design | programmer</li>
				</ul>
			</ol>
		</main>
		<sidebar>
			<h3>Gallery</h3>
			<br>
			<h3>Team</h3>
			<p>Alex Lynd<br>Carina Bachmann<br>Ian Shin<br>Robin Gan<br>Simon Kim</p>
			<h3>Files</h3>
			<p><a href= "TI-Codes/schematic_TI-Codes_2019.png" download>Schematic diagram</a></p>
			<p><a href= "TI-Codes/submission_TI-Codes_2019.pdf" download>Submission form</a></p>
			<br>
			<h3>Links</h3>
			<p><a href= "https://education.ti.com/en/promotion/rules/ti-codes-contest-rules">Official Rules</a></p>
		</sidebar>
	</body>
</html>