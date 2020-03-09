<?php
    /* Your password */
    $password = getenv('PELIN_PASSWORD') ?: die('"PELIN_PASSWORD" config var in found in env!');

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        // Password not set or incorrect. Send to login.php.
        header('Location: hub.php');
        exit;
    }
?>