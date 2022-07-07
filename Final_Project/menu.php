<?php
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'cafe_30';

// Server is localhost with
// port number 3306
$servername = 'localhost:3306';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM menu ORDER BY id ASC ";
$result = $mysqli->query($sql);
$mysqli->close();
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
                    <a class="navbar-brand" href="#">
                        <img src="./images/coffee_icon.png" alt="Coffee" width="90px"></a>

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
        <main>
            <section>
                <h1>Menu</h1>
                <!-- TABLE CONSTRUCTION -->
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    // LOOP TILL END OF DATA
                    while ($rows = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['description']; ?></td>
                            <td><?php echo $rows['price']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </section>
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
    </div>
</body>

</html>