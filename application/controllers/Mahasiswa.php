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
	public function hapus($nim)
	{
		$this->M_data->delete($nim);
		redirect('mahasiswa');
	}

	public function fetch()
    {
		$output = '';
		$query = '';
		$this->load->model('M_data');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->M_data->fetch_data($query);
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $data)
			{
				$output .= '
					<tr class="row100 body" style="width: 100%">
						<td class="cell100 column2"><span class="ml-4">'.$data->nim. '</span></td>
						<td class="cell100 column2">'.$data->nama.'</td>
						<td class="cell100 column2">'.$data->jenis_kelamin.'</td>
						<td class="cell100 column2">'.$data->telp.'</td>
						<td class="cell100 column2">'.$data->alamat.'</td>
						<td class="cell100 column2">
							<a href='.base_url("mahasiswa/ubah/$data->nim").'>
								<button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
							</a> &nbsp; &nbsp;
							<a href='.base_url("mahasiswa/hapus/$data->nim").'>
								<button class="btn btn-danger" onClick=\'return confirm("Apakah Anda yakin ingin menghapus data?");\'><span class="glyphicon glyphicon-trash"></span></button>
							</a>
						</td>
					</tr>
				';
			}
		}
		else{
			$output .= '<tr class="row100 body"><td align="center" colspan="6" class="cell100 column2">Data Tidak Ada</td></tr>' ;
		}
		echo $output;
	}
}

?>
