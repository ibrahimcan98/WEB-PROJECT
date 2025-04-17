
<?php

session_start();


$name = "";
$email = "";

// Eğer oturumda username ve email varsa, atayalım
if (isset($_SESSION['Username']) && isset($_SESSION['Email'])) {
  $name = $_SESSION['Username'];
  $email = $_SESSION['Email'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:opsz,wght@10..72,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />

  <!-- Css -->
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/navbar.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/tablet.css" />
  <link rel="stylesheet" href="./css/desktop.css" />
</head>

<body>
  <!-- NAVBAR -->
  <header>
    <nav id="navbar">
      <a href="index.html" class="nav-branding" target="_blank"><img src="./media/logo.webp" alt="Logo" /></a>

      <ul class="nav-menu">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="booking.php" class="nav-link">Book</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="service.php" class="nav-link">Service</a></li>
        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
      </ul>

      <section class="account">
        <a href="#" class="nav-link user"><i class="fa-regular fa-user"></i></a>
      </section>

      <ul class="logsing-menu">
        <li class="logsing-item"><a href="login.html">Log out</a></li>
      </ul>

      <aside class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </aside>
    </nav>
  </header>

  <!-- MAIN SECTION -->
  <main style="padding: 2rem;">
    <?php if (!empty($name) && !empty($email)): ?>
      <h1>Welcome, <?php echo htmlspecialchars($name); ?>!</h1>
      <p>Email: <?php echo htmlspecialchars($email); ?></p>
    <?php else: ?>
      <h1>Welcome, Guest!</h1>
      <p>Please <a href="login.html">log in</a> to view your account.</p>
      <h1>Welcome, <?php echo htmlspecialchars($name); ?>!</h1>
    <?php endif; ?>
  </main>

  <!-- put image here-->


  <!-- FOOTER -->
  <footer>
    <div id="container">
      <address class="contact">
        <h3>Contact Me:</h3>
        <p>+353 01 234 56 78</p>
        <p>first.last@domain.com</p>
      </address>
      <article class="pages">
        <nav class="footer-menu">
          <li class="footer-item"><a href="about.html" class="footer-link">About Me</a></li>
          <li class="footer-item"><a href="service.html" class="footer-link">Service</a></li>
          <li class="footer-item"><a href="gallery.html" class="footer-link">Gallery</a></li>
          <li class="footer-item"><a href="login.html" class="footer-link">Log in</a></li>
        </nav>
      </article>
      <article class="footer-links">
        <h3>Follow me:</h3>
        <section class="social-media">
          <a href="https://www.instagram.com/ivanatumbeva_photo/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/ivana.tumbeva" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </section>
        <a class="button_dark" href="booking.html">Book</a>
      </article>
    </div>
    <section class="madeby">® Two Turk One Rus, 2025</section>
  </footer>

  <!-- Script -->
  <script src="./javascript/script.js"></script>
</body>
</html>
