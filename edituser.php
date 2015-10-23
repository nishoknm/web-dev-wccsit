<?php

    session_start();
        
    // If valid, add the product to the database
    require_once('database.php');

    if($_POST['websubmit'] == 'Delete')
    {
        $email = $_POST['eemail'];
        $query ="DELETE FROM users WHERE email='$email'";
        $db->prepare($query)->execute();
    }
    else if($_POST['websubmit'] == 'Update')
    {
        // Get the product data
        $fname = $_POST['efName'];
        $lname = $_POST['elName'];
        $email = $_POST['eemail'];
        $number = $_POST['enumber'];
        $address = $_POST['eaddress'];
        $sex = $_POST['esex'];
        $pass = $_POST['epassword'];
        $attendee = $_POST['eattendee'];

        $query = "UPDATE users SET fname = '$fname', attendee = '$attendee', lname = '$lname', password = '$pass', number = '$number', address = '$address', sex = '$sex' WHERE email = '$email' ";
        $db->prepare($query)->execute(); 
    }

    if(strpos($_SERVER["HTTP_REFERER"],'#user') !== false)
    {
        $location = $_SERVER["HTTP_REFERER"];
    }
    else
    {
        $location = $_SERVER["HTTP_REFERER"]."#user";
    }

    header("Location: {$location}");
?>
