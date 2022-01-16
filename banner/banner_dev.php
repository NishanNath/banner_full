<?php
    session_start();
   
    require_once('../include/db.php');
    $Head=$_POST['Head'];
    $Detail=$_POST['Detail'];
    $up_image_size=$_FILES['banner_image']['size'];
    $flag= true;
    if (!$Head){
        $flag= false;
        header('location: banner.php');
    }
    if (!$Detail){
        $flag= false;
        header('location: banner.php');
    }
    if (!$up_image_size){
        $flag= false;
        header('location: banner.php');
    }
    


    if ($flag==false){
        $_SESSION['banner_error']="All file Required";

    }
    else{
        if ($up_image_size<=2000000){
            $up_imgae_name= $_FILES ['banner_image']['name'];
            $explode=explode('.',$up_imgae_name) ;
            $up_image_ext=end($explode);
            $allow_ext= array('png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG');
            if (in_array($up_image_ext, $allow_ext)){
                $insert_query="INSERT INTO banner(Head, Detail, images_location) VALUES ('$Head','$Detail', 'hudai' )";
                $from_db=mysqli_query($db_connect, $insert_query);
                $id_from_db= mysqli_insert_id($db_connect);
                $new_name="$id_from_db". "." . "$up_image_ext";
                $up_location= "../upload/banners/".$new_name;
                move_uploaded_file($_FILES['banner_image']['tmp_name'], $up_location);
                $db_location="upload/banners/".$new_name;
                $update_query = "UPDATE banner SET images_location='$db_location' WHERE ID=$id_from_db";
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

?>