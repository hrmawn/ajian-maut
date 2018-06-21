<?php
include('koneksi.php');
$id_sepatu = $_GET['id'];
$tanggal=date("Y-m-d");

$query = mysqli_query($connect,"insert into tabel_keranjang values('','$id_sepatu','$tanggal','0')") or die(mysqli_error());

   header('location:index.php?message=sukses');



?>
