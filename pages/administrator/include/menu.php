<?php
session_start();
if (!isset($_SESSION['admin_pos'])) {
    echo "<script>window.location.href = '../../index.php'; </script>";
}
$user_id = $_SESSION['admin_pos'];
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
?>
<!--sidebar wrapper -->
<div class="sidebar-wrapper shadow-sm printBlock" data-simplebar="true">

    <div class="sidebar-header">
        <a href="dashboard.php">
            <!-- testing  -->
            <div class="row">
                <div class="col-2">  <img src="../../images/Asset-1@2x.png" class="logo-icon" alt="logo icon"></div>
                <div class="col"> <h5 class="logo-text text-center">Hotel Management</h5></div>
            </div>
            <!-- testing  -->
            <!-- <div>
                <img src="../../images/Asset-1@2x.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h5 class="logo-text text-center">Ghaznavi Tower</h5>
            </div> -->
        </a>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="shadow-sm">
            <a href="dashboard.php ">
                <div class="parent-icon">
                    <h3><i class="far fa-analytics"></i></h3>
                </div>
                <div class="menu-title ">
                    <h5>Dashboard</h5>
                </div>
            </a>

        </li>
        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-bank'></i>
                </div>
                <div class="menu-title">Cash In Bank</div>
            </a>
            <ul>
                <li> <a href="open_bank_account.php"><i class="bx bx-right-arrow-alt"></i>Create Bank Account</a>
                </li>
                <li> <a href="bank_account_detail.php"><i class="bx bx-right-arrow-alt"></i>Account Detail</a>
                </li>
                <li> <a href="bank_account_debit.php"><i class="bx bx-right-arrow-alt"></i>Debit</a>
                </li>
            </ul>
        </li> -->
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <div class="menu-title">Contract</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_apartcontract.php" class="sidebar-link">

                        <span class="hide-menu">Add Contract</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="contract_details.php" class="sidebar-link">
                        <span class="hide-menu">Contract Detail</span>
                    </a>
                </li>
            </ul>
        </li> -->
      
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fas fa-dollar-sign"></i>
                </div>
                <div class="menu-title">Installement</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_installement.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Installement </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="view_installement.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Installement Details</span>
                    </a>
                </li>
            </ul>
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
                <li class="sidebar-item">
                    <a href="client_ledger_total_balance.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Client Ledger</span>
                    </a>
                </li>
            </ul>
        </li> -->
        <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon "><i class='bx bx-purchase-tag'></i>
                </div>
                <div class="menu-title">Booking</div>
            </a>
            <ul>
            
            <li class="sidebar-item">
                <a href="add_booking.php" class="sidebar-link">
                    <i class="mdi mdi-adjust"></i>
                    <span class="hide-menu">Add Booking</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="booking.php" class="sidebar-link">
                    <i class="mdi mdi-adjust"></i>
                    <span class="hide-menu">Booking Detail</span>
                </a>
            </li>
            </ul>
        </li>
       

        <li>
                    <a href="javascript:;" class="has-arrow shadow-sm">
                        <div class="parent-icon"><i class="fas fa-layer-group"></i>
                        </div>
                        <div class="menu-title">Category</div>
                    </a>

                    <ul>
                        <li class="sidebar-item">
                            <a href="add_category.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Add Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="category.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Category Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- picnic -->
                <li>
                    <a href="javascript:;" class="has-arrow shadow-sm">
                        <div class="parent-icon"><i class="fas fa-user-alt"></i>
                        </div>
                        <div class="menu-title">Customer</div>
                    </a>

                    <ul>
                        <li class="sidebar-item">
                            <a href="add_customer.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Add Customer</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="customer.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Customer Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- picnic -->

        <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon">
                <i class="fas fa-hotel"></i>
                </div>
                <div class="menu-title">Hotel</div>
            </a>
            <ul>
                <li><a href="add_hotel.php"><i class="bx bx-right-arrow-alt"></i>Add Hotel</a>
                </li>
                <li><a href="hotel.php"><i class="bx bx-right-arrow-alt"></i>Hotel Detail</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon">
                <i class="fas fa-door-closed"></i>
                </div>
                <div class="menu-title">Rooms</div>
            </a>
            <ul>
                <li><a href="add_room.php"><i class="bx bx-right-arrow-alt"></i>Add Room</a>
                </li>
                <li><a href="room.php"><i class="bx bx-right-arrow-alt"></i>Available Rooms</a>
                <li><a href="booked_room.php"><i class="bx bx-right-arrow-alt"></i>Booked Rooms</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon "><i class='fas fa-bath'></i>
                </div>
                <div class="menu-title">Hotel Facilities</div>
            </a>
            <ul>
                <li><a href="add_hotel_facilities.php"><i class="bx bx-right-arrow-alt"></i>Add Hotel Facilities</a>
                </li>
                <li><a href="hotel_facilities.php"><i class="bx bx-right-arrow-alt"></i>Hotel Facilities Detail</a>
                </li>
            </ul>
        </li>
        <!-- new  -->
          <!-- bank -->

        <!-- bank  -->
        <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon "><i class='fas fa-balance-scale'></i>
                </div>
                <div class="menu-title">Plan</div>
            </a>
            <ul>
                <li><a href="add_plan.php"><i class="bx bx-right-arrow-alt"></i>Add Plan</a>
                </li>
                <li><a href="plan.php"><i class="bx bx-right-arrow-alt"></i>Plan Detail</a>
                </li>
                <!-- <li><a href="ob_page.php"><i class="bx bx-right-arrow-alt"></i> Add Opening Balance</a>
                </li> -->
                
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon "><i class="fas fa-egg"></i>
                </div>
                <div class="menu-title">Items</div>
            </a>
            <ul>
                <li><a href="add_item.php"><i class="bx bx-right-arrow-alt"></i>Add Items</a>
                </li>
                <li><a href="item.php"><i class="bx bx-right-arrow-alt"></i>Items Detail</a>
                </li>
                <!-- <li><a href="ob_page.php"><i class="bx bx-right-arrow-alt"></i> Add Opening Balance</a>
                </li> -->
                
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon "><i class="fas fa-images"></i>
                </div>
                <div class="menu-title">Gallery</div>
            </a>
            <ul>
                <li>
                    <a href="add_gallery.php"><i class="bx bx-right-arrow-alt"></i>Add Gallery</a>
                </li>
                <li>
                    <a href="gallery.php"><i class="bx bx-right-arrow-alt"></i>Gallery Detail</a>
                </li>
                <!-- <li><a href="ob_page.php"><i class="bx bx-right-arrow-alt"></i> Add Opening Balance</a>
                </li> -->
               
            </ul>
        </li>
        
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon "><i class='bx bx-money'></i>
                </div>
                <div class="menu-title">Room</div>
            </a>
            <ul>
                <li><a href="add_room.php"><i class="bx bx-right-arrow-alt"></i>Add Room</a>
                </li>
                <li><a href="room.php"><i class="bx bx-right-arrow-alt"></i>Room Detail</a>
                </li>
                <li><a href="ob_page.php"><i class="bx bx-right-arrow-alt"></i> Add Opening Balance</a>
                </li>
                
            </ul>
        </li> -->
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon "><i class='bx bx-money'></i>
                </div>
                <div class="menu-title">Room Facilities</div>
            </a>
            <ul>
                <li><a href="add_room_facilities.php"><i class="bx bx-right-arrow-alt"></i>Add Room Facilities</a>
                </li>
                <li><a href="room_facilities.php"><i class="bx bx-right-arrow-alt"></i>Room Facilities Detail</a>
                </li>
                <li><a href="ob_page.php"><i class="bx bx-right-arrow-alt"></i> Add Opening Balance</a>
                </li>
                
            </ul>
        </li> -->
        
        <!-- new  -->
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fas fa-user-alt"></i>
                </div>
                <div class="menu-title">Commission Person</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_commission_person.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <i class="bx bx-right-arrow-alt"></i><span class="hide-menu"> Add Commission Person </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="commission_person_details.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <i class="bx bx-right-arrow-alt"></i><span class="hide-menu">Person Details</span>
                    </a>
                </li>
                <li> <a href="commission_payment.php"><i class="mdi mdi-adjust"></i><i class="bx bx-right-arrow-alt"></i>Payment</a>
                </li>
                <li> <a href="commission_payment_details.php"><i class="mdi mdi-adjust"></i><i class="bx bx-right-arrow-alt"></i>Commission Details</a>
                </li>
            </ul>
        </li> -->
        
       


        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <div class="menu-title">Reports</div>
            </a>
            <ul> -->
                  <!-- <li class="sidebar-item">
                    <a href="plaza_report.php" class="sidebar-link">

                        <i class="mdi mdi-adjust"></i>
                        <li class="hide-menu"><i class="bx bx-right-arrow-alt"></i>Plaza Reports </li>
                    </a>
                </li> -->
                 <!--  <li class="sidebar-item">
            <a href="contract_report.php" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <li class="hide-menu"><i class="bx bx-right-arrow-alt"></i>Contract Report </li>
            </a>
        </li> -->
                <!-- <li><a href="supplier_wise_report.php"><i class="bx bx-right-arrow-alt"></i>Supplier Payment Report</a>
                </li>
                <li><a href="customer_wise_report.php"><i class="bx bx-right-arrow-alt"></i>Client Payment Report</a>
                </li> -->
                <!-- <li><a href="profit_loss.php"><i class="bx bx-right-arrow-alt"></i>Summarized Profit AND lose</a> -->
                <!-- </li>
                <li class="sidebar-item">
                    <a href="status_wise_report.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"><i class="bx bx-right-arrow-alt"></i>Contract Wise Report</span>
                    </a>
                </li>
                <li>
                    <a href="installment_wise_report.php">
                        <i class="bx bx-right-arrow-alt"></i>Apartment / Shop Status Report
                    </a>
                </li>
                  <li class="sidebar-item">
                    <a href="expences_report.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"><i class="bx bx-right-arrow-alt"></i>Expences Report</span>
                    </a>
                </li>
                <li>
                    <a href="advance_report.php">
                        <i class="mdi mdi-adjust"></i>
                       <i class="bx bx-right-arrow-alt"></i>Advance Person Report
                    </a>
                </li>
                <li>
                    <a href="commission_report.php">
                        <i class="mdi mdi-adjust"></i>
                       <i class="bx bx-right-arrow-alt"></i>Commission Person Report
                    </a>
                </li>
                <li>
                    <a href="instalment_report.php">
                        <i class="mdi mdi-adjust"></i>
                       <i class="bx bx-right-arrow-alt"></i>Instalment Date Wise Report
                    </a>
                </li>
                <li>
                    <a href="instalment_remain_report.php">
                        <i class="mdi mdi-adjust"></i>
                       <i class="bx bx-right-arrow-alt"></i>Instalment Remain Report
                    </a>
                </li> -->
                <!--  -->
                <!-- <li>
                    <a href="recovery_again.php">
                        <i class="mdi mdi-adjust"></i>
                       <i class="bx bx-right-arrow-alt"></i> Client Recovery Details
                    </a>
                </li>
                
            </ul>
        </li> -->
         <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fas fa-cog"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>

                <li class="sidebar-item">
                <li>
                    <a href="javascript:;" class="has-arrow shadow-sm">
                        <div class="parent-icon"><i class="fad fa-window-frame-open"></i>
                        </div>
                        <div class="menu-title">Province</div>
                    </a>
                    <ul>
                        <li class="sidebar-item">
                            <a href="add_province.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Add Province</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="province.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Province Details</span>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow shadow-sm">
                        <div class="parent-icon"><i class="fad fa-window-frame-open"></i>
                        </div>
                        <div class="menu-title">District</div>
                    </a>
                    <ul>
                        <li class="sidebar-item">
                            <a href="add_district.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">Add District</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="district.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu">District Details</span>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <!--   <li>
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
                        <div class="menu-title">District</div>
                    </a>

                    <ul>
                        <li class="sidebar-item">
                            <a href="add_district.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Add District </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="district_detail.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> District Detail </span>
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
                        </li>
                        <li class="sidebar-item">
                            <a href="shop_detail.php" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Shop Detail </span>
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </li>
          <!--  -->

          <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <div class="menu-title">Recovery</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="recovery_again.php" class="sidebar-link">

                        <span class="hide-menu">Add Contract</span>
                    </a>
                </li> -->
                <!-- <li class="sidebar-item">
                    <a href="contract_details.php" class="sidebar-link">
                        <span class="hide-menu">Contract Detail</span>
                    </a>
                </li> -->
            </ul>
        </li>
        <!--  -->
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm">
                <div class="parent-icon"><i class="fad fa-window-frame-open"></i>
                </div>
                <div class="menu-title">Apartment</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_appartment.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Add Apartment </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="apartment_details.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Apartment Detail </span>
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- <li>
            <a href="javascript:;" class="has-arrow shadow-sm" >
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Office</div>
            </a>
            <ul>
                <li class="sidebar-item">
                    <a href="add_office.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Add Office </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="office_detail.php" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu"> Office Detail </span>
                    </a>
                </li>
            </ul>
        </li> -->
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->