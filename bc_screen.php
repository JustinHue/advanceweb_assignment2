<?php
        /* 
                File Name: bc_screen.php
                Author's Name: Justin Hellsten
                Website Name: www.justinhellsten.com
                File Description: This is the business screen 
		 		Date Last Modified: April 5 2014
        */
?>


<?php
        include("includes/header.php");
?>

<div class="panel">
		<div style="padding-bottom: 20px;" class="row">
<?php
	session_start();
	if (isset($_SESSION['username'])) {
		echo 'Welcome, <span style="text-transform: capitalize;">' . $_SESSION['username'] . '!</span>';
		echo '<div style="float: right;"><a href="logout.php">Log out</a></div>';
	} else {
		header("Location: business_contacts.php");
	}
?>
		</div>
		<div class="row">
			<h3>List of Contacts</h3>
		</div>
		<?php
			// Connect to database and list all contacts
	
			// Connect to server and select databse.
			$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("cannot connect");
			
			$query = "SELECT * FROM contacts";
			$result = mysqli_query($dbc, $query);
			if (!$result) {
			    echo 'Could not run query: ' . mysql_error();
				
			}

			while($row = mysqli_fetch_row($result)) {
				echo '<div class="row">';
				echo '<a href="javascript:alert(\'' . "Name: $row[1], Phone Number: $row[2], Address: $row[3]" . '\');">' . $row[1] . '</a>';
				echo '</div>';
			}
			
			mysqli_free_result($result);
			mysqli_close($dbc);
		?>
</div>

<?php
        include("includes/bottom_include.php");
?>

