<?php

    session_start();
    // Get the product data
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $attendee = $_POST['attendee'];
    $comOrg = $_POST['comOrg'];
    $pass = $_POST['password'];
    $sex = $_POST['sex'];

    // If valid, add the product to the database
    require_once('../database.php');
    $query = "INSERT INTO users
        (fname, password, lname, email, number, address, attendee, company, sex)
              VALUES
        ('$fName', '$pass', '$lName', '$email', '$number', '$address', '$attendee', '$comOrg', '$sex')";
    $db->exec($query);

    $_SESSION["id"] = $email;

    include('index.php');
?>
