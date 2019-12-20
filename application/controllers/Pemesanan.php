<?php 

class Pemesanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('model');
	}
	public function index()
	{
		$model = $this->model->get('tbl_transaksi')->result();
		$this->template->front('frontend/pesan', ['model' => $model]);
	}
}

?>