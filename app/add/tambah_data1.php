<?php
include('../../conf/config.php');
$id_tagihan  = $_GET['id_tagihan'];       
$bulan       = $_GET['bulan'];
$tahun       = $_GET['tahun'];
$id_penghuni = $_GET['id_penghuni'];
$tagihan     = $_GET['tagihan'];
$status      = $_GET['status'];
$tgl_bayar   = $_GET['tgl_bayar'];
$query = mysqli_query($koneksi,"INSERT INTO tb_tagihan (id_tagihan,bulan,tahun,id_penghuni,tagihan,status,tgl_bayar) Values('$id_tagihan','$bulan','$tahun','$id_penghuni','$tagihan','$status','$tgl_bayar')");
header('Location: ../index.php?page=data-tagihan');
?>