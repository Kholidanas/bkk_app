<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perusahaan_model');
    }

    public function index()
    {
        echo "Index";
    }
    public function list_perusahaan()
    {
        $data_perusahaan = $this->Perusahaan_model->get_perusahaan();

        $konten = '<tr>
            <th>No.</th>
            <th>Nama Perusahaan</th>
            <th>Informasi Perusahaan</th>
            <th>Profil Perusahaan</th>
            <th>Aksi</th>
        </tr>';

        foreach ($data_perusahaan->result() as $key => $value) {
            $konten .= '<tr>
                            <td>' . $value->id_perusahaan . '</td>
                            <td>' . $value->nama_perusahaan . '</td>
                            <td>' . $value->informasi_perusahaan . '</td>
                            <td>' . $value->profil_perusahaan . '</td>
                            <td>  <a href="#' . $value->id_perusahaan . '" class="linkEditPerusahaan" class="btn btn-primary">Edit</a> | <a href="#' . $value->id_perusahaan . '" class="linkHapusPerusahaan" class="btn btn-danger">Hapus</a> </td>
                        </tr>';
        }

        $data_json = array(
            'konten' => $konten,
        );

        echo json_encode($data_json);
    }
}
