<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BNPB extends CI_Controller {

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
		$this->load->model('Fuzzy');
		$this->load->library('pagination');
    }
	public function index()
	{
		$jumlah_laporan=$this->model_laporan->get_new()->jumlah;
		$jumlah_desa=$this->model_desa->jumlah_data();

		$data=array(
		'data_laporan' => $this->model_laporan->get_all(),
		'data_laporan2' => $this->model_laporan->get_waiting(),
		'data_indikator' => $this->model_laporan->get_indikator(),
		'data_fasilitator' => $this->model_fasilitator->get_all(),
		'data_desa' => $this->model_desa->get_all(),
		'data_bnpb' => $this ->model_bnpb->get_all(),
		'jumlah_laporan' => $jumlah_laporan,
		'data_statistik_laporan'=> $this->model_laporan->get_statistik_laporan(),
		'data_jumlah_kategori_per_kecamatan'=>$this->model_desa->GetJumlahKategoriKecamatan()
		);
		$data['data_statistik_desa']=$this->model_desa->GetJumlahKategori();
		

		$this->load->view('BNPB/index',$data);
		 
	}
	public function verif(){
		$id_desa = $this->uri->segment(5);
		$ID_bnpb = $this->uri->segment(4);
		$ID_laporan=$this->uri->segment(3);
		$jumlah_indikator=$this->uri->segment(6);
		$bencana = $this->model_desa->get_bencana($id_desa);
		$data=array(
		'data_laporan' =>$this->model_laporan->edit($ID_laporan), 
		'ID_bnpb' => $ID_bnpb,
		'bencana' => $this->model_desa->get_bencana($id_desa),
		'id_desa' => $id_desa,
		'nama_desa' => $this->model_desa->get_nama($id_desa),
		'rekomendasi' => $this->Fuzzy->fuzzy($jumlah_indikator,$bencana),
		'data_indikator' => $this->model_laporan->get_indikator(),
		);
		
		
		
		$this->load->view('BNPB/verif',$data);
		
	}
	
	    public function simpan()
    {
        $data = array(

            'Nama_bnpb'       => $this->input->post("Nama_bnpb"),
            'Tanggal_Lahir'         => $this->input->post("Tanggal_Lahir"),
            'Pendidikan'         => $this->input->post("Pendidikan"),
			'No_Hp' => $this->input->post("No_Hp"),
			);
		$id_bnpb=$this->model_bnpb->simpan($data);
		$data2=array(
		'username' => $data['Nama_bnpb']."@"."bnpb",
		'password' => md5("bnpb"),
		'job' => "bnpb",
		'ID_bnpb'=>$id_bnpb,
		);

        
		$this->model_login->simpan($data2);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }
	 public function edit($ID_bnpb){
        $ID_bnpb = $this->uri->segment(3);

        $data_edit = array(

            'title'     => 'Edit Data Pegawai',
            'data_bnpb' => $this->model_bnpb->edit($ID_bnpb),

        );

        $this->load->view('Admin/edit_bnpb.php', $data_edit);
    }
	
	    public function update()
    {
		$id = $this->input->post("id_bnpb");
		
        $data = array(

            'Nama_bnpb'       => $this->input->post("Nama_bnpb"),
            'Tanggal_Lahir'         => $this->input->post("Tanggal_Lahir"),
            'Pendidikan'         => $this->input->post("Pendidikan"),
			'No_Hp' => $this->input->post("No_Hp"),);

     $save=$this->model_bnpb->update($data, $id);

			

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }

    public function hapus($id_bnpb)
    {
        $id['id_bnpb'] = $this->uri->segment(3);
		$ID_BNPB=$this->uri->segment(3);

        $this->model_bnpb->hapus($id);
		$this->model_login->hapus_bnpb($ID_BNPB);

        //redirect
        redirect('Admin/');

    }
    public function laranganLaporan(){

    	$this->load->view('BNPB/warning');
    }
}
