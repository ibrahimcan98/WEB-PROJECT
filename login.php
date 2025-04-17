<?php
$page_title = "Login";
include("app/nav.php");
?>

    <!-- MAIN SECTION -->
    <main id="login_container">
      <section class="auth_container login_auth">
        <form action="login.php" method="POST">
          <h1>Login</h1>
          <!-- input fields -->
          <ul>
            <li class="input-place">
              <input type="email" placeholder="Email" name="email" required />
              <i class="fa-solid fa-envelope"></i>
            </li>
            <li class="input-place">
              <input
                type="password"
                placeholder="Password"
                name="password"
                required
              />
              <i class="fa-solid fa-lock"></i>
            </li>
            <li>
              <a href="#">Forgot your password?</a>
            </li>
          </ul>
          <button type="submit" name="submit">Login</button>
        </form>

        <!-- Alternative log in with social media accounts (Google, Facebook) -->
        <h1>Login with Social Media</h1>
        <section class="socialmedia">
          <i class="fa-brands fa-google"></i>
          <i class="fa-brands fa-facebook-f"></i>
        </section>
      </section>

      <!-- Section leading to sign up page -->
      <aside class="side_container login">
        <h1>Hello , Welcome to Ivana's World!</h1>
        <p>Don't have an account?</p>
        <a href="signup.php"><button>Sing Up</button></a>
      </aside>
    </main>

<?php
include("app/footer.php");
?>