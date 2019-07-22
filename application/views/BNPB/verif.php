<html>
<head>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</head>
<body>
<?php 
	$s=$data_laporan->Indikator;
	$id_laporan=$data_laporan->ID;
	$array=str_split($s);
	$indikator=$data_indikator;
	?>
    <nav class="navbar navbar-expand navbar-dark bg-nav">
	
     <h1 style="color:white;">Pedestana</h1>
	<a href="<?php echo base_url() ?>index.php/Login/logout/" class="btn btn-sm btn-success">Logout</a>

    </nav>
	
	<div id="wrapper">
	<div class="container-fluid" >
	<div class="">
	<?php echo form_open('Laporan/verifikasi') ?>
	<input type="text" name="ID_laporan" value="<?php echo $id_laporan?>" style="display:none;"> </input>
	<input type="text" name="id_desa" value="<?php echo $id_desa?>" style="display:none;"> </input>
	<table class="table">
		<tr>
	<th>No</th>
	<th style="text-align: center;">Indikator</th>
	<th style="text-align: right;">Jawaban</th>
	<?php $x=1 ?>
	<?php $n=0 ?>
	</tr>
	</table>
	<div class="table-responsive" style="height: 500px;margin:0;width:100%;">
	<table class="table table-bordered" style="width:100%;">
	<?php foreach($indikator as $index => $code){ ?>
	<tr>
	<td><?php echo $x ?></td>
	<td> <?php echo $code->Deskripsi?> </td>
	<td><?php 
	if($array[$index]=="1"){
		echo "Tidak ada jawaban ";
	}else if($array[$index]=="2"){
		echo "Ya";
		$n = $n + 1;
	}else{
		
		echo "Tidak";
	}
	?></td>
	</tr>
	<?php $x=$x+1; }?>
	</table>
</div>
	<br/>
	<table>
		<tr>
			<td>Jumlah Indikator</td>
			<td>:</td>
			<td><?php echo $n ?></td>
		</tr>
		<tr>
			<td>Tingkat Rawan Bencana</td>
			<td>:</td>
			<td><?php echo $bencana ?></td>
		</tr>
	</table>
	<br>
	<h4>Rekomendasi Kategori Untuk Desa : <?php echo $nama_desa ?></h4>
	<br>
	<h2><?php if($rekomendasi <=45){
		echo "Pratama";
		}else if($rekomendasi >45 & $rekomendasi < 85){
			echo "Madya";
		}else if($rekomendasi>= 85){
			echo "Utama";
		}
		?>
			
	</h2>
	<h2><?php echo $rekomendasi ?> %</h2>
	<br>
	<div class="form-group">
	<label for="Category">Kategori : </label>
			<select name="Kategori">
				<option value="Utama">Utama</option>
				<option value="Madya">Madya</option>
				<option value="Pratama">Pratama</option>
		</select>
	</div>
	<a  class="btn btn-md btn-success" href="<?php echo base_url() ?>index.php/BNPB">Kembali</a>
	<button type="submit" class="btn btn-md btn-success">Verifikasi</button>
	
	<?php echo form_close()?>
	
	</div>
	</div>
	</div>
</body>
</html>