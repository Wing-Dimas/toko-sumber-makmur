<?php

class Jabatan_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataJabatan(){
        $this->db->query("SELECT * FROM jabatan");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function addJabatan($data)
    {
        $this->db->query("INSERT INTO jabatan(nama_jabatan,gaji)
                        VALUES (:nama,:gaji)");
        $this->db->bind("nama",$data["nama"]);
        $this->db->bind("gaji",$data["gaji"]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteJabatan($id)
    {
        try{
            $this->db->query("DELETE FROM jabatan WHERE id_jabatan = :id_jabatan");
            $this->db->bind("id_jabatan",$id);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function getOneData($id)
    {
        $this->db->query("SELECT * FROM jabatan WHERE id_jabatan=:id");
        $this->db->bind("id",$id);
        $this->db->execute();
        return $this->db->single();
    }

    public function updateData($data)
    {
        try{
            $this->db->query("UPDATE jabatan SET 
                            nama_jabatan = :nama_jabatan,
                            gaji = :gaji
                            WHERE id_jabatan = :id_jabatan");
            $this->db->bind("id_jabatan",$data["id"]);
            $this->db->bind("nama_jabatan",$data["nama"]);
            $this->db->bind("gaji",$data["gaji"]);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function getColumnNama()
    {
        $this->db->query("SELECT id_jabatan, nama_jabatan FROM jabatan");
        $this->db->execute();
        return $this->db->resultSet();   
    }

    public function getDataJabatanByNama($data){
        $this->db->query("SELECT * FROM jabatan WHERE nama_jabatan LIKE '%".$data["cari"]."%'");
        $this->db->execute();
        return $this->db->resultSet();
    }
}