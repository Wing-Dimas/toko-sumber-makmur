<?php

class Flasher{

    public static function setFlash($table,$pesan, $aksi, $tipe){
        $_SESSION["flash"] = [
            "table"  => $table,
            "pesan" => $pesan,
            "aksi"  => $aksi,
            "tipe"  => $tipe
        ];
    }

    // public static function flash(){
    //     if(isset($_SESSION["flash"])){
    //         echo    '<div class="alert alert-'. $_SESSION["flash"]["tipe"] .' alert-dismissible fade show" role="alert">
    //                     Data Mahasiswa <strong>'. $_SESSION["flash"]["pesan"] .'</strong> '.$_SESSION["flash"]["aksi"].'
    //                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                     <span aria-hidden="true">&times;</span>
    //                     </button>
    //                 </div>';
    //         unset($_SESSION["flash"]);
    //     }
    // }
    
    public static function flash(){
        if(isset($_SESSION["flash"])){
            $flash_table = $_SESSION["flash"]["table"];
            $flash_pesan = $_SESSION["flash"]["pesan"];
            $flash_aksi = $_SESSION["flash"]["aksi"];
            $flash_tipe = $_SESSION["flash"]["tipe"];
            unset($_SESSION["flash"]);
            echo '<div class="cek-alert" data-table="'.$flash_table.'" data-pesan="'.$flash_pesan.'" data-aksi="'. $flash_aksi.'" data-tipe="'.$flash_tipe.'"></div>';
        }
    }

}