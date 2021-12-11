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

    public function addKaryawan($data)
    {
        $this->db->query("INSERT INTO karyawan(id_jabatan,nama_karyawan,alamat_karyawan,nomor_hp_karyawan,status_karyawan)
                        VALUES (:id_jabatan, :nama, :alamat, :no_hp, :status) ");
        $this->db->bind("id_jabatan",$data["id_jabatan"]);
        $this->db->bind("nama",$data["nama"]);
        $this->db->bind("alamat",$data["alamat"]);
        $this->db->bind("no_hp",$data["no_hp"]);
        $this->db->bind("status",$data["status"]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteKaryawan($id)
    {
        try{
            $this->db->query("DELETE FROM karyawan WHERE id_karyawan = :id_karyawan");
            $this->db->bind("id_karyawan",$id);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function getOneData($id)
    {
        $this->db->query("SELECT * FROM karyawan WHERE id_jabatan=:id");
        $this->db->bind("id",$id);
        $this->db->execute();
        return $this->db->single();
    }

    public function updateData($data)
    {
        try{
            $this->db->query("UPDATE karyawan SET 
                            nama_karyawan = :nama_karyawan,
                            id_jabatan = :id_jabatan,
                            alamat_karyawan = :alamat_karyawan,
                            nomor_hp_karyawan = :nomor_hp_karyawan,
                            status_karyawan = :status_karyawan
                            WHERE id_karyawan = :id_karyawan");
            $this->db->bind("id_karyawan",$data["id_karyawan"]);
            $this->db->bind("id_jabatan",$data["id_jabatan"]);
            $this->db->bind("nama_karyawan",$data["nama"]);
            $this->db->bind("alamat_karyawan",$data["alamat"]);
            $this->db->bind("nomor_hp_karyawan",$data["no_hp"]);
            $this->db->bind("status_karyawan",$data["status"]);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }
}