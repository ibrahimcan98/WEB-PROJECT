<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Home</title>
<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!--Css -->
<link rel="stylesheet" href="./css/style.css" />
<link rel="stylesheet" href="./css/navbar.css" />
<link rel="stylesheet" href="./css/footer.css" />
<link rel="stylesheet" href="./css/tablet.css" />
<link rel="stylesheet" href="./css/desktop.css" />
<link rel="stylesheet" href="./css/booking.css" />

</head>

<body>
    <!-- NAVBAR -->
    <header>
        <!-- Navigation menu -->
        <nav id="navbar">
            <!-- Site logo leading to main (index) page -->
            <a href="index.php" class="nav-branding"><img src="./media/logo.webp"
                    alt="Website logo Ivana Photographer" /></a>

            <!-- Menu links to other website pages -->
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="booking.php" class="nav-link">Book</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="service.php" class="nav-link">Service</a>
                </li>
                <li class="nav-item">
                    <a href="gallery.php" class="nav-link">Gallery</a>
                </li>
            </ul>

            <!-- Button leading to login or sign in page -->
            <section class="account">
                <a href="#" class="nav-link user"><i class="fa-regular fa-user"></i></a>
            </section>
            <ul class="logsing-menu">
                <?php if (isset($_SESSION['Username'])): ?>
                    <li class="logsing-item"><a href="logout.php">Sign out</a></li>
                <?php else: ?>
                    <li class="logsing-item"><a href="login.php">Log In</a></li>
                    <li class="logsing-item"><a href="signin.php">Sign In</a></li>
                    <?php endif ?>
            </ul>
            <!-- Hamburger menu section for shorter screens -->
            <aside class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </aside>
        </nav>
    </header>