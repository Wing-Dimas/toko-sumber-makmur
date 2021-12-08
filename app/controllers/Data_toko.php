<?php

class Data_toko extends Controller{
    public function index(){
        header("Location: " . BASEURL . "/dashbord");
    }

    public function barang()
    {
        $data["judul"] = "Data Barang";
        $data["daftar"] = "Daftar Barang";
        // $data = $this->model("Data_toko_model")->getBarang();

        $this->view("templates/header",$data);
        $this->view("templates/table_head",$data);
        $this->view("data_toko/barang");
        $this->view("templates/table_footer");
        $this->view("templates/footer");
    }
}