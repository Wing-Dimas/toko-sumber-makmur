<?php

class Admin_model{
    private $db;
    private $table = "admin";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAdmin()
    {
        $this->db->query("SELECT id_admin FROM " . $this->table . " WHERE username=:username AND password=:password");
        $this->db->bind("username",$_POST["username"]);
        $this->db->bind("password",$_POST["password"]);
        $this->db->execute();
        unset($_POST["username"]);
        unset($_POST["password"]);
        return $this->db->single();
    }
}