<?php 
	require_once '../koneksi/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP dasar MABA</title>
</head>
<body>
	<a href="add.php">Tambah data</a>
	<table>
		<thead>
			<tr>
				<td>NO</td>
				<td>Nama</td>
				<td>Npm</td>
				<td>Jurusan</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no=1;
				$query = "SELECT * FROM mhs ORDER BY id ASC";
				$mahasiswa = mysqli_query($con,$query)or die(mysqli_error($con));

					while ($data = mysqli_fetch_array($mahasiswa)) {?>
						<tr>
							<td><?=$no++;?></td>
							<td><?=$data['nama'];?></td>
							<td><?=$data['npm'];?></td>
							<td><?=$data['jurusan'];?></td>
							<td>
								<a href="edit.php?id=<?=$data['id'];?>">Edit</a> | 
								<a href="del.php?id=<?=$data['id'];?>" onclick="return confirm('Yakin menghapus data?')">Hapus</a>
							</td>	
						</tr>
						<?php
					}
			 ?>
		</tbody>
	</table>
</body>
</html>