<!DOCTYPE html>
<html lang="en">

<head>
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
</head>

<body>
  <!-- NAVBAR -->
  <header>
    <!-- Navigation menu -->
    <nav id="navbar">
      <!-- Site logo leading to main (index) page -->
      <a href="index.html" class="nav-branding"><img src="./media/logo.webp" alt="Website logo Ivana Photographer" /></a>

      <!-- Menu links to other website pages -->
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="booking.html" class="nav-link">Book</a>
        </li>
        <li class="nav-item">
          <a href="about.html" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="service.html" class="nav-link">Service</a>
        </li>
        <li class="nav-item">
          <a href="gallery.html" class="nav-link">Gallery</a>
        </li>
      </ul>

      <!-- Button leading to login or sign in page -->
      <section class="account">
        <a href="#" class="nav-link user"><i class="fa-regular fa-user"></i></a>
      </section>
      <ul class="logsing-menu">
        <li class="logsing-item"><a href="login.html">Log In</a></li>
        <li class="logsing-item"><a href="signin.html">Sign In</a></li>
      </ul>
      <!-- Hamburger menu section for shorter screens -->
      <aside class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </aside>
    </nav>
  </header>