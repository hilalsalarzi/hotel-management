  <?php
    
 echo $fetchData1= "SELECT * FROM system_users WHERE id='$operator'";
$runData1 = mysqli_query($connection,$fetchData1);
$rowData1 = mysqli_fetch_array($runData1);

  $name       = $rowData1['name'];
  $username   = $rowData1['username'];
  $image      = $rowData1['image'];
  $pathImg    = "../../images/admin_profile" . $image;
 
 ?>
<header class="printBlock">
  <div class="topbar d-flex align-items-center">
    <nav class="navbar navbar-expand">
      <div class="mobile-toggle-menu">
        <i class='bx bx-menu'></i>
      </div>
      <div class="top-menu ms-auto">
        <ul class="navbar-nav align-items-center">
        </ul>
      </div>
      <div class="user-box dropdown">
        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?php echo $pathImg ?>" class="user-img" alt="user avatar">
          <div class="user-info ps-3">
            <p class="user-name mb-0"><?php echo $name ?></p>
            <p class="designattion mb-0"><?php echo $username ?></p>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="profile.php"><i class="bx bx-user"></i><span>Profile</span></a>
          </li>
         <!--  <li>
            <a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
          </li> -->
          <li>
            <a class="dropdown-item" href="dashboard.php"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
          </li>
         <!--  <li>
            <a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
          </li> -->
         <!--  <li>
            <a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
          </li> -->
          <li>
            <div class="dropdown-divider mb-0"></div>
          </li>
          <li>
            <form method="post" class="text-center">
              <b><input type="submit" name="logout" class="dropdown-item" value="Logout"></b>
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<?php
if(isset($_POST['logout']))
{
  unset($_SESSION['operator']);
  if(!isset($_SESSION['operator']))
  {
    echo "<script>window.location.href = '../../index.php'; </script>";
  }
}

?>