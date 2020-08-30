<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_user extends CI_Model {

    public function cek_user($data) {
        $query = $this->db->get_where('tb_user', $data);
        return $query;
    }

    public function register($data) {
        $this->db->insert('tb_user', $data);
    }

    public function getDataProfil($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('tb_user');
        return $query->result_array();
    }

    public function EditDataProfil($id, $data) {
        $this->db->where('id', $id)
                ->update('tb_user', $data);
    }

    public function getMember() {
        $this->db->select('*');
        $this->db->where('status', 'member');
        $hasil = $this->db->get('tb_user');
        return $hasil->result_array();
    }
    
    public function DeleteMember($id){
         $this->db->where('id', $id)
                ->delete('tb_user');
    }

}