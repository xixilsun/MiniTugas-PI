<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
</head>
<body>
	<h1>FORM TAMBAH MAHASISWA</h1>
	<?php echo form_open("mahasiswa/tambah"); ?>
		<input type="text" name="input_nim" placeholder="NIM"><br>
		<input type="text" name="input_nama" placeholder="Nama"><br>
		<label>Jenis Kelamin :</label><br>
		<input type="radio" name="input_jeniskelamin" value="laki-laki"><label for="input_jeniskelamin">Laki-laki</label>
		<input type="radio" name="input_jeniskelamin" value="perempuan"><label for="input_jeniskelamin">Perempuan</label><br>
		<input type="text" name="input_telp" placeholder="Telepon"><br>
		<textarea name="input_alamat" placeholder="Alamat"></textarea><br>
		<input type="submit" name="submit" value="Simpan">
		<a href="<?php echo base_url(); ?>">
			<input type="button" value="Batal">
		</a>
	<?php echo form_close(); ?>
</body>
</html>