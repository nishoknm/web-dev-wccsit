<?php

    session_start();
    if(isset($_POST['webupload']))
    {    
             
        $file = $_FILES['file']['name'];
        $file_title = $_POST['title'];
        $email = $_SESSION["id"];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="uploads/";
        move_uploaded_file($file_loc,$folder.$file);

        // If valid, add the product to the database
        require_once('database.php');
        $query = "INSERT INTO paper(title,file,type,size,email) VALUES('$file_title', '$file','$file_type','$file_size', '$email')";
        $db->prepare($query)->execute(); 
    }
    header("Location: {$_SERVER["HTTP_REFERER"]}");
?>
