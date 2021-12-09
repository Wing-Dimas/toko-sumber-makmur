<?php

class Karyawan_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTotalKaryawan()
    {
        $this->db->query("SELECT COUNT(*) AS total FROM karyawan");
        $this->db->execute();
        return $this->db->single();
    }

    public function getDataKaryawan()
    {
        $this->db->query("SELECT * FROM karyawan AS k
                        JOIN jabatan AS j 
                        ON j.id_jabatan = k.id_jabatan");
        $this->db->execute();
        return $this->db->resultSet();
    }
}