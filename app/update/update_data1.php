<?php
include('../../conf/config.php');
$id_tagihan    = $_GET['id_tagihan'];       
$bulan         = $_GET['bulan'];
$tahun         = $_GET['tahun'];
$id_penghuni   = $_GET['id_penghuni'];
$tagihan       = $_GET['tagihan'];
$status        = $_GET['status'];
$tgl_bayar     = $_GET['tgl_bayar'];
$query = mysqli_query($koneksi,"UPDATE tb_tagihan SET bulan='$bulan',tahun='$tahun',id_penghuni='$id_penghuni',tagihan='$tagihan',status='$status',tgl_bayar='$tgl_bayar' WHERE id_tagihan='$id_tagihan'");
header('Location: ../index.php?page=data-tagihan');
?>