</!DOCTYPE html>
<html>
<head>
	<title>Warning</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>" >
	<script href="<?php echo base_url('assets/js/script.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sb-admin.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/all.min.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-nav">
		<h1 style="color:white;">Pedestana</h1>
		<a href="<?php echo base_url() ?>index.php/Login/logout/" class="btn btn-sm btn-success">Logout</a>
	</nav>
	<div class="container-fluid" style="text-align: center;">
		<div class="alert alert-danger">
			<h1 style="text-align: center;">Laporan belum ada Setahun</h1>
		</div>	
		<a href="<?php echo base_url() ?>index.php/BNPB/" class="btn btn-sm btn-success">Kembali</a>
	</div>


</body>
</html>