<?php
   require_once("include/db.php");
   session_start();

    //verrable declaration
    $email = filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL);
    $password = md5($_POST['Password']);

    if($email==null||$password==null){
        $_SESSION['log_error']= "All field Required";
        header('location:login.php');
    }
    else{
        $query_checking= "SELECT COUNT(*) AS total_users FROM users WHERE Email='$email' AND Password='$password'";             
        $result=mysqli_fetch_assoc(mysqli_query($db_connect,$query_checking));
        if ($result['total_users']==1){
            $_SESSION['admin_email']="$email";
            $_SESSION['user_status']="yes";
            
            
            header('location:admin/deshboard.php');
        }
        else{
            $_SESSION['log_error']= "Invalid Email or Password";
            header('location:login.php');

        }
        
        
    }
    

 

?>