<html>
	<head>
	<title>Pedestana | BNPB</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['PL', 'Ratings'],
                    <?php
                    foreach ($data_statistik_laporan->result_array() as $row) {
                        extract($row);
                        echo "['{$Status}',{$jumlah}],";
                    }?>
                ]);

        var options = {
          title: 'Data Laporan'
        };
              
        //buat statistik 2
              var data2 = google.visualization.arrayToDataTable([
                    ['PL', 'Ratings'],
                    <?php
                    foreach ($data_statistik_desa->result_array() as $row) {
                        extract($row);
                        echo "['{$kategori}',{$jumlah}],";
                    }?>
                ]);

        var options2 = {
          title: 'Data Kategori Desa'
        };


        var chart = new google.visualization.PieChart(document.getElementById('pieChart'));
        var chart2 = new google.visualization.PieChart(document.getElementById('pieChart2'));

        chart.draw(data, options);
        chart2.draw(data2, options2);
      }
    </script>
	</head>
	
	<body >
    <nav class="navbar navbar-expand navbar-dark bg-nav">
	
	 <h1 style="color:white;">Pedestana</h1>
	<a href="<?php echo base_url() ?>index.php/Login/logout/" class="btn btn-sm btn-success">Logout</a>

    </nav>
		  <?php

		  if(isset($this->session->userdata['nama'])){
			  $username=($this->session->userdata('nama'));
			 
			  $data_bnpb=($this->session->userdata('data_bnpb'));
			  $id_bnpb=($this->session->userdata('id_bnpb'));
			  
		  }else{
			 redirect('/Login');
		  }
		
		  ?>
    
	<div id="wrapper">
	
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav side">
        <li class="nav-item active">
        <button type="button" class="btn tombol dipilih" id="overview"><div><img src="<?php echo base_url('assets/img/logo_akun.png')?>" width="30" height="30" class="img-responsive"></div>Data Akun</button>
		<h1 id="tes"> </h1>
		</li>
		
		<li class="nav-item">
		<button type="button" class="btn tombol" id="laporan"><div><img src="<?php echo base_url('assets/img/page.png')?>" width="30" height="30" class="img-responsive"></div>Laporan</button>
        </li>
        <li class="nav-item">
		<button type="button" class="btn tombol" id="tambah"><div><img src="<?php echo base_url('assets/img/add.png')?>" width="30" height="30" class="img-responsive"></div>Tambah Laporan</button>
        </li>

        <li class="nav-item">
        <button type="button" class="btn tombol" id="desa"><div><img src="<?php echo base_url('assets/img/map.png')?>" width="30" height="30" class="img-responsive"></div>Desa</button>
        </li>
          <li class="nav-item">
        </li>

      </ul>

      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item keterangan">Overview</li>
          </ol>
		  <div id="overview-page">
		  <?php if($jumlah_laporan==0){?>
		   <div class="alert alert-success" style="text-align:center">Semua Laporan telah Diverifikasi</div>
		  <?php }else{ ?>
		  <div class="alert alert-danger" style="text-align:center">Terdapat <strong><?php echo $jumlah_laporan?></strong> Laporan yang belum diverifikasi</div>
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
		  <td>Nama : </td>
		  <td><?php echo $data_bnpb->Nama_bnpb?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Pendidikan :</td>
		  <td><?php echo $data_bnpb->Pendidikan?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Tanggal Lahir :</td>
		  <td><?php echo $data_bnpb->Tanggal_Lahir?></td>
		  </tr>
		  <tr>
		  <td></td>
		  </tr>
		  <tr style="text-align:left;">
		  <td>Job :</td>
		  <td>BNPB</td>
		  </tr>
		  </table>
		  </div>
		  <br/>
		  <table style="width:100%;" class="table">
		  <tr style="text-align:center;border:10px;background-color:#001A57;color:white;border-color:black;" class="table" colspan=2 >
		  <th> Data Saat Ini</th>
		  </tr>
		</table>
		  <div id="pieChart" style="width: 1500px; height: 400px;"></div>
		  <div id="pieChart2" style="width: 1500px; height: 400px;"></div>
		</div>
		

		<div id="laporan-page" style="display:none;">

		
		<table class="table" id="table-laporan">
		<thead>
		<tr>
		<th>No</th>
		<th>Laporan Desa</th>
		<th>Oleh(Fasilitator)</th>
		<th>Diperiksa oleh</th>
		<th>Tanggal</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
		</thead>


	     <tbody>


                <?php
                    $no = 1; 
                    foreach($data_laporan2 as $hasil){ 
                ?>
                	<?php 
						$s=$hasil->Indikator;
						$id_laporan=$hasil->ID;
						$array=str_split($s);
						$data_indikator;
						?>
					<?php $x=1 ?>
					<?php $n=0 ?>
					<?php foreach($data_indikator as $index => $code){ ?>
					<?php 
					if($array[$index]=="2"){
						$n = $n + 1;
					}
					?>
					<?php $x=$x+1; }?>
                  
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama ?></td>
                    <td><?php echo $hasil->Nama_fasilitator?></td>
					<td><?php echo $hasil->Nama_bnpb ?></td>
					<td><?php echo $hasil->tanggal ?></td>
					<td class="alert alert-danger" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<td>
                    <a href="<?php echo base_url() ?>index.php/BNPB/verif/<?php echo $hasil->ID?>/<?php echo $id_bnpb?>/<?php echo $hasil->ID_DESA?>/<?php echo $n ?>" class="btn btn-sm btn-success">Verif</a>
                    </td>
                  </tr>
				<?php } ?>
   

                </tbody>
		</table>
	

 

		</div>


		<div id="tambah-page" class="container-fluid" style="display:none;">
		<form action="<?php echo base_url() ?>index.php/Laporan/simpan" method="post" id="form-laporan">
		<div class="form-group">
		<label for="Location">Nama Desa : </label> 
			<select name="ID_DESA" >
			<?php foreach($data_desa as $hasil){ ?>
			<option value="<?php echo $hasil->id_desa?>"><?php echo $hasil->nama?></option>
			<?php } ?>
			</select>
		</div>
		<input type="text" name="id_bnpb" value="<?php echo $id_bnpb?>" style="display:none;"> </input>
		<div class="form-group">
		<label for="Fasilitator">Kepada Fasilitator : </label> 
		<select name="ID_FASILITATOR" >
		<?php foreach($data_fasilitator as $hasil){ ?>
		<?php if($hasil->ID_fasilitator=='0'){}else{ ?>
		<option value="<?php echo $hasil->ID_fasilitator?>"><?php echo $hasil->Nama_fasilitator?></option>
		<?php } ?>
		<?php } ?>
		</select>
		</div>
	
		<button type="submit" class="btn btn-md btn-success">Simpan</button>
		</form>
		<h3 style="text-align: center;">Riwayat Penugasan</h3>

		
		<table class="table" id="table-riwayat">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Desa</th>
		<th >Kepada (Fasilitator)</th>
		<th >Oleh (BNPB)</th>
		<th >Tanggal</th>
		<th >Status</th>
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
                    <td><?php echo $hasil->Nama_fasilitator?></td>
					<td style="text-align: center"><?php echo $hasil->Nama_bnpb ?></td>
					<td style="text-align: center"><?php echo $hasil->tanggal ?></td>
					<?php if($hasil->Status=="Verified"){ ?>
					<td class="alert alert-success" width="100" style="text-align:center;width:"><?php echo $hasil->Status ?></td>
					<?php } else if($hasil->Status=="Waiting"){ ?>
					<td class="alert alert-danger" width="100" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<?php } else {?>
					<td class="alert alert-info" width="100" style="text-align:center;"><?php echo $hasil->Status ?></td>
					<?php } ?>
					
                  </tr>
				<?php } ?>
   

                </tbody>
		</table>
	
		</div>
		</div>

	<div id="desa-page" class="container-fluid" style="display:none;width:100%;">

		
	 
	
	<table class="table" id="table-desa">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Desa</th>
		<th >Kecamatan</th>
		<th >Kategori</th>
		<th>Tanggal Update</th>
		</tr>
		</thead>
	
		
	     <tbody style="text-align: left;">


                <?php
                    $no = $this->uri->segment('3') + 1; 
                    foreach($data_desa as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama ?></td>
                    <td><?php echo $hasil->nama_kecamatan?></td>
					<td><?php echo $hasil->kategori?></td>
					<td><?php echo $hasil->tanggal?></td>
                  </tr>
				<?php } ?>
   

                </tbody>
		</table>
