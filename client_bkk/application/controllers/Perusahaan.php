<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{

    public function index()
    {
        $konten = $this->load->view('perusahaan/list_perusahaan', null, true);

        $data_json = array(
            'konten' => $konten,
            'titel' => 'Perusahaan',
        );

        echo json_encode($data_json);
    }
}
