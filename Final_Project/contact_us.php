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
    <link rel="stylesheet" href="./css/contact.css">
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
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="./images/img1.jpg" alt="Kurniawati Fitria" style="width:420px; padding: 40px">
                    <div class="container">
                        <h2>Kurniawati Fitria</h2>
                        <p class="title">20.11.3710</p>
                        <p>Typewriter</p>
                        <p>Kurniawati@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="./images/img2.jpeg" alt="Dhea Marenty Suwarno" style="width:420px; padding: 40px">
                    <div class="container">
                        <h2>Dhea Marenty Suwarno</h2>
                        <p class="title">20.11.3725</p>
                        <p>UI/UX</p>
                        <p>DheadMarenty@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="./images/img3.jpeg" alt="Nata Parahita" style="width:420px; padding: 40px">
                    <div class="container">
                        <h2>Nata Parahita</h2>
                        <p class="title">20.11.3707</p>
                        <p>Typewriter</p>
                        <p>nayaparahita@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="./images/img4.JPG" alt="Diva Aulia Rahma" style="width:420px; padding: 40px">
                    <div class="container">
                        <h2>Diva Aulia Rahma</h2>
                        <p class="title">20.11.3680</p>
                        <p>Typewriter</p>
                        <p>DivaAulia@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="./images/img5.jpeg" alt="Irfan" style="width:420px; padding: 40px">
                    <div class="container">
                        <h2>Muhammad Irfan Ahmad</h2>
                        <p class="title">20.11.3728</p>
                        <p>UI/UX</p>
                        <p>MuhammadIrfan@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="./images/img6.jpg" alt="John" style="width:420px; padding: 40px">
                    <div class="container">
                        <h2>Aowen Abraham Nati</h2>
                        <p class="title">20.11.3674</p>
                        <p>Backend Dev</p>
                        <p>AbrahamOwen@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="./images/img7.jpg" alt="Didi" style="width:420px; padding: 40px">
                    <div class="container">
                        <h2>Didi Aryadi</h2>
                        <p class="title">20.11.3707</p>
                        <p>Frontend/Backend Dev/p>
                        <p>didiaryadi@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-container">
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
    </div>
    <script src="script/script.js"></script>
</body>

</html>