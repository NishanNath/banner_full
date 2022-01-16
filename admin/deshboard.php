<?php
    
    require_once("nav.php");
    require_once("check_admin.php");
    
    $get_data = "SELECT * FROM users";
    $from_db= mysqli_query( $db_connect, $get_data);
    
   
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Users List 
                </div>
                <div class="card-body ">
                    <table class="table table-bordered">
                       <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                       </thead>
                       <tbody>
                           <?php foreach ($from_db as $user):?>
                            <tr>
                                <td><?=$user['Name']?></td>
                                <td><?=$user['Email']?></td>
                                <td><?=$user['Phone']?></td> 
                           </tr>
                       </tbody>
                            <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>