<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_penjualan extends CI_Model {

    public function InsertDataPenjualan($data){
        $this->db->insert('tb_penjualan',$data);
    }
    public function getDataPenjualan(){
        $this->db->select('*');
        $query = $this->db->get('tb_penjualan');
        return $query->result_array();
    }
    public function IkanPopuler(){
        $this->db->select('tb_dataikan.nama_ikan,tb_penjualan.id_ikan,count(tb_penjualan.berat) as berat, tb_dataikan.fotoikan,tb_dataikan.deskripsi');
        $this->db->from('tb_penjualan');
        $this->db->join('tb_dataikan', 'tb_penjualan.id_ikan = tb_dataikan.id_ikan');
        $this->db->group_by('tb_penjualan.id_ikan');
        $this->db->order_by('berat', 'DESC');
        $this->db->limit(3);
        $data = $this->db->get();
        
        return $data->result_array();
    }
            
}