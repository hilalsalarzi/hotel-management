<?php include("include/header.php");
@$dialy_Date =  date('y-m-d');
?>
<div class="page-content">
    <div class="card shadow ">
        <div class=" shadow-sm card-header">
            <h2> Dashboard</h2>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <div class="card shadow radius-10">
                        <a href="hotel.php"> 
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <center>
                                    <p class="mb-0 text-center text-danger">Total Hotel</p><p class="mb-0">Hotel</p>
                                   <h4 class="font-weight-bold"></h4>
                                   </center>
                                </div>
                                <div class="widgets-icons bg-gradient-lush text-white"><i class='fas fa-store'></i>
                                </div>
                            </div>
                        </div>
                         </a>
                    </div>
                </div>
                

                <div class="col">
                    <div class="card shadow radius-10">
                        <a href="customer.php"> 
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="mb-0 text-center text-danger">Total Customer</p><p class="mb-0 text-center">Customer</p>
                                   <h4 class="font-weight-bold text-center"></h4>
                                </div>
                                <div class="widgets-icons bg-gradient-cosmic text-white"><i class='fa fa-user-alt'></i>
                                </div>
                            </div>
                        </div>
                         </a>
                    </div>

                </div>

                   <div class="col">
                    <div class="card shadow radius-10">
                        <a href="booking.php" class="text-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <center>
                                    <p class="mb-0 text-success">Total Booking</p><p class="mb-0 text-center">Booking</p>
                                    <h4 class="font-weight-bold"></h4>
                                 </center>
                                </div>
                                <div class="widgets-icons bg-success text-white"><i class='bx bx-purchase-tag'></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow radius-10">
                        <a href="category.php" class="text-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <center><p class="mb-0 text-primary">Total Category</p><p class="mb-0">Room</p>
                                    <h4 class="font-weight-bold"></h4>
                                 </center>
                                </div>
                            
                                <div class="widgets-icons bg-primary text-white"><i class='bx bx-wallet'></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow radius-10">
                        <a href="item.php"> 
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <center>
                                    <p class="mb-0 text-center text-danger">Total Item</p><p class="mb-0">Item</p>
                                   <h4 class="font-weight-bold"></h4>
                                   </center>
                                </div>
                                <div class="widgets-icons bg-gradient-lush text-white"><i class='fas fa-store'></i>
                                </div>
                            </div>
                        </div>
                         </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include("include/footer.php") ?>