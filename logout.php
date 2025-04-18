<?php
    session_start();
    session_unset();        // cleaning session
    session_destroy();      // close session
    //direct to index php
    header("Location: index.php");
?>