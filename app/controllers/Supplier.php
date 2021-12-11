<?php

class Supplier extends Controller
{   
    public function index()
    {
        $data["judul"] = "Data Supplier";
        $data["daftar"] = "Daftar Supplier";
        $data["supplier"] = $this->model("supplier_model")->getDataSupplier();
        $this->view("templates/header",$data);
        $this->view("data_toko/supplier",$data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        $data["judul"] = "Tambah Data Supplier";
        $this->view("templates/header",$data);
        $this->view("supplier/tambah_supplier",$data);
        $this->view("templates/footer");
    }

    public function tambahSupplier()
    {
        if($this->model("supplier_model")->addSupplier($_POST) > 0){
            Flasher::setFlash("Supplier","berhasil","ditambahkan","success");
            header("Location: " . BASEURL ."/supplier");
        }else{
            Flasher::setFlash("Supplier","gagal","ditambahkan","error");
            header("Location: " . BASEURL ."/supplier");
        }
        $_POST = null;
        exit;
    }

    public function hapus($id)
    {
        if($this->model("supplier_model")->deleteSupplier($id) > 0){
            Flasher::setFlash("Supplier","berhasil","dihapus","success");
            header("Location: " . BASEURL ."/supplier");
        }else{
            Flasher::setFlash("Supplier","gagal","dihapus","error");
            header("Location: " . BASEURL ."/supplier");
        }
    }

    public function edit($id)
    {
        $data = $this->model("Supplier_model")->getOneData($id);
        $this->view("templates/header");
        $this->view("supplier/edit_supplier",$data);
        $this->view("templates/footer");
    }

    public function editSupplier()
    {
        if($this->model("Supplier_model")->updateData($_POST) > 0){
            Flasher::setFlash("Supplier","berhasil","diupdate","success");
            header("Location: " . BASEURL ."/supplier");
        }else{
            Flasher::setFlash("Supplier","gagal","diupdate","error");
            header("Location: " . BASEURL ."/supplier");
        }
        $_POST = null;
    }

    public function cari()
    {
        $data["judul"] = "Data Supplier";
        $data["daftar"] = "Daftar Supplier";
        $data["supplier"] = $this->model("supplier_model")->getDataSupplierByNama($_POST);
        $this->view("templates/header",$data);
        $this->view("data_toko/supplier",$data);
        $this->view("templates/footer");
        $_POST = null;
    }
}