<?php
include('../../conf/config.php');
$id_penghuni= $_GET['id_penghuni'];       
$nama       = $_GET['nama'];
$alamat     = $_GET['alamat'];
$no_hp      = $_GET['no_hp'];
$password   = $_GET['password'];
$level      = $_GET['level'];
$id_kamar   = $_GET['id_kamar'];
$query = mysqli_query($koneksi,"INSERT INTO tb_penghuni (id_penghuni,nama,alamat,no_hp,password,level,id_kamar) Values('$id_penghuni','$nama','$alamat','$no_hp','$password','$level','$id_kamar')");
header('Location: ../index.php?page=data-penghuni');
?>