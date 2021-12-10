<?php

class karyawan extends Controller
{
    public function index(){
        $data["judul"] = "Data Karyawan";
        $data["daftar"] = "Daftar Karyawan";
        $data["add"] = "karyawan";
        $data["employees"] = $this->model("karyawan_model")->getDataKaryawan();
        $this->view("templates/header",$data);
        $this->view("data_toko/karyawan",$data);
        $this->view("templates/footer");
    }

}