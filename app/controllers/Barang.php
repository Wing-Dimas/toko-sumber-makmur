<?php

class Barang extends Controller
{
    public function index(){
        header("Location: " . BASEURL . "/dashbord");
    }

    public function barang()
    {
        $data["judul"] = "Data Barang";
        $data["daftar"] = "Daftar Barang";
        $data["add"] = "barang";
        $data["items"] = $this->model("barang_model")->getDataBarang();
        $this->view("templates/header",$data);
        $this->view("templates/table_head",$data);
        $this->view("data_toko/barang",$data);
        $this->view("templates/table_footer");
        $this->view("templates/footer");
    }
}