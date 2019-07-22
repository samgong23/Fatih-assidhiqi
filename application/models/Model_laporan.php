<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_laporan extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*",'bnpb.Nama_bnpb','fasilitator.Nama_fasilitator','desa.nama')
                 ->from('laporan')
                 ->order_by('ID', 'DESC')
				 ->join('bnpb','bnpb.ID_bnpb=laporan.ID_BNPB')
				 ->join('fasilitator','fasilitator.ID_fasilitator=laporan.ID_FASILITATOR')
				 ->join('desa','desa.id_desa=laporan.ID_DESA') 
                 ->get();
        return $query->result();
    }
	public function get_indikator(){
		$query=$this->db->select("*")
				->from('indikator')
				->get();
		return $query->result();
		
	}
	public function get_laporan($ID_fas){
		$query=$this->db->select("*",'bnpb.Nama_bnpb','fasilitator.Nama_fasilitator','desa.nama')
					->from('laporan')
					->order_by('ID','DESC')
					->where('laporan.ID_FASILITATOR',$ID_fas)
					->join('bnpb','bnpb.ID_bnpb=laporan.ID_BNPB')
                    ->join('fasilitator','fasilitator.ID_fasilitator=laporan.ID_FASILITATOR')
                    ->join('desa','desa.id_desa=laporan.ID_DESA')
					->get();
		return $query->result();
	}

    public function get_laporan2($ID_fas){
        $query=$this->db->select("*",'bnpb.Nama_bnpb','fasilitator.Nama_fasilitator','desa.nama')
                    ->from('laporan')
                    ->order_by('ID','DESC')
                    ->where('laporan.ID_FASILITATOR',$ID_fas)
                    ->where('Status','Proses Pelaporan')
                    ->join('bnpb','bnpb.ID_bnpb=laporan.ID_BNPB')
                    ->join('fasilitator','fasilitator.ID_fasilitator=laporan.ID_FASILITATOR')
                    ->join('desa','desa.id_desa=laporan.ID_DESA')
                    ->get();
        return $query->result();
    }
    public function simpan($data)
    {

        $query = $this->db->insert("laporan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
	public function get_new(){
		$query=$this->db->select('COUNT(Status) AS jumlah')
					->from('laporan')
					->where('Status','Waiting')
					->get();
		return $query->row();
		
	}
    public function get_waiting(){
        $query=$this->db->select('*','bnpb.Nama_bnpb','fasilitator.Nama_fasilitator','desa.nama')
                    ->from('laporan')
                    ->where('Status','Waiting')
                    ->join('bnpb','bnpb.ID_bnpb=laporan.ID_BNPB')
                    ->join('fasilitator','fasilitator.ID_fasilitator=laporan.ID_FASILITATOR')
                    ->join('desa','desa.id_desa=laporan.ID_DESA') 
                    ->get();
        return $query->result();
        
    }
    public function get_proses2(){
        $query=$this->db->select('*','bnpb.Nama_bnpb','fasilitator.Nama_fasilitator','desa.nama')
                    ->from('laporan')
                    ->where('Status','Proses Pelaporan')
                    ->join('bnpb','bnpb.ID_bnpb=laporan.ID_BNPB')
                    ->join('fasilitator','fasilitator.ID_fasilitator=laporan.ID_FASILITATOR')
                    ->join('desa','desa.id_desa=laporan.ID_DESA') 
                    ->get();
        return $query->result();
    }
	public function get_proses($ID_fasilitator){
		$array=array(
		'Status'=> "Proses Pelaporan",
		'ID_FASILITATOR'=>$ID_fasilitator,
		);
		
		$query=$this->db->select('COUNT(Status) AS jumlah')
					->from('laporan')
					->where($array)
					->get();
		return $query->row();
	
    }

    public function edit($ID)
    {

        $query = $this->db->where("ID", $ID)
                ->get("laporan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('ID',$ID)->update("laporan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete("laporan",$ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function jumlah_data(){

        return $this->db->get('laporan')->num_rows();
    }
    public function get_statistik_laporan(){

        $query=$this->db->query('SELECT Status,COUNT(ID_DESA) as jumlah from laporan GROUP BY Status');
        return $query;

    }
    public function BelumSetahun($ID){

        $query=$this->db->query('SELECT tanggal from laporan where ID_DESA='.$ID.' and tanggal > DATE_ADD(CURDATE(), INTERVAL -1 YEAR)');

      return $query->num_rows()>0;

    }

}