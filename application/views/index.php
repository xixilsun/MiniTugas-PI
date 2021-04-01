<!DOCTYPE html>
<html>
<head>
	<title>CRUD Mini Tugas</title>
</head>
<body>
	<h1>DATA MAHASISWA</h1>
	<input type="text" name="search_text" id="search_text" placeholder="Cari Data Mahasiswa">
	<button>+ Tambah Data</button><br><br>
	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php foreach ($mahasiswa as $key): ?>
			<tr>
				<td><?= $key->nim ?></td>
				<td><?= $key->nama ?></td>
				<td><?= $key->jenis_kelamin ?></td>
				<td><?= $key->telp ?></td>
				<td><?= $key->alamat ?></td>
				<td></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>