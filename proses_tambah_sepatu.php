<?php
include('koneksi.php');
$merek = $_POST['merek'];
$tipe = $_POST['tipe'];
$ukuran = $_POST['ukuran'];
$ukuran_lain = $_POST['ukuran_lain'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$fileName = $_FILES['gambar']['name'];
move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambarsepatu/'.$fileName);
$query = mysqli_query($connect,"insert into tabel_sepatu values('','$merek','$tipe','$ukuran','$ukuran_lain','$stok','$harga','$fileName')") or die(mysqli_error());
   header('location:admin.php?message=1');

?>