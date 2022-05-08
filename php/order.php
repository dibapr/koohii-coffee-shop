<?php
    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
?>

<?php
    $errorNama = "Anda belum memasukkan nama.";
    $errorMenu = "Anda belum memilih menu.";
    $errorUkuran = "Anda belum memilih ukuran cup.";
    $errorJumlah = "Anda belum menentukan jumlah pesanan.";
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
    <link rel="stylesheet" href="../css/order.css">
    <script src="../js/order.js"></script>
    <title>Pesan Kopi</title>
</head>
<body>
    <div class="back-button">
        <a href="home.php"><i class="bi bi-arrow-90deg-left"></i>   Kembali</a>
    </div>
    <div class="notif container mt-5">
        
    </div>
    <div class="d-flex align-items-center flex-lg-row flex-md-column flex-sm-column flex-column justify-content-evenly mt-5 px-md-5 px-sm-5 px-5">
        <div class="form-container px-md-5 mb-md-5 mb-sm-5 mb-5">
            <div class="header">
                <div class="head">
                    <h1>Mau pesan kopi tapi gak mau antri?</h1>
                    <p>Sekarang pesan kopi bisa disini. Buat pesanan, tunggu, dan tinggal ambil, gak perlu antri.</p>
                </div>
            </div>
            <div class="form">
                <form name="form" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Atas Nama</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" maxlength="10">
                        <div id="emailHelp" class="form-text">Masukkan nama dengan batas maksimal 10 karakter.</div>
                    </div>
                    <label for="menu">Pilih Menu</label>
                    <select name="menu" class="form-select mb-3" aria-label="Default select example">
                        <option value="" selected hidden>Pilih menu disini</option>
                        <option name="1" value="Espresso">Espresso</option>
                        <option name="2" value="Cappucino">Cappucino</option>
                        <option name="3" value="Americano">Americano</option>
                        <option name="4" value="Mocha">Mocha</option>
                        <option name="5" value="Latte">Latte</option>
                        <option name="6" value="Machiato">Machiato</option>
                    </select>
                    <div class="ukuran mb-3">
                        <label for="ukuran">Pilih Ukuran</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="ukuran" id="flexRadioDefault1" value="R">
                                    <label class="form-check-label">
                                        R
                                    </label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="ukuran" id="flexRadioDefault1" value="M">
                                    <label class="form-check-label">
                                        M
                                    </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ukuran" id="flexRadioDefault2" value="L">
                                    <label class="form-check-label" for="ukuran">
                                        L
                                    </label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="ukuran" id="flexRadioDefault1" value="" checked="checked" hidden>
                                    <label class="form-check-label">
                                        
                                    </label>
                            </div>
                        </div>
                    </div>
                    <div class="notelp mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input name="jumlah" type="number" class="form-control" id="inputNumber" min="1" max="10">
                        <div id="emailHelp" class="form-text">Batasan maksimal pemebelian adalah 10.</div>
                    </div>
                    <div class="d-grid gap-2" style="--bs-rows: 1;">
                        <button class="btn btn-primary" style="grid-row: 1" name="submit" type="submit">Pesan</button>
                        <input class="btn btn-danger" style="grid-row: 1" type="reset" value="Hapus Pesanan">
                    </div>
                </form>
            </div>
        </div>
        <div class="print px-md-5 mb-lg-0 pb-lg-0 mb-5 pb-5">
            <div class="card" style="width: 18rem;">
                <!-- cek gambar menu -->
                <?php
                    if(isset($_POST["submit"])) {
                        $menu = $_POST["menu"];
                        if(empty($menu)) { ?>
                        <img id="gambar" src="" alt="">
                <?php } elseif($menu == "Espresso") { ?>
                            <img id="gambar" src="../assets/111.jpg" alt="">
                <?php } elseif($menu == "Cappucino") { ?>
                            <img id="gambar" src="../assets/222.jpg" alt="">
                <?php } elseif($menu == "Americano") { ?>
                            <img id="gambar" src="../assets/333.jpg" alt="">
                <?php } elseif($menu == "Mocha") { ?>
                            <img id="gambar" src="../assets/444.jpg" alt="">
                <?php } elseif($menu == "Latte") { ?>
                            <img id="gambar" src="../assets/555.jpg" alt="">
                <?php } elseif($menu == "Machiato") { ?>
                            <img id="gambar" src="../assets/666.jpg" alt="">
                <?php } ?>
            <?php } ?>
                
                <div class="card-body">
                    <!-- nampilin error -->
                    <?php
                        if(empty($_POST["nama"])) {
                            if(isset($errorNama)) { ?>
                                <p class="merah"><?= $errorNama ?></p>
                        <?php } ?>
                    <?php } else { ?>
                                <div id="nama">
                                    <label for="">Atas nama:</label>
                                    <h5><?= $_POST["nama"] ?></h5>
                                </div>
                <?php } ?> 

                    <?php
                        if(empty($_POST["menu"])) {
                            if(isset($errorMenu)) { ?>
                                <p class="merah"><?= $errorMenu ?></p>
                        <?php } ?>
                    <?php } else { ?>
                                <div id="menu">
                                    <label for="">Menu:</label>
                                    <h5><?= $_POST["menu"] ?></h5>
                                </div>
                <?php } ?>
                           
                    <?php
                        if(empty($_POST["ukuran"])) {
                            if(isset($errorUkuran)) { ?>
                                <p class="merah"><?= $errorUkuran ?></p>
                        <?php } ?>
                    <?php } else { ?>
                                <div id="ukuran">
                                    <label for="">Ukuran:</label>
                                    <h5><?= $_POST["ukuran"] ?></h5>
                                </div>
                <?php } ?>
                    
                    <?php
                        if(empty($_POST["jumlah"])) {
                            if(isset($errorJumlah)) { ?>
                                <p class="merah"><?= $errorJumlah ?></p>
                        <?php } ?>
                    <?php } else { ?>
                                <div id="jumlah">
                                    <label for="">Jumlah:</label>
                                    <h5><?= $_POST["jumlah"] ?></h5>
                                </div>
                <?php } ?>
                    
                    <?php
                        if(isset($_POST["submit"])) { 
                            $menu = $_POST["menu"]; ?>
                        <?php
                            if($menu == "Espresso") {
                                $harga = 20000;
                                $jumlah = (int)$_POST["jumlah"]; ?>
                                <div id="harga">
                                    <center><label for="">Total harga:</label></center>
                                    <center><h5><?= "Rp." . $harga * $jumlah ?> </h5></center>
                                </div>
                        <?php } elseif($menu == "Cappucino") {
                                    $harga = 25000;
                                    $jumlah = (int)$_POST["jumlah"]; ?>
                                    <div id="harga">
                                        <center><label for="">Total harga:</label></center>
                                        <center><h5><?= "Rp." . $harga * $jumlah ?> </h5></center>
                                    </div>
                        <?php } elseif($menu == "Americano") {
                                    $harga = 25000;
                                    $jumlah = (int)$_POST["jumlah"]; ?>
                                    <div id="harga">
                                        <center><label for="">Total harga:</label></center>
                                        <center><h5><?= "Rp." . $harga * $jumlah ?> </h5></center>
                                    </div>
                        <?php } elseif($menu == "Mocha") {
                                    $harga = 22000;
                                    $jumlah = (int)$_POST["jumlah"]; ?>
                                    <div id="harga">
                                        <center><label for="">Total harga:</label></center>
                                        <center><h5><?= "Rp." . $harga * $jumlah ?> </h5></center>
                                    </div>
                        <?php } elseif($menu == "Latte") {
                                    $harga = 25000;
                                    $jumlah = (int)$_POST["jumlah"]; ?>
                                    <div id="harga">
                                        <center><label for="">Total harga:</label></center>
                                        <center><h5><?= "Rp." . $harga * $jumlah ?> </h5></center>
                                    </div>
                        <?php } elseif($menu == "Machiato") {
                                    $harga = 23000;
                                    $jumlah = (int)$_POST["jumlah"]; ?>
                                    <div id="harga">
                                        <center><label for="">Total harga:</label></center>
                                        <center><h5><?= "Rp." . $harga * $jumlah ?> </h5></center>
                                    </div>
                        <?php } ?>  
                    <?php } ?>
                    <?php
                        $errorData = "Mohon lengkapi data pesanan anda.";
                        if(isset($_POST["submit"])) {
                            if(($_POST["nama"] == "")) { ?>
                                <p class="merah"><?= $errorData ?></p>
                        <?php } elseif(($_POST["menu"] == "")) { ?>
                                    <p class="merah"><?= $errorData ?></p>
                        <?php } elseif(($_POST["ukuran"] == "")) { ?>
                                    <p class="merah"><?= $errorData ?></p>
                        <?php } elseif(($_POST["jumlah"] == "")) { ?>
                                    <p class="merah"><?= $errorData ?></p>
                                    
                    <?php } ?>
                <?php } ?>
                    <div class="d-grid gap-2">
                        <button type="submit" name="confirm" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Konfirmasi Pesanan</button>
                        <a href="order.php" class="btn btn-danger">Tutup     Pesanan</a>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Pesanan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Lakukan pembayaran?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="button" id="bayar" onclick="bayar()" class="btn btn-primary">Bayar</button>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>