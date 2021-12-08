<?php

class About extends Controller{
    public function index($nama = "Dimas",$umur = 19){
        $data = [
            "nama" => $nama,
            "umur" => $umur
        ];
        $data["judul"] = "about";
        $this->view("templates/header",$data);
        $this->view("about/index",$data);
        $this->view("templates/footer");
    }
    
    public function page()
    {
        $data["judul"] = "about pages";
        $this->view("templates/header",$data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}