<?php
	require("koneksi.php");

	$query = "UPDATE tabel_ukuran SET ukuran='$_GET[ukuran]' WHERE id=1";

	if($connect->query($query)==true)
	{
    	echo "Sukses";
	}
	else
	{
		echo "Gagal";
	}
?>