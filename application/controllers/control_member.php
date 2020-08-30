<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class control_member extends CI_Controller {

    public function index() {
        $this->load->model('dataikan');
        $data = $this->dataikan->ikan();
        $this->load->model('tb_penjualan');
        $penjualan = $this->tb_penjualan->IkanPopuler();
        $this->load->view('beranda', array(
            'data' => $data,
            'penjualan' => $penjualan));
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('beranda');
    }

    public function Komentar($id_ikan) {

        $id = $this->session->userdata('id');
        $username = $this->session->userdata('username');
        $tanggal = date("Y-m-d");

        if ($this->session->userdata('status') == 'member' || $this->session->userdata('status') == 'admin') {

            $komentar = array(
                'id_ikan' => $id_ikan,
                'id_akun' => $id,
                'username' => $username,
                'isi_komentar' => $_POST['komentar'],
                'tanggal_komentar' => $tanggal
            );
            $this->load->model('tb_komentar');
            $this->tb_komentar->insertKomentar($komentar);
            redirect('beranda/GetDetailIkan/' . $id_ikan);
        } else {
            echo " <script>alert('Maaf Anda Harus login Terlebih Dahulu');history.go(-1);</script>";
        }
    }

    public function SearchData() {
        $this->load->model('dataikan');
        $cari = $_GET['search'];
        $data_ikan = $this->dataikan->search($cari);

        if (!empty($data_ikan)) {
            $this->load->view('search', array('data' => $data_ikan));
        } else {
            echo " <script>alert('Maaf Anda Cari tidak tersedia');history.go(-1);</script>";
        }
    }

    
}