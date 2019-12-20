<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('template');
			$this->load->model('model');
		}
		function daftar()
		{
			$data = $this->model->get('tbl_user')->result();
			$this->template->view('backend/daftar_user', ['kendaraan' => $data] );	
		}
		function status(){
			$id = $this->input->post('id');
			$data = array(
				'status' => '0'
			);
			$where = array(
				'id' => $id
			);
			$this->model->update('tbl_user',$data, $where);
			redirect('User/daftar');
		}
		function status2(){
			$id = $this->input->post('id');
			$data = array(
				'status' => '1'
			);
			$where = array(
				'id' => $id
			);
			$this->model->update('tbl_user',$data, $where);
			redirect('User/daftar');
		}
	}

?>