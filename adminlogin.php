<?php

    session_start();
    // Get the product data

    $email = $_POST['uname'];
    $pass = $_POST['pass'];

    // If valid, add the product to the database
    require_once('database.php');
    $query = "SELECT password, email FROM admin WHERE email = '$email' AND password = '$pass'";

    $users = $db->query($query);

    $user = mysqli_fetch_assoc($users);

    $newemail = $user['email'];

    $_SESSION["admin"] = $newemail;

    header("Location: {$_SERVER["HTTP_REFERER"]}");
?>
