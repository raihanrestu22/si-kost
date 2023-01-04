<?php
include('../../conf/config.php');

$id_tagihan   = $_GET['id_tagihan'];
$query = mysqli_query($koneksi,"DELETE FROM tb_tagihan WHERE id_tagihan='$id_tagihan'");
header('Location: ../index.php?page=data-tagihan');
?>