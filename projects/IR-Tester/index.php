<!doctype html>
<html lang= "en-US">
	<head>
		<meta charset="utf-8">
		<title>IR-Tester</title>
		<link rel="stylesheet" type= "text/css" href="../../css/post.css">
		<link rel="stylesheet" type= "text/css" href="../../css/menu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 	
	</head>
	<body>
			<?php include "../../menu.html";?>
		<header>
			<div class= "title">IR-Tester</div>
			<div class= "description">An IR value grabber with Arduino  <a href="https://github.com/alexlynd/IR-Tester" target="_blank"><i class="fab fa-github-alt"></i></a>
			</div>
			<center><p>Project documentation for IR-Tester.</p></center>
		</header>
		<main>
			<h3>Description</h3>
			<p>Have you ever needed to grab a quick IR value from a remote or test if your IR LED's are working?  IR-Tester is a small keychain-sized project I created to test my IR LED's and remote controls.  IR-Tester is AVR based, using an Arduino Nano as the processor, reading IR values through an IR reciever module, and outputting the code in binary and hex to an OLED.</p>
			<h3>What can I do with it?</h3>
			<p>With IR-Tester, you can test any device using infrared LED's, including TV remotes, or regular IR LED's.</p>
			<h3>Parts List</h3>
			<ul>
				<li>128x64 OLED</li>
				<li>Arduino Nano</li>
				<li>IR Reader Module</li>
			</ul>
			<h3>Software</h3>
			<p>I wrote the code in the Arduino IDE, and am using the IRremote library to read the IR values, and Adafruit's GFX and SSD1306 library.</p>
			<div class="container">
<pre><code class="C++">
#include &#60;IRremote.h&#62;
#include <SPI.h>
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

#define OLED_RESET 4
Adafruit_SSD1306 display(OLED_RESET);

const int RECV_PIN= 7;  // IR data pin
IRrecv irrecv(RECV_PIN);
decode_results results;

void setup(){
  Serial.begin(9600);
  irrecv.enableIRIn();
  irrecv.blink13(true);
  display.begin(SSD1306_SWITCHCAPVCC, 0x3C);
  display.clearDisplay();
  display.setTextSize(1);
  display.setTextColor(WHITE);
  display.setCursor(0,0);
  display.clearDisplay();
  display.println("IR Reader by Alex");  // start screen.
  display.println("V 1.1");
  display.display();
  delay(500);
  display.clearDisplay();
  display.display();
}

void loop(){
  if (irrecv.decode(&results)){
        display.setTextSize(1);
        display.setTextColor(WHITE);
        display.setCursor(0,0);
        display.clearDisplay();
        diplay.print("Hex: ");
        display.println(results.value, HEX);  // print IR code in Hex
        display.println();
        display.println("Binary:");
        display.println();
        display.println(results.value, BIN);  // print IR code in Binary
        display.display();
        irrecv.resume();
  }
}
</code></pre>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/a11y-dark.min.css">

		</main>
		<sidebar>
			<h3>Gallery</h3> <br>
			<h3>Files</h3>
			<p><a href="">Download all</a> (ZIP)</p>
			<p><a href="">sch01.png</a> (SCH)</p>
			<br>
			<h3>Links</h3>
			<p></p>
		</sidebar>
	</body>
</html>