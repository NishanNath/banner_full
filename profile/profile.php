<?php

    require_once("../admin/nav.php");
    require_once("../admin/check_admin.php");
    $email=$_SESSION['admin_email'];
    $get_data = "SELECT * FROM users WHERE Email='$email'";
    $from_db= mysqli_query( $db_connect, $get_data);
    $assoc=mysqli_fetch_assoc($from_db);
    
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Your Profile</h5> 
                    <a class="btn btn-sm btn-primary" href="edit.php">Edit</a>
                </div>
                <div class="card-body ">
                <p><strong class="card-title me-3">Name:</strong> <?= $assoc['Name']?></p>
                <p><strong class="card-title me-3">E-mail:</strong> <?= $assoc['Email']?></p>
                <p><strong class="card-title me-3">Mobile No:</strong> <?= $assoc['Phone']?></p>
                
                </div>
            </div>
        </div>
    </div>
</div>