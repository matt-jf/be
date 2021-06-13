<?php
include_once 'koneksi.php';
$id_galery = $_POST['id_galery'];
$name_galery = addslashes(trim($_POST['name_galery']));
$photo_galery = addslashes(trim($_POST['photo_galery']));
if (!$name_galery || !$photo_galery) {
    header("Location: edit_galery.php?id_galery=$id_galery&invalid=1");
    die;
}
$query = "UPDATE galery SET name_galery = '$name_galery', photo_galery =
'$photo_galery' WHERE id_galery = $id_galery";
$koneksi->query($query);
header('Location:galery.php');