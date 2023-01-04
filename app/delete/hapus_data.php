<?php
include('../../conf/config.php');

$id_penghuni   = $_GET['id_penghuni'];
$query = mysqli_query($koneksi,"DELETE FROM tb_penghuni WHERE id_penghuni='$id_penghuni'");
header('Location: ../index.php?page=data-penghuni');
?>