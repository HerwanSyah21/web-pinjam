<?php

class Bus extends CI_Controller
{
	
	function __construct(){
	
		parent::__construct();	
		$this->load->library('template');
		$this->load->model('model');
	}

	public function index()
	
	{
		
		$data = $this->model->get('tbl_kendaraan')->result();
		$this->template->view('backend/bus', ['kendaraan' => $data] );
	}
	public function tambah()
	{
		$this->template->view('backend/tambah_bus');
	}
	public function simpan()
	{
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE;
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto_kendaraan')){

			$this->template->view('backend/tambah_bus');			
		}else{
			$file = $this->upload->data()['file_name'];
			$data = [
				'merek' => $this->input->post('merek'),
				'no_pol' => $this->input->post('no_pol'),
				'warna' => $this->input->post('warna'),
				'kapasitas' => $this->input->post('kapasitas'),
				'thn_kendaraan' => $this->input->post('thn_kendaraan'),
				'foto' => $file
			];
			$this->model->insert('tbl_kendaraan', $data);
			redirect(base_url('bus/index'));
		}

		
	}
	public function edit($id)
	{
		$data = $this->model->get_where('tbl_kendaraan', ['id' => $id])->row();
		$this->template->view('backend/edit_bus', ['data' => $data]);
	}
	public function update()
	{
		$data = [
			'merek' => $this->input->post('merek'),
			'no_pol' => $this->input->post('no_pol'),
			'warna' => $this->input->post('warna'),
			'kapasitas' => $this->input->post('kapasitas'),
			'thn_kendaraan' => $this->input->post('thn_kendaraan'),
		];

		$this->model->update('tbl_kendaraan', $data, ['id' => $this->input->post('kode')]);
		redirect(base_url('bus/index'));
	}
	public function hapus($id)
	{
		$this->model->delete('tbl_kendaraan',['id' => $id]);
		redirect(base_url('bus/index'));
		
	}
}
?>


