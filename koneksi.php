<?php
	$mysqli = new mysqli('localhost', 'root', '', 'be_db');
	if(!$koneksi){
		die ("Koneksi dengan DB gagal: ".mysql_connect_error());
	}
?>
