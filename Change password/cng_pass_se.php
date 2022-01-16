<?php
session_start();
require_once('../include/db.php');


//print_r($_POST);


$old_pass= $_POST['old_pass'];
$new_pass= $_POST['new_pass'];
$confirm_pass=$_POST['confirm_pass'];
$en_pass=md5($old_pass);
$en_new_pass= md5($new_pass);
$email=$_SESSION['admin_email'];
$pass_query="SELECT COUNT(Password) AS total_users FROM users WHERE Email='$email'";
$from_db= mysqli_query($db_connect, $pass_query);
$assoc= mysqli_fetch_assoc($from_db);

if($old_pass==null||$new_pass==null||$confirm_pass==null){
    $_SESSION["pass_error"]="all field required"; 
    header('location:cng_pass.php');
}
else{
    if ($assoc>=1){
        if ( $new_pass==$confirm_pass){
            if(strlen($new_pass)>7){
                $uppercase= preg_match('@[A-Z]@', $new_pass);
                $lowercase= preg_match('@[a-z]@', $new_pass);
                $num=preg_match('@[0-9]@',$new_pass);
                $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
                $special= preg_match($pattern, $new_pass);
            
                if($uppercase==1 && $lowercase==1 && $num==1 && $special==1){
                    if($new_pass==$old_pass){
                        $_SESSION["pass_error"]="Please use a new password"; 
                        header('location:cng_pass.php');
                    }
                    else{
                       $up_pass="UPDATE users SET Password='$en_new_pass' WHERE Email='$email'";
                       mysqli_query($db_connect, $up_pass);
                       header('location: ../login.php');
                    }
                      
                            
                }
                else{
                    $_SESSION['pass_error']= " Please Enter 1 capital latter, 1 lower latter, 1 number, 1 special cherecter";
                    header('location:cng_pass.php');
                }
            }
                    
            else{
                $_SESSION["pass_error"]="Password must be 8 digit ";  
                header('location:cng_pass.php');
            }
        }
        else{
            $_SESSION["pass_error"]="New and confirm password are not matched";  
            header('location:cng_pass.php');
        }
    }
    else{
        $_SESSION["pass_error"]="Old pass is not matched";
        header('location:cng_pass.php');
    }
  
}



?>