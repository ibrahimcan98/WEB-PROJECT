<?php

include("connection.php");

// Check if the form has been submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data sent via POST
  $user_name = $_POST['userName'];    // Username input from the form
  $user_email = $_POST['email'];      // Email input from the form
  $user_password = $_POST['password']; // Password input from the form

  // Hash the user's password using bcrypt before saving it to the database (for security)
  $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

  // Prepare the SQL query to insert the user's data into the 'signin' table in the database
  $query = $conn->prepare( "INSERT INTO signin (name, email, password) VALUES (?,?,?)");

  // Bind the form data (name, email, and hashed password) to the SQL query placeholders
  // The 'sss' parameter means all three values are strings
  $query->bind_param("sss", $user_name, $user_email, $hashed_password);

  // Attempt to execute the query and check if it was successful
  if ($query->execute()) {
    // If the query is successful, display a success message
    echo "added successfully";
  } else {
    // If there's an error executing the query, display the error message
    echo "error: " . $query->error;
  }
}

// Close the prepared query after execution to free up resources
$query->close();

?>
