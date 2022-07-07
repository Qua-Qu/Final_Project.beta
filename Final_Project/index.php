<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Final Project Pemrograman Web" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Cafe 30</title>
</head>

<body>
    <div class="head-container">
        <header>
            <nav class="navbar navbar-expand-lg sticky-top topnav">
                <div class="container">
                    <a class="navbar-brand" href="./index.php">
                        <img src="./images/coffee_icon.png" alt="Coffee" width="70px"></a>

                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./menu.php">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact_us.php">Team and Contact</a>
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link active px-3 text-white" href="#">Sign In</a> -->
                                <a class="nav-link" href="./login.php">Sign In</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="main-container">
        <main class="main">
            <div class="main-container">
                <div class="slides">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="./images/T_slides_1.jpg" alt="First slide">
                                <div class="carousel-caption py-5">
                                <div class="row py-5 ">
                                    <h1 class="font-weight-bold text-white text-center">Selamat Datang</h1>
                                    <h2 class="text-white text-center fs-8">Cafe 30 siap melayani anda</h2>
                                    <h3 class="font-weight-bold text-primary text-responsive">Sedang dilanda masalah hidup?</h3>
                                    <p class="fw-light text-white text-responsive">Istirahatlah sejenak dan minum secangkir kopi</p>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/T_slides_2.jpg" alt="Second slide">
                                <div class="carousel-caption py-5">
                                <div class="row py-5 ">
                                    <h1 class="font-weight-bold text-white text-center">Pelayanan Kilat</h1>
                                    <h3 class="text-white text-center fs-8">Pelayan kami sudah sangat terlatih</h3>
                                    <h3 class="font-weight-bold text-white text-responsive">Tidak perlu menunggu lama untuk pesanan anda</h3>
                                    <p class="fw-light text-white text-responsive">Dalam 3 menit Pesanan anda akan sudah sampai di meja anda</p>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./images/T_slides_3.jpg" alt="Third slide">
                                <div class="carousel-caption py-5">
                                <div class="row py-5 ">
                                    <h1 class="font-weight-bold text-white text-center">Selamat Datang</h1>
                                    <h1 class="text-white text-center fs-8">Dan</h1>
                                    <h1 class="font-weight-bold text-white text-responsive">Selamat Menikmati</h1>
                                    <h2 class="fw-light text-white text-responsive">Waktu Anda Disini</h2>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <article>
                <div class="container">
                    <div class="row align-items-center py-5">
                        <div>
                            <h3 class="mb-4 text-center">
                                Cafe 30
                            </h3>
                            <p class="fw-light fs-8 text-center">
                            Cafe 30 adalah sebuah tempat yang menyediakan makanan dan minuman, namun utamanya menjual kopi. Umumnya, yang disebut dengan  30 coffee, adalah kedai minum kopi yang tempatnya didesain menarik dan menyediakan banyak menu kopi. Sejumlah tempat juga menyediakan menu kopi dengan berbagai macam cara menyeduhnya. Dari tubruk, french press, aeropress, vietnam drip, v60, chemex dan lain-lain. Menu yang akan sering ditemui di  30 coffee antara lain adalah Americano, Cappuccino, Mocha, Macchiato maupun latte.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </div>
    <footer>
            <div class="bg-dark">
                <div class="container">
                    <div class="footer-container-top text-white">
                        
                        <div class="footer-content">
                            <h4>Cafe 30</h4>
                            <a href="./index.php" class="nav-link fw-light fs-6">Home</a>
                            <a href="./about.php" class="nav-link fw-light fs-6">About Us</a>
                            <a href="./menu.php" class="nav-link fw-light fs-6">Menu</a>
                            <a href="./contact_us.php" class="nav-link fw-light fs-6">Team and Contact</a>
                        </div>
                        <div class="footer-content">
                            <h4>Contact</h4>
                            <div class="row align-items-start mt-4">
                                <div class="col-1">
                                    <img src="/assets/icons/location.svg" alt="" width="16px">
                                </div>
                                <div class="col-11 fw-light fs-6">
                                    Yogyakarta, Sleman
                                </div>
                            </div>
                            <div class="row align-items-start mt-2">
                                <div class="col-1">
                                    <img src="/assets/icons/email.svg" alt="" width="16px">
                                </div>
                                <div class="col-11 fw-light fs-6">
                                    <p>didiaryadi@gmail.com</p>
                                    <p>admin@gmail.com</p>
                                </div>
                            </div>
                            <div class="row align-items-start mt-2">
                                <div class="col-1">
                                    <img src="/assets/icons/phone.svg" alt="" width="16px">
                                </div>
                                <div class="col-11 fw-light fs-6">
                                    <p>+62 824 991 2385</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-white text-center p-3 footer-container-bottom">
                <span>©All rights reserved.</span>
            </div>
        </footer>
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>