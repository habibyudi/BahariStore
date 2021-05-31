<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('modelku');
        
        if($this->session->userdata('status')!="login")
        {
            redirect(base_url());
        }
	}

	public function index()
	{
		$deta = $this->modelku->getData('pelanggan');
		$deta1 = array(
				"datanya" => $deta
		);
		$this->load->view('home', $deta1);
		
	}

	public function buka_form()
	{
		$this->load->view('form_tambah');
	}

	public function tambah_data()
	{
		$dataMasuk = array(
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat')
		);

		$this->modelku->masukan('pelanggan',$dataMasuk);
		redirect(base_url()."index.php/hal_admin/");
	}

	public function hapus($pointer)
	{
		$pointerdataHapus = array(
			'no' => $pointer
		);
		$this->modelku->hapus('pelanggan', $pointerdataHapus);
		redirect(base_url()."index.php/hal_admin/");
	}
}
?>