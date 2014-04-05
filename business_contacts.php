<?php
        /* 
                File Name: business_contacts.php
                Author's Name: Justin Hellsten
                Website Name: www.justinhellsten.com
                File Description: This is the login page for accessing business contacts
		 		Date Last Modified: April 5 2014
        */
?>

<?php
	session_start();
	if (isset($_SESSION['username'])) {
		header("Location: bc_screen.php");
	} 
?>

<?php
        $left_index = 2;
        include("includes/header.php");
?>

<div class="panel">
	<div class="row">
		<div class="columns">
			<form method="POST" action="bc_login.php">
				<div class="row">
					<div class="large-4 medium-6 small-12 columns">
						<label>Username</label>
						<input type="text" name="username" />
					</div>
				</div>
				<div class="row">
					<div class="large-4 medium-6 small-12 columns">
						<label>Password</label>
						<input type="text" name="password"  />
					</div>
				</div>
				<input type="submit" class="button" value="Login" />
				
			</form> 
		</p>
	</div>
</div>

<?php
        include("includes/bottom_include.php");
?>

