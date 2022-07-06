<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswaform extends CI_Controller {
	public function index()
	{
		$this->load->model('mahasiswa_model','mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nim='0003';
        $this->mhs1->nama='Hanifah Nuraini';
        $this->mhs1->gender='P';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model','mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nim='0004';
        $this->mhs2->nama='Ridho Ari';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.2;

        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum7/mahasiswaform',$data);
        $this->load->view('layout/footer');
	}
}