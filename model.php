<?php

    session_start();
        
    // If valid, add the product to the database
    require_once('database.php');
    $location = $_SERVER["HTTP_REFERER"];

    if(isset($_POST['websubmit']))
    { 
        $action = $_POST['websubmit'];
        switch ($action) {

            case "logout":
                // destroy the session 
                session_unset(); 
                session_destroy();
                break;

            case "login":
                $email = $_POST['email'];
                $pass = $_POST['password'];

                $query = "SELECT password, email FROM users WHERE email = '$email' AND password = '$pass'";
                $users = $db->query($query);
                $user = mysqli_fetch_assoc($users);
                
                $newemail = $user['email'];
                $_SESSION["id"] = $newemail;
                break;

            case "comments":
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $subject = $_POST['subject'];
                $comment = $_POST['comment'];

                $query = "INSERT INTO comments
                    (fname, lname, email, number, subject, comment)
                          VALUES
                    ('$fname', '$lname', '$email', '$number', '$subject', '$comment')";
                $db->prepare($query)->execute();
                break;

            case "signup":
                $fName = $_POST['fName'];
                $lName = $_POST['lName'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $address = $_POST['address'];
                $attendee = $_POST['attendee'];
                $comOrg = $_POST['comOrg'];
                $pass = $_POST['password'];
                $sex = $_POST['sex'];

                $query = "INSERT INTO users
                    (fname, password, lname, email, number, address, attendee, company, sex)
                          VALUES
                    ('$fName', '$pass', '$lName', '$email', '$number', '$address', '$attendee', '$comOrg', '$sex')";
                $db->prepare($query)->execute();  

                $_SESSION["id"] = $email;
                break;

            case "upload":
                $file = $_FILES['file']['name'];
                $file_title = $_POST['title'];
                $email = $_SESSION["id"];
                $file_loc = $_FILES['file']['tmp_name'];
                $file_size = $_FILES['file']['size'];
                $file_type = $_FILES['file']['type'];
                $folder="uploads/";
                move_uploaded_file($file_loc,$folder.$file);

                $query = "INSERT INTO paper(title,file,type,size,email) VALUES('$file_title', '$file','$file_type','$file_size', '$email')";
                $db->prepare($query)->execute();
                break;

            case "reviewer_login":
                $email = $_POST['uname'];
                $pass = $_POST['pass'];

                $query = "SELECT password, email FROM reviewer WHERE email = '$email' AND password = '$pass'";
                $reviewers = $db->query($query);
                $reviewer = mysqli_fetch_assoc($reviewers);
                $newemail = $reviewer['email'];

                $_SESSION["id"] = $newemail;
                $_SESSION["reviewer"] = $newemail;
                break;

            case "admin_logout":
                // destroy the session 
                session_unset(); 
                session_destroy();
                break;

            case "admin_login":
                $email = $_POST['uname'];
                $pass = $_POST['pass'];

                $query = "SELECT password, email FROM admin WHERE email = '$email' AND password = '$pass'";
                $users = $db->query($query);
                $user = mysqli_fetch_assoc($users);

                $newemail = $user['email'];
                $_SESSION["admin"] = $newemail;
                break;

            case "delete_reviewer":
                $email = $_POST['uemail'];
                $query ="DELETE FROM reviewer WHERE email='$email'";
                $db->prepare($query)->execute();

                $location = strpos($_SERVER["HTTP_REFERER"],'#reviewer') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"]."#reviewer";
                break;

            case "update_reviewer":
                $fname = $_POST['ufName'];
                $lname = $_POST['ulName'];
                $email = $_POST['uemail'];
                $number = $_POST['unumber'];
                $address = $_POST['uaddress'];
                $sex = $_POST['usex'];
                $pass = $_POST['upassword'];

                $query = "UPDATE reviewer SET fname = '$fname', lname = '$lname', password = '$pass', number = '$number', address = '$address', sex = '$sex' WHERE email = '$email' ";
                $db->prepare($query)->execute();

                $location = strpos($_SERVER["HTTP_REFERER"],'#reviewer') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"]."#reviewer";
                break;

            case "add_reviewer":
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

                $location = strpos($_SERVER["HTTP_REFERER"],'#reviewer') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"]."#reviewer";
                break;

            case "delete_rpaper":
                $email = $_POST['rfemail'];
                $paperid = $_POST['rftitle'];
                $query ="DELETE FROM reviewpapers WHERE email='$email' AND paperid='$paperid'";
                $db->prepare($query)->execute();

                $location = strpos($_SERVER["HTTP_REFERER"],'#rpaper') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"]."#rpaper";
                break;

            case "update_rpaper":
                $email = $_POST['rfemail'];
                $paperid = $_POST['rftitle'];
                $old_email = $_POST['old_email'];
                $old_paperid = $_POST['old_paperid'];
                $query = "UPDATE reviewpapers SET email = '$email', paperid = '$paperid' WHERE email = '$old_email' AND paperid = '$old_paperid' ";
                $db->prepare($query)->execute();

                $location = strpos($_SERVER["HTTP_REFERER"],'#rpaper') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"]."#rpaper";
                break;

            case "add_rpaper":
                $email = $_POST['email'];
                $paperid = $_POST['title'];

                $query = "INSERT INTO reviewpapers
                    (email, paperid)
                          VALUES
                    ('$email', '$paperid')"; 
                $db->prepare($query)->execute(); 

                $location = strpos($_SERVER["HTTP_REFERER"],'#rpaper') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"]."#rpaper";
                break;

            case "delete_user":
                $email = $_POST['eemail'];
                $query ="DELETE FROM users WHERE email='$email'";
                $db->prepare($query)->execute();

                $location = strpos($_SERVER["HTTP_REFERER"],'#user') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"]."#user";
                break;

            case "update_user":
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

                $location = strpos($_SERVER["HTTP_REFERER"],'#user') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"]."#user";
                break;

            default:
                $location = $_SERVER["HTTP_REFERER"];
        }
    }
    header("Location: {$location}");
?>
