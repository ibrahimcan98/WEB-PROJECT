<?php
    include("connection.php");

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data sent via POST
    $user_date = $_POST['date'];     // The date input from the form
    $user_time = $_POST['time'];     // The time input from the form
    $user_text = $_POST['text'];     // The text input from the form
    // $user_location = $_POST['location_book'];  // This line is commented out but could be used for location data
    
    // Format the date to match the MySQL date format (YYYY-MM-DD)
    $formatted_date = date("Y-m-d", strtotime($user_date));

    // Prepare the SQL query to insert the booking data into the "booking" table
    $query = $conn->prepare("INSERT INTO booking (date, time, text) VALUES (?,?,?)");

    // Bind the form values to the prepared statement
    // The "sss" means all three parameters (date, time, and text) are strings
    $query->bind_param("sss", $formatted_date, $user_time, $user_text);

    // Execute the query and check if it was successful
    if ($query->execute()) {
        // If the query is successful, output a success message
        echo "added date: " . $formatted_date . " successfully";
    } else {
        // If there's an error with the query execution, output the error message
        echo "error: " . $query->error;
    }
}

// Close the prepared query after execution to free up resources
$query->close();
?>
