<?php

class M_data extends CI_Model
{
    function ambilDataS($table, $field)
    {
        $this->db->order_by($field, "asc");
        $q = $this->db->get($table)->result();
        return $q;
    }

    function grafik($kd_kat)
    {
        $this->db->select("COUNT(*) AS z");
        $this->db->where("kd_kat", $kd_kat);
        $q = $this->db->get("pekerjaan")->result();
        return $q;

        // echo $this->db->last_query();
        // echo "<br/>";
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function data($table, $number, $offset)
    {
        return $query = $this->db->get($table, $number, $offset)->result();
    }

    function jumlah_data($table)
    {
        return $this->db->get($table)->num_rows();
    }

    function dataSubKategori($number, $offset)
    {
        $this->db->select('s.*, k.kategori');
        $this->db->join('kategori k', 'k.kd_kat=s.kd_kat');
        $q = $this->db->get('sub_kategori s', $number, $offset)->result();
        return $q;
    }

    function dataJadwal()
    {
        $this->db->select('l.nama_loker, j.*');
        $this->db->join('web_loker l', 'l.kd_loker=j.kd_loker');
        $q = $this->db->get("jadwal j")->result();
        return $q;
    }
}
