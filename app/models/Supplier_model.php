<?php

class Supplier_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataSupplier(){
        $this->db->query("SELECT * FROM supplier");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function addSupplier($data)
    {
        $this->db->query("INSERT INTO supplier(nama_supplier, alamat_supplier, email_supplier)
                        VALUES (:nama, :alamat, :email)");
        $this->db->bind("nama",$data["nama"]);
        $this->db->bind("alamat",$data["alamat"]);
        $this->db->bind("email",$data["email"]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteSupplier($id)
    {
        try{
            $this->db->query("DELETE FROM supplier WHERE id_supplier = :id_supplier");
            $this->db->bind("id_supplier",$id);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function getOneData($id)
    {
        $this->db->query("SELECT * FROM supplier WHERE id_supplier=:id");
        $this->db->bind("id",$id);
        $this->db->execute();
        return $this->db->single();
    }

    public function updateData($data)
    {
        try{
            $this->db->query("UPDATE supplier SET 
                            nama_supplier = :nama,
                            alamat_supplier = :alamat,
                            email_supplier = :email
                            WHERE id_supplier = :id_supplier");
            $this->db->bind("id_supplier",$data["id"]);
            $this->db->bind("nama",$data["nama"]);
            $this->db->bind("alamat",$data["alamat"]);
            $this->db->bind("email",$data["email"]);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function getDataSupplierByNama($data){
        $this->db->query("SELECT * FROM supplier WHERE nama_supplier LIKE '%". $data["cari"] ."%'");
        $this->db->execute();
        return $this->db->resultSet();
    }
}