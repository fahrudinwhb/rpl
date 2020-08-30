<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class kelola_member extends CI_Controller {

    public function index() {
        $this->load->model('tb_user');
        $data = $this->tb_user->getMember();
        $this->load->view('admin_member', array('datamember' => $data));
    }

    public function hapusMember($id) {
        $this->load->model('tb_user');
        $this->tb_user->DeleteMember($id);
        redirect('kelola_member');
    }

}

