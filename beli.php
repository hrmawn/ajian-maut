<?php
include('koneksi.php');
$id = $_GET['id'];
$qsp = mysqli_query($connect,"SELECT * FROM tabel_sepatu WHERE id ='$id'");
$dsp = mysqli_fetch_array ($qsp);
$stok = $dsp['stok'];
$hsl = ($stok - 1);

$q = mysqli_query($connect,"UPDATE tabel_sepatu SET stok='$hsl' WHERE id='$id'") or die(mysqli_error());

$query = mysqli_query($connect,"UPDATE tabel_keranjang SET status='1' WHERE id_sepatu='$id'") or die(mysqli_error());
   header('location:keranjang.php?message=sukses_beli');


?>