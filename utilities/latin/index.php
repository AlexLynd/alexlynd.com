<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" lang="en" content="Latin, language, inflect, inflection, conjugate, conjugation, decline, declension" xml:lang="en" />
  <meta name="keywords" lang="la" content="Lingua, Latina" xml:lang="la" />
  <meta name="description" lang="en" content="Inflect (conjugate or decline) words in Latin phrases." xml:lang="en" />

  <title>Latin Inflector</title>
  <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" type= "text/css" href="/css/portfolio.css">
		<link rel="stylesheet" type= "text/css" href="/css/menu.css">
  
  <script type="text/javascript">
  	$(function() {
		$("#my-div-frame-wrapper").resizable({
    		alsoResize : '#outputIFrame'
		});
	});
</script>
</head>


<body>
	<?php include "../../menu.html"; ?>
	<main>
		<div class="title" style="letter-spacing: 1px">Latin Inflector</div>

		<h2>About</h2>
		<p>This is a utility written by Geremia which you can find on his <a href="https://github.com/Geremia/LatinInflector/">GitHub</a>.  I am working on optimizing and styling his code.  This inflector parses through input and looks for characteristics to classify parts of speech, but isn't entirely accurate.</p>

		<h2>Input</h2>
		<form action="analyze.php" target="outputIFrame" method="post">
			<textarea name="thetext" id="thetext" accesskey="T" style="width: 100%; height: 100px;" rows="10" cols="100" title="Mod-T selects this field."></textarea>
			<input type="submit" accesskey="A" onclick="window.frames['outputIFrame'].document.body.innerHTML='';" value="Analyze"/><input type="reset" onclick="document.getElementById('thetext').focus()" value="Reset" accesskey="C" />
		  </form><br/>

		<h2>Output</h2>
		<div id="my-div-frame-wrapper" style="width: 100%; height: 300px;">
			<iframe style="width: 100%; height: 300px;" id="outputIFrame" name="outputIFrame">Your browser does not support this webpage. Please <a href="http://www.mozilla.com/?from=sfx&amp;uid=0&amp;t=306"><img src="http://sfx-images.mozilla.org/affiliates/Buttons/firefox3/110x32_get_ffx.png" alt="get Firefox" border="0" /></a>.</iframe>
		</div><br/>
	</main>
	<script type="text/javascript">
//<![CDATA[
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  //]]>
  </script>
  <script type="text/javascript">
//<![CDATA[
  try {
	  var pageTracker = _gat._getTracker("UA-11314314-2");
	  pageTracker._trackPageview();
  } 
  catch(err) {}
  //]]>
  </script>
</body>
</html>