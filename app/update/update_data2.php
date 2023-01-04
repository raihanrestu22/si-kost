<?php
include('../../conf/config.php');
$id_kamar   = $_GET['id_kamar'];       
$lantai     = $_GET['lantai'];
$kapasitas  = $_GET['kapasitas'];
$fasilitas  = $_GET['fasilitas'];
$tarif      = $_GET['tarif'];

$query = mysqli_query($koneksi,"UPDATE tb_kamar SET lantai='$lantai',kapasitas='$kapasitas',fasilitas='$fasilitas',tarif='$tarif' WHERE id_kamar='$id_kamar'");
header('Location: ../index.php?page=data-kamar');
?>