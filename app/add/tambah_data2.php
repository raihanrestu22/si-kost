<?php
include('../../conf/config.php');
$id_kamar   = $_GET['id_kamar'];       
$lantai     = $_GET['lantai'];
$kapasitas  = $_GET['kapasitas'];
$fasilitas  = $_GET['fasilitas'];
$tarif      = $_GET['tarif'];
$query = mysqli_query($koneksi,"INSERT INTO tb_kamar (id_kamar,lantai,kapasitas,fasilitas,tarif) Values('$id_kamar','$lantai','$kapasitas','$fasilitas','$tarif')");
header('Location: ../index.php?page=data-kamar');
?>