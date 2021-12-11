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

    public function addPemesanan($data)
    {
        var_dump($data);
        echo "<br>";
        var_dump($_SESSION);
        echo "<br>";
        for($i = 0; $i < count($data["id_barang"]); $i++){
            // ambil data dari table barang
            $this->db->query("SELECT * FROM barang WHERE id_barang=:id_barang");
            $this->db->bind("id_barang",$data["id_barang"][$i]);
            $this->db->execute();
            $barang = $this->db->single();  
            $total = $barang["harga_barang"] * $data["qty"][$i];

            // kurangi barang
            $stok_barang = (integer)$barang["stok_barang"];
            $qty = (integer)$data["qty"][$i];
            $barang_berkurang = $stok_barang - $qty;
            
            $this->db->query("UPDATE barang SET stok_barang = :stok_barang_baru WHERE id_barang=:id_barang");
            $this->db->bind("stok_barang_baru",$barang_berkurang);
            $this->db->bind("id_barang",$barang["id_barang"]);
            $this->db->execute();

            // masukan data
            $this->db->query("INSERT INTO pemesanan(id_pembayaran,id_admin, id_pelanggan, id_barang, qty, total)
                    VALUES (:id_pembayaran,:id_admin,:id_pelanggan,:id_barang,:qty,:total)");
            $this->db->bind("id_pembayaran",$data["id_pembayaran"]);
            $this->db->bind("id_admin",$_SESSION["id_admin"]);
            $this->db->bind("id_pelanggan",$data["id_pelanggan"]);
            $this->db->bind("id_barang",$data["id_barang"][$i]);
            $this->db->bind("qty",$data["qty"][$i]);
            $this->db->bind("total",$total);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }


    public function deletePemesanan($id)
    {
        $this->db->query("DELETE FROM pemesanan WHERE id_pemesanan=:id_pemesanan");
        $this->db->bind("id_pemesanan",$id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getDataPemesananByNama($data)
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
                            ON pembayaran.id_pembayaran = p.id_pembayaran
                        WHERE pelanggan.nama_pelanggan LIKE '%" . $data["cari"] . "%'");
        $this->db->execute();
        return $this->db->resultSet();
    }
}