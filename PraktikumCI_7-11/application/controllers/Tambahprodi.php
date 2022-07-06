<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahprodi extends CI_Controller {
	public function index()
	{
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('folderdatabase/tambahprodi');
        $this->load->view('layout/footer');
	}

    public function save()
    {
        $this->load->model("pekan10_model", "prodi");

        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');
        $_prodiedit = $this->input->post('prodiedit');

        $data_prodi[] = $_kode;
        $data_prodi[] = $_nama;
        $data_prodi[] = $_kaprodi;

        if(isset($_prodiedit)){
            $data_prodi[] = $_prodiedit;
            $this->prodi->update($data_prodi);
        }else{
            $this->prodi->save($data_prodi);
        }


        redirect(base_url().'index.php/pekan10', 'refresh');
    }

    public function edit()
    {
        $_kode = $this->input->get('id');
        $this->load->model('pekan10_model', 'prodi');
        $prodiedit = $this->prodi->findByKode($_kode);

        $data['prodiedit'] = $prodiedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('folderpekan10/prodi_update', $data);
        $this->load->view('layout/footer');

    }

    public function delete()
    {
        $_kode = $this->input->get('id');
        $this->load->model('pekan10_model', 'prodi');
        $this->prodi->delete($_kode);

        redirect(base_url().'index.php/pekan10', 'refresh');
    }
}