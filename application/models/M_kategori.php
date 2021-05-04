<?php

class M_kategori extends CI_Model
{
    function getLastKat()
    {
        $this->db->select_max('kd_kat');
        $q = $this->db->get('kategori')->result();
        return $q[0]->kd_kat;
    }

    function simpanKat($data)
    {
        $q = $this->db->insert('kategori', $data);
        return $q;
    }

    function ambilDataKategori($id)
    {
        $this->db->where("kd_kat", $id);
        $q = $this->db->get('kategori')->result();
        return $q;
    }

    function ubahDataKategori($kat, $id)
    {
        $this->db->set("kategori", $kat);
        $this->db->where("kd_kat", $id);
        $q = $this->db->update("kategori");
        return $q;
    }

    function hapusKategori($id)
    {
        $this->db->where('kd_kat', $id);
        $q = $this->db->delete('kategori');
        return $q;
    }

    /* +++++++++++++++++ Sub Kategori +++++++++++++++++++++++ */
    function getLastSubKat()
    {
        $this->db->select_max('kd_sub');
        $q = $this->db->get('sub_kategori')->result();
        return $q[0]->kd_sub;
    }

    function simpanSubKat($data)
    {
        $q = $this->db->insert('sub_kategori', $data);
        return $q;
    }
}
