<?php

class Pelanggan extends Controller
{
    public function index(){
        header("Location: " . BASEURL . "/dashbord");
    }
    
    public function pelanggan()
    {
        $data["judul"] = "Data Pelanggan";
        $data["daftar"] = "Daftar Pelanggan";
        $data["add"] = "pelanggan";
        $data["customers"] = $this->model("pelanggan_model")->getDataPelanggan();
        $this->view("templates/header",$data);
        $this->view("templates/table_head",$data);
        $this->view("data_toko/pelanggan",$data);
        $this->view("templates/table_footer");
        $this->view("templates/footer");
    }
        
}