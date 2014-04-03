<?php
        /* 
                File Name: index.php
                Author's Name: Justin Hellsten
                Website Name: www.justinhellsten.com
                File Description: This is the page that dishes out all mobile pages and content.
        */
?>

<!DOCTYPE html>
<html>
<head>

  	<title>jQuery Mobile page</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/themes/simple.css" />
	<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile.structure-1.4.2.min.css" /> 
	<link rel="stylesheet" href="webicons.css" />
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script> 

	<!-- jQuery library (served from Google) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="js/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="css/jquery.bxslider.css" rel="stylesheet" />

<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>

</head>
	
<body>


<!-- Home Page Section -->
<div data-role="page" id="home">
  <div data-role="header" data-theme="c">
    <img src="imgs/logo.png" width="100%" height="100px" />
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="home">Home</a></li>
      <li><a href="#about" data-theme="c" data-icon="user">About Me</a></li>
      <li><a href="#contact" data-theme="c" data-icon="info">Contact Me</a></li>
    </ul>
	<ul>
		<li><a href="#projects" data-theme="c" data-icon="gear">Projects</a></li>
		<li><a href="#services" data-theme="c" data-icon="shop">Services</a></li>
	</ul>
  </div>
  <section role="main" class="ui-content">
<ul class="bxslider">
  <li><img src="imgs/ritz_screen.png" /></li>
  <li><img src="imgs/grabidelov.png" /></li>
  <li><img src="imgs/grabidelov.png" /></li>
</ul>
<a href="http://justinhellsten.com/">Switch to full site view</a>
  </section>
  <div data-role="footer" data-theme="b" data-position="fixed">
    <h4>Copyright 2014 by Justin Hellsten</h4>
  </div>
</div>

<!-- Contact Page Section -->
<div data-role="page" id="contact">
  <div data-role="header"data-theme="c">
    <h1>Contact Me</h1>
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" data-theme="c" data-icon="home">Home</a></li>
      <li><a href="#about" data-theme="c" data-icon="user">About Me</a></li>
      <li><a href="#contact" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="info">Contact Me</a></li>
    </ul>
  </div>
  <div data-role="content">
	<div id="keep-connected">
                <a class="webicon facebook" href="https://www.facebook.com/justin.hellsten">Facebook</a>
                <a class="webicon twitter" href="https://twitter.com/JustinHellsten">Twitter</a>
                <a class="webicon linkedin" href="https://ca.linkedin.com/pub/justin-hellsten/4b/178/436/">LinkedIn</a>
                <a class="webicon googleplus" href="https://plus.google.com/u/0/116645772105384028282/posts">Google+</a>
                <a class="webicon github" href="https://github.com/JustinHue">Github</a>
	</div>
	<div id="contact-info">
            <h2>Contact Info</h2>
            <p><strong>Email Address:</strong> justinhellsten@gmail.com</p>
            <p><strong>Work Address:</strong> 2055 Thompson St.</p>
            <p><strong>Contact Number:</strong> 705 220 4972</p>
	</div>
  </div>
  <div data-role="footer"data-theme="b"data-position="fixed">
    <h4>Copyright 2014 by Justin Hellsten</h4>
  </div>
</div>

<!-- About Page Section -->
<div data-role="page" id="about">
  <div data-role="header"data-theme="c">
    <h1>Contact Me</h1>
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" data-theme="c" data-icon="home">Home</a></li>
      <li><a href="#about" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="user">About</a></li>
      <li><a href="#contact" data-theme="c" data-icon="info">Contact Me</a></li>
    </ul>
  </div>
  <div data-role="content">
	<img style="width:240px; height:240px;" src="imgs/me.png" />

<p>Hi! I am Justin Hellsten. I would be what you call a hobbyist programmer. On my spare time I love to work on personal projects or learn something new in programming. Most of my projects revolve mostly around making and designing games or webites, but I am open to working on projects in other areas. I am currently a student studying at Georgian College for the Computer Programming Analyst program and working in co-ops between academic semesters through Georgian College's internship program.</p>

<p>If you want to know more about my projects you can check out my portfolio page or view the source code on Github. If you're an employer you can check out my skills, expertise and work experience on my Linkedin profile.</p>

    <h2>Work Experience</h2>
    <p><strong>King Brand Healthcare Products - Web Programmer/ Intern:</strong> May 2012 - August 2012</p>
	<p><strong>Avetti.com Corporation - Web Designer / Intern:</strong> September 2013 - January 2014</p>

    <h2>Education</h2>
    <p><strong>Georgian College - Computer Programmer Analyst (3 year)</strong> September 2011 - 2014</p>


  </div>
  <div data-role="footer"data-theme="b"data-position="fixed">
    <h4>Copyright 2014 by Justin Hellsten</h4>
  </div>
</div>

<!-- Services Page Section -->
<div data-role="page" id="services">
  <div data-role="header"data-theme="c">
    <h1>Contact Me</h1>
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" data-theme="c" data-icon="home">Home</a></li>
      <li><a href="#about" data-theme="c" data-icon="user">About Me</a></li>
      <li><a href="#contact" data-theme="c" data-icon="info">Contact Me</a></li>
	  <li><a href="javascript:history.go(-1)" data-theme="c" data-icon="back">Go Back</a></li>
    </ul>
  </div>
  <div data-role="content">
            <h1>List of Services</h1>
            <h3>Game Development</h3>
            <p>I offer services to develop and market games for android and iphone apps market. I program mostly with Java.</p>
            <h3>Web Development + Design</h3>
            <p>I charge $20/h for all  web development and design work but can vary depending on requirements. My skills for this arena are HTML, CSS, PHP, and MySQL. </p>
  </div>
  <div data-role="footer"data-theme="b"data-position="fixed">
    <h4>Copyright 2014 by Justin Hellsten</h4>
  </div>
</div>

<!-- Projects Page Section -->
<div data-role="page" id="projects">
  <div data-role="header"data-theme="c">
    <h1>Contact Me</h1>
  </div>
  <div data-role="navbar">
    <ul>
      <li><a href="#home" data-theme="c" data-icon="home">Home</a></li>
      <li><a href="#about" data-theme="c" data-icon="user">About Me</a></li>
      <li><a href="#contact" data-theme="c" data-icon="info">Contact Me</a></li>
	  <li><a href="javascript:history.go(-1)" data-theme="c" data-icon="back">Go Back</a></li>
    </ul>
  </div>
  <div data-role="content">
  <div ><a href="https://github.com/JustinHue/Intro_to_Graphics_Project1A"><img style="width: 100%;" src="imgs/ritz_screen.png" /></a></div>
  <div><a href="https://github.com/JustinHue/Grabidelov"><img style="width: 100%;" src="imgs/grabidelov.png" /></a></div>
  <div><a href="https://github.com/JustinHue/PlutoDNASimulator"><img style="width: 100%;" src="imgs/grabidelov.png" /></a></div>
  </div>
  <div data-role="footer"data-theme="b"data-position="fixed">
    <h4>Copyright 2014 by Justin Hellsten</h4>
  </div>
</div>

</body>

</html>
