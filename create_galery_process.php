<?php
$name_galery = addslashes(trim($_POST['name_galery']));
$photo_galery = addslashes(trim($_POST['photo_galery']));
if (!$name_galery|| !$photo_galery) {
    header('Location: create_galery.php?invalid=1');
    die;
}
include_once 'koneksi.php';
$query = "INSERT INTO galery (name_galery, photo_galery) VALUES ('$name_galery', '$photo_galery')";
$koneksi->query($query);
header("Location: galery.php");