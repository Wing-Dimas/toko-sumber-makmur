<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data["judul"] ?></title>
    <link rel="stylesheet" href="<?=BASEURL ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=BASEURL ?>/css/style.css" />
  </head>
  <body>
  <?php
    if(!isset($_SESSION["login"])){
      header("Location: " . BASEURL . "/login");
    }
  ?>

    <header>
      <div class="logo">
        <div class="container">
          <h1>TOKO SUMBER MAKMUR</h1>
          <h1>Administrasi</h1>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?=BASEURL ?>/dashboard">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASEURL ?>/pelanggan">Pelanggan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASEURL ?>/barang">Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASEURL ?>/pemesanan">Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=BASEURL ?>/karyawan">Karyawan</a>
            </li>
          </ul>
          <span class="navbar-text"> Dimas Wing </span>
        </div>
      </nav>
    </header>
