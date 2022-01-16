<?php
session_start();
require_once ("../include/db.php");
$Name=$_POST['Name'];
$Email= filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
$Subject=$_POST['Subject'];
$Massage=$_POST['Massage'];

$flag=true;

if(!$Name){
    $_SESSION['Name_error']="This field is requierd!";
    $flag=false;
    
}
if(!$Email){
    $_SESSION['Email_error']="This field is requierd!";
    $flag=false;
    
}if(!$Subject){
    $_SESSION['Subject_error']="This field is requierd!";
    $flag=false;
    
}if(!$Massage){
    $_SESSION['Massage_error']="This field is requierd!";
    $flag=false;
    
}

if ($flag){
    $massage_insert= "INSERT INTO massages (Name, Email, Subject, Massage) VALUES('$Name','$Email', '$Subject', '$Massage')" ;
    mysqli_query($db_connect, $massage_insert);
    $_SESSION['massage_success']="Your massage sent seccessfully";
    header('location: ../index.php');
    
}
else{
    header('location: ../index.php');
}




?>