<?php /**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('model');


	}
	
	function daftar()
	{
		$data = $this->model->get('tbl_admin')->result();
		$this->template->view('backend/daftar', ['kendaraan' => $data] );	
	}
	public function tambah()
	{
		$this->template->view('backend/tambah');
	}

	public function simpan()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('username')),
		];
		$this->model->insert('tbl_admin', $data);
		redirect(base_url('admin/daftar'));
	}

	public function edit($id)
	{
		$data = $this->model->get_where('tbl_admin', ['id' => $id])->row();
		$this->template->view('backend/edit', ['data' => $data]);
	}
	public function update()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('username')),
		];

		$this->model->update('tbl_admin', $data, ['id' => $this->input->post('kode')]);
		redirect(base_url('admin/daftar'));
	}

	public function hapus($id)
	{
		$this->model->delete('tbl_admin',['id' => $id]);
		redirect(base_url('admin/daftar'));
		
	}


} ?>