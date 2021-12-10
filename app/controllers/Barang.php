<?php

class Barang extends Controller
{
    public function index()
        {
            $data["judul"] = "Data Barang";
            $data["daftar"] = "Daftar Barang";
            $data["add"] = "barang";
            $data["items"] = $this->model("barang_model")->getDataBarang();
            $this->view("templates/header",$data);
            $this->view("data_toko/barang",$data);
            $this->view("templates/footer");
        }
}