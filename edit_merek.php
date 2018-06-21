<?php
include('koneksi.php');
$id = $_GET['id'];
$nama_merek = $_POST['nama_merek'];
$query = mysqli_query($connect,"update tabel_merek set nama_merek='$nama_merek' where id='$id'") or die(mysqli_error());
   header('location:merek.php?message=2');

?>