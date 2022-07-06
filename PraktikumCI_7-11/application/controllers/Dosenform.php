<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosenform extends CI_Controller {
	public function index()
	{
		$this->load->model('dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='6546';
        $this->dsn1->dosen='Daffa Alhiduwan';
        $this->dsn1->pendidikan='S2';

        $this->load->model('dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='6785';
        $this->dsn2->dosen='Diva Rahmawati';
        $this->dsn2->pendidikan='S1';

        $list_dsn = [$this->dsn1, $this->dsn2];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum7/dosenform',$data);
        $this->load->view('layout/footer');
	}
}