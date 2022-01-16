<?php

    require_once("../admin/nav.php");
    $email=$_SESSION['admin_email'];
    $get_data = "SELECT * FROM users WHERE Email='$email'";
    $from_db= mysqli_query( $db_connect, $get_data);
    $assoc=mysqli_fetch_assoc($from_db);
    
?>
<section>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Update your Profile</h5> 
                    
                </div>
                <div class="card-body ">
                    <form action="profile_edit.php" method="post">
                        <div class="mb-3 row">
                            <label  class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="edit_name" class="form-control"  value="<?= $assoc['Name']?>" >
                            </div>  
                        </div>
                        <div class="mb-5 row">
                            <label  class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="Text" name="edit_phone" class="form-control"  value="<?= $assoc['Phone']?>" >
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    
                    </form>
                
                
                
                </div>
            </div>
        </div>
    </div>
</div>
</section>