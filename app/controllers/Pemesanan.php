<?php

class Pemesanan extends Controller
{
    public function index()
    {
        $data["judul"] = "Data Pemesanan";
        $data["daftar"] = "Daftar Pemesanan Pelanggan";
        $data["pemesanan"] = $this->model("pemesanan_model")->getDataPemesanan();
        $this->view("templates/header",$data);
        $this->view("data_toko/pemesanan",$data);
        $this->view("templates/footer");
    }

    public function tambah($jumlah)
    {
        $data["judul"] = "Tambah Pemesanan";
        $data["barang"] = $this->model("barang_model")->getDataBarang();
        $data["pelanggan"] = $this->model("pelanggan_model")->getDataPelanggan();
        $data["jumlah"] = (int)$jumlah;
        $this->view("templates/header",$data);
        $this->view("pemesanan/tambah_pemesanan",$data);
        $this->view("templates/footer");
    }
    
    public function tambahPemesanan()
    {
        $_POST["id_pembayaran"] = $this->model("Pembayaran_model")->addPembayaran();
        if($this->model("Pemesanan_model")->addPemesanan($_POST)){
            Flasher::setFlash("Pemesanan","Berhasil","ditambahkan","success");
            header("Location: " . BASEURL . "/pemesanan");
        }else{
            Flasher::setFlash("Pemesanan","gagal","ditambahkan","error");
            header("Location: " . BASEURL . "/pemesanan");
        }
        $_POST=null;
        exit;
    }
    
    public function hapus($id)
    {
        if($this->model("Pemesanan_model")->deletePemesanan($id)){
            Flasher::setFlash("Pemesanan","Berhasil","dihapus","success");
            header("Location: " . BASEURL . "/pemesanan");
        }else{
            Flasher::setFlash("Pemesanan","gagal","dihapus","error");
            header("Location: " . BASEURL . "/pemesanan");
        }
    }

    public function cari()
    {
        $data["judul"] = "Data Pemesanan";
        $data["daftar"] = "Daftar Pemesanan Pelanggan";
        $data["pemesanan"] = $this->model("pemesanan_model")->getDataPemesananByNama($_POST);
        $this->view("templates/header",$data);
        $this->view("data_toko/pemesanan",$data);
        $this->view("templates/footer");
        $_POST = null;
    }
}