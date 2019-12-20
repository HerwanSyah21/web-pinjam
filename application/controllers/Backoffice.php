<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		if ($this->session->userdata('status') != 'login') {
			redirect ('login');
		}

	}

	public function index()
	{
		$this->template->view('backend/home');
		
	}

}
