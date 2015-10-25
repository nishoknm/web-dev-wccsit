<?php
    $dsn = 'mysql:host=localhost;dbname=NishokNarasimhaMohanasamy';
    $username = 'root';
    $password = '';
    $servername = "localhost";
    $dbname = "NishokNarasimhaMohanasamy";

    $db = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (mysqli_connect_errno())
    {
        $error_message = mysqli_connect_error();
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        include('database_error.php');
        exit();
    }

    function logout() {
        // destroy the session 
        session_unset(); 
        session_destroy();
    }

    function get_reviewers() {
        global $db;
        $rquery = "SELECT * FROM reviewer";
        $reviewers = $db->query($rquery);
        return $reviewers;
    }

    function get_users() {
        global $db;
        $query = "SELECT * FROM users";
        $users = $db->query($query);
        return $users;
    }

    function get_papers() {
        global $db;
        $pquery = "SELECT * FROM paper";
        $papers = $db->query($pquery);
        return $papers;
    }

    function get_paper($email) {
        if(!empty($email))
        {
            global $db;
            $query = "SELECT * FROM paper WHERE email = '$email'";
            $papers = $db->query($query);
            return $papers;
        }
    }

    function get_review_papers() {
        global $db;
        $rpquery = "SELECT reviewpapers.email, paper.paperid, paper.title, paper.file FROM reviewpapers INNER JOIN paper ON paper.paperid = reviewpapers.paperid";
        $rpapers = $db->query($rpquery);
        return $rpapers;
    }

    function get_review_papers_by_email($email) {
        if(!empty($email))
        {
            global $db;
            $rpquery = "SELECT * FROM reviewpapers INNER JOIN paper ON paper.`paperid` = reviewpapers.`paperid` WHERE reviewpapers.`email`='$email'";
            $papers = $db->query($rpquery);
            return $papers;
        }
    }

    function get_comments() {
        global $db;
        $cquery = "SELECT * FROM comments";
        $comments = $db->query($cquery);
        return $comments;
    }

    function get_user_email_pass($email, $pass) {
        if(!empty($email) && !empty($pass))
        {
            global $db;
            $query = "SELECT password, email FROM users WHERE email = '$email' AND password = '$pass'";
            $users = $db->query($query);
            $user = mysqli_fetch_assoc($users);
            return $user;
        }
    }

    function get_user($email) {
        if(!empty($email))
        {
            global $db;
            $query = "SELECT * FROM users WHERE email = '$email'";
            $users = $db->query($query);
            $user = mysqli_fetch_assoc($users);
            return $user;
        }
    }

    function add_comments($fname, $lname, $email, $number, $subject, $comment) {
        if((!empty($fname) && !empty($lname) && !empty($email) && !empty($number) && !empty($subject) && !empty($comment)))
        {
            global $db;
            $query = "INSERT INTO comments
                (fname, lname, email, number, subject, comment)
                      VALUES
                ('$fname', '$lname', '$email', '$number', '$subject', '$comment')";
            $db->prepare($query)->execute();
        }
    }

    function add_user($fName, $pass, $lName, $email, $number, $address, $attendee, $comOrg, $sex) {
        if(!empty($fName) && !empty($pass) && !empty($lName) && !empty($email) && !empty($number) && !empty($address) && !empty($attendee) && !empty($comOrg) && !empty($sex))
        {
            global $db;
            $query = "INSERT INTO users
                    (fname, password, lname, email, number, address, attendee, company, sex)
                      VALUES
                    ('$fName', '$pass', '$lName', '$email', '$number', '$address', '$attendee', '$comOrg', '$sex')";
            $db->prepare($query)->execute();
        }
    }

    function upload_file($file_title, $file, $file_type, $file_size, $email, $file_loc) {
        if((!empty($file_title) && !empty($file) && !empty($file_type) && !empty($file_size) && !empty($email) && !empty($file_loc)))
        {
            global $db;
            $folder="uploads/";
            move_uploaded_file($file_loc,$folder.$file);

            $query = "INSERT INTO paper(title,file,type,size,email) VALUES('$file_title', '$file','$file_type','$file_size', '$email')";
            $db->prepare($query)->execute();
        }
    }

    function get_reviewer_email_pass($email, $pass) {
        if((!empty($email) && !empty($pass)))
        {
            global $db;
            $query = "SELECT password, email FROM reviewer WHERE email = '$email' AND password = '$pass'";
            $reviewers = $db->query($query);
            $reviewer = mysqli_fetch_assoc($reviewers);
            return $reviewer;
        }
    }

    function get_admin_email_pass($email, $pass) {
        if((!empty($email) && !empty($pass)))
        {
            global $db;
            $query = "SELECT password, email FROM admin WHERE email = '$email' AND password = '$pass'";
            $users = $db->query($query);
            $user = mysqli_fetch_assoc($users);
            return $user;
        }
    }

    function delete_reviewer($email) {
        if(!empty($email))
        {
            global $db;
            $query ="DELETE FROM reviewer WHERE email='$email'";
            $db->prepare($query)->execute();
        }
    }

    function update_reviewer_by_email($fname, $lname, $email, $number, $address, $sex, $pass) {
        if((!empty($fname) && !empty($lname) && !empty($email) && !empty($number) && !empty($address) && !empty($sex) && !empty($pass)))
        {
            global $db;
            $query = "UPDATE reviewer SET fname = '$fname', lname = '$lname', password = '$pass', number = '$number', address = '$address', sex = '$sex' WHERE email = '$email' ";
            $db->prepare($query)->execute();
        }
    }

    function add_reviewer($fname, $lname, $email, $number, $address, $sex, $pass) {
        if((!empty($fname) && !empty($lname) && !empty($email) && !empty($number) && !empty($address) && !empty($sex) && !empty($pass)))
        {
            global $db;
            $query = "INSERT INTO reviewer
                (fname, lname, email, password, number, address, sex)
                      VALUES
                ('$fname', '$lname', '$email', '$pass', '$number', '$address', '$sex')"; 
            $db->prepare($query)->execute();
        }
    }

    function delete_rpaper($email, $paperid) {
        if((!empty($email) && !empty($paperid)))
        {
            global $db;
            $query ="DELETE FROM reviewpapers WHERE email='$email' AND paperid='$paperid'";
            $db->prepare($query)->execute();
        }
    }

    function update_rpaper($email, $paperid, $old_email, $old_paperid) {
        if((!empty($email) && !empty($paperid) && !empty($old_email) && !empty($old_paperid)))
        {
            global $db;
            $query = "UPDATE reviewpapers SET email = '$email', paperid = '$paperid' WHERE email = '$old_email' AND paperid = '$old_paperid' ";
            $db->prepare($query)->execute();
        }
    }

    function add_rpaper($email, $paperid) {
        if((!empty($email) && !empty($paperid)))
        {
            global $db;
            $query = "INSERT INTO reviewpapers
                (email, paperid)
                      VALUES
                ('$email', '$paperid')"; 
            $db->prepare($query)->execute(); 
        }
    }

    function delete_user($email) {
        if(!empty($email))
        {
            global $db;
            $query ="DELETE FROM users WHERE email='$email'";
            $db->prepare($query)->execute();
        }
    }

    function update_user($fname, $pass, $lname, $email, $number, $address, $attendee, $sex) {
        if((!empty($fname) && !empty($pass) && !empty($lname) && !empty($email) && !empty($number) && !empty($address) && !empty($attendee) && !empty($sex)))
        {
            global $db;
            $query = "UPDATE users SET fname = '$fname', attendee = '$attendee', lname = '$lname', password = '$pass', number = '$number', address = '$address', sex = '$sex' WHERE email = '$email' ";
            $db->prepare($query)->execute();
        }
    }
?>
