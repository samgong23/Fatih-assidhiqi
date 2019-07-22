<!DOCTYPE html>
<html>
<head>
	<title>Pedestana | Pakar</title>
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
</head>
<body>
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
   

    <div class="section" style="text-align: center;">
    	<div class="container-fluid">
    		          <ol class="breadcrumb" style="width:100%;">
            <li class="breadcrumb-item">
              <a href="#">Pakar</a>
            </li>
            <li class="breadcrumb-item keterangan">Dashboard</li>
          </ol>
   
    			<div class="row">
    				<div class="col-md-12">
    					<table style="width:100%;" class="table table-bordered">
    						<tr>
	    						<thead>
	    						<tr>
	    							<th>No</th>
	    							<th>Nama</th>
	    							<th>Himpunan 1</th>
	    							<th>Himpunan 2</th>
	    							<th>Min</th>
	    							<th>Max</th>
	    						</tr>
	    						</thead>
	    						<tbody>
	    							<?php foreach ($data_variabel as $hasil) {?>
	    								<tr>
	    									<td><?php echo $hasil->id; ?></td>
	    									<td><?php echo $hasil->nama; ?></td>
	    									<td><?php echo $hasil->himpunan1; ?></td>
	    									<td><?php echo $hasil->himpunan2; ?></td>
	    									<td><?php echo $hasil->min; ?></td>
	    									<td><?php echo $hasil->max; ?></td>


	    								</tr>
	    							<?php }?>
	    							

	    						</tbody>
	    					</tr>

    					</table>
    				</div>
    			</div>
    			<br>



          			<?php echo form_open('Pakar/setDomainVariable') ?>
          			<div class="row" >
    				<?php foreach ($data_variabel as $key => $variabel) {?>

    					<?php if($variabel->id==1){?>
       					<div class="col-md-4">
       					<label style="text-align: center;"><h5>Prioritas(1-10)</h5></label>
    					<br>
    					<label style="text-align: left;"><h5>Rendah</h5></label> :
    					 <input type="number"  name="min_prioritas" min="0" max="<?php echo $variabel->max-1; ?>" style="text-align: center;" value="<?php echo $variabel->min;?>">
    					 <br>
    					 <label style="text-align: left;"><h5>Tinggi</h5></label> :
    					 <input type="number"  name="max_prioritas" min="<?php echo $variabel->min+1; ?>" max="10" style="text-align: center;" value="<?php echo $variabel->max;?>">
    					 </div>
    					<?php }else if($variabel->id==2){?>
    					<div class="col-md-4">
    					<label style="text-align: center;"><h5>Indikator(0-60)</h5></label>
    					<br>
    					<label style="text-align: left;"><h5>Sedikit</h5></label>  :
    					 <input type="number"  name="min_indikator" min="0" max="<?php echo $variabel->max-1; ?>" style="text-align: center;" value="<?php echo $variabel->min;?>">
    					 <br>
    					 <label style="text-align: left;"><h5>Banyak</h5></label> :
    					 <input type="number"  name="max_indikator" min="<?php echo $variabel->min+1; ?>" max="60" style="text-align: center;" value="<?php echo $variabel->max;?>">
    					</div>

    					<?php } else if($variabel->id==3){?>
    					 <div class="col-md-4">
    					 <label style="text-align: center;"><h5>Resiko Bencana(0-100)</h5></label>
    					<br>
    					<label style="text-align: left;"><h5>Rendah</h5></label> :
    					 <input type="number"  name="min_resiko_bencana" min="0" max="<?php echo $variabel->max-1; ?>" style="text-align: center;" value="<?php echo $variabel->min;?>">
    					 <br>
    					 <label style="text-align: left;"><h5>Banyak</h5></label> :
    					 <input type="number"  name="max_resiko_bencana" min="<?php echo $variabel->min+1; ?>" max="100" style="text-align: center;" value="<?php echo $variabel->max;?>">
    					</div>
              </div>
    					<?php }else{?>
                <div class="row">
                 <div class="col-md-12">
               <label style="text-align: center;"><h5><?php echo $variabel->nama;?></h5></label>
              <br>
              <label style="text-align: left;"><h5><?php echo $variabel->himpunan1; ?></h5></label> :
               <input type="number"  name="min_<?php echo $variabel->id; ?>" min="0" max="100" style="text-align: center;" value="<?php echo $variabel->min;?>">
               <br>
               <label style="text-align: left;"><h5><?php echo $variabel->himpunan2; ?></h5></label> :
               <input type="number"  name="max_<?php echo $variabel->id;?>" min="0" max="100" style="text-align: center;" value="<?php echo $variabel->max;?>">
              </div>
            </div>
    					<?php }}?>
    				
    				<br>
    					<button type="submit" class="btn btn-md btn-success" style="text-align: center;">Simpan</button>
    				<?php echo form_close()?>
                    <br>
    	</div>
    	<div class="row">
    				<div class="col-md-12">
    					<table style="width:100%;" class="table table-bordered">
    						<tr>
	    						<thead>
	    						<tr>
	    							<th>No</th>
	    							<th>Indikator</th>
	    							<th>Logika</th>
	    							<th>Resiko Bencana</th>
	    							<th>Prioritas</th>
	    							<th>Aksi</th>
	    						</tr>
	    						</thead>
	    						<tbody>
	    							<?php foreach ($data_aturan as $hasil) {?>
	    								<tr>
	    									<td><?php echo $hasil->id; ?></td>
	    									<td><?php echo $hasil->variable1; ?></td>
	    									<td><?php echo $hasil->logika; ?></td>
	    									<td><?php echo $hasil->variable2; ?></td>
	    									<td><?php echo $hasil->kesimpulan; ?></td>
	    									 <td><a href="<?php echo base_url() ?>index.php/Pakar/HapusAturan/<?php echo $hasil->id?>" class="btn btn-sm btn-danger">Hapus</a></td>


	    								</tr>
	    							<?php }?>
	    							

	    						</tbody>
	    					</tr>

    					</table>
    				</div>
    			</div>
    			<br>
    			<h3>Tambah Aturan</h3>
    			<hr>
    			<?php echo form_open('Pakar/TambahAturan') ?>
    			<div class="row">

    				<div class="col-md-3">
    						<div class="form-group">
							<label for="Category">Indikator : </label>
							<select name="variable1">
								<option value="sedikit">Sedikit</option>
								<option value="banyak">Banyak</option>
							</select>
							</div>
    				</div>
    				<div class="col-md-3">
    						<div class="form-group">
							<label for="Category">Logika : </label>
							<select name="logika">
								<option value="dan">Dan</option>
								<option value="atau">Atau</option>
							</select>
							</div>
    				</div>
    				<div class="col-md-3">
    						<div class="form-group">
							<label for="Category">Resiko Bencana : </label>
							<select name="variable2">
								<option value="rendah">Rendah</option>
								<option value="tinggi">Tinggi</option>
							</select>
							</div>
    				</div>
    				<div class="col-md-3">
    						<div class="form-group">
							<label for="Category">Prioritas (Kesimpulan) : </label>
							<select name="kesimpulan">
								<option value="rendah">Rendah</option>
								<option value="tinggi">Tinggi</option>
							</select>
							</div>
    				</div>
    			</div>
  					<button type="submit" class="btn btn-md btn-success" style="text-align: center;">Simpan</button>
    			<?php echo form_close() ?>


    </div>

</div>

</body>
</html>