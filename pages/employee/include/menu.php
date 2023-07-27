<?php
session_start();
if(!isset($_SESSION['operator']))
{
  echo "<script>window.location.href = '../../index.php'; </script>";
}
$operator = $_SESSION['operator'];
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<!--sidebar wrapper -->
<div class="sidebar-wrapper shadow-sm printBlock" data-simplebar="true">

    <div class="sidebar-header">
        <a href="dashboard.php">
            <!-- <div>
                <img src="../../images/Asset-1@2x.png" class="logo-icon" alt="logo icon">
            </div> -->
            <div>
                <h5 class="logo-text">Apartment Details</h5>
            </div>
        </a>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <!-- <li class="shadow-sm">
            <a href="dashboard.php ">
                <div class="parent-icon"><h3><i class="far fa-analytics"></i></h3>
                </div>
                <div class="menu-title "><h5>Dashboard</h5></div>
            </a>

        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fas fa-user-alt"></i>
                </div>
                <div class="menu-title">Client</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_client.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Client </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="client_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Client Details</span>
                    </a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fas fa-building"></i>
                </div>
                <div class="menu-title">Plaza</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_plaza.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Plaza </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="plaza_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Plaza Detail </span>
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fas fa-layer-group"></i>
                </div>
                <div class="menu-title">Floor</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_floor.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Floor </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="floor_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Floor Detail </span>
                    </a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fas fa-store"></i>
                </div>
                <div class="menu-title">Shop</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_shop.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Shop </span>
                    </a>
                </li> -->
                <li class="sidebar-item">
                
                    <a href="shop_detail.php" class="sidebar-link">
                    <div class="parent-icon"><i class="fas fa-store"></i>
                     </div>
                        <!-- <i class="mdi mdi-adjust"></i> -->
                        <span class="menu-title"> Shop Detail </span>
                    </a>
                    
                </li>
            <!-- </ul>
        </li> -->
        <!-- <li> -->
            <!--  <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fad fa-window-frame-open"></i>
                </div>
                <div class="menu-title">Apartment</div>
            </a> -->
            <!-- <ul>
                <li class="sidebar-item">
                    <a href="add_appartment.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Add Apartment </span>
                    </a>
                </li> -->
                <li class="sidebar-item">
                    <a href="apartment_details.php" class="sidebar-link">
                    <div class="parent-icon"><i class="fad fa-window-frame-open"></i>
                </div>    
                    <!-- <i class="mdi mdi-adjust"></i> -->
                        <span class="menu-title">Apartment Detail </span>
                    </a>
                </li>
            <!-- </ul> -->
        <!-- </li> -->
       
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fad fa-check-double"></i>
                </div>
                <div class="menu-title">Status</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_status.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Status </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="status_details.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Status Detail </span>
                    </a>
                </li>
            </ul>
        </li> -->
        <li class="sidebar-item">
                    <a href="contract_details.php" class="sidebar-link">
                    <div class="parent-icon"><i class="fad fa-check-double"></i>
                </div>
                        <!-- <i class="mdi mdi-adjust"></i> -->
                        <span class="hide-menu"> Contract Detail </span>
                    </a>
                </li>
        <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon">
                <i class="fas fa-file-contract"></i>
                </div>
                <div class="menu-title">Reports</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="plaza_report.php" class="sidebar-link"> 
       
                    <!-- <i class="mdi mdi-adjust"></i> -->
                        <span class="hide-menu"> Plaza Reports </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="contract_report.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Contract Report  </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="catagorywise_report.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Catagory Report  </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->

sale