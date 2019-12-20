<?php

class Kendaraan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('model');
		
	}

	public function index()
	{
		$model = $this->model->get('tbl_kendaraan')->result();
		$this->template->front('frontend/kendaraan', ['model' => $model]);
	}
	public function detail($id = '')
	{
		$model = $this->model->get('tbl_kendaraan');
		 $this->template->front('frontend/detail', ['model' => $model]);
	}

}




 ?>