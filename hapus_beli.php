<?php
include('koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($connect,"DELETE FROM tabel_keranjang WHERE id_sepatu='$id'") or die(mysql_error());
   header('location:keranjang.php?message=sukses_hapus');


?>