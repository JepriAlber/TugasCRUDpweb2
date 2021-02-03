<?php 
	require_once '../koneksi/config.php';
 ?>	
<!DOCTYPE html>
<html>
<head>
	<title>Edit data maba</title>
</head>
<body>
<?php 
	$id=$_GET['id'];
		$maba=mysqli_query($con,"SELECT * FROM mhs WHERE id=$id");
		while ($data=mysqli_fetch_array($maba)) {
 ?>
	<form action="proses.php" method="POST">

		<input type="hidden" name="id" value="<?=$data['id'];?>">
		<div>
			<label for="nama">Nama</label>
			<input type="text" name="nama" id="nama" value="<?=$data['nama'];?>" >
		</div>
		<div>
			<label for="npm">Npm</label>
			<input type="number" name="npm" id="npm" value="<?=$data['npm'];?>">	
		</div>
		<div>
			<label for="jurusan">jurusan</label>
			<select id="jurusan" name="jurusan" required="on">
				<option value="<?=$data['jurusan'];?>"><?=$data['jurusan'];?></option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
		</select>
		</div>
		<input type="submit" name="edit" value="EDIT DATA">
	</form>
<?php } ?>
</body>
</html>