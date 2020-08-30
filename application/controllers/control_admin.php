<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class control_admin extends CI_Controller {

    public function index() {
        $this->load->model('dataikan');
        $hasil = $this->dataikan->getDataikan();
        $this->load->view('admin_home', array('data' => $hasil));
        foreach ($hasil as $data) {
            $id_ikan = $data['id_ikan'];
            $berat_ikan = $data['berat'];
            if ($berat_ikan == 0) {
                $status = array(
                    'status' => 'Habis'
                );
                $this->dataikan->editDataika($id_ikan, $status);
            } else {
                $status = array(
                    'status' => 'Tersedia'
                );
                $this->dataikan->editDataika($id_ikan, $status);
            }
        }
    }

    public function inputDataIkan() {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->load->model('dataikan');

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $datas = $this->upload->data();
            $data = array(
                'id_ikan' => '',
                'tanggal_masuk' => $_POST['Tanggal'],
                'nama_ikan' => $_POST['NamaIkan'],
                'jenis_ikan' => $_POST['jenis_ikan'],
                'berat' => $_POST['Berat'],
                'harga_jual' => $_POST['Harga'],
                'deskripsi' => $_POST['deskripsi'],
                'fotoikan' => 'logo.jpg'
            );
            $this->dataikan->insertDataIkan($data);
            echo " <script>alert('Anda Berhasil Memasukan Data');</script>";
            redirect('control_admin');
        } else {
            $datas = $this->upload->data();
            $data = array(
                'id_ikan' => '',
                'tanggal_masuk' => $_POST['Tanggal'],
                'nama_ikan' => $_POST['NamaIkan'],
                'jenis_ikan' => $_POST['jenis_ikan'],
                'berat' => $_POST['Berat'],
                'harga_jual' => $_POST['Harga'],
                'deskripsi' => $_POST['deskripsi'],
                'fotoikan' => $datas['file_name']
            );
            $this->dataikan->insertDataIkan($data);
            echo " <script>alert('Anda Berhasil Memasukan Data');</script>";
            redirect('control_admin');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('beranda');
    }

    public function updateDataIkan($id) {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->load->model('dataikan');

        //$this->load->view('editdataikan_admin');
        if ($this->input->post('submit')) {
            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $datas = $this->upload->data();
                $data = array(
                    'nama_ikan' => $_POST['NamaIkan'],
                    'berat' => $_POST['Berat'],
                    'harga_jual' => $_POST['Harga'],
                    'deskripsi' => $_POST['Deskripsi'],
                );
                $this->dataikan->editDataika($id, $data);
            } else {
                $datas = $this->upload->data();
                $data = array(
                    'nama_ikan' => $_POST['NamaIkan'],
                    'berat' => $_POST['Berat'],
                    'harga_jual' => $_POST['Harga'],
                    'deskripsi' => $_POST['Deskripsi'],
                    'fotoikan' => $datas['file_name']
                );
            }

            $this->dataikan->editDataika($id, $data);
            redirect('control_admin');
        } else {
            $this->load->model('dataikan');
            $data = $this->dataikan->select($id);
            $this->load->view('editdataikan_admin', array('data' => $data));
        }
    }

    public function hapusIkan($id) {
        $this->load->model('dataikan');
        $this->dataikan->hapusDataIkan($id);
        redirect('control_admin');
    }

    public function getDataikan() {
        
    }

    
   

    public function penjualan($id) {
        $this->load->model('dataikan');
        $data = $this->dataikan->select($id);

        foreach ($data as $ikan) {
            $status = $ikan['status'];
            $berat = $ikan['berat'];
            $status_ikan = $ikan['status'];
            $fotoikan = $ikan['fotoikan'];
        }


        if ($this->input->post('submit')) {
            $tanggal_penjualan = $_POST['tanggal'];
            $id_ikan = $_POST['id'];
            $nama = $_POST['namaikan'];
            $harga = $_POST['harga'];
            $beratikan = $_POST['berat'];
            $total = $_POST['total'];
            $data_penjualan = array(
                'id_penjualan' => '',
                'id_ikan' => $id_ikan,
                'nama_ikan' => $nama,
                'berat' => $beratikan,
                'harga' => $harga,
                'total' => $total,
                'tanggal_penjualan' => $tanggal_penjualan,
                'fotoikan' => $fotoikan
            );
            $this->load->model('tb_penjualan');
            $this->tb_penjualan->InsertDataPenjualan($data_penjualan);
            $sisaikan = $berat - $beratikan;
            $data_update = array(
                'berat' => $sisaikan
            );
            $this->dataikan->editDataika($id, $data_update);
            redirect('control_admin');
        } else if ($berat == 0) {
            echo " <script>alert('Anda Ikan Sudah Habis');history.go(-1);</script>";
            //redirect('control_admin');
        } else {
            $this->load->view('admin_penjualan', array('data' => $data));
        }
    }

    public function datapenjualan() {
        $this->load->model('tb_penjualan');
        $data = $this->tb_penjualan->getDataPenjualan();
        $this->load->view('data_penjualan', array('data' => $data));
    }

}

