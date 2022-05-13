<?php
    session_start();
        if(isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($username == "admin" && $password == "admin") {
                $_SESSION["login"] = true;
                header("Location: index.php");
                exit;
            } elseif($username != "admin" && $password == "admin") {
                $errorUser = "Maaf, username yang anda masukkan salah.";
            } elseif($username == "admin" && $password != "admin") {
                $errorPassword = "Maaf, password yang anda masukkan salah.";
            } elseif($username == "" && $password == "") {
                $errorKosong = "Form data masih kosong.";
            } else {
                $error = "Maaf, username dan password anda salah.";
            }
        }
        if(isset($_SESSION["login"])) {
            header("Location: index.php");
            exit;
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="kontener d-flex flex-wrap align-items-center">
      <div class="lebar w-50">
        <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item lebar tinggi active bg1" data-bs-interval="4000">
            <div class="d-md-block text-lg-start text-md-center text-center pt-5 mt-3 px-4">
              <h2 class="warna1 fw-bolder">Selamat Datang!</h5>
              <p class="warna1 fs-sm-5">Disini tempatnya ngopi paling santai sejagat raya.</p>
            </div>
            <center><img src="../assets/abstract-coffee-break.png" class="img-fluid gambar" alt=""></center>
          </div>
          <div class="carousel-item lebar tinggi bg2" data-bs-interval="4000">
            <div class="d-md-block">
              <figure class="text-center warna2 px-4 mt-5">
                <blockquote class="blockquote">
                  <p class="fw-normal fs-6">Aroma kopi yang baru dibuat adalah salah satu penemuan terbesar.</p>
                </blockquote>
                <figcaption class="blockquote-footer warna3">
                  Hugh Jackman
                </figcaption>
              </figure>
            </div>
            <center><img src="../assets/pablo-coffee-break.png" class="img-fluid gambar" alt=""></center>
            </div>
          </div>
        </div>
      </div>
      <div class="form container col-lg-3 col-md-6 col-8 mt-lg-0 mt-5 mb-lg-0 mb-md-0 mb-5">
        <form method="POST">
          <div class="head text-center">
            <img src="../assets/logo.png" width="50%" alt=""> 
            <h3 class="fw-bold fst-italic coklat">Coffee Shop</h5>
            <p>Silahkan login untuk masuk ke dalam website.</p>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" autocomplete="off">
            <?php
              if(isset($errorUser)) { ?>
                <p style="color: red;"><?= $errorUser ?></p>
        <?php } ?>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
            <?php
              if(isset($errorPassword)) { ?>
                <p style="color: red;"><?= $errorPassword ?></p>
        <?php } ?>
          </div>      
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary coklattua">Login</button>
          </div>
        </form>
            <script>
              function lupa() {
                document.getElementById("username").placeholder = "admin";
                document.getElementById("password").placeholder = "admin";
              }
            </script>
        <button class="lupa mt-3" onclick="lupa()">Lupa password?</button>
        <?php
              if(isset($errorKosong)) { ?>
                <p style="color: red;"><?= $errorKosong ?></p>
        <?php } elseif(isset($error)) { ?>
                <p style="color: red;"><?= $error ?></p>
        <?php } ?>
      </div>
      </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>