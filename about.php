<?php
        /* 
                File Name: about.php
                Author's Name: Justin Hellsten
                Website Name: www.justinhellsten.com
                File Description: This is the about page of the website that gives a bio of justin hellsten.
        */
?>

<?php
        $right_index = 0;
        include("includes/header.php");
?>

<div class="panel">

<div class="row">
	<div class="small-6 medium-4 large-2 columns">
		<img src="<?php echo IMG_DIR . 'me.png'; ?>" />
	</div>
	<div class="large-10 columns">
		<h2>Who am I?</h2>

<p>Hi! I am Justin Hellsten. I would be what you call a hobbyist programmer. On my spare time I love to work on personal projects or learn something new in programming. Most of my projects revolve mostly around making and designing games or webites, but I am open to working on projects in other areas. I am currently a student studying at Georgian College for the Computer Programming Analyst program and working in co-ops between academic semesters through Georgian College's internship program.</p>

<p>If you want to know more about my projects you can check out my portfolio page or view the source code on Github. If you're an employer you can check out my skills, expertise and work experience on my Linkedin profile.</p>
	</div>
	<div class="columns">
		<h2>Work Experience</h2>
		<p><strong>King Brand Healthcare Products - Web Programmer/ Intern:</strong> May 2012 - August 2012</p>
		<p><strong>Avetti.com Corporation - Web Designer / Intern:</strong> September 2013 - January 2014</p>

	</div>
        <div class="columns">
                <h2>Education</h2>
                <p><strong>Georgian College - Computer Programmer Analyst (3 year)</strong> September 2011 - 2014</p>

        </div>

</div>

</div>

<?php
        include $_SERVER["DOCUMNET_ROOT"] . "includes/bottom_include.php";
?>


