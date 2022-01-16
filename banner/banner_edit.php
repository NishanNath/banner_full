<?php
    require_once ('../admin/nav.php');
    require_once('../admin/check_admin.php');
    require_once('../include/db.php');
    $id=$_GET['id'];
    $select_query="SELECT * FROM banner WHERE ID=$id";
    $from_db= mysqli_query($db_connect, $select_query);
    $assoc=mysqli_fetch_assoc($from_db);


?>
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card-header bg-warning">
                    <div class="card-title">Edit your banner</div>
                </div>
                <div class="card-body">
                    <form action="banner_edit_edit.php" method="post" enctype="multipart/form-data">
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
                        <input class="form-control mb-3" name="id" type="hidden" value="<?=$assoc['ID']?>">
                        <input class="form-control mb-3" name="edit_head" type="text" value="<?=$assoc['Head']?>">
                        <input class="form-control mb-3" name="edit_detail" type="text" value="<?=$assoc['Detail']?>">
                        <input  class="form-control mb-3" name="edit_image" type="file">
                        <img class="mb-3" src="../<?=$assoc['images_location']?>" alt="" width="100px">
                        <button class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>