<?php
include('koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($connect,"DELETE FROM tabel_merek WHERE id='$id'") or die(mysql_error());
   header('location:merek.php?message=3');


?>