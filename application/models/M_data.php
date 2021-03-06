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
                        $this->form_validation->set_rules('input_nim', 'NIM', 'required|numeric|max_length[11]');
                        
                $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
                $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
                $this->form_validation->set_rules('input_telp', 'Telepon', 'required|numeric|max_length[15]');
                $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
                
                if($this->form_validation->run())
                        return TRUE;
                else
                        return FALSE;
        }

        public function save()
        {
                $data = array(
                        "nim" => $this->input->post('input_nim'),
                        "nama" => $this->input->post('input_nama'),
                        "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
                        "telp" => $this->input->post('input_telp'),
                        "alamat" => $this->input->post('input_alamat')
                );
                
                $this->db->insert('mahasiswa', $data);
        }

        public function edit($nim)
        {
                $data = array(
                        "nama" => $this->input->post('input_nama'),
                        "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
                        "telp" => $this->input->post('input_telp'),
                        "alamat" => $this->input->post('input_alamat')
                );
                
                $this->db->where('nim', $nim);
                $this->db->update('mahasiswa', $data);
        }

         public function delete($nim)
        {
                $this->db->where('nim', $nim);
                $this->db->delete('mahasiswa');
        }

         public function fetch_data($keyword)
        {
                $this->db->select('*');
                $this->db->from('mahasiswa');
                        $this->db->like('nama', $keyword);
                        $this->db->or_like('nim', $keyword);
                        $this->db->or_like('alamat', $keyword);
                        $this->db->or_like('jenis_kelamin', $keyword);
                        $this->db->or_like('telp', $keyword);         
                return $this->db->get();
        }
}

?>