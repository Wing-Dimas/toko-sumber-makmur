<?php

class Login extends Controller{
    public function index()
    {
        $data["judul"] = "Login";
        $this->view("login/index",$data);
    }

    public function cek()
    {
        $data = $this->model("Admin_model")->getAdmin();
        if($data){
            $_SESSION["login"] = true;
            $_SESSION["id_admin"] = $data["id_admin"];
            header("Location: ". BASEURL . "/dashboard");
        }else{
            header("Location: ". BASEURL . "/login");
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: " . BASEURL . "/login");
    }
}