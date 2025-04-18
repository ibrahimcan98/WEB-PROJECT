<?php
//echo "php is working..."; // This line is just for testing if PHP is running (it's currently disabled)

// Show all PHP errors (useful for debugging)
ini_set('display_errors', 1); // Turn on error messages
error_reporting(E_ALL);       // Show all types of errors

// Connect to the MySQL database
// Parameters: hostname, username, password, database name
$conn = mysqli_connect("localhost", "root", "", "sewa");

// Set character encoding to UTF-8 (important for reading special characters like Turkish letters)
mysqli_set_charset($conn, "UTF8");

// Check if the connection to the database failed
if (mysqli_connect_errno() > 0) {
    // If there is an error, stop the code and show the error number
    die("No Connection. Error number: " . mysqli_connect_errno());
    
}
?>