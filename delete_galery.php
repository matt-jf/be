<?php
include 'koneksi.php';
$id_galery = $_POST['id_galery'];
    $query = "DELETE FROM galery WHERE id_galery = $id_galery";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='galery.php';</script>";
    }