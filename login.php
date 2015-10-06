<?php

    session_start();
    // Get the product data

    $email = $_POST['email'];
    $pass = $_POST['password'];

    // If valid, add the product to the database
    require_once('database.php');
    $query = "SELECT password, email FROM users WHERE email = '$email' AND password = '$pass'";

    $users = $db->query($query);

    $user = $users->fetch();

    $newemail = $user['email'];

    $_SESSION["id"] = $newemail;

    header("Location: {$_SERVER["HTTP_REFERER"]}");
?>
