<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: business_contacts.php");
?>