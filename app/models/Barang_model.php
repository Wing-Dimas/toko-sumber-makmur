<?php

class Barang_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataBarang()
    {
        $this->db->query("SELECT * FROM barang");
        $this->db->execute();
        return $this->db->resultSet();
    }
    
    public function getStokBarang()
    {
        $this->db->query("SELECT SUM(stok_barang) AS stok FROM barang");
        $this->db->execute();
        return $this->db->single();
    }
}