<?php

class karyawan extends Controller
{
    public function index(){
        $data["judul"] = "Data Karyawan";
        $data["daftar"] = "Daftar Karyawan";
        $data["employees"] = $this->model("karyawan_model")->getDataKaryawan();
        $this->view("templates/header",$data);
        $this->view("data_toko/karyawan",$data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        $data["judul"] = "Data Karyawan";
        $data["daftar"] = "Daftar Karyawan";
        $data["jabatan"] = $this->model("jabatan_model")->getColumnNama();
        $this->view("templates/header",$data);
        $this->view("karyawan/tambah_karyawan",$data);
        $this->view("templates/footer");
    }

    public function tambahKaryawan()
    {
        if($this->model("karyawan_model")->addKaryawan($_POST) > 0)
        {
            Flasher::setFlash("Karyawan","berhasil","ditambahkan","success");
            header("Location: " . BASEURL . "/karyawan");
        }else{
            Flasher::setFlash("Karyawan","gagal","ditambahkan","error");
            header("Location: " . BASEURL . "/karyawan");
        }
        $_POST=null;
        exit;
    }


    public function hapus($id)
    {
        if($this->model("karyawan_model")->deleteKaryawan($id) > 0)
        {
            Flasher::setFlash("Karyawan","berhasil","dihapus","success");
            header("Location: " . BASEURL . "/karyawan");
        }else{
            Flasher::setFlash("Karyawan","gagal","dihapus","error");
            header("Location: " . BASEURL . "/karyawan");
        }
    }

    public function edit($id)
    {
        $data["judul"] = "Data Karyawan";
        $data["data"] = $this->model("karyawan_model")->getOneData($id);
        $data["jabatan"] = $this->model("jabatan_model")->getColumnNama();
        $this->view("templates/header",$data);
        $this->view("karyawan/edit_karyawan",$data);
        $this->view("templates/footer");
    }

    public function editKaryawan()
    {
        if($this->model("karyawan_model")->updateData($_POST) > 0){
            Flasher::setFlash("Karyawan","berhasil","diupdate","success");
            header("Location: " . BASEURL ."/karyawan");
        }else{
            Flasher::setFlash("Karyawan","gagal","diupdate","error");
            header("Location: " . BASEURL ."/karyawan");
        }
    }

    public function cari(){
        $data["judul"] = "Data Karyawan";
        $data["daftar"] = "Daftar Karyawan";
        $data["employees"] = $this->model("karyawan_model")->getDataKaryawanByNama($_POST);
        $this->view("templates/header",$data);
        $this->view("data_toko/karyawan",$data);
        $this->view("templates/footer");
        $_POST = null;
    }

}