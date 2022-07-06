<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekan10 extends CI_Controller {
	public function index()
	{
		$this->load->model('pekan10_model', 'prodi');
        $list_prodi = $this->prodi->getAll();

        $data['list_prodi'] = $list_prodi;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('folderpekan10/pekan10',$data);
        $this->load->view('layout/footer');
	}
}