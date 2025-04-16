<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $user_name = trim($_POST['userName']);
    $user_email = trim($_POST['email']);
    $user_password = $_POST['password'];

    // Boş alan kontrolü
    if (!empty($user_name) && !empty($user_email) && !empty($user_password)) {
        // Şifreyi hashle
        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

        // Hazırlanmış sorgu
        $query = "INSERT INTO signin (name, email, password) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $query)) {
            // Parametreleri bağla
            mysqli_stmt_bind_param($stmt, "sss", $user_name, $user_email, $hashed_password);

            // Sorguyu çalıştır
            if (mysqli_stmt_execute($stmt)) {
                // Başarılıysa yönlendir
                header("Location: justfooterandnav.php");
                exit;
            } else {
                // Hata mesajı yazdır
                echo "something went wrong on query: " . mysqli_error($conn);
            }

            // Hazırlanan sorguyu kapat
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
