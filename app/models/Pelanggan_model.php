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

    public function getOneData($id)
    {
        $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan = :id_pelanggan");
        $this->db->bind("id_pelanggan",$id);
        $this->db->execute();
        return $this->db->single();
    }

    public function getPemesananPelanggan($id)
    {
        $this->db->query("SELECT *
                        FROM pelanggan AS a
                        JOIN pemesanan AS b
                            ON b.id_pelanggan = a.id_pelanggan
                        JOIN pembayaran AS c
                            ON b.id_pembayaran = c.id_pembayaran
                        JOIN barang AS d
                            ON b.id_barang = d.id_barang
                        WHERE a.id_pelanggan = :id_pelanggan");
        $this->db->bind("id_pelanggan",$id);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function addPelanggan($data)
    {
        $this->db->query("INSERT INTO pelanggan(nama_pelanggan,alamat_pelanggan,nomor_hp_pelanggan)
                        VALUES (:nama,:alamat,:no_hp)");
        $this->db->bind("nama",$data["nama"]);
        $this->db->bind("alamat",$data["alamat"]);
        $this->db->bind("no_hp",$data["no_hp"]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePelanggan($id)
    {
        try{
            $this->db->query("DELETE FROM pelanggan WHERE id_pelanggan = :id_pelanggan");
            $this->db->bind("id_pelanggan",$id);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function updateData($data)
    {
        try{
            $this->db->query("UPDATE pelanggan SET 
                            nama_pelanggan = :nama_pelanggan,
                            alamat_pelanggan = :alamat_pelanggan,
                            nomor_hp_pelanggan = :no_hp
                            WHERE id_pelanggan = :id_pelanggan");
            $this->db->bind("id_pelanggan",$data["id_pelanggan"]);
            $this->db->bind("nama_pelanggan",$data["nama"]);
            $this->db->bind("alamat_pelanggan",$data["alamat"]);
            $this->db->bind("no_hp",$data["no_hp"]);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }
}