<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>

<!--CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/form/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/form/vendor/animate/animate.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/form/vendor/select2/select2.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/form/vendor/css-hamburgers/hamburgers.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/form/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/form/css/main.css'); ?>">

</head>

<body>

<?php echo form_open("mahasiswa/ubah/". $mahasiswa->nim); ?>
<div class="bg-contact3">
        <div class="container-contact3">
                <div class="wrap-contact3 validate-form">
                        <span class="contact3-form-title">Form Ubah Data Mahasiswa</span>
                        
                        <div class="ml-3 mb-5 text-danger">
                                <?php echo validation_errors(); ?>
                        </div>
                        
                        <div class="wrap-input3 validate-input">
                                <input type="text" name="input_nim" value="<?php echo set_value('input_nim', $mahasiswa->nim); ?>" class="input3" placeholder="NIM" readonly>
                                <span class="focus-input3"></span>
                        </div>
                        
                        <div class="wrap-input3 validate-input">
                                <input type="text" name="input_nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>" class="input3" placeholder="Nama">
                                <span class="focus-input3"></span>
                        </div>
                                                
                        <div class="wrap-contact3-form-radio">
                                <span class="contact3-form text-secondary mb-2 ml-1">Jenis Kelamin</span>
                                <div class="contact3-form-radio m-r-42 ml-4">
                                        <input type="radio" name="input_jeniskelamin" value="Laki-laki"<?php echo set_radio('jeniskelamin' ,'Laki-laki', ($mahasiswa->jenis_kelamin == "Laki-laki")? true:false); ?> id="laki-laki" class="input-radio3"><label for="laki-laki" class="label-radio3">Laki-laki</label>
                                </div>

                                <div class="contact3-form-radio">
                                        <input type="radio" name="input_jeniskelamin" value="Perempuan"<?php echo set_radio('jeniskelamin' ,'Perempuan', ($mahasiswa->jenis_kelamin == "Perempuan")? true:false ); ?> id="perempuan" class="input-radio3"><label for="perempuan" class="label-radio3">Perempuan</label>
                                </div>
                        </div>
                        
                        <div class="wrap-input3 validate-input">
                                <input type="text" name="input_telp" value="<?php echo set_value('input_telp', $mahasiswa->telp); ?>" class="input3" placeholder="Telepon">
                                <span class="focus-input3"></span>
                        </div>
                        
                        <div class="wrap-input3 validate-input">
                                <textarea name="input_alamat" class="input3" placeholder="Alamat"><?php echo set_value('input_alamat', $mahasiswa->alamat); ?></textarea>
                                <span class="focus-input3"></span>
                        </div>
                        
                        <div class="container-contact3-form-btn">
                                <input type="submit" name="submit" value="Update"  class="contact3-form-btn mr-3">
                                <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"  class="contact3-form-btn"></a>
                        </div>

                </div>
        </div>
</div>
<?php echo form_close(); ?>

<!--JS-->
<script src="<?php echo base_url('assets/form/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/form/vendor/bootstrap/js/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/form/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/form/vendor/select2/select2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/form/js/main.js'); ?>"></script>


</body>
</html>