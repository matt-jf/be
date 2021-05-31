<?php
include_once 'koneksi.php';
$id_note = $_POST['id_note'];
$title_note = addslashes(trim($_POST['title_note']));
$content_note = addslashes(trim($_POST['content_note']));
if (!$title_note || !$content_note) {
    header("Location: edit_note.php?id=$id&invalid=1");
    die;
}
$query = "UPDATE note SET title_note = '$title_note', content_note =
'$content_note' WHERE id_note = $id_note";
$koneksi->query($query);
header('Location:home.php');