<?php

class Pemesanan_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getDataPemesanan()
    {
        $this->db->query("SELECT 
                            id_pemesanan,
                            p.id_pembayaran AS id_pembayaran, 
                            tanggal_pembayaran,
                            id_admin,
                            nama_pelanggan,
                            nama_barang,
                            p.qty AS qty,
                            p.total AS total
                        FROM pemesanan AS p
                        JOIN barang AS b
                            ON b.id_barang = p.id_barang
                        JOIN pelanggan
                            ON pelanggan.id_pelanggan = p.id_pelanggan
                        JOIN pembayaran
                            ON pembayaran.id_pembayaran = p.id_pembayaran");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getTotalPemesanan()
    {
        $this->db->query("SELECT COUNT(*) AS total FROM pemesanan");
        $this->db->execute();
        return $this->db->single();
    }

    public function getIncome()
    {
        $this->db->query("SELECT SUM(total) AS income FROM pemesanan");
        $this->db->execute();
        return $this->db->single();
    }
    
    public function getSold(){
        $this->db->query("SELECT SUM(qty) AS qty FROM pemesanan AS a
                        JOIN pembayaran AS b
                            ON a.id_pembayaran = b.id_pembayaran
                        WHERE tanggal_pembayaran = CURRENT_DATE()");

        $this->db->execute();
        $result = $this->db->single()["qty"];
        if($result) return $result;
        return 0;
    }

}