<?php
session_start();
require_once ('../include/db.php');
$ID= $_POST['id'];
$edit_head=$_POST['edit_head'];
$edit_detail=$_POST['edit_detail'];
$up_query="UPDATE banner SET Head='$edit_head', Detail='$edit_detail' WHERE ID=$ID";
mysqli_query($db_connect, $up_query);
$update_image=$_FILES['edit_image']['name'];
if ($update_image){
    $up_image_size=$_FILES['edit_image']['size'];
    if ($up_image_size<=2000000){
        $up_imgae_name= $_FILES ['edit_image']['name'];
        $explode=explode('.',$up_imgae_name) ;
        $up_image_ext=end($explode);
        $allow_ext= array('png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG');
        if (in_array($up_image_ext, $allow_ext)){
            $select_query= "SELECT images_location FROM banner WHERE ID=$ID";
            $from_db= mysqli_query($db_connect, $select_query);
            $assoc= mysqli_fetch_assoc($from_db);
            unlink("../". $assoc['images_location']);
            $new_name="$ID". "." . "$up_image_ext";
            $up_location= "../upload/banners/".$new_name;
            move_uploaded_file($_FILES['edit_image']['tmp_name'], $up_location);
            $db_location="upload/banners/".$new_name;
            $update_query = "UPDATE banner SET images_location='$db_location' WHERE ID=$ID";
            mysqli_query($db_connect, $update_query);
            header('location: banner.php');
            


        }
        else{
            $_SESSION ['banner_error']= "This file is not allow "; 
            header('location: banner.php');
        }
        
    }
    else{
        $_SESSION ['banner_error']= "Image must be under 2mb";
        header('location: banner.php');
    }
}
else{
    header('location: banner.php');
}



?>