<?php

class Dashboard extends Controller{
    public function index()
    {
        $data["barang"] = $this->model("barang_model")->getStokBarang();
        $data["pelanggan"] = $this->model("pelanggan_model")->getTotalPelanggan();
        $data["karyawan"] = $this->model("karyawan_model")->getTotalKaryawan();
        $data["barang_terjual"] = $this->model("pemesanan_model")->getSold();
        $income = $this->model("pemesanan_model")->getIncome();
        $data["income"] = number_format($income["income"],2,',','.');
        
        $data["judul"] = "Dashboard";
        $this->view("templates/header",$data);
        $this->view("dashboard/index",$data);
        $this->view("templates/footer");
    }
}