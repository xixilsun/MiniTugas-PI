<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model{
        public function view()
        {
                return $this->db->get('mahasiswa')->result();
        }  

        public function view_by($nim)
        {
                $this->db->where('nim', $nim);
                return $this->db->get('mahasiswa')->row();
        }

        public function validation($mode)
        {
                $this->load->library('form_validation');
                if($mode == "save")
                        $this->form_validation->set_rules('input_nis', 'NIS', 'required|numeric|max_length[11]');
                        
                $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
                $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
                $this->form_validation->set_rules('input_telp', 'Telepon', 'required|numeric|max_length[15]');
                $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
                
                if($this->form_validation->run())
                        return TRUE;
                else
                        return FALSE;
        }
}

?>