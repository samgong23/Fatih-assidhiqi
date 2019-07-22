<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_aturan extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('aturan')
                 ->order_by('id', 'ASCD')
                 ->get();
        return $query->result();
    }

    public function variable1($id)
    {
        $query = $this->db->select("variable1")
                 ->from('aturan')
                 ->where('id', $id)
                 ->get();
        return $query->row()->variable1;
    }
    public function variable2($id)
    {
        $query = $this->db->select("variable2")
                 ->from('aturan')
                 ->where('id', $id)
                 ->get();
        return $query->row()->variable2;
    }
    public function logika($id)
    {
        $query = $this->db->select("logika")
                 ->from('aturan')
                 ->where('id', $id)
                 ->get();
        return $query->row()->logika;
    }
    public function kesimpulan($id)
    {
        $query = $this->db->select("kesimpulan")
                 ->from('aturan')
                 ->where('id', $id)
                 ->get();
        return $query->row()->kesimpulan;
    }

	

    public function simpan($data)
    {

        $query = $this->db->insert("aturan", $data);
		$id=$this->db->insert_id();
        
            return $id;

    }

    public function edit($ID)
    {

        $query = $this->db->where("id", $ID)
                ->get("aturan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('id',$ID)->update("aturan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete('aturan',$ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function jumlah_data(){

        return $this->db->get('aturan')->num_rows();
    }

}