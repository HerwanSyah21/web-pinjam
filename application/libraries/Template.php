<?php

class Template {

	protected $_ci;


	function __construct(){
		$this->_ci= &get_instance();

	}

	function view($content, $data = NULL) {
		$data['content'] = $this->_ci->load->view($content, $data, TRUE);
		$this->_ci->load->view('backend/main', $data);
	}
	public function front($content, $data = NULL)
	{
		$data['content'] = $this->_ci->load->view($content, $data, TRUE);
		$this->_ci->load->view('frontend/main', $data);
	}
}