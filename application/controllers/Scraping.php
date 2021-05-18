<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scraping extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_scrap', 'data');
    }

    function ambilJadwal()
    {
        $id = $this->input->post('id_jadwal');
        $data = $this->data->getJadwalId($id);
        echo json_encode($data);
    }

    function simpanJadwal()
    {
        $kontrol = $this->input->post('kontol');
        if ($kontrol == '') {
            $kontrol = 3;
        }

        $tgl = date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('tgl_jalan'))));

        $data = array(
            'tgl_jalan' => $tgl,
            'jam_jalan' => $this->input->post('jam_jln'),
            'jumlah' => $kontrol
        );

        $id = $this->input->post('id_jadwal');

        $update = $this->data->updateJadwal($data, $id);
        // echo json_encode($update);
        if ($update == 1) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
