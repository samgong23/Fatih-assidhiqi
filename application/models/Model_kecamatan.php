<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_kecamatan extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('kecamatan')
                 ->order_by('id_Kecamatan', 'ASCD') 
                 ->get();
        return $query->result();
    }
    public function kecamatan(){


		$this->db->order_by('nama_kecamatan','ASC');
		$kecamatan= $this->db->get('kecamatan');

		return $kecamatan->result_array();
	}
}