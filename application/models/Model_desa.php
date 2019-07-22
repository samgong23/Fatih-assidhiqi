<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_desa extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*",'kecamatan.nama_kecamatan')
                 ->from('desa',10)
                 ->order_by('id_desa', 'ASCD')
                 ->join('kecamatan','kecamatan.id_Kecamatan=desa.id_kecamatan')
                 ->get();
        return $query->result();
    }

    public function get_kecamatan($ID_KECAMATAN){
        $query=$this->db->select("*",'kecamatan.nama_kecamatan')
                    ->from('desa')
                    ->order_by('id_desa','DESC')
                    ->where('kecamatan.id_kecamatan',$ID_KECAMATAN)
                    ->join('kecamatan','kecamatan.id_kecamatan=desa.id_kecamatan') 
                    ->get();
        return $query->result();
    }

    public function get_bencana($id)
    {
        $query = $this->db->select('*')
                 ->from('desa')
                 ->where('id_desa',$id)
                 ->get();
        return $query->row()->bencana;
    }
    public function get_nama($id)
    {
        $query = $this->db->select('*')
                 ->from('desa')
                 ->where('id_desa',$id)
                 ->get();
        return $query->row()->nama;
    }

    public function desa($kecId){

        $desa="<option value='0'>--pilih--</pilih>";

        $this->db->order_by('nama_desa','ASC');
        $desa= $this->db->get_where('id_kecamatan',array('id_kecamatan'=>$kecId));

        return $desa;

}

    public function simpan($data)
    {

        $query = $this->db->insert("desa", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($ID)
    {

        $query = $this->db->where("id_desa", $ID)
                ->get("desa");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('id_desa',$ID)->update("desa", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
	public function get_Daerah($nama_daerah){
		$query=$this->db->select('*')
					->from('desa')
					->where('id_kecamatan',$nama_daerah)
					->get();
		return $query->result();
		
	}
	

    public function hapus($ID)
    {

        $query = $this->db->delete("desa", $ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }
        public function jumlah_data(){

        return $this->db->get('desa')->num_rows();

    }

       public function data($number,$offset){
        
                $query = $this->db->select("*",'kecamatan.nama_kecamatan')
                 ->from('desa')
                 ->order_by('id_desa', 'ASCD')
                 ->join('kecamatan','kecamatan.id_Kecamatan=desa.id_kecamatan')
                 ->get();
        return $query->result();       
    }

    public function GetJumlahKategori(){

        $query=$this->db->query('SELECT kategori,COUNT(nama) as jumlah from desa GROUP BY kategori');
        return $query;
    }
    public function GetJumlahKategoriKecamatan(){
        $query=$this->db->query("SELECT kecamatan.nama_kecamatan,COUNT(CASE when desa.kategori='Utama' then 1 else null end) as jumlah_utama,COUNT(CASE when  desa.kategori='Madya' then 1 else null end) as jumlah_madya,COUNT(CASE when  desa.kategori='Pratama' then 1 else null end) as jumlah_pratama,COUNT(CASE when  desa.kategori='belum' then 1 else null end) as jumlah_belum from  desa JOIN  kecamatan ON kecamatan.id_kecamatan=desa.id_kecamatan GROUP BY  kecamatan.nama_kecamatan");
        return $query;

    }

}