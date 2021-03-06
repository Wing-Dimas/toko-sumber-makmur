<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data["judul"] ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="login-page">
      <?php
        if(isset($_SESSION["login"])){
            if($_SESSION["login"]){
                header("Location: " . BASEURL . "/dashboard");
            }
        }
      ?>
    <div class="container">
      <h1>TOKO SUMBER MAKMUR</h1>
      <form action="<?= BASEURL ?>/login/cek" method="POST">
        <div class="box">
          <label for="username">
            <input class="form-control" name="username" id="username" type="text" placeholder="Username" />
            <span><i class="fas fa-user"></i></span>
          </label>
          <label for="password">
            <input class="form-control" name="password" id="password" type="password" placeholder="Password" />
            <span><i class="fas fa-lock"></i></span>
          </label>
          <button type="submit" class="btn btn-block">Log In</button>
        </div>
      </form>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/edc17df4e6.js" crossorigin="anonymous"></script>
  </body>
</html>
