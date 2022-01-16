<?php
   require_once("include/db.php");
   session_start();

    //verrable declaration
    $name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['Phone'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL);
    $password = $_POST['Password'];

    if($name==null||$phone==null||$email==null||$password==null){
        $_SESSION['Reg_error']= "All field Required";
        header('location:Registration_DE.php');
    }
    else{
        if (strlen($phone)==11 && $phone){
           
            $query_checking= "SELECT COUNT(Email) AS total_users FROM users WHERE Email='$email'";             
            $result=mysqli_fetch_assoc(mysqli_query($db_connect,$query_checking));
            if ($result['total_users']>0){
                $_SESSION['Reg_error']="Email is already registerd";
                header('location:Registration_DE.php');
            }
            else{
                $uppercase= preg_match('@[A-Z]@', $password);
                $lowercase= preg_match('@[a-z]@', $password);
                $num=preg_match('@[0-9]@',$password);
                $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
                $special= preg_match($pattern, $password);
                $encrypt_pass=md5($password);
                if(strlen($password)>7){
                    if($uppercase==1 && $lowercase==1 && $num==1 && $special==1){
                        $insert_query="INSERT INTO users (name,phone,email,password)VALUES('$name','$phone','$email','$encrypt_pass')";
                        mysqli_query($db_connect, $insert_query);
                        $_SESSION['Reg_success']="Congratulation!! Registration Done.";
                        header('location:Registration_DE.php');
                    }
                    else{
                        $_SESSION['Reg_error']= " Please Enter 1 capital latter, 1 lower latter, 1 number, 1 special cherecter";
                        header('location:Registration_DE.php');
                    }
                        
                }
                else{
                    $_SESSION['Reg_error']="Password must be 8 digit";
                    header('location:Registration_DE.php');
                }
               
            }

        }
        else{
            $_SESSION['Reg_error']= "Please Enter valid Phone number";
            header('location:Registration_DE.php');
        }
        
    }
    

 

?>