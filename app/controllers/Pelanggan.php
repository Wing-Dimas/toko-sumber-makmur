<?php

class Pelanggan extends Controller
{   
    public function index()
    {
        $data["judul"] = "Data Pelanggan";
        $data["daftar"] = "Daftar Pelanggan";
        $data["customers"] = $this->model("pelanggan_model")->getDataPelanggan();
        $this->view("templates/header",$data);
        $this->view("data_toko/pelanggan",$data);
        $this->view("templates/footer");
    }

    public function detail_pemesanan($id = null)
    {
        if(is_null($id)) header("Location: " . BASEURL . "pelanggan");
        $data["judul"] = "Data Pelanggan";
        $data["daftar"] = "Detail Pemesanan";
        $data["add"] = "pelanggan";
        $data["customer"] = $this->model("pelanggan_model")->getPemesananPelanggan($id);
        $this->view("templates/header",$data);
        $this->view("pelanggan/detail_pemesanan",$data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        $data["judul"] = "Tambah";
        $this->view("templates/header",$data);
        $this->view("pelanggan/tambah_pelanggan",$data);
        $this->view("templates/footer");
    }

    public function tambahPelanggan()
    {
        if($this->model("pelanggan_model")->addPelanggan($_POST) > 0){
            Flasher::setFlash("Pelanggan","berhasil","ditambahkan","success");
            header("Location: " . BASEURL ."/pelanggan");
        }else{
            Flasher::setFlash("Pelanggan","gagal","ditambahkan","error");
            header("Location: " . BASEURL ."/pelanggan");
        }
        unset($_POST["nama"]);
        unset($_POST["alamat"]);
        unset($_POST["no_hp"]);
        exit;
    }

    public function hapus($id)
    {
        if($this->model("pelanggan_model")->deletePelanggan($id) > 0){
            Flasher::setFlash("Pelanggan","berhasil","dihapus","success");
            header("Location: " . BASEURL ."/pelanggan");
        }else{
            Flasher::setFlash("Pelanggan","gagal","dihapus","error");
            header("Location: " . BASEURL ."/pelanggan");
        }
    }

    public function edit($id)
    {
        $data = $this->model("pelanggan_model")->getOneData($id);
        $this->view("templates/header");
        $this->view("pelanggan/edit_pelanggan",$data);
        $this->view("templates/footer");
    }

    public function editPelanggan()
    {
        if($this->model("pelanggan_model")->updateData($_POST) > 0){
            Flasher::setFlash("Pelanggan","berhasil","diupdate","success");
            header("Location: " . BASEURL ."/pelanggan");
        }else{
            Flasher::setFlash("Pelanggan","gagal","diupdate","error");
            header("Location: " . BASEURL ."/pelanggan");
        }
        $_POST = null;
    }

    public function cari()
    {
        $data["judul"] = "Data Pelanggan";
        $data["daftar"] = "Daftar Pelanggan";
        $data["customers"] = $this->model("pelanggan_model")->getDataPelangganByNama($_POST);
        $this->view("templates/header",$data);
        $this->view("data_toko/pelanggan",$data);
        $this->view("templates/footer");
        $_POST = null;
    }
}