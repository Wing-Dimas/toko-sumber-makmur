<?php

class Jabatan extends Controller
{
    public function index(){
        $data["judul"] = "Data Jabatan";
        $data["daftar"] = "Daftar Jabatan";
        $data["jabatan"] = $this->model("jabatan_model")->getDataJabatan();
        $this->view("templates/header",$data);
        $this->view("data_toko/jabatan",$data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        $data["judul"] = "Data Jabatan";
        $data["daftar"] = "Daftar Jabatan";
        $this->view("templates/header",$data);
        $this->view("jabatan/tambah_jabatan");
        $this->view("templates/footer");
    }

    public function tambahJabatan()
    {
        if($this->model("jabatan_model")->addJabatan($_POST) > 0)
        {
            Flasher::setFlash("Jabatan","berhasil","ditambahkan","success");
            header("Location: " . BASEURL . "/jabatan");
        }else{
            Flasher::setFlash("Jabatan","gagal","ditambahkan","error");
            header("Location: " . BASEURL . "/jabatan");
        }
        $_POST=null;
        exit;
    }

    public function hapus($id)
    {
        if($this->model("jabatan_model")->deleteJabatan($id) > 0)
        {
            Flasher::setFlash("Jabatan","berhasil","dihapus","success");
            header("Location: " . BASEURL . "/jabatan");
        }else{
            Flasher::setFlash("Jabatan","gagal","dihapus","error");
            header("Location: " . BASEURL . "/jabatan");
        }
    }



    public function edit($id)
    {
        $data["judul"] = "Data Jabatan";
        $data["data"] = $this->model("jabatan_model")->getOneData($id);
        $this->view("templates/header",$data);
        $this->view("jabatan/edit_jabatan",$data);
        $this->view("templates/footer");
    }

    public function editJabatan()
    {
        if($this->model("jabatan_model")->updateData($_POST) > 0){
            Flasher::setFlash("Jabatan","berhasil","diupdate","success");
            header("Location: " . BASEURL ."/jabatan");
        }else{
            Flasher::setFlash("Jabatan","gagal","diupdate","error");
            header("Location: " . BASEURL ."/jabatan");
        }
    }
}