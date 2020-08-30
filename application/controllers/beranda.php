<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class beranda extends CI_Controller {

    public function index() {
        if ($this->session->userdata('status') == 'admin' || $this->session->userdata('status') == 'member') {
            $this->load->model('dataikan');
            $data = $this->dataikan->ikan();
            $this->load->model('tb_penjualan');
            $penjualan = $this->tb_penjualan->IkanPopuler();
            $this->load->view('beranda', array(
                'data' => $data,
                'penjualan' => $penjualan));
        } else {
            $this->load->model('dataikan');
            $data = $this->dataikan->ikan();
            $this->load->model('tb_penjualan');
            $penjualan = $this->tb_penjualan->IkanPopuler();
            $this->load->view('beranda', array(
                'data' => $data,
                'penjualan' => $penjualan));
        }
    }

    public function control_register() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $datas = $this->upload->data();
            $data = array(
                'status' => 'member',
                'id' => '',
                'nama' => $_POST['Nama'],
                'username' => $_POST['Username'],
                'email' => $_POST['Email'],
                'Password' => md5($_POST['Password']),
                'Tanggal' => $_POST['Tanggal'],
                'Hp' => $_POST['Hp'],
                'Sex' => $_POST['Sex'],
                'Foto' => 'avatar.png'
            );
// $this->tb_user->register($data);
// echo " <script>alert('Anda Berhasil Mendaftar');history.go(-1);</script>";
        } else {
            $datas = $this->upload->data();
            $data = array(
                'status' => 'member',
                'id' => '',
                'nama' => $_POST['Nama'],
                'username' => $_POST['Username'],
                'email' => $_POST['Email'],
                'Password' => md5($_POST['Password']),
                'Tanggal' => $_POST['Tanggal'],
                'Hp' => $_POST['Hp'],
                'Sex' => $_POST['Sex'],
                'Foto' => $datas['file_name']
            );
        }
        $hasil = $this->tb_user->cek_user(array('username' => $data['username']));
        if ($hasil->num_rows() == 1) {
            echo " <script>alert('Anda Gagal Mendaftar Username telah dipakai');history.go(-1);</script>";
        } else {
            $this->tb_user->register($data);
            echo " <script>alert('Anda Berhasil Mendaftar');history.go(-1);</script>";
        }
    }

    public function cek_login() {
// $this->load->library('form_validation');
        $pasword = md5($this->input->post('password'));
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $pasword
        );

        $hasil = $this->tb_user->cek_user($data);

        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['status'] = $sess->status;
                $sess_data['username'] = $sess->username;
                $sess_data['foto'] = $sess->foto;
                $sess_data['email'] = $sess->email;
                $sess_data['password'] = $sess->password;
                $sess_data['id'] = $sess->id;
                $sess_data['hp'] = $sess->hp;


                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('status') == 'admin') {
                redirect('control_admin');
            } elseif ($this->session->userdata('status') == 'member') {
                redirect('control_member');
            }
        } else {
            echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
        }
    }

    public function GetDetailIkan($id) {
        if ($this->session->userdata('status') == 'admin' || $this->session->userdata('status') == 'member') {
            $this->load->model('dataikan');
            $this->load->model('tb_komentar');
            $data_ikan = $this->dataikan->select($id);
            $komentar = $this->tb_komentar->getKomentar($id);
            $this->load->view('detail_ikan', array(
                'data' => $data_ikan,
                'komentar' => $komentar));
        } else {
            $this->load->model('dataikan');
            $data_ikan = $this->dataikan->select($id);
            $this->load->model('tb_komentar');
            $komentar = $this->tb_komentar->getKomentar($id);
            $this->load->view('detail_ikan', array(
                'data' => $data_ikan,
                'komentar' => $komentar));
        }
    }

    public function tentangkami() {
        $this->load->view('tentangkami');
    }

    public function fasilitas() {
        $this->load->view('fasilitas');
    }

    public function ikanlaut() {

        $this->load->model('dataikan');
        $jenis = array(
            'jenis_ikan' => 'Ikan Laut'
        );
        $data = $this->dataikan->getIkanlaut($jenis);
        $this->load->view('galeri_ikanlaut', array('data' => $data));
    }

    public function lobster() {

        $this->load->model('dataikan');
        $jenis = array(
            'jenis_ikan' => 'Lobster'
        );
        $data = $this->dataikan->getIkanlaut($jenis);
        $this->load->view('galeri_lobster', array('data' => $data));
    }

    public function cumi() {
        $this->load->model('dataikan');
        $jenis = array(
            'jenis_ikan' => 'Cumi'
        );
        $data = $this->dataikan->getIkanlaut($jenis);
        $this->load->view('galeri_cumi', array('data' => $data));
    }

    public function hubungikami() {
        $this->load->view('hubungi');
    }
    public function galeri(){
        $this->load->view('galeri');
    }

}