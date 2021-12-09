<?php

class Pelanggan_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getTotalPelanggan()
    {
        $this->db->query("SELECT COUNT(*) AS total FROM pelanggan");
        $this->db->execute();
        return $this->db->single();
    }
    
    public function getDataPelanggan()
    {
        $this->db->query("SELECT * FROM pelanggan");
        $this->db->execute();
        return $this->db->resultSet();
    }
}