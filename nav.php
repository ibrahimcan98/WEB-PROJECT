<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php 
    echo "<title>".$page_title."</title>";
    ?>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/tablet.css" />
    <link rel="stylesheet" href="./css/desktop.css" />
    <?php 
    $link_style_start = '<link rel="stylesheet" href='.'"';
    $link_style_end = '"/>';
    if ($page_title == "Booking") {
       echo  $link_style_start.'./css/booking.css'.$link_style_end;
    }
    if ($page_title == "Sign Up" || $page_title == "Login") {
      echo  $link_style_start."./css/login_signup.css".$link_style_end;
    }
    if ($page_title == "Account") {
      echo '<link rel="stylesheet" href="./css/account.css">';
    }
    if ($page_title == "Gallery") {
      echo '<link rel="stylesheet" href="./css/gallery.css">';
    }
    ?>
  </head>
  <body>
    <!-- NAVBAR -->
    <header>
      <nav id="navbar">
        <a href="index.php" class="nav-branding"><img src="./media/logo.webp" alt="" /></a>
        <ul class="nav-menu">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <?php if (isset($_SESSION['Username'])): ?>
          <li class="nav-item"><a href="booking.php" class="nav-link">Book</a></li>
          <?php else: ?> 
            <li class="nav-item"><a href="login.php" class="nav-link">Book</a></li>
            <?php endif; ?>

          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="service.php" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
        </ul>
        <section class="account">
          <a href="#" class="nav-link user"><i class="fa-regular fa-user"></i></a>
        </section>
        <ul class="logsing-menu">
        <?php if (isset($_SESSION['Username'])): ?>
          <li class="logsing-item"><a href="account.php">Profile</a></li>
          <li class="logsing-item"><a href="logout.php">Log Out</a></li>

          <?php else: ?>       
            <li class="logsing-item"><a href="login.php">Log In</a></li>
            <li class="logsing-item"><a href="signup.php">Sign Up</a></li>
          <?php endif; ?>
        </ul>
        <aside class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </aside>
      </nav>
    </header>