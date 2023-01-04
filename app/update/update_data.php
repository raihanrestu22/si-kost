<?php
include('../../conf/config.php');
$id_penghuni= $_GET['id_penghuni'];       
$nama       = $_GET['nama'];
$alamat     = $_GET['alamat'];
$no_hp      = $_GET['no_hp'];
$password   = $_GET['password'];
$level      = $_GET['level'];
$id_kamar   = $_GET['id_kamar'];
$query = mysqli_query($koneksi,"UPDATE tb_penghuni SET nama='$nama',alamat='$alamat',no_hp='$no_hp',password='$password',level='$level',id_kamar='$id_kamar' WHERE id_penghuni='$id_penghuni'");
header('Location: ../index.php?page=data-penghuni');
?>