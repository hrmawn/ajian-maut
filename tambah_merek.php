<?php
include('koneksi.php');
$nama_merek = $_POST['nama_merek'];
$query = mysqli_query($connect,"insert into tabel_merek values('','$nama_merek')") or die(mysqli_error());
   header('location:merek.php?message=1');

?>