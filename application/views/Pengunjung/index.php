<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pedestana</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/pengunjung/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/pengunjung/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="<?php echo base_url ('datatables/css/dataTables.bootstrap4.css')?>" rel="stylesheet" media="all">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['PL', 'Ratings'],
                    <?php
                    foreach ($data_statistik_desa->result_array() as $row) {
                        extract($row);
                        echo "['{$kategori}',{$jumlah}],";
                    }?>
                ]);

        var options = {
          title: 'Data Kategori Desa'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pieChart'));

        chart.draw(data, options);
      }
    </script>
    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/pengunjung/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/pengunjung/css/freelancer.min.css')?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  fixed-top text-uppercase" id="mainNav" style="background-color:#001A57;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url() ?>Pengunjung">PEDESTANA</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#desa">Cari Desa</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Apa itu Pedestana?</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">The Team</a>
            </li>
			  <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link btn btn-success " href="<?php echo base_url() ?>Login" >Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class=" bg-primary text-white text-center">
    	 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  	<div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/h12.png')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/h2.png')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/h3.png')?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     
    </header>
  
    <!-- Portfolio Grid Section -->

<!--       	<div class="container-fluid">
      		<div class='form-group'>
				<label>Kecamatan</label>
				<select class='form-control' id='kecamatan'>
					<option value='0'>--pilih--</option>
					<?php 
					foreach ($kecamatan as $kec) {
				echo "<option value='$kec[id_kecamatan]'>$kec[nama_kecamatan]</option>";}?>
				</select>
			</div> -->


		</div>
	<div class="table-responsive">
		<div id="desa">
      <div id="pieChart" style="width: 100%;" class="container-fluid ml-auto"></div>
		
    <table class="table table-bordered" id="table">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Desa</th>
		<th>Kecamatan</th>
		<th>Kategori</th>
		</tr>
		</thead>
	     <tbody>


                <?php
                    $no = $this->uri->segment('3') + 1;
                    foreach($desa as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama ?></td>
                    <td><?php echo $hasil->nama_kecamatan?></td>
					<td><?php echo $hasil->kategori?></td>
                  </tr>
				<?php } ?>
   

                </tbody>
		</table>

	</div>
		</div>


 
  </div>
    <script type="text/javascript">

		$(function(){

		$.ajaxSetup({
		type:"POST",
		url: "<?php echo base_url('index.php/pengunjung/ambil_data') ?>",
		cache: false,
		});

		$("#kecamatan").change(function(){

		var value=$(this).val();
		if(value>0){
		$.ajax({
		data:{modul:'desa',id:value},
		success: function(respond){
		$("#desa").html(respond);
		}
		})
		}

		});



		})

	</script>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white" style="margin-bottom: 50px;">Apa Itu Pedestana?</h2>
        <br/>
        <div class="row" >
          <div class="col-lg-4 ml-auto">
            <p class="lead">Merupakan Portal Evaluasi Desa Tangguh Bencana untuk mempermudah petugas fasilitator BNPB agar dapat melaporkan perkembangan desa tangguh bencana.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Laporan yang dikirim oleh petugas fasilitator nantinya akan dievaluasi oleh BNPB untuk menentukan kategori yang tepat untuk desa tersebut.</p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary " style="margin-bottom: 40px;">SURYANESIA</h2>
        <br/>
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Merupakan kelompok matakuliah pengembangan aplikasi berbasis web dan sistem jaringan komputer</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Yang beranggotakan lima orang yaitu: Dhiqi, Kemal Tirta, Aditya Raka, Axel Cristiant, Azmiardhy Z <a href="<?php echo base_url('Welcome/about'); ?>">Meet The Team</a>.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Kampus Terpadu UII 
            	<br>Jalan Kaliurang km. 14,5
              <br>Sleman Yogyakarta 55584</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Informatics UII</h4>
            <p class="lead mb-0">Go ahead sign-up to Informatic UII and become part of the family, one for all, all for one.
              <a href="https://pmb.uii.ac.id/">Daftar UII</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; PEDESTANA 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url ('datatables/js/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url ('datatables/js/dataTables.bootstrap4.js')?>"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#table').DataTable();
      } );
    </script>
    


    <script src="<?php echo base_url('assets/pengunjung/js/freelancer.min.js')?>" > </script>
    <!-- Bootstrap core JavaScript -->
    
    <script src="<?php echo base_url('assets/pengunjung/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/pengunjung/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/pengunjung/vendor/magnific-popup/jquery.magnific-popup.min.js')?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/pengunjung/js/jqBootstrapValidation.js')?>"></script>
    <script src="<?php echo base_url('assets/pengunjung/js/contact_me.js')?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/pengunjung/js/freelancer.min.js')?>"></script>

  </body>

</html>
