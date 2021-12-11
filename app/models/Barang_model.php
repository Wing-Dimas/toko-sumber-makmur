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

    public function addBarang($data)
    {
        $this->db->query("INSERT INTO barang(id_supplier, nama_barang, harga_barang, stok_barang)
                        VALUES (:id_supplier, :nama_barang, :harga_barang, :stok_barang)");
        $this->db->bind("id_supplier",$data["id_supplier"]);
        $this->db->bind("nama_barang",$data["nama"]);
        $this->db->bind("harga_barang",$data["harga"]);
        $this->db->bind("stok_barang",$data["stok"]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteBarang($id)
    {
        try{
            $this->db->query("DELETE FROM Barang WHERE id_Barang = :id_Barang");
            $this->db->bind("id_Barang",$id);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function getOneData($id)
    {
        $this->db->query("SELECT * FROM Barang WHERE id_barang=:id");
        $this->db->bind("id",$id);
        $this->db->execute();
        return $this->db->single();
    }

    public function updateData($data)
    {
        try{
            $this->db->query("UPDATE barang SET 
                            nama_barang = :nama,
                            id_supplier = :id_supplier,
                            harga_barang = :harga,
                            stok_barang = :stok
                            WHERE id_barang = :id_barang");
            $this->db->bind("id_barang",$data["id_barang"]);
            $this->db->bind("id_supplier",$data["id_supplier"]);
            $this->db->bind("nama",$data["nama"]);
            $this->db->bind("harga",$data["harga"]);
            $this->db->bind("stok",$data["stok"]);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function getDataBarangByNama($data)
    {
        $this->db->query("SELECT * FROM barang WHERE nama_barang LIKE '%". $data["cari"] ."%'");
        $this->db->execute();
        return $this->db->resultSet();
    }
}