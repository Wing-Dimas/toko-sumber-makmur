<?php

class Barang extends Controller
{
    public function index()
    {
        $data["judul"] = "Data Barang";
        $data["daftar"] = "Daftar Barang";

        $data["items"] = $this->model("barang_model")->getDataBarang();
        $this->view("templates/header",$data);
        $this->view("data_toko/barang",$data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        $data["judul"] = "Tambah Data Barang";
        $data["supplier"] = $this->model("supplier_model")->getDataSupplier();
        $this->view("templates/header",$data);
        $this->view("barang/tambah_barang",$data);
        $this->view("templates/footer");
    }
    
    public function tambahBarang()
    {
        if($this->model("barang_model")->addBarang($_POST) > 0){
            Flasher::setFlash("Barang","berhasil","ditambahkan","success");
            header("Location: " . BASEURL ."/barang");
        }else{
            Flasher::setFlash("Barang","gagal","ditambahkan","error");
            header("Location: " . BASEURL ."/barang");
        }
        $_POST = null;
        exit;
    }

    public function hapus($id)
    {
        if($this->model("Barang_model")->deleteBarang($id) > 0){
            Flasher::setFlash("Barang","berhasil","dihapus","success");
            header("Location: " . BASEURL ."/barang");
        }else{
            Flasher::setFlash("Barang","gagal","dihapus","error");
            header("Location: " . BASEURL ."/barang");
        }
    }

    public function edit($id)
    {
        $data["judul"] = "Edit Data Barang";
        $data["supplier"] = $this->model("Supplier_model")->getDataSupplier();
        $data["barang"] = $this->model("Barang_model")->getOneData($id);
        $this->view("templates/header",$data);
        $this->view("barang/edit_barang",$data);
        $this->view("templates/footer");
    }

    public function editBarang()
    {
        if($this->model("Barang_model")->updateData($_POST) > 0){
            Flasher::setFlash("Barang","berhasil","diupdate","success");
            header("Location: " . BASEURL ."/barang");
        }else{
            Flasher::setFlash("Barang","gagal","diupdate","error");
            header("Location: " . BASEURL ."/barang");
        }
        $_POST = null;
    }

    public function cari()
    {
        $data["judul"] = "Data Barang";
        $data["daftar"] = "Daftar Barang";
        $data["items"] = $this->model("barang_model")->getDataBarangByNama($_POST);
        $this->view("templates/header",$data);
        $this->view("data_toko/barang",$data);
        $this->view("templates/footer");    
        $_POST = null;
    }

}