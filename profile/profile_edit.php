<?php

    require_once("../include/db.php");
    
    session_start();
    
    $edit_name=$_POST['edit_name'];
    $edit_email=$_POST['edit_email'];
    $edit_phone=$_POST['edit_phone'];
    $email=$_SESSION['admin_email'];
    

    $up_db= "UPDATE users SET Name='$edit_name', Phone='$edit_phone' WHERE Email='$email'";

    $from_db= mysqli_query($db_connect, $up_db);
    header('location: profile.php');

?>