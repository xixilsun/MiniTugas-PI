<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function index()
	{
		$data['mahasiswa'] = $this->M_data->view()
		$this->load->view('index',$data);
	}
	public function 
}

?>
