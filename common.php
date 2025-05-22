<?php
    // Database connection details
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'store';

    // Create a database connection
    $con = mysqli_connect($host, $username, $password, $database);

    // Check if the connection is successful
    if (!$con) {
        die('Could not connect: ' . mysqli_error());
    }
?>