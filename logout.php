<?php
	session_start();
	if (!empty($_SESSION['app123_logged_in'])) {
	  } else {
	    header('Location: login.php');
	  }
	$_SESSION = [];
	session_unset();
	session_destroy();
	header("Location: login.php");
	exit;
?>
