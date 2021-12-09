<?php

class Pemesanan extends Controller
{
    public function index(){
        header("Location: " . BASEURL . "/dashbord");
    }

    public function pemesanan()
    {
        $data["judul"] = "Data Pemesanan";
        $data["add"] = "pemesanan";
        $data["daftar"] = "Daftar Pemesanan Pelanggan";
        $data["pemesanan"] = $this->model("pemesanan_model")->getDataPemesanan();
        $this->view("templates/header",$data);
        $this->view("templates/table_head",$data);
        $this->view("data_toko/pemesanan",$data);
        $this->view("templates/table_footer");
        $this->view("templates/footer");
    }
}