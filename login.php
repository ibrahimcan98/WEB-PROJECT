<?php
// Set the title of the page
$page_title = "Login";

// Include the database connection and the navigation bar
include("./connection.php");
include("./nav.php");
//var_dump($_POST);
// Check if the form was submitted by checking if "login" button was clicked
if (isset($_POST['submit'])){
    // Get the email and password entered by the user
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Prepare a SQL query to find a user with the entered email
    $stmt = $conn->prepare("SELECT UserID, Username, Email, Passcode FROM Users WHERE Email = ?");
    $stmt->bind_param("s", $email); // Bind the email to the query
    $stmt->execute(); // Run the query
    // Get the result of the query
    $result = $stmt->get_result();
    //var_dump($result);
    $user = $result->fetch_assoc();
    //var_dump($user);
    // If a user was found with that email
    if ($result) {
        // Check if the entered password is correct (match with the hashed password)
        if ($user && password_verify($password, $user['Passcode'])) {
            // If correct, save user info to session variables
            $_SESSION['UserID'] = $user['UserID'];
            $_SESSION['Username'] = $user['Username'];
            $_SESSION['Email'] = $user['Email'];
            // Redirect the user to the account page
            header("Location: account.php");
        } else {
            // If password is wrong, show error message
            echo "Incorrect password.";
        }
    } else {
      //var_dump($_SESSION);
        // If no user found with that email, show error message
        echo "No user found with that email.";
    }
} 
else 
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
include("./footer.php");
?>