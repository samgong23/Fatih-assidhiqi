<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_variable extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('variable')
                 ->order_by('id', 'ASCD')
                 ->get();
        return $query->result();
    }
	
    public function get($id)
    {
        $query = $this->db->select("*")
                 ->from('variable')
                 ->where('id',$id)
                 ->get();
        return $query->result();
    }
    public function get_min($id)
    {
        $query = $this->db->select("min")
                 ->from('variable')
                 ->where('id',$id)
                 ->get();
        return $query->row()->min;
    }
    public function get_max($id)
    {
        $query = $this->db->select("max")
                 ->from('variable')
                 ->where('id',$id)
                 ->get();
        return $query->row()->max;
    }

    public function jumlah()
    {
        $query = $this->db->select('Count(*)')->from('variable')->get();
        return $query->result();
    }
    public function simpan($data)
    {

        $query = $this->db->insert("variable", $data);
		$id=$this->db->insert_id();
        
            return $id;

    }

    public function edit($ID)
    {

        $query = $this->db->where("id", $ID)
                ->get("variable");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('id',$ID)->update("variable", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete("id", $ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function jumlah_data(){

        return $this->db->get('variable')->num_rows();
    }

}