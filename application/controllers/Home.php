<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('model');
		$this->load->model('m_login');
	}
	public function index()
	{
		$model = $this->model->get('tbl_kendaraan')->result();
		$this->template->front('frontend/home', ['model' => $model]);
	}
	public function menu_daftar()
	{
		$this->template->front('frontend/daftar');
	}
	public function menu_masuk()
	{
		$this->template->front('frontend/masuk');
	}
	public function tambah_user()
	{
		$email 			= $this->input->post('email');
		$nama 			= $this->input->post('nama');
		$alamat 		= $this->input->post('alamat');
		$instansi 		= $this->input->post('instansi');
		$no_hp 			= $this->input->post('no_hp');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');

		$data = array(
			'email' 			=> $email,
			'nama' 				=> $nama,
			'alamat' 			=> $alamat,
			'instansi' 			=> $instansi,
			'no_hp'				=> $no_hp,
			'username'			=> $username,
			'password'			=> $password,
			'status'			=> '0'
			);

		$this->model->insert('tbl_user',$data);

			redirect('Home/menu_masuk');
	}
	public function login_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->m_login->cek_login("tbl_user",$where) ->num_rows();
		if ($cek > 0) 
		{
			$data_session = array(
				'username' => $username,
				'status'   => "login" 
			);
			$this->session->set_userdata($data_session);

			redirect(base_url('home'));
		}
		else 
		{
			$this->session->set_flashdata('login','Masukkan username dan password yang benar');
			// $this->load->view('login/login');
			redirect(base_url('login'));
		}
	}
	
}
