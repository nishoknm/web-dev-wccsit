<?php

    session_start();
        
    // If valid, add the product to the database
    require_once('database.php');

    if($_POST['websubmit'] == 'Add Review Paper')
    {
        // Get the product data
        $email = $_POST['email'];
        $paperid = $_POST['title'];

        $query = "INSERT INTO reviewpapers
            (email, paperid)
                  VALUES
            ('$email', '$paperid')"; 
        $db->prepare($query)->execute();    
    }
    else if($_POST['websubmit'] == 'Delete')
    {
        $email = $_POST['rfemail'];
        $paperid = $_POST['rftitle'];
        $query ="DELETE FROM reviewpapers WHERE email='$email' AND paperid='$paperid'";
        $db->prepare($query)->execute(); 
    }
    else if($_POST['websubmit'] == 'Update')
    {
        // Get the product data
        $email = $_POST['rfemail'];
        $paperid = $_POST['rftitle'];
        $old_email = $_POST['old_email'];
        $old_paperid = $_POST['old_paperid'];
        $query = "UPDATE reviewpapers SET email = '$email', paperid = '$paperid' WHERE email = '$old_email' AND paperid = '$old_paperid' ";
        $db->prepare($query)->execute();  
    }

    if(strpos($_SERVER["HTTP_REFERER"],'#rpaper') !== false)
    {
        $location = $_SERVER["HTTP_REFERER"];
    }
    else
    {
        $location = $_SERVER["HTTP_REFERER"]."#rpaper";
    }

    header("Location: {$location}");
?>
