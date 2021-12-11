<?php

class Pembayaran_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addPembayaran()
    {
        $this->db->query("INSERT INTO pembayaran(tanggal_pembayaran) VALUES (CURRENT_DATE()) ");
        $this->db->execute();
        return $this->db->lastInsertId();
    }

    
}