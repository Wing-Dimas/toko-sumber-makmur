<?php

class Login extends Controller{
    public function index()
    {
        $data["judul"] = "Login";
        $this->view("login/index",$data);
    }

    public function cek()
    {
        $data = $this->model("Login_model")->getAdmin();
        if($data){
            $_SESSION["login"] = true;
            header("Location: ". BASEURL . "/dashboard");
        }else{
            header("Location: ". BASEURL . "/login");
        }
    }
}