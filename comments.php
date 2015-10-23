<?php

    session_start();
    // Get the product data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

    // If valid, add the product to the database
    require_once('database.php');
    $query = "INSERT INTO comments
        (fname, lname, email, number, subject, comment)
              VALUES
        ('$fname', '$lname', '$email', '$number', '$subject', '$comment')";
    $db->prepare($query)->execute();  

    header("Location: {$_SERVER["HTTP_REFERER"]}");
?>
