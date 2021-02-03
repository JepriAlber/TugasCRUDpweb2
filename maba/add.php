<!DOCTYPE html>
<html>
<head>
	<title>tambah data maba</title>
</head>
<body>
	<form action="proses.php" method="POST">
		<div>
			<label for="nama">Nama</label>
			<input type="text" name="nama" id="nama" required="on" autofocus="on">
		</div>
		<div>
			<label for="npm">Npm</label>
			<input type="number" name="npm" id="npm" required="on">	
		</div>
		<div>
			<label for="jurusan">jurusan</label>
			<select id="jurusan" name="jurusan" required="on">
				<option value="">- Pilih -</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
		</select>
		</div>
		<input type="submit" name="add" value="TAMBAH DATA">
	</form>
</body>
</html>