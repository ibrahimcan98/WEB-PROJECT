<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // HATALI KULLANIM: $email doğrudan SQL'e gömülmemeli, prepared statement kullanılmalı
  $query = $conn->prepare("SELECT name, email, password FROM signin WHERE email = ?");
  $query->bind_param("s", $email);
  $query->execute();
  $result = $query->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['name'] = $user['name'];
      $_SESSION['email'] = $user['email'];
      header("Location: justfooterandnav.php");
      exit;
    } else {
      echo "Şifre yanlış!";
    }
  } else {
    echo "Kullanıcı bulunamadı.";
  }

  $query->close();
  $conn->close();
}
?>
