<?php
    require_once('../include/db.php');
    $id=$_GET['id'];
    $delete_query="DELETE FROM banner WHERE ID=$id";
    mysqli_query($db_connect, $delete_query);
    header('location: banner.php');
?>