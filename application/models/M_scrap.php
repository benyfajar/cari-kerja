<?php

class M_scrap extends CI_Model
{
    function getJadwalId($id_jadwal)
    {
        $this->db->where('kd_jadwal', $id_jadwal);
        $q = $this->db->get('jadwal')->result();
        return $q;
    }

    function updateJadwal($data, $id)
    {
        $this->db->where('kd_jadwal', $id);
        $q = $this->db->update('jadwal', $data);
        return $q;
    }
}
