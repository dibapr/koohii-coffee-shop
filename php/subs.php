<?php
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
?>

<?php
    if(isset($_POST["submit"])) {
        $namadepan = $_POST["namadepan"];
        $namabelakang = $_POST["namabelakang"];
        $email = $_POST["email"];
        $notelp = $_POST["notelp"];
        if($namadepan == "") {
            $errorND = "Silahkan masukkan nama depan anda.";
        } elseif($namabelakang == "") {
            $errorNB = "Silahkan masukkan nama belakang anda.";
        } elseif($email == "") {
            $errorEmail = "Silahkan masukkan email anda.";
        } elseif($notelp == "") {
            $errorNotelp = "Silahkan masukkan nomor telepon anda.";
        } else {
            echo "<script>alert('Terimkasih telah berlangganan.')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/subs.css">
    <title>Berlangganan Newsletter</title>
</head>
<body>
    <div class="back-button">
        <a href="index.php"><i class="bi bi-arrow-90deg-left"></i>   Kembali</a>
    </div>
    <div class="form-container">
        <div class="head">
            <h1>Dapatkan informasi terbaru dengan berlangganan newsletter kami.</h1>
            <p>Tidak ingin ketinggalan update seputar coffee shop kami? Berlangganan sekarang agar selalu update dengan kami. Tidak dipungut biaya.</p>
        </div>
        <form method="POST" class="row g-3">
            <div class="col-md-6">
                <label for="inputName1" class="form-label">Nama depan</label>
                <input name="namadepan" type="text" class="form-control" id="inputName1" autocomplete="off">
                <?php
                    if(isset($errorND)) { ?>
                        <p class="error"><?= $errorND ?></p>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <label for="inputName2" class="form-label">Nama belakang</label>
                <input name="namabelakang" type="text" class="form-control" id="inputName2" autocomplete="off">
                <?php
                    if(isset($errorNB)) { ?>
                        <p class="error"><?= $errorNB ?></p>
                <?php } ?>
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" autocomplete="off">
                <?php
                    if(isset($errorEmail)) { ?>
                        <p class="error"><?= $errorEmail ?></p>
                <?php } ?>
            </div>
            <div class="col-12">
                <label for="inputNumber" class="form-label">Nomor telepon</label>
                <input name="notelp" type="number" class="form-control" id="inputNumber" placeholder="+62">
                <?php
                    if(isset($errorNotelp)) { ?>
                        <p class="error"><?= $errorNotelp ?></p>
                <?php } ?>
            </div>
            <div class="col-12 d-grid gap-2">
                <button name="submit" type="submit" class="btn btn-primary">Mulai Berlangganan</button>
                <button type="reset" class="btn btn-danger">Hapus Semua</button>
            </div>
            <?php
                if(isset($_POST["submit"])) { 
                    $namadepan = $_POST["namadepan"];
                    $namabelakang = $_POST["namabelakang"];
                    $email = $_POST["email"];
                    $notelp = $_POST["notelp"];
                    $thanks = "Terimakasih telah berlangganan dengan kami.";
                    if($namadepan != "" && $namabelakang != "" && $email != "" && $notelp != "") { 
                        $data = array($namadepan, $namabelakang, $email, $notelp, $thanks);
                        foreach ($data as $print) { ?>
                            <h5 class="text-center mb-0"> <?= $print ?> </h5>
                       <?php }
                        }
                    } ?>   
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
