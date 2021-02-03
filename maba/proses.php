<?php 
require_once '../koneksi/config.php';
	if (isset($_POST['add'])) {
		
		$nama = $_POST['nama'];
		$npm = $_POST['npm'];
		$jurusan = $_POST['jurusan'];

		$sql = "INSERT INTO mhs (nama, npm, jurusan) VALUES ('$nama','$npm','$jurusan')";
		mysqli_query($con,$sql)or die(mysqli_error($con));
		echo "<script>alert('Data berhasil ditambah');window.location='data.php';</script>";

	}else if(isset($_POST['edit'])){

		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$npm = $_POST['npm'];
		$jurusan = $_POST['jurusan'];

		$sql = "UPDATE mhs SET nama='$nama', npm='$npm',jurusan='$jurusan' WHERE id='$id'";
		mysqli_query($con,$sql)or die(mysqli_error($con));
		echo "<script>alert('Data berhasil Update');window.location='data.php';</script>";
	}
 ?>