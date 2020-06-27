<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan_model extends CI_Model
{

    public function get_perusahaan()
    {
        $this->db->select('*');
        $this->db->from('perusahaan');
        return $this->db->get();
    }
}
