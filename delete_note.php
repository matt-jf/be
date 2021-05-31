<?php
include 'koneksi.php';
$id_note = $_POST['id_note'];
    $query = "DELETE FROM note WHERE id_note = $id_note";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='home.php';</script>";
    }