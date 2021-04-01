<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model{
        public function view()
        {
                return $this->db->get('mahasiswa')->result();
        }  
}

?>