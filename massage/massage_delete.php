<?php

require_once('../include/db.php'); 
$ID=$_GET['msg_id'];
$delete_massage= "DELETE FROM massages WHERE ID=$ID " ;

mysqli_query($db_connect,$delete_massage); 

header('location:massage_show.php ');


?>