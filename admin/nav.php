<?php
    require_once("../include/header.php");
    require_once("../include/db.php");
    require_once("../include/footer.php");
    require_once("check_admin.php");
    
  
  
    
    
  
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../admin/deshboard.php">Deshboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Visit Page</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Frontend
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../massage/massage_show.php">Massage
            <span class="badge bg-danger">
            <?php
             require_once('../include/db.php');
             $unread_query="SELECT COUNT(*) AS unread_massages FROM massages WHERE read_status=1";
             $from_db=mysqli_query($db_connect, $unread_query);
             $assoc= mysqli_fetch_assoc($from_db);
             echo $assoc['unread_massages'];
            

            ?>



            </span>

            </a></li>
            <li><a class="dropdown-item" href="../banner/banner.php">Banner</a></li>
            
          </ul>
        </li>
      </ul>
      <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            echo $_SESSION['admin_email'];
            ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="../profile/profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="../Change password/cng_pass.php">Change Password</a></li>
                <li><a class="dropdown-item" href="../logout.php">log out</a></li>
            </ul>
        </div>
    </div>
  </div>
</nav>