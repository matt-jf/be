<?php
	include_once 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = password_hash($password,
	PASSWORD_BCRYPT);
	$name = $_POST['name'];
	$sql = "INSERT INTO user (username, password, name)
	VALUES ('$username', '$password_hash', '$name')";
	$koneksi->query($sql);
	$koneksi->close();
	header('Location: login.php');
?>
