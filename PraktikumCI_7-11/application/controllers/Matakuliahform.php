<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliahform extends CI_Controller {
	public function index()
	{
		$this->load->model('matakuliah_model','jadwal1');
        $this->jadwal1->semester='Ganjil';
        $this->jadwal1->nama= 'Muhammad Bagas';
        $this->jadwal1->matakuliah='Bahasa Inggris';
        $this->jadwal1->hari='Selasa';
        $this->jadwal1->ruangan='B3';

        $this->load->model('matakuliah_model','jadwal2');
        $this->jadwal2->semester='Ganjil';
        $this->jadwal2->nama='Namiyah Silfi';
        $this->jadwal2->matakuliah='Bimbingan Konseling';
        $this->jadwal2->hari='Jumat';
        $this->jadwal2->ruangan='B1';

        $list_jadwal = [$this->jadwal1, $this->jadwal2];
        $data['list_jadwal'] = $list_jadwal;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum7/matakuliahform', $data);
        $this->load->view('layout/footer');
	}
}