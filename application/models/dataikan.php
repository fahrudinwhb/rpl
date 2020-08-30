<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dataikan extends CI_Model {

    public function insertDataIkan($data) {
        $this->db->insert('tb_dataikan', $data);
    }

    public function getDataikan() {
        $this->db->select('*');
        $query = $this->db->get('tb_dataikan');
        return $query->result_array();
    }

    public function ikan() {
        $this->db->select('*');
        $this->db->order_by('id_ikan', 'DESC');
        $this->db->limit(3);
        $data = $this->db->get('tb_dataikan');

        return $data->result_array();
    }

    public function select($id) {
        $this->db->select('*');
        $this->db->where('id_ikan', $id);
        $query = $this->db->get('tb_dataikan');
        return $query->result_array();
    }

    public function search($nama_ikan) {
        $query = $this->db->query("select * from tb_dataikan where nama_ikan like '$nama_ikan%'");
        return $query->result_array();
    }

    public function editDataika($id, $data) {
        $this->db->where('id_ikan', $id);
        $this->db->update('tb_dataikan', $data);
    }

    public function hapusDataIkan($id) {
        $this->db->where('id_ikan', $id)
                ->delete('tb_dataikan');
    }

    public function getIkanlaut($jenis) {
        $this->db->select('*');
        $this->db->where($jenis);
        $query = $this->db->get('tb_dataikan');
        return $query->result_array();
    }

}