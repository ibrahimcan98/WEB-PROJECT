<?php
// echo"php is working...";

ini_set('display_errors', 1);
error_reporting(E_ALL);

$conn=mysqli_connect("localhost", "root", "", "sewa");
mysqli_set_charset($conn,"UTF8");

if (mysqli_connect_errno() > 0) {
    die("No Connection " . mysqli_connect_errno());
  }

?>