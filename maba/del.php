<?php  
	require_once "../koneksi/config.php";

	mysqli_query($con,"DELETE FROM mhs WHERE id='$_GET[id]'")or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
?>