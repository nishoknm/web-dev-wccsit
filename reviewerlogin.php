<?php

    session_start();
    // Get the product data

    $email = $_POST['uname'];
    $pass = $_POST['pass'];

    // If valid, add the product to the database
    require_once('database.php');
    $query = "SELECT password, email FROM reviewer WHERE email = '$email' AND password = '$pass'";

    $reviewers = $db->query($query);

    $reviewer = mysqli_fetch_assoc($reviewers);

    $newemail = $reviewer['email'];

    $_SESSION["id"] = $newemail;

    $_SESSION["reviewer"] = $newemail;

    header("Location: {$_SERVER["HTTP_REFERER"]}");
?>
