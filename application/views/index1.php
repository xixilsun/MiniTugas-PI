<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MINI TUGAS</title>

<!--CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tabel/vendor/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tabel/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tabel/vendor/animate/animate.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tabel/vendor/select2/select2.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tabel/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tabel/css/util.css'); ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tabel/css/main.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tabel/css/glyphicons/bootstrap-glyphicons.css'); ?>">

</head>

<body>

<div class="container my-5 text-center ">
        <h1 class="display-4 text-white">DATA MAHASISWA</h1>
</div>

<div class="container mb-2">
        <div>
                <div class="col-sm-9 float-left py-3">
                                <input type="text" placeholder="Cari Data Mahasiswa" id="search_text" name="search_text" class="form-control">
                </div>
                <div class="col-sm-3 text-right float-left py-3">
                        <a href='<?php echo base_url("mahasiswa/tambah"); ?>'>
                                <button class="btn btn-dark font_Lato-Bold">
                                        <span class="glyphicon glyphicon-plus"></span> &nbsp; Tambah Data
                                </button>
                        </a>
                </div>
        </div>
        
        <div class="float-left" style="width: 100%">
        <div class="table100 ver3 ">
                <div class="table100-head">
                        <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column2"><span class="ml-4">NIM</span></th>
                                        <th class="cell100 column2">Nama</th>
                                        <th class="cell100 column2">Jenis Kelamin</th>
                                        <th class="cell100 column2">Telepon</th>
                                        <th class="cell100 column2">Alamat</th>
                                        <th class="cell100 column2">Aksi</th>
                                    </tr>
                                </thead>
                        </table>
                </div>
                
                <div class="table100-body js-pscroll">
                        <table>
                                <tbody>
                                    <tr class="row100 body" style="width: 100%">
                                        <td class="cell100 column2"><span class="ml-4">181402031</span></td>
                                        <td class="cell100 column2">Gary</td>
                                        <td class="cell100 column2">Laki-laki</td>
                                        <td class="cell100 column2">081122334455</td>
                                        <td class="cell100 column2">Kota Medan</td>
                                        <td class="cell100 column2">X Y</td>
                                    </tr>
                                    <tr class="row100 body" style="width: 100%">
                                        <td class="cell100 column2"><span class="ml-4">181402031</span></td>
                                        <td class="cell100 column2">Gary</td>
                                        <td class="cell100 column2">Laki-laki</td>
                                        <td class="cell100 column2">081122334455</td>
                                        <td class="cell100 column2">Kota Medan</td>
                                        <td class="cell100 column2">X Y</td>
                                    </tr>
                                    <tr class="row100 body" style="width: 100%">
                                        <td class="cell100 column2"><span class="ml-4">181402031</span></td>
                                        <td class="cell100 column2">Gary</td>
                                        <td class="cell100 column2">Laki-laki</td>
                                        <td class="cell100 column2">081122334455</td>
                                        <td class="cell100 column2">Kota Medan</td>
                                        <td class="cell100 column2">X Y</td>
                                    </tr>
                                    <tr class="row100 body" style="width: 100%">
                                        <td class="cell100 column2"><span class="ml-4">181402031</span></td>
                                        <td class="cell100 column2">Gary</td>
                                        <td class="cell100 column2">Laki-laki</td>
                                        <td class="cell100 column2">081122334455</td>
                                        <td class="cell100 column2">Kota Medan</td>
                                        <td class="cell100 column2">X Y</td>
                                    </tr>
                                </tbody>
                        </table>
                </div>
                        
        </div>
        </div>
        
</div>

<br><br><br>


<!--JS-->
<script src="<?php echo base_url('assets/tabel/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/tabel/vendor/bootstrap/js/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/tabel/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/tabel/vendor/select2/select2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/tabel/vendor/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/tabel/js/main.js'); ?>"></script>
       

</body>
</html>
