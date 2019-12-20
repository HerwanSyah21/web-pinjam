<?php

class Syarat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('model');
	}
	public function index()
	{
		$data = $this->model->get('tbl_syarat')->result();
		$this->template->view('backend/syarat', ['syarat' => $data] );
	}
	public function tambah()
	{
		$this->template->view('backend/tambah_syarat');
	}
	public function simpan()
	{
		$data = [
			'id' => $this->input->post('id'),
			'jenis' => $this->input->post('jenis'),
			'syarat' => $this->input->post('syarat'),
		];
		$this->model->insert('tbl_syarat', $data);
		redirect(base_url('syarat/index'));
	}
	public function edit($id)
	{
		$data = $this->model->get_where('tbl_syarat', ['id' => $id])->row();
		$this->template->view('backend/edit_syarat', ['data' => $data]);
	}
	public function update()
	{
		$data = [
			'id' => $this->input->post('id'),
			'jenis' => $this->input->post('jenis'),
			'syarat' => $this->input->post('syarat'),
		];

		$this->model->update('tbl_syarat', $data, ['id' => $this->input->post('kode')]);
		redirect(base_url('syarat'));
	}
	public function hapus($id)
	{
		$this->model->delete('tbl_syarat',['id' => $id]);
		redirect(base_url('syarat'));
		
	}
	
}
?>