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
			include ("includes/constants.php");
			
			// Connect to server and select databse.
			$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("cannot connect");
			
			$query = "SELECT * FROM contacts";
			$result = mysqli_query($dbc, $query);
			if (!$result) {
			    echo 'Could not run query: ' . mysql_error();
				
			}

			while($row = mysqli_fetch_row($result)) {
				echo '<div class="row">';
				echo '<a href="javascript:alert(\'' . "Name: $row[1], 	Phone Number: $row[2], Address: $row[3]" . '\');">' . $row[1] . '</a>';
				echo '</div>';
			}
			
			mysqli_free_result($result);
			mysqli_close($dbc);
		?>
</div>
</body>

</html>
