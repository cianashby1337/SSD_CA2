<?php
    $dsn = 'mysql:host=localhost;dbname=D00241714';
    $username = 'D00241714';
    $password = 'QxXl2fob';

    // $dsn = 'mysql:host=localhost;dbname=d00241714';
    // $username = 'root';
    // $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>