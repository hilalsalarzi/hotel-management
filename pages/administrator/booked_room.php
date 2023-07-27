<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row mb-2">
        <div class="col-md-12">
            <h3 class="ps-4">Booking Details</h3>
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
                                $sql = "SELECT room.name,district.name as disname,province.name as proname, hotel.name as hotel_name, room.price, room.status FROM room
                                        inner join  hotel ON room.hotel_id = hotel.id
                                        inner join district on district.id=hotel.district_id
                                        inner join province on province.id=district.province_id
                                        where room.status='Booked'
                                        ";
                                $run = mysqli_query($connection, $sql);
                                $row = mysqli_num_rows($run);


                                if ($row > 0) {
                                ?>

                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover shadow datatable text-center table-striped my-only-div-shadow">
                                            <thead class="my-table-style bg-dark text-white ">
                                                <th>S.No</th>
                                                
                                                <th>Province / District</th>
                                                <th>Hotel Name</th>
                                                <th>Room Number</th>
                                               
                                                <th>Price</th>
                                                <!-- <th>Description</th> -->
                                                <th>Status</th>
                                            </thead>
                                            <tbody class="table-font-size">
                                                <?php
                                                $serial = 1;
                                                while ($data = mysqli_fetch_assoc($run)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $serial++ ?></td>
                                                        <td><?php echo $data['proname']; ?> / <?php echo $data['disname']; ?></td>
                                                        <td><?php echo $data['hotel_name']; ?></td>
                                                        <td><?php echo $data['name']; ?></td>
                                                       
                                                        <td><?php echo $data['price']; ?></td>
                                                        <!-- <td><?php echo $data['description']; ?></td> -->
                                                        <td><?php echo $data['status']; ?></td>

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