<?php

class Dashboard extends Controller{
    public function index()
    {
        $data["judul"] = "Dashboard";
        // $data["nama"] = $this->model("User_model")->getUser();
        $this->view("templates/header",$data);
        $this->view("dashboard/index");
        $this->view("templates/footer");
    }
}