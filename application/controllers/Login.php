<?php

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('m_login');
	}
	public function index()
	{
		$this->load->view('login/login');
	}
	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login("tbl_admin",$where) ->num_rows();
		if ($cek > 0) 
		{
			$data_session = array(
				'username' => $username,
				'status'   => "login" 
			);
			$this->session->set_userdata($data_session);

			redirect(base_url('backoffice'));
		}
		else 
		{
			//echo "Username dan password salah !";
			$this->session->set_flashdata('login','Masukkan username dan password yang benar');
			// $this->load->view('login/login');
			redirect(base_url('login'));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
		
	}
}



?>