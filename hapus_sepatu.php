<?php
include"koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($connect,"DELETE FROM tabel_sepatu WHERE id='$id'") or die(mysql_error());
   header('location:admin.php?message=2');
?>