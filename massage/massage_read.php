<?php

require_once('../include/db.php'); 
$ID=$_GET['msg_id'];
$update_massage_status= "UPDATE massages SET  Read_status=2 WHERE ID=$ID " ;

mysqli_query($db_connect,$update_massage_status); 

header('location:massage_show.php ');


?>