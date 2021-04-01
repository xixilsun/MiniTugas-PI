<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	public function index()
	{
		 $data['mahasiswa'] = $this->M_data->view();
		$this->load->view('index',$data);
	}
	public function tambah()
	{
		$this->load->view('form_tambah');
	}
	public function ubah($nim)
	{
		if($this->input->post('submit'))
		{
			if($this->M_data->validation("update"))
			{
				$this->M_data->edit($nim);
				redirect('mahasiswa');
			}
		}
		$data['mahasiswa'] = $this->M_data->view_by($nim);
		$this->load->view('form_ubah', $data);
	}
}

?>
