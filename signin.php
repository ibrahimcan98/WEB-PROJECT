<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect the data
    $user_name = trim($_POST['userName']);
    $user_email = trim($_POST['email']);
    $user_password = $_POST['password'];

    // if it s not empty
    if (!empty($user_name) && !empty($user_email) && !empty($user_password)) {
        // password hash
        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

        // query
        $query = "INSERT INTO signin (name, email, password) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $query)) {
            
            mysqli_stmt_bind_param($stmt, "sss", $user_name, $user_email, $hashed_password);

            // run the query
            if (mysqli_stmt_execute($stmt)) {
                // direct to
                header("Location: justfooterandnav.php");
                exit;
            } else {
                // write error
                echo "something went wrong on query: " . mysqli_error($conn);
            }

            // closing query
            mysqli_stmt_close($stmt);
        } else {
            echo "something went wrong: " . mysqli_error($conn);
        }
    } else {
        echo "fill up all area.";
    }
}

// Bağlantıyı kapat
mysqli_close($conn);
?>


?>
