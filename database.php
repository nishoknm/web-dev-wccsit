<?php
    $dsn = 'mysql:host=localhost;dbname=wccsit';
    $username = 'root';
    $password = '';
    $servername = "localhost";
    $dbname = "wccsit";

    $db = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (mysqli_connect_errno())
    {
        $error_message = mysqli_connect_error();
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        include('database_error.php');
        exit();
    }
?>
