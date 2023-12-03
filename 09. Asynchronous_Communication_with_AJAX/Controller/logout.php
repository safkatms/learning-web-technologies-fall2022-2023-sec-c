<?php
    session_start();
    unset($_SESSION['flag']);
    
    setcookie('name', $name, time() - 1000, '/');
    setcookie('username', $username, time() - 1000, '/');

    header('location: ../index.php');
?>