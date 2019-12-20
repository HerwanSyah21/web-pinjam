<?php

class Transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('model');
	}
	public function index()
	{
		$data = $this->model->get('tbl_transaksi')->result();
		$this->template->view('backend/transaksi', ['transaksi' => $data] );
	}

	public function transaksi()
	{
		$data = $this->model->get('tbl_transaksi')->result();
		$this->template->front('frontend/transaksi', ['transaksi' => $data]);
	}

}



?>