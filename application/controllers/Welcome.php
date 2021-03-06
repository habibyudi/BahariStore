<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelku');
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

	public function buka_login()
	{
		$this->load->view('form_login');
	}

	public function aksi_login()
	{
		$user = $this->input->post('user');
		$pass = md5($this->input->post('pass'));

		$pointerdata = array(
			'user' => $user,
			'pass' => $pass,
		);

		$cekdeta = count($this->modelku->getData_khusus('db_pelanggan', $pointerdata));
		if($cekdeta > 0)
		{
			$data_session = array(
				'nama' => $user,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url()."index.php/hal_admin/");
		}
		else
		{
			redirect(base_url());
		}
		
	}

	public function daftar()
	{
		$this->load->view('form_daftar');
	}

	public function aksi_daftar()
	{
		$dataMasuk = array(
			'user' => $this->input->post('user'),
			'pass' => md5($this->input->post('pass'))
		);

		$this->modelku->masukan('db_pelanggan',$dataMasuk);
		redirect(base_url(), 'refresh');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>