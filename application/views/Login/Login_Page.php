<!DOCTYPE html>
<html style="height: 100%;">
	<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title> Login Page</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-login.css')?>" 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css')?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
		<script src="<?php echo base_url('assets/js/jsquery-3.1.1.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>" ></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>" ></script>
	</head>
	<body>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-0 right-side"  >
				<img src="<?php echo base_url('assets/img/side2.png')?>" style="width:100%; height:100%"/> 

			</div>
			<div class="col-lg-4 col-md-4 col-sm-12" >
				<div class="login-section">
				<form  action="<?php echo base_url()?>index.php/Login/aksi_login"  method="post" class="form-signin">
					<h2 class="form-signin-heading heading">Login </h2>
					<input type="text" class="form-control" name="username" placeholder="username" required="" autofocus=""/>
					<input type="password" class="form-control" name="password" placeholder="Password" required=""/>


					<div style="margin: 0;">
					<button type="submit" class="btn btn-lg btn-primary btn-success" style="width:30%">Login</button>
					<a href="<?php echo base_url() ?>Pengunjung" class="btn btn-lg btn-primary btn-primary" style="width:30%;">Pengunjung</a>
					
					</div>
		</form>
	</div>
				</div>
		</div>
		



		<!--
		<div class="row" style="height:100%;">
			<div class="col-lg-8" style="background-color: black;">
			</div>
			<div class="col-lg-4">
				<div class="wrapper">
					<form class="form-horizontal form-login" action="<?php echo base_url()?>index.php/Login/aksi_login" method="post" > 
						<div class="form-group">
						<?php echo $this->session->flashdata('msg'); ?>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="username">Username:</label>
							<div class="col-sm-10">
								<input type="text" name="username" class="form-control" id="email" placeholder=" Enter Username">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Password:</label>
							<div class="col-sm-10"> 
								<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
							</div>
						</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="btn btn-default" value="Login" style="background-color:#00A868;color:white;"></button>
						atau
						<a href="<?php echo base_url() ?>index.php/Pengunjung/">masuk sebagai pengunjung</a>
					</div>
				</div>
					</form>
				</div>
			</div>
		</div>
	-->
				
	
	</body>
</html>