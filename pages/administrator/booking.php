<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row mb-2">
        <div class="col-md-12">
            <h3 class="ps-4">Booking Detail</h3>
        </div>
        <div>
            <div class="page-content container-fluid">
                <!--  Start Row  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card my-only-div-shadow">
                            <div class="card-body">
                                <div class="">
                                    <!-- Button trigger modal -->
                                    <!-- Modal -->
                                </div>
                                <?php
                                $sql = "SELECT booking.id, plan.name as plname ,booking.p_type as ptype, customer.name as cusname,room.id, booking.check_out as check_out,booking.check_in as check_in, booking.book_date as datep, room.name as romname,district.name as disname,province.name as proname, hotel.name as hotel_name, room.price as rmprice, room.status FROM booking
                                inner join room on room.id=booking.room_id
                                inner join  hotel ON room.hotel_id = hotel.id
                                inner join  plan ON plan.id = booking.plan_id
                                inner join district on district.id=hotel.district_id
                                inner join province on province.id=district.province_id
                                inner join customer on customer.id=booking.customer_id";
                                $run = mysqli_query($connection, $sql);
                                $row = mysqli_num_rows($run);

                                // $id = $_GET['customer_id'];
                                if ($row > 0) {
                                ?>

                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover shadow datatable text-center table-striped my-only-div-shadow">
                                            <thead class="my-table-style bg-dark text-white ">
                                                <th>S.No</th>
                                                <th>Province</th>
                                                <th>District</th>
                                                <th>Hotel</th>
                                                <th>Room</th>
                                                <th>Plan</th>
                                                <th>Customer</th>
                                                <th>Date</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                <th>Remarks</th>
                                            </thead>
                                            <tbody class="table-font-size">
                                                <?php
                                                $serial = 1;
                                                while ($data = mysqli_fetch_assoc($run)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $serial++ ?></td>
                                                        <td><?php echo $data['proname']; ?></td>
                                                        <td><?php echo $data['disname']; ?></td>
                                                        <td><?php echo $data['hotel_name']; ?></td>
                                                        <td><?php echo $data['romname']; ?></td>
                                                        <td><?php echo $data['plname']; ?></td>
                                                        <td><?php echo $data['cusname']; ?></a></td>
                                                        <td><?php echo $data['datep']; ?></td>
                                                        <td><?php echo $data['check_in']; ?></td>
                                                        <td><?php echo $data['check_out']; ?></td>
                                                        <td><?php echo $data['status']; ?></td>
                                                        <td><?php echo $data['rmprice']; ?></td>
                                                        <td><?php echo $data['ptype']; ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    <?php
                                } else {
                                    echo "<h3>No Results Found</h3>";
                                }
                                    ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row  -->
            </div>
        </div>
        <?php include("include/footer.php") ?>