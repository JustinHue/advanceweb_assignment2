<?php
        /* 
                File Name: projects.php
                Author's Name: Justin Hellsten
                Website Name: www.justinhellsten.com
                File Description: This is the projects page and this showcases all the projects Justin Hellsten has done.
        */
?>

<?php
	$left_index = 0;
        include("includes/header.php");
?>

<div class="panel">
<ul class="small-block-grid-3">
	<li>
		<div class="panel">
			<div class="row">
				<div class="large-12 columns">
					<a href="https://github.com/JustinHue/Intro_to_Graphics_Project1A"><img src="<?php echo IMG_DIR . 'ritz_screen.png'; ?>" /></a>
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
				<h5>Ritz</h5>
			<p>Ritz is a 2D side scrolling platformer game made for the Intro to Graphics course and was inspired by "I wanna be the guy" and "Jill of the Jungle" developed by Epic MegaGames. The player controls the main character whom is named "Ritz" through various levels until he reaches the exit. The levels consist of enemies that can be killed using bullets shot from Ritz and obstacles that must be invaded. If Ritz touches any enemy, spikes, or falls to his death, his body and blood will splatter everywhere. The game uses assets from well known game titles like Mario and Megaman, and the main character sprites were taking directly from "I wanna be the guy". </p>
				<h5>What's New</h5>
                                <p>- Ritz level maker V0.4<br />- 3 Levels Added<br />- Instruction, main menu and game over scene added<br />- Ritz and enemies now splatter blood everywhere</p>                         
				</div>
			</div>

		</div>
	</li>
	<li>
                <div class="panel">
                        <div class="row">
                                <div class="large-12 columns">
					<a href="https://github.com/JustinHue/PlutoDNASimulator"><img src="<?php echo IMG_DIR . 'ritz_screen.png'; ?>" /></a>
				</div>
                        </div>
                        <div class="row">
                                <div class="large-12 columns">
                                <h5>Pluto DNA Simulator</h5>
				<p>The pluto DNA simulator is a simulation of life and its interaction with it’s environment, which in the simulation is called a world. A world is composed of tiles and can span as wide and far along 2 dimensions. Each tile in the world starts off as dirt, water, grass, sand, mud, etc and overall as a whole makes up the world. These tiles are generated through random processes or through algorithms to give the look and feel that the environment is indeed “world” like.  Entities are separate from the environment and can interact with one another or their environment. They can manipulate the environment or use it for their own benefit, for instance the ability to eat grass or food that is associated on the tile.</p>
                                <h5>What's New</h5>
                                <p>GUI Package will be used to store GUI widgets (mostly menu objects). Currently added widgets include Text Label, Menu and Menu Item. All widgets inherit from GUI Component.
Scene Package will be used to separate the flow of the application into “scenes”. Scenes represents a visual section in the window and you can only have one scene active at a time. In the future this can change.</p>

                                </div>
                        </div>

                </div>
	</li>
	<li>
                <div class="panel">
                        <div class="row">
                                <div class="large-12 columns">
					<a href="https://github.com/JustinHue/Grabidelov"><img src="<?php echo IMG_DIR . 'grabidelov.jpg'; ?>"/></a>
				</div>
                        </div>
                        <div class="row">
                                <div class="large-12 columns">
                                <h5>Grabidelov</h5>
				<p>Grabidelov is a game design and made using the And engine for Android apps. You basically control a ball which you can shoot around black holes and collect balls for points. You get 3 different balls each with their own unique mass. The mass dictates how much they are attracted to the black holes.</p>
                                <h5>What's New</h5>
				<p>-Added new background<br />
-Added score system</p>
                                </div>
                        </div>

                </div>
	</li>
</ul>
</div>
<?php
        include $_SERVER["DOCUMNET_ROOT"] . "includes/bottom_include.php";
?>

