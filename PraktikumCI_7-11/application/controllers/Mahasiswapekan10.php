<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswapekan10 extends CI_Controller {
	public function index()
	{
		$this->load->model('mahasiswapekan10_model', 'mahasiswa');
        $list_mahasiswa = $this->mahasiswa->getAll();

        $data['list_mahasiswa'] = $list_mahasiswa;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('folderpekan10/mahasiswapekan10',$data);
        $this->load->view('layout/footer');
	}

    public function view(){
        $_nim = $this->input->get('id');
        $this->load->model('mahasiswapekan10_model', 'mahasiswa');
        $data['mhs'] = $this->mahasiswa->findById($_nim);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('folderpekan10/view',$data);
        $this->load->view('layout/footer');
    }
}