<br>
<br>
<h3>Jumlah Kategori per Kecamatan</h3>

			<table class="table" id="table-jumlahPerKecamatan">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Kecamatan</th>
		<th >Utama</th>
		<th>Madya</th>
		<th >Pratama</th>
		<th >Belum</th>
		</tr>
		</thead>


	     <tbody style="text-align: left;">


                <?php
                    $no = $this->uri->segment('3') + 1; 
                    foreach($data_jumlah_kategori_per_kecamatan->result() as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama_kecamatan ?></td>
                    <td><?php echo $hasil->jumlah_utama ?></td>
					<td><?php echo $hasil->jumlah_madya ?></td>
					<td><?php echo $hasil->jumlah_pratama ?></td>
					<td><?php echo $hasil->jumlah_belum ?></td>
                  </tr>
				<?php } ?>
   

                </tbody>
		</table>
	
		
	</div>

					
			</div>
	</div>
		

        </div>
    <script src="<?php echo base_url ('datatables/js/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url ('datatables/js/dataTables.bootstrap4.js')?>"></script>

<script>
		$(document).ready(function(){
    $("#laporan").click(function(){
        $("#laporan-page").show();
		$("#overview-page").hide();
		$("#tambah-page").hide();
		$("#desa-page").hide();
		$("#laporan").css("background-color","#FFC600");
		$("#desa").css("background-color","");
		$("#overview").css("background-color","");
		$("#tambah").css("background-color","");
		$("#overview").removeClass('dipilih');
		$('.keterangan').text('Laporan');
	
		
    });
	
     $("#overview").click(function(){
		$("#laporan-page").hide();
		$("#overview-page").show();
		$("#tambah-page").hide();
		$("#desa-page").hide();
		$("#overview").css("background-color","#FFC600");
		$("#laporan").css("background-color","");
		$("#tambah").css("background-color","");
		$("#desa").css("background-color","");
		$('.keterangan').text('Overview');
		
		
    });

     $("#tambah").click(function(){
		$("#laporan-page").hide();
		$("#overview-page").hide();
		$("#tambah-page").show();
		$("#desa-page").hide();
		$("#overview").css("background-color","");
		$("#laporan").css("background-color","");
		$("#tambah").css("background-color","#FFC600");
		$("#desa").css("background-color","");
		$("#overview").removeClass('dipilih');
		$('.keterangan').text('Tambah');
		
		
    });
	    
		$("#desa").click(function(){
		$("#laporan-page").hide();
		$("#overview-page").hide();
		$("#tambah-page").hide();
		$("#desa-page").show();
		$("#desa").css("background-color","#FFC600");
		$("#overview").css("background-color","");
		$("#tambah").css("background-color","");
		$("#laporan").css("background-color","");
		$("#overview").removeClass('dipilih');
		$('.keterangan').text('Peta Desa');
		
		
    });	
		$('#table-desa').DataTable();
		$('#table-jumlahPerKecamatan').DataTable();
		$('#table-riwayat').DataTable();
		$('#table-laporan').DataTable();

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
		

    
      <!-- /.content-wrapper -->

 

    <!-- Scroll to Top Button-->




	</body>
</html>
