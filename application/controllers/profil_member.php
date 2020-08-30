<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profil_member extends CI_Controller {

    public function index() {
        $id = $this->session->userdata('id');
        $this->load->model('tb_user');
        $data = $this->tb_user->getDataProfil($id);
        $this->load->view('profil', array('data' => $data));
    }



    public function EditProfil($id) {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $data = array(
                'nama' => $_POST['Nama'],
                'username' => $_POST['Username'],
                'email' => $_POST['Email'],
                'Hp' => $_POST['Hp']
            );
            $this->tb_user->EditDataProfil($id, $data);
            redirect('Getprofil');
        } else {
            $datas = $this->upload->data();
            $data = array(
                'nama' => $_POST['Nama'],
                'username' => $_POST['Username'],
                'email' => $_POST['Email'],
                'Hp' => $_POST['Hp'],
                'Foto' => $datas['file_name']
            );
            $this->tb_user->EditDataProfil($id, $data);
            redirect('Getprofil');


// echo " <script>alert('Anda Berhasil Update Profil');history.go(-1);</script>";
        }
    }

}

