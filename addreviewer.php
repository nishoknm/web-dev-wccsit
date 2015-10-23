<?php

    session_start();
        
    // If valid, add the product to the database
    require_once('database.php');

    if($_POST['websubmit'] == 'Add Reviewer')
    {
        // Get the product data
        $fname = $_POST['fName'];
        $lname = $_POST['lName'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];
        $sex = $_POST['sex'];
        $pass = $_POST['password'];

        $query = "INSERT INTO reviewer
            (fname, lname, email, password, number, address, sex)
                  VALUES
            ('$fname', '$lname', '$email', '$pass', '$number', '$address', '$sex')"; 
        $db->prepare($query)->execute();    
    }
    else if($_POST['websubmit'] == 'Delete')
    {
        $email = $_POST['uemail'];
        $query ="DELETE FROM reviewer WHERE email='$email'";
        $db->prepare($query)->execute(); 
    }
    else if($_POST['websubmit'] == 'Update')
    {
        // Get the product data
        $fname = $_POST['ufName'];
        $lname = $_POST['ulName'];
        $email = $_POST['uemail'];
        $number = $_POST['unumber'];
        $address = $_POST['uaddress'];
        $sex = $_POST['usex'];
        $pass = $_POST['upassword'];

        $query = "UPDATE reviewer SET fname = '$fname', lname = '$lname', password = '$pass', number = '$number', address = '$address', sex = '$sex' WHERE email = '$email' ";
        $db->prepare($query)->execute();  
    }

    if(strpos($_SERVER["HTTP_REFERER"],'#reviewer') !== false)
    {
        $location = $_SERVER["HTTP_REFERER"];
    }
    else
    {
        $location = $_SERVER["HTTP_REFERER"]."#reviewer";
    }

    header("Location: {$location}");
?>
