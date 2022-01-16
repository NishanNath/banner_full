<?php
    require_once('../include/db.php');
    $id=$_GET['id'];
    $active_query="UPDATE banner SET active_status=1 WHERE ID=$id";
    mysqli_query($db_connect, $active_query);
    header('location: banner.php');
?>