<?php
    require_once('../include/db.php');
    $id=$_GET['id'];
    $de_active_query="UPDATE banner SET active_status=0 WHERE ID=$id";
    mysqli_query($db_connect, $de_active_query);
    header('location: banner.php');



?>