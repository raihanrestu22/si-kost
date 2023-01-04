<?php
include('../../conf/config.php');

$id_kamar   = $_GET['id_kamar'];
$query = mysqli_query($koneksi,"DELETE FROM tb_kamar WHERE id_kamar='$id_kamar'");
header('Location: ../index.php?page=data-kamar');
?>