<?php
        
        require_once'../include/header.php';
        require_once'../admin/check_admin.php';
        require_once'../admin/nav.php';
        require_once'../include/db.php';
        $get_data = "SELECT * FROM massages";
        $from_db= mysqli_query( $db_connect, $get_data);
    ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-warning">
                    Massages List 
                </div>
                <div class="card-body ">
                    <table class="table table-bordered ">
                       <thead>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Massage</th>
                            <th>Action</th>

                       </thead>
                       <tbody>
                           <?php foreach ($from_db as $key=>$massages):?>
                            <tr class="<?= ($massages['Read_status']==1)? 'bg-info': 'text-dark'?>">
                                
                                <td><?=$key+1?></td>
                                <td><?=$massages['Name']?></td>
                                <td><?=$massages['Email']?></td>
                                <td><?=$massages['Subject']?></td> 
                                <td><?=$massages['Massage']?></td> 
                                <td><?php if ($massages['Read_status']==1):?>
                                    <a class="btn btn-sm btn-warning text-dark" href="massage_read.php?msg_id=<?=$massages['ID']?>">Mark as read</a>

                                <?php endif?>
                                <a class="btn btn-sm btn-danger text-dark" href="massage_delete.php?msg_id=<?=$massages['ID']?>">Delete</a>
                                </td> 
                           </tr>
                       </tbody>
                            <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>