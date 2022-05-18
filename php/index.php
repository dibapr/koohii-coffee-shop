<?php
    session_start();
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
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="icon" href="../assets/kopi.png">
    <script src="../js/navbar.js"></script>
    <script src="../js/formKontak.js"></script>
    <title>Koohii Coffee Shop</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a id="coklat" class="navbar-brand" href="index.php">
                <img src="../assets/logo.png" width="100" height="60" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kopi">Kopi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#alasan">Keunggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testi">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel none slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="../assets/11.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="../assets/22.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="../assets/33.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="hero block">
        <div class="header">
            <h1>SELAMAT DATANG DI WEB KOOHII</h1>
            <center><p>Temukan informasi mengenai coffee shop Koohii disini.</p></center>
        </div>
        <div class="tombol text-center">
            <div class="row row-lg row-md">
                <div class="order-container col mb-lg-2 mb-md-2 mb-2">
                    <a href="order.php" class="order">Pesan Kopi</a>
                </div>
            </div>
            <div class="row row-lg row-md d-xs-grid gap-2">
                <div class="subs-container col mb-xs-2">
                    <a href="subs.php" class="subs bg-primary">Berlangganan</a>
                </div>
                <?php
                if(isset($_SESSION["login"])) { ?>
                    <div class="logout-container col">
                        <a href="logout.php" class="logout">Logout</a>
                    </div>
            <?php } else { ?>
                    <div class="login-container col">
                        <a href="login.php" class="login">Login</a>
                    </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <div class="tentang px-5" id="tentang">
        <div class="gmbr">
            <img src="../assets/cewe.png" alt="" class="cewe">
        </div>
        <div class="head col-lg-3 col-md-6">
            <h1 class="text-lg-start text-md-center">Tentang Kami</h1>
            <p>Coffee shop kami adalah sebuah tempat seperti bar, restoran kecil dan murah, atau tempat makan dan minum santai lainnya yang menyajikan kopi, teh, atau minuman panas lainnya. Kami menawarkan layanan yang cepat dan responsif, serta tempat dine-in yang nyaman.</p>
        </div>
    </div>
    <div class="kopi-container" id="kopi">
        <div class="judul-kopi">
            <h1>Kopi Kami</h1>
            <p>Berikut adalah daftar kopi yang kami sediakan.</p>
        </div>
        <div class="card-container justify-content-center d-flex">
            <div class="row col-7 row-cols-1 row-cols-lg-3 row-cols-md-1 g-4 justify-content-center align-items-center">
                <div class="col">
                    <div class="card">
                        <img src="../assets/111.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Espresso</h5>
                            <p class="card-text">Ekstrak biji kopi yang diproses menggunakan mesin bertekanan tinggi. Bisa dibilang saripati biji kopi yang murni.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../assets/222.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cappucino</h5>
                            <p class="card-text">Terdiri dari sepertiga espresso, sepertiga susu dan sepertiga froth susu. Tidak memiliki art diatas busanya.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../assets/333.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Americano</h5>
                            <p class="card-text">Espresso yang dicampurkan air panas sehingga rasa espresso yang pahit tidak terlalu mencolok.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../assets/444.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mocha</h5>
                            <p class="card-text">Memiliki campuran yaitu espresso, susu, dan coklat sehingga rasa yang diciptakan ialah rasa manis dan aroma kopi.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../assets/555.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Latte</h5>
                            <p class="card-text">Lebih menonjolkan rasa kopinya ketimbang rasa susunya. Memiliki tiga layer, yaitu foam, susu, dan kopi.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../assets/666.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Macchiato</h5>
                            <p class="card-text">Merupakan minuman dengan perpaduan antara espresso dan susu. Takaran antara espresso dan susu 1:1 alias sama banyaknya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alasan" class="alasan-container d-flex flex-lg-row flex-md-column justify-content-evenly align-items-center px-5">
        <div class="mengapa col-lg-2 col-md-5">
            <h1>Mengapa harus memilih kami?</h1>
            <p>Berikut adalah alasan mengapa Koohii Coffee Shop merupakan tempat yang terbaik untuk menikmati secangkir kopi.</p>
        </div>
        <div class="alasan-card col-md-5">
            <div class="card mb-5">
                <div class="card-header">
                    Kenyamanan
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tempat Yang Relax</h5>
                    <p class="card-text">Kami menghadirkan suasana yang kondusif sehingga orang yang berkunjung merasa nyaman.</p>
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-header">
                    Layanan Kami
                </div>
                <div class="card-body">
                    <h5 class="card-title">Olahan Kopi Kami</h5>
                    <p class="card-text">Kami menggunakan kopi berkualitas tinggi, diolah langsung oleh tangan ahli.</p>
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-header">
                    Musik
                </div>
                <div class="card-body">
                    <h5 class="card-title">Music Show Dari Band Indie</h5>
                    <p class="card-text">Setiap malam minggu, kami memanggil band indie untuk tampil di coffee shop kami.</p>
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-header">
                    Fasilitas
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cocok Untuk Produktivitas</h5>
                    <p class="card-text">Kami menyediakan Wi-Fi dengan speed dan bandwidth yang cepat dan stopkontak untuk mengisi daya device.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="testi" class="testimonial-container">
        <center>
            <div class="testi-head">
                <h1>Testimonial</h1>
                <p>Ini kata orang-orang tentang coffee shop kami.</p>
            </div>
        </center>
        <div id="carouselExampleIndicators" class="carousel testi carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item itemitem active" data-bs-interval="3000">
                    <h5 class="miring">"Kalo dari kata-katanya sih, ini Koohii kayanya seru nih buat nongkrong. Soalnya pas gue lewat tuh, dari tampak depan udah menarik pandangan banget. dan pas masuk ke dalam, dengan pemandangan mural ditemboknya, kayanya sih fix ini seru."</h5>
                    <p>Mamang Kesbor</p>
                </div>
                <div class="carousel-item itemitem" data-bs-interval="3000">
                    <h5 class="miring">"Salah satu cafe yang enak buat nongkrong, rasa makanan disini enak dan kopi nya pun mantap, harga nya tidak terlalu mahal, tempat nya nyaman dan cozy, recommended. Cocok buat mahasiswa yang mau ngerjain tugas dan pekerja yang mau produktif."</h5>
                    <p>Anjasmara</p>
                </div>
                <div class="carousel-item itemitem" data-bs-interval="3000">
                    <h5 class="miring">"Kedai kopi pertama yang saya kunjungi selama saya tinggal dan saya terus kembali. Staf sangat ramah dan harga kopi luar biasa. Ada Wifi dan tempat duduk yang indah. Yang paling keren adalah seni Latte yang mengejutkan saya ketika saya memesan."</h5>
                    <p>Abang Balaraja</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="kontak" class="kontak-container px-5">
        <h1 class="text-center">Kontak</h1>
        <p class="text-center jarak">Punya kritik dan saran atau pesan yang ingin disampaikan? Hubungi kami.</p>
        <div class="kontak d-flex justify-content-evenly align-items-center flex-wrap">
            <div class="maps-container">
                <h3 class="text-md-center warna" style="color: #361500;">Alamat kami</h3>
                <p class="text-md-center warna">Jangan lupa untuk memberi kunjungan ke coffee shop kami.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.517963712404!2d106.81825251543205!3d-6.195180095515057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421c2ebd463%3A0xccfcc89b95aaf1ae!2sGrand%20Indonesia!5e0!3m2!1sid!2sid!4v1646835446010!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="form-container">
                <form name="form" id="form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label warna">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" autocomplete="off">
                        <p id="errorNama" class="merah"></p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label warna">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"  autocomplete="off">
                        <div id="emailHelp" class="form-text">Kami menjamin keamanan email anda dan tidak akan menyebarkannya.</div>
                        <p id="errorEmail" class="merah"></p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label warna">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" autocomplete="off">
                        <p id="errorAlamat" class="merah"></p>
                    </div>
                    <div class="check-container mb-3">
                        <label for="" class="warna">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault1">
                            <label class="form-check-label warna" for="flexRadioDefault1">
                                Laki-laki
                            </label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="flexRadioDefault2">
                            <label class="form-check-label warna" for="flexRadioDefault2">
                                Perempuan
                            </label>
                            <p id="errorJK" class="merah"></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control resize" id="pesan" style="height: 100px" name="pesan"></textarea>
                        <p id="errorPesan" class="merah"></p>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary" name="submit" id="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="kirimPesan()">Submit</button>
                        <input class="btn btn-danger" type="reset" value="Hapus Semua">
                    </div>
                </form>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Kirim pesan?</h5>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" onclick="validasiPesan()" class="btn btn-primary">Kirim Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-container">
        <div class="menu-container d-flex justify-content-evenly flex-lg-row flex-md-column flex-sm-wrap text-lg-start text-md-center text-sm-center">
            <img class="mb-md-5 align-self-center" src="../assets/logo.png" alt="" width="150" height="90">
            <div class="touch col-lg-2 mb-md-5">
                <h5>Hubungi Kami</h5>
                <p class="px-5 px-lg-0">Jl. M.H. Thamrin No.1, Kb. Melati, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310</p>
                <p>Call: +62 813 5610 8992</p>
            </div>
            <div class="menu mb-md-5 mb-3">
                <h5>Menu</h5>
                <a href="#tentang">Tentang</a>
                <a href="#kopi">Kopi</a>
                <a href="#alasan">Keunggulan</a>
                <a href="#testi">Testimoni</a>
                <a href="#kontak">Kontak</a>
            </div>
            <div>
                <h5>Pesan Kopi</h5>
                <a href="order.php" class="btn btn-primary pesen mb-lg-0 mb-4" role="button">Pesan</a>
            </div>
            <div class="subs-cta mb-md-5 mg-lg-0 mt-lg-0 mt-md-5 mb-5">
                <h5>Ikuti Update Kami</h5>
                <a class="btn btn-primary langganan" href="subs.php" role="button">Berlangganan</a>
            </div>
        </div>
        <div class="sosmed container mb-md-5 mb-5">
            <div class="isi-sosmed">
                <div class="gambar-sosmed d-flex justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-facebook me-3 ms-3" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-whatsapp me-3 ms-3" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-twitter me-3 ms-3" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-instagram me-3 ms-3" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="copyright d-flex justify-content-center">
            <p class="love">Copyright &#169;2022 | Made with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg> by Diba</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>