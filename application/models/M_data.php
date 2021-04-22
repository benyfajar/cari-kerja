<?php

class M_data extends CI_Model
{
    function ambilDataS($table, $field)
    {
        $this->db->order_by($field, "desc");
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
}
