<?php

class Pemesanan extends Controller
{
    public function index()
    {
        $data["add"] = "pemesanan";
        $data["judul"] = "Data Pemesanan";
        $data["daftar"] = "Daftar Pemesanan Pelanggan";
        $data["pemesanan"] = $this->model("pemesanan_model")->getDataPemesanan();
        $this->view("templates/header",$data);
        $this->view("data_toko/pemesanan",$data);
        $this->view("templates/footer");
    }

    public function tambah_pemesanan()
    {
        $data["add"] = "pemesanan";
        $this->view("templates/header",$data);
        $this->view("data_toko/tambah",$data);
        $this->view("templates/footer");
    }
}