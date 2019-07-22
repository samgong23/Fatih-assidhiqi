﻿<html>
	<head>
	<title>Pedestana | Fasilitator</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>" >
	<script href="<?php echo base_url('assets/js/script.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sb-admin.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/all.min.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap4.css')?>" >
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>
	<link href="<?php echo base_url ('datatables/css/dataTables.bootstrap4.css')?>" rel="stylesheet" media="all">
	
	
	</head>
	</head>
	<body >
    <nav class="navbar navbar-expand navbar-dark bg-nav">

     <h1 style="color:white;">Pedestana</h1>
	 <a href="<?php echo base_url() ?>index.php/Login/logout/" class="btn btn-sm btn-success">Logout</a>
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav side">
        <li class="nav-item active">
        <button type="button" class="btn tombol dipilih" id="overview"><div><img src="<?php echo base_url('assets/img/logo_akun.png')?>" width="30" height="30" class="img-responsive"></div>Data Akun</button>
		</li>
        <li class="nav-item">
        <button type="button" class="btn tombol" id="laporan"><div><img src="<?php echo base_url('assets/img/page.png')?>" width="30" height="30" class="img-responsive"></div>Laporan</button>
        </li>

      </ul>
	  		  <?php
		  
		  if(isset($this->session->userdata['nama'])){
			  $username=$this->session->userdata('nama');
			  $data_fasilitator=$this->session->userdata('data_fasilitator');
			  $id_fasilitator=$this->session->userdata('id_fasilitator');
			  $data_laporan=$this->session->userdata('laporan_fasilitator');
			  $data_laporan2=$this->session->userdata('laporan_fasilitator2');
			  $jumlah_laporan=$this->session->userdata('jumlah_laporan')->jumlah;
			
		  }else{
			 redirect('/Login');
		  } 
		  ?>
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs--> 	
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url() ?>index.php/Fasilitator/">Fasilitator</a>
            </li>
            <li class="breadcrumb-item keterangan">Overview</li>
          </ol>
		  <div id="overview-page">
		  <?php if($jumlah_laporan=='0'){?>
		   <div class="alert alert-success" style="text-align:center">Tidak Ada Laporan Desa</div>
		  <?php }else{ ?>
		  <div class="alert alert-danger" style="text-align:center">Terdapat <strong><?php echo $jumlah_laporan?></strong> desa yang belum dilaporkan</div>
		  <?php } ?>
		  <div class="container-fluid">
		  <table style="width:100%;" class="table">
		  <tr style="text-align:center;border:10px;background-color:#001A57;color:white;border-color:black;" class="table" colspan=2 >
		  <th> Data Akun</th>
		  </tr>
		<tr>
		<td></td>
		</tr>
		  </table>
		  <table style="width:100%;">
		  <tr style="text-align:left;" rowspan=8>
		  <td>id : </td>
		  <td><?php echo $data_fasilitator->ID_fasilitator?></td>
		  </tr>
		  <tr style="text-align:left;" rowspan=8>
		  <td>Nama : </td>
		  <td><?php echo $data_fasilitator->Nama_fasilitator?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Pendidikan :</td>
		  <td><?php echo $data_fasilitator->Pendidikan?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Tanggal Lahir :</td>
		  <td><?php echo $data_fasilitator->Tanggal_Lahir?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Job :</td>
		  <td>Fasilitator</td>
		  </tr>
		  </table>
		  <br>
		  <h3>Riwayat Penugasan</h3>
		  <div class="table-responsive">
		<table class="table" style="width:100%;" id="table">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Desa</th>
		<th>Untuk (Fasilitator)</th>
		<th>Oleh (BNPB)</th>
		<th>Tanggal</th>
		<th>Status</th>
		</tr>
		</thead>
	     <tbody>

                <?php
                    $no = 1; 
                    foreach($data_laporan as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama ?></td>
                    <td><?php echo $hasil->Nama_fasilitator ?></td>
                    <td><?php echo $hasil->Nama_bnpb ?></td>
                    <td><?php echo $hasil->tanggal ?></td>
					<?php if($hasil->Status=="Verified"){ ?>
					<td class="alert alert-success" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<?php } else if($hasil->Status=="Waiting"){ ?>
					<td class="alert alert-info" style="text-align:center;"><?php echo $hasil->Status ?></td>

					<?php } else {?>
					<td class="alert alert-danger" style="text-align:center;"><?php echo $hasil->Status ?></td>
<td><a href="<?php echo base_url() ?>index.php/Laporan/lapor_desa/<?php echo $hasil->ID ?>/<?php echo $data_fasilitator->ID_fasilitator?>/<?php echo $hasil->ID_DESA?>" class="btn btn-sm btn-success">Lapor</a></td>
					<?php } ?>
					
                  </tr>

                <?php } ?>

                </tbody>
		</table>
		  </div>
		  </div>
		</div>
		<div id="histori-page" class="table-responsive" style="display:none;">
		<table class="table" style="width:100%;text-align:center;" id="table2">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Desa</th>
		<th>tanggal</th>
		<th>Oleh (BNPB)</th>
		<th>Status</th>
		<th>Aksi</th>
		</tr>
		</thead>
	     <tbody>

                <?php
                    $no = 1; 
                    foreach($data_laporan as $hasil){ 
                ?>
                <?php if($hasil->Status=="Proses Pelaporan"){ ?>		
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama ?></td>
                    <td><?php echo $hasil->tanggal ?></td>
                    <td><?php echo $hasil->id_BNPB ?></td>
					
					<td class="alert alert-success" style="text-align:center;"><?php echo $hasil->Status ?></td>
					
					<td><a href="<?php echo base_url() ?>index.php/Laporan/lapor_desa/<?php echo $hasil->ID ?>/<?php echo $data_fasilitator->ID_fasilitator?>/<?php echo $hasil->ID_DESA?>" class="btn btn-sm btn-success">Lapor</a></td>
					
                  </tr>
              	<?php } ?>
                <?php } ?>

                </tbody>
		</table>
		  </div>
		<!--  
		<div id="tambah-laporan" >
			<?php echo form_open('Laporan/simpan/'.$id_fasilitator)?>
				<select name="ID_DESA" >
				<?php foreach($data_desa as $hasil){ ?>
				<option value="<?php echo $hasil->ID_desa?>"><?php echo $hasil->Nama_desa?></option>
				<?php } ?>
				</select>
		<table class="table table-bordered table-responsive">	
		<thead>
			<tr>
				<th>No</th>
				<th>Indikator</th>
				<th>Jawaban</th>
			</tr>
		</thead>
				<tbody>
				<?php foreach($data_indikator as $hasil){ ?>
					<tr>
					<td> <?php echo $hasil->No ?></td>
						<td><?php echo $hasil->Deskripsi ?></td>
						<td><select name="<?php echo $hasil->No ?>" >
				<option value="1">Tidak</option>
				<option value="2">Ya</option>
				</select>
		        </td>
					</tr>
				<?php } ?>

			</tbody>
	</table>
	<input type="submit" value="submit">
	<?php echo form_close()?>
	</div>
	-->

		
		
		
		
	</div>
		

        </div>
		    <script src="<?php echo base_url ('datatables/js/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url ('datatables/js/dataTables.bootstrap4.js')?>"></script>
		<script>
		$(document).ready(function(){
	
     $("#overview").click(function(){
		$("#tambah-laporan").hide();
		$("#overview-page").show();
		$("#histori-page").hide();
		$("#overview").css("background-color","#FFC600");
		$("#laporan").css("background-color","");
		$("#tambah").css("background-color","");
		$('.keterangan').text('Data Akun');
		
		
    });
	     $("#laporan").click(function(){
		$("#tambah-laporan").hide();
		$("#overview-page").hide();
		$("#histori-page").show();
		$("#overview").css("background-color","");
		$("#laporan").css("background-color","#FFC600");
		$("#overview").removeClass('dipilih');
		$('.keterangan').text('Riwayat Laporan');
		
    });
	     $('#table').DataTable();
	     $('#table2').DataTable();
	    
	
	 
	
});
		
		</script>
        <!-- /.container-fluid -->
	<!--
	<footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
	-->
		

      </div>
      <!-- /.content-wrapper -->

    </div>

    <!-- Scroll to Top Button-->



	</body>
</html>
