<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakar extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->model('model_bnpb');
		$this->load->model('model_desa');
		$this->load->model('model_login');
		$this->load->model('model_fasilitator');
		$this->load->model('model_laporan');
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('model_variable');
        $this->load->model('model_aturan');
		$this->load->library('pagination');
    }

    public function index(){
    	$data['data_variabel']=$this->model_variable->get_all();
        $data['data_aturan']=$this->model_aturan->get_all();
    	$this->load->view('Pakar/index',$data);
    }
    public function setDomainVariable(){
    	$data['min']=$this->input->post("min_prioritas");
    	$data['max']=$this->input->post("max_prioritas");
    	$this->model_variable->update($data,1);
    	$data['min']=$this->input->post("min_indikator");
    	$data['max']=$this->input->post("max_indikator");
    	$this->model_variable->update($data,2);
    	$data['min']=$this->input->post("min_resiko_bencana");
    	$data['max']=$this->input->post("max_resiko_bencana");
    	$this->model_variable->update($data,3);
    	redirect('Pakar');




    }

    public function TambahVariable(){
                $data = array(

            'nama'       => $this->input->post("nama"),
            'himpunan1'         => $this->input->post("himpunan1"),
            'himpunan2'    => $this->input->post("himpunan2"),
            'min'    => $this->input->post("min"),
            'max'    => $this->input->post("max")
            
            );
                $this->model_variable->simpan($data);
                redirect('Pakar');

    }
    public function TambahAturan(){
                        $data = array(
            'variable1'         => $this->input->post("variable1"),
            'variable2'    => $this->input->post("variable2"),
            'logika'    => $this->input->post("logika"),
            'kesimpulan'    => $this->input->post("kesimpulan")
            
            );
            $this->model_aturan->simpan($data);
            redirect('Pakar');

    }

    public function HapusAturan(){

        $data['id']=$this->uri->segment('3');
        $this->model_aturan->hapus($data);
        redirect('Pakar');
    }
}