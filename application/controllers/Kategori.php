<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori', 'data');
    }
    function simpan_kategori()
    {
        $id = $this->autoKategori();
        $data = array('kd_kat' => $id, 'kategori' => $this->input->post('kategori'));
        $simpan = $this->data->simpanKat($data);
        if ($simpan == 1) :
            echo json_encode("berhasil");
        else :
            echo json_encode("gagal");
        endif;
    }

    function edit_kategori()
    {
        $id = $this->input->post("id_kat");
        $kat = $this->input->post("kategori");

        $ubah = $this->data->ubahDataKategori($kat, $id);

        if ($ubah == 1) :
            echo json_encode("berhasil");
        else :
            echo json_encode("gagal");
        endif;
    }

    function delKat()
    {
        $where = array(
            'kd_kat' => $this->input->post("id_kat")
        );
        $del = $this->data->hapus($where, 'kategori');
        // $del = $this->data->hapusKategori($this->input->post('id_kat'));
        if ($del == 1) :
            echo json_encode("berhasil");
        else :
            echo json_encode("gagal");
        endif;
    }

    function autoKategori()
    {
        $kar = "K";
        $idKat = $this->data->getLastKat();
        if ($idKat != "" || $idKat == null) :
            $ambil = substr($idKat, 1, 4);
            $ambil = intval($ambil) + 1;
            $panjang = strlen($ambil);
            $nol = str_repeat("0", 4 - $panjang);
            $kode = $kar . $nol . $ambil;
        else :
            $kode = $kar . "0001";
        endif;
        return $kode;
    }

    function ambilKategori()
    {
        $kategori = $this->data->ambilDataKategori($this->input->post('id_kat'));
        echo json_encode($kategori);
    }

    /* +++++++++++++++++ Sub Kategori +++++++++++++++++++++++ */
    function simpan_subKategori()
    {
        $id = $this->autoSubKategori();
        $data = array('kd_sub' => $id, 'nama' => $this->input->post('subKategori'), 'kd_kat' => $this->input->post('kd_kat'));
        $simpan = $this->data->simpanSubKat($data);
        if ($simpan == 1) :
            echo json_encode("berhasil");
        else :
            echo json_encode("gagal");
        endif;
    }

    function autoSubKategori()
    {
        $kar = "SK";
        $idKat = $this->data->getLastSubKat();
        if ($idKat != "" || $idKat == null) :
            $ambil = substr($idKat, 2, 3);
            $ambil = intval($ambil) + 1;
            $panjang = strlen($ambil);
            $nol = str_repeat("0", 3 - $panjang);
            $kode = $kar . $nol . $ambil;
        else :
            $kode = $kar . "001";
        endif;
        return $kode;
    }

    function ambilSubKategori()
    {
        $subKategori = $this->data->ambilDataSubKategori($this->input->post('id_sub'));
        echo json_encode($subKategori);
    }

    function edit_subKategori()
    {
        $data = array(
            'kd_kat' => $this->input->post('kd_kat'),
            'nama' => $this->input->post('nama')
        );

        $ubah = $this->data->ubahDataSubKategori($data, $this->input->post('kd_sub'));
        if ($ubah == 1) :
            echo json_encode("berhasil");
        else :
            echo json_encode("gagal");
        endif;
    }

    function delSubKat()
    {
        $where = array(
            'kd_sub' => $this->input->post("id_sub")
        );
        $hapus = $this->data->hapus($where, 'sub_kategori');
        if ($hapus == 1) :
            echo json_encode("berhasil");
        else :
            echo json_encode("gagal");
        endif;
    }



    /* +++++++++++++++++ Sub Kategori +++++++++++++++++++++++ */
}
