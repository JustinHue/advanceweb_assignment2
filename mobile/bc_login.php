<?php
	session_start();
	if (isset($_SESSION['username'])) {
		header("Location: bc_screen.php");
	}
	
	include("includes/constants.php");
	
	// Connect to server and select databse.
	$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("cannot connect");

	// username and password sent from form
	$username = $_POST['username'];
	$password = $_POST['password']; 
	
	// To protect MySQL injection (more detail about MySQL injection)
	$username = stripslashes($username);
	$password = stripslashes($password);

	$username = mysqli_real_escape_string($dbc, $username);
	$password = mysqli_real_escape_string($dbc, $password);
	
	$query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
	$result = mysqli_query($dbc, $query);
	
	// Mysql_num_row is counting table row
	$count = mysqli_num_rows($result);
	
	
	if($count == 1) {
		// Start session with user
		session_start();
		$_SESSION['username'] = $username;
		header("Location: bc_screen.php");
	} else {
		echo '
  <script type="text/javascript">
    alert("Username or password is incorrect!");
    history.back();
  </script>
		';
	}
	
	mysqli_close($dbc);
	
?>