<?php
	/* 
		File Name: index.php
		Author's Name: Justin Hellsten
		Website Name: www.justinhellsten.com
		File Description: This is the home page of the website. This will hold the featured works, tagline, welcome message and mission statement.
	*/
?>

<?php 
	include("includes/header.php");
?>

<div class="panel">

<div class="row"><div class="panel">
<div class="row">
	<div class="small-12 medium-5 large-6 columns"><h1>Who am I?</h1></div>
</div>
<div class="row">
	<div class="small-12 medium-5 large-6 columns"><h6>Games | Programming | Technology</h6></div>
</div>
<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		<p>What I am trying to do is make the best games, apps and websites I can. I love technology and I would love to be apart of it in any way I can. On this site I hope to showcase all my cool projects I have made over the course of my career and hope to give some people some insights on what I have been up to. I mostly like developing games so there might be a disproportionate amount of projects that are game related.</p>
	</div>
</div>
</div></div>

<div class="row"><div class="panel">
	<div class="row">
		<div class="small-12 medium-5 large-6 columns"><h2>Featured Work</h2></div>
	</div>
	<div class="row">
		<div class="small-4 medium-4 large-4 columns">
			<a href="projects.php" class="button [radius round]">View More Projects</a>
		</div>
		<div class="small-8 medium-8 large-8 medium-centered large-centered columns">
	<ul class="example-orbit" data-orbit>
		<li>
			<img src="img/ritz_screen.png" alt="slide 1" />
			<div class="orbit-caption">
				Ritz Python Project
			</div>
		</li>
                <li>
                        <img src="img/logo.png" alt="slide 2" />
                        <div class="orbit-caption">
                                Pluto DNA Simulator
                        </div>
                </li>
                <li>
                        <img src="img/grabidelov.jpg" alt="slide 3" />
                        <div class="orbit-caption">
                                Grabidelov
                        </div>
                </li>
	</ul>
		</div>
	</div>
	
</div></div>

</div>



<?php
	include $_SERVER["DOCUMNET_ROOT"] . "includes/bottom_include.php";
?>
