<?php

require_once('../admin/nav.php');
require_once('../admin/check_admin.php');
require_once ('../include/db.php');
$select_query="SELECT * FROM banner";
$from_db=mysqli_query($db_connect, $select_query);

?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-warning">
                    Edit Banner
                </div>
                <div class="card-body">

                    <form action="banner_dev.php" method="post" enctype="multipart/form-data">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                        
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                    </svg>
                    <?php
                        if (isset($_SESSION['banner_error'])){
                    ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            <?php
                                echo $_SESSION['banner_error'];
                                unset($_SESSION['banner_error']);
                            ?>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                        <input name="Head" type="text" class="form-control mb-3" placeholder="Head">
                        <input name="Detail" type="text"class="form-control mb-3" placeholder="Details">
                        <input name="banner_image" type="file"class="form-control mb-3">
                        <button class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card-header bg-warning">
                <div class="card-title">Banners List</div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>SL No</th>
                        <th>Head</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Active_status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($from_db as $key=>$data):?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$data['Head']?></td>
                            <td><?=$data['Detail']?></td>
                            <td><img src="../<?=$data['images_location']?>" alt="" width="100px" ></td>
                            <td>
                                <?php if ($data['active_status']==1):?>
                                    <span class="badge badge-sm bg-success">active</span>
                                <?php else:?>
                                    <span class="badge badge-sm bg-danger">de-active</span>
                                <?php endif?>
                            </td>
                            <td>
                                <a href="banner_delet.php?id=<?=$data['ID']?>" class="btn btn-sm btn-danger mb-1">Delete</a>
                                <?php if ($data['active_status']==1):?>
                                    <a href="banner_deactive.php?id=<?=$data['ID']?>" class="btn btn-sm btn-warning mb-1">Deacitve</a>
                                <?php else:?>    
                                    <a href="banner_active.php?id=<?=$data['ID']?>" class="btn btn-sm btn-warning mb-1">Active</a>
                                <?php endif?>
                                    <a href="banner_edit.php?id=<?=$data['ID']?>" class="btn btn-sm btn-primary mb-1">Edit</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>