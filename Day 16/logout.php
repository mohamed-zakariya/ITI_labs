<?php
    session_start();
    session_unset();
    setcookie('name', $_SESSION['username'], time() - 3600, "/", "", 0);
    session_destroy();
    header('location:login.php');
?>