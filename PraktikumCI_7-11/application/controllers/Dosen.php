<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function index()
	{
		$this->load->model('dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='3652';
        $this->dsn1->dosen='Cahyani Indah';
        $this->dsn1->pendidikan='S2';

        $this->load->model('dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='6473';
        $this->dsn2->dosen='Rizki Fadhilah';
        $this->dsn2->pendidikan='S2';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->nidn=$this->input->post('nidn');
        $this->dsn3->dosen=$this->input->post('namadosen');
        $this->dsn3->pendidikan=$this->input->post('pendidikan');


        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosenpekan06/index',$data);
        $this->load->view('layout/footer');
	}
}