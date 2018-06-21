<?php
include('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($connect,"UPDATE admin SET username='$username',password='$password' WHERE id='1'") or die(mysqli_error());
   header('location:ubahakun.php?message=1');


?>