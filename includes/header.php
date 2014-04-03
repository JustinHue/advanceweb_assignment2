<?php
        /* 
                File Name: header.php
                Author's Name: Justin Hellsten
                Website Name: www.justinhellsten.com
                File Description: This is the header of the website. This will include all the css, js, framework, etc for the website. It also contains the top navigation.
        */
?>

<?php
	include("top_include.php");
	$left_nav = array('Projects' => 'projects.php', 'Services' => 'services.php', 'Business Contacts' => 'business_contacts.php');
	$right_nav = array('About' => 'about.php', 'Contact' => 'contact.php', 'Github' => 'https://github.com/JustinHue');

?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Justin Hellsten's Website</title>

	<link rel="stylesheet" href="webicons.css">
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">

	<link rel="stylesheet" href="css/common.css">

	<!-- <link rel="stylesheet" href="css/app.css"> -->
	<script src="js/vendor/modernizr.js"></script>

	<!-- Google Font API -->
	<link href="http://fonts.googleapis.com/css?family=Tangerine" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open Sans" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Josefin Slab" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Arvo" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Lato" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Vollkorn" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Abril Fatface" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Ubuntu" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=PT Sans + PT Serif" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Old Standard TT" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Droid Sans" type="text/css" rel="stylesheet">

</head>

<body>

<!-- Top Nav Bar -->
<nav class="top-bar" data-topbar>
	<ul class="title-area">
		<li class="name">
			<h1><a href="index.php">Justin Hellsten</a></h1>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
	</ul>

	<section class="top-bar-section">

	<!-- Left Nav Section -->
	<ul class="left">
		<?php 	
			$index = 0;
			foreach ($left_nav as $menuitem => $link) {
				if (isset($left_index) && $index == $left_index) {
					echo '<li class="active"><a class="leftside" href="' . $link . '">' . $menuitem . '</a></li>';
				} else {
					echo '<li><a class="leftside" href="' . $link . '">' . $menuitem . '</a></li>';
				}
				echo '<li class="divider"></li>';
				$index ++;
			}
		?>
	</ul>

	<!-- Right Nav Section -->
	<ul class="right">
                <?php
                        $index = 0;
                        foreach ($right_nav as $menuitem => $link) {
                                if (isset($right_index) && $index == $right_index) {
                                        echo '<li class="active"><a href="' . $link . '">' . $menuitem . '</a></li>';
                                } else {
                                        echo '<li><a href="' . $link . '">' . $menuitem . '</a></li>';
                                }
                                echo '<li class="divider"></li>';
                                $index ++;
                        }
                ?>
	</ul>

	</section>
</nav>


<div id="content">

