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

	}
}

?>
