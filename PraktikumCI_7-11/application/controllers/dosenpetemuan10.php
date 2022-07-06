<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosenpertemuan10 extends CI_Controller {
	public function index()
	{
		$this->load->model('dosenpertemuan10_model', 'dosen');
        $list_dosen = $this->dosen->getAll();

        $data['list_dosen'] = $list_dosen;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('folderpekan10/pekan10',$data);
        $this->load->view('layout/footer');
	}

    public function view(){
        $_nidn = $this->input->get('id');
        $this->load->model('dosenpertemuan10_model', 'dosen');
        $data['dsn'] = $this->dosen->findById($_nidn);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('folderpekan10/view_dosen',$data);
        $this->load->view('layout/footer');
    }
}