<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_komentar extends CI_Model {
    
    public function insertKomentar($data){
        $this->db->insert('tb_komentar', $data);
    }
     public function getKomentar($id){
        $this->db->select('*');
        $this->db->where('id_ikan', $id);
        $query = $this->db->get('tb_komentar');
        return $query->result_array();
    }

}