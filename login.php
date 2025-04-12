<?php
 include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password values from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL query to select user data by email
    $stmt = $conn->prepare("SELECT * FROM signin WHERE email = ?");
    
    // Bind the email parameter to the query (s indicates string type)
    $stmt->bind_param("s", $email);
    
    // Execute the prepared statement
    $stmt->execute();
    
    // Get the result of the query
    $result = $stmt->get_result();

    // Check if a user was found with the given email
    if ($result->num_rows === 1) {
        // Fetch the user data as an associative array
        $user = $result->fetch_assoc();

        // Verify the password entered by the user against the hashed password in the database
        if (password_verify($password, $user['password'])) {
            // If password matches, create session variables to store user data
            $_SESSION['user_id'] = $user['id']; // Store user ID in session
            $_SESSION['user_email'] = $user['email']; // Store user email in session
            
            // Display a success message and redirect the user to another page
            echo "Login successful! Welcome, " . $user['email'];
            header("Location: justfooterandnav.html");
            exit; // Ensure that the script stops executing after the redirect
        } else {
            // If the password does not match, display an error message
            echo "Incorrect password.";
        }
    } else {
        // If no user is found with the given email, display an error message
        echo "No user found with this email.";
    }

    // Close the prepared statement to free up resources
    $stmt->close();
}

// Close the database connection
mysqli_close($conn);
?>
