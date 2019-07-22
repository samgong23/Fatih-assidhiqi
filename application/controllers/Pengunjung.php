<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->library('googlemaps');
		$this->load->model('model_kecamatan');
		$this->load->model('model_desa');
		$this->load->model('model_fasilitator');
    $this->load->model('model_desa');
	}
	public function index()
	{
		// $this->load->database();
		// $jumlah_data = $this->model_desa->jumlah_data();
		// $this->load->library('pagination');
		// $config['base_url'] = base_url().'index.php/Pengunjung/index/';
		// $config['total_rows'] = $jumlah_data;
		// $config['per_page'] = 10;
		//  // Membuat Style pagination untuk BootStrap v4
  //     $config['first_link']       = 'First';
  //       $config['last_link']        = 'Last';
  //       $config['next_link']        = 'Next';
  //       $config['prev_link']        = 'Prev';
  //       $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
  //       $config['full_tag_close']   = '</ul></nav></div>';
  //       $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
  //       $config['num_tag_close']    = '</span></li>';
  //       $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
  //       $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
  //       $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
  //       $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
  //       $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
  //       $config['prev_tagl_close']  = '</span>Next</li>';
  //       $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
  //       $config['first_tagl_close'] = '</span></li>';
  //       $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
  //       $config['last_tagl_close']  = '</span></li>';
		 $from = $this->uri->segment(3);
		// $this->pagination->initialize($config);
		$data['kecamatan']=$this->model_kecamatan->kecamatan();
		$data['desa']=$this->model_desa->data(10,$from);
		$data['data_statistik_desa']=$this->model_desa->GetJumlahKategori();
		$this->load->view('Pengunjung/index',$data);
	}

	public function tes()
	{
		$data['data_fasilitator']=$this->model_fasilitator->get_all();
		$this->googlemaps->initialize();
		$data['map']=$this->googlemaps->create_map();
		$this->load->view('Pengunjung/Pilih_Map',$data);
	}

	function ambil_data(){
		$modul=$this->input->post('modul');
		$id=$this->input->post('id_kecamatan');

		if($modul=="desa"){
			echo $this->model_desa->desa($id);
		}
	}
}
