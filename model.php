<?php

    session_start();
        
    // If valid, add the product to the database
    require_once('database.php');
    $extender = "";

    if(isset($_POST['websubmit']))
    { 
        $action = $_POST['websubmit'];
        switch ($action) {

            case "logout":
                logout();
                break;

            case "login":
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $user = get_user_email_pass($email, $pass);
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
                add_comments($fname, $lname, $email, $number, $subject, $comment);
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
                add_user($fName, $pass, $lName, $email, $number, $address, $attendee, $comOrg, $sex);
                $_SESSION["id"] = $email;
                break;

            case "upload":
                $file = $_FILES['file']['name'];
                $file_title = $_POST['title'];
                $email = $_SESSION["id"];
                $file_loc = $_FILES['file']['tmp_name'];
                $file_size = $_FILES['file']['size'];
                $file_type = $_FILES['file']['type'];
                upload_file($file_title, $file, $file_type, $file_size, $email, $file_loc);
                break;

            case "reviewer_login":
                $email = $_POST['uname'];
                $pass = $_POST['pass'];
                $reviewer = get_reviewer_email_pass($email, $pass);
                $newemail = $reviewer['email'];
                $_SESSION["id"] = $newemail;
                $_SESSION["reviewer"] = $newemail;
                break;

            case "admin_logout":
                logout();
                break;

            case "admin_login":
                $email = $_POST['uname'];
                $pass = $_POST['pass'];
                $user = get_admin_email_pass($email, $pass);
                $newemail = $user['email'];
                $_SESSION["admin"] = $newemail;
                break;

            case "delete_reviewer":
                $email = $_POST['uemail'];
                delete_reviewer($email);
                $extender = "#reviewer";
                break;

            case "update_reviewer":
                $fname = $_POST['ufName'];
                $lname = $_POST['ulName'];
                $email = $_POST['uemail'];
                $number = $_POST['unumber'];
                $address = $_POST['uaddress'];
                $sex = $_POST['usex'];
                $pass = $_POST['upassword'];
                update_reviewer_by_email($fname, $lname, $email, $number, $address, $sex, $pass);
                $extender = "#reviewer";
                break;

            case "add_reviewer":
                $fname = $_POST['fName'];
                $lname = $_POST['lName'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $address = $_POST['address'];
                $sex = $_POST['sex'];
                $pass = $_POST['password'];
                add_reviewer($fname, $lname, $email, $number, $address, $sex, $pass);
                $extender = "#reviewer";
                break;

            case "delete_rpaper":
                $email = $_POST['rfemail'];
                $paperid = $_POST['rftitle'];
                delete_rpaper($email, $paperid);
                $extender = "#rpaper";
                break;

            case "update_rpaper":
                $email = $_POST['rfemail'];
                $paperid = $_POST['rftitle'];
                $old_email = $_POST['old_email'];
                $old_paperid = $_POST['old_paperid'];
                update_rpaper($email, $paperid, $old_email, $old_paperid);
                $extender = "#rpaper";
                break;

            case "add_rpaper":
                $email = $_POST['email'];
                $paperid = $_POST['title'];
                add_rpaper($email, $paperid);
                $extender = "#rpaper";
                break;

            case "delete_user":
                $email = $_POST['eemail'];
                delete_user($email);
                $extender = "#user";
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
                update_user($fname, $pass, $lname, $email, $number, $address, $attendee, $sex);
                $extender = "#user";
                break;

            default:
                $location = $_SERVER["HTTP_REFERER"];
        }
    }
    $location = strpos($_SERVER["HTTP_REFERER"],'#') ? $_SERVER["HTTP_REFERER"] : $_SERVER["HTTP_REFERER"].$extender;
    header("Location: {$location}");
?>
