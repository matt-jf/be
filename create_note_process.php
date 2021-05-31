<?php
$title_note = addslashes(trim($_POST['title_note']));
$content_note = addslashes(trim($_POST['content_note']));
if (!$title_note || !$content_note) {
    header('Location: create_note.php?invalid=1');
    die;
}
include_once 'koneksi.php';
$query = "INSERT INTO note (title_note, content_note) VALUES ('$title_note', '$content_note')";
$koneksi->query($query);
header("Location: home.php");