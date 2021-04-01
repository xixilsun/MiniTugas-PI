<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah</title>
</head>
<body>
	<h1>FORM UBAH MAHASISWA</h1>
	<?php echo form_open("mahasiswa/ubah". $mahasiswa->nim); ?>
		<input type="text" name="input_nim" placeholder="NIM" value="<?php echo set_value('input_nim', $mahasiswa->nim); ?>" readonly><br>
		<input type="text" name="input_nama" placeholder="Nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>"><br>
		<label>Jenis Kelamin :</label><br>
		<input type="radio" name="input_jeniskelamin" value="laki-laki"<?php echo set_radio('jeniskelamin' ,'Laki-laki', ($mahasiswa->jenis_kelamin == "Laki-laki")? true:false); ?> id="laki-laki"><label for="input_jeniskelamin">Laki-laki</label>
		<input type="radio" name="input_jeniskelamin"  value="Perempuan"<?php echo set_radio('jeniskelamin' ,'Perempuan', ($mahasiswa->jenis_kelamin == "Perempuan")? true:false ); ?> id="perempuan"><label for="input_jeniskelamin">Perempuan</label><br>
		<input type="text" name="input_telp" placeholder="Telepon" value="<?php echo set_value('input_telp', $mahasiswa->telp); ?>"><br>
		<textarea name="input_alamat" placeholder="Alamat"><?php echo set_value('input_alamat', $mahasiswa->alamat); ?></textarea><br>
		<input type="submit" name="submit" value="Simpan">
		<a href="<?php echo base_url(); ?>">
			<input type="button" value="Batal">
		</a>
	<?php echo form_close(); ?>
</body>
</html>