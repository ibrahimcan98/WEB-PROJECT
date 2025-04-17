<?php
$page_title = "Sign Up";
include("./nav.php");
?>
<!-- MAIN SECTION -->
<main id="signup_container">
    <!-- Section leading to login page -->
    <aside class="side_container signup">
      <h1>Hello , Welcome to Ivana's World!</h1>
      <p>Already have an account?</p>
      <a href="login.php"><button>Log In</button></a>
    </aside>
    <!-- Sign in form -->
    <section class="auth_container sigin_auth">
      <form action="signup.php" method="POST">
        <h1>Sing Up</h1>
        <!-- Input fields -->
        <ul>
          <li class="input-place">
            <input type="text" placeholder="UserName" required minlength="2" maxlength="15" name="userName" required/>
            <i class="fa-solid fa-user"></i>
            </i>
          </li>
          <li class="input-place">
            <input type="email" placeholder="Email" name="email" required />
            <i class="fa-solid fa-envelope"></i>
          </li>
          <li class="input-place">
            <input type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password"  id="passwordInput" required />
            <i class="fa-solid fa-lock"></i>

          </li>
          <li id="passwordRules" class="password-rules">
            <p> Your password should:
              <ol>
                <li>Consist of 8 symbols</li>
                <li>Have at least one uppercase letter</li>
                <li>Have at least one lowercase letter</li>
                <li>Have at least one digit</li>
              </ol>
            </p>
          </li>
        </ul>
        <!-- Sign up button -->
        <button type="submit" name="submit">Sign up</button>
      </form>

      <!-- Alternative sign up with social media accounts (Google, Facebook) -->
      <h1>Sign up with Social Media</h1>
      <section class="socialmedia">
        <i class="fa-brands fa-google"></i>
        <i class="fa-brands fa-facebook-f"></i>
      </section>
    </section>
  </main>
  
<?php
include("./footer.php");
?>