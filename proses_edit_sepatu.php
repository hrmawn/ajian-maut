<?php
include('koneksi.php');
$id = $_GET['id'];
$merek = $_POST['merek'];
$tipe = $_POST['tipe'];
$ukuran = $_POST['ukuran'];
$ukuran_lain = $_POST['ukuran_lain'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$fileName = $_FILES['gambar']['name'];
$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambarsepatu/'.$fileName);
if($move){
	$query = mysqli_query($connect,"update tabel_sepatu set merek='$merek',tipe='$tipe',ukuran='$ukuran',ukuran_lain='$ukuran_lain',stok='$stok',harga='$harga',gambar='$fileName' where id='$id'") or die(mysqli_error());
   header('location:admin.php?message=2');
}else{
	$query = mysqli_query($connect,"update tabel_sepatu set merek='$merek',tipe='$tipe',ukuran='$ukuran',ukuran_lain='$ukuran_lain',stok='$stok',harga='$harga' where id='$id'") or die(mysqli_error());
   header('location:admin.php?message=3');
}


?>