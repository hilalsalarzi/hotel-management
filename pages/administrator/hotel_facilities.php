<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row mb-2">
        <div class="col-md-12">
            <h3 class="ps-4">Hotel Facilities Detail</h3>
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
                                $sql = "SELECT province.name as province_name, district.name as district_name, hotel_facilities.meeting_room,hotel_facilities.free_wifi,hotel_facilities.fitness,hotel_facilities.car_parking,hotel_facilities.swimming_pool,hotel_facilities.security, hotel.name as hotel_name FROM `hotel_facilities`
                                    LEFT JOIN province ON hotel_facilities.province_id = province.id
                                    LEFT JOIN district ON hotel_facilities.district_id = district.id
                                    LEFT JOIN hotel ON hotel_facilities.hotel_id = hotel.id";
                                $run = mysqli_query($connection, $sql);
                                $row = mysqli_num_rows($run);


                                if ($row > 0) {
                                ?>

                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover shadow datatable text-center table-striped my-only-div-shadow">
                                            <thead class="my-table-style bg-dark text-white ">
                                                <th>S.No</th>
                                                <th>Province</th>
                                                <th>District</th>
                                                <th>Hotel Name</th>
                                                <th>Meeting Room</th>
                                                <th>Free Wifi</th>
                                                <th>Fitness</th>
                                                <th>Car Parking</th>
                                                <th>Swimming Pool</th>
                                                <th>Security</th>
                                            </thead>
                                            <tbody class="table-font-size">
                                                <?php
                                                $serial = 1;
                                                while ($data = mysqli_fetch_assoc($run)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $serial++ ?></td>
                                                        <td><?php echo $data['province_name']; ?></td>
                                                        <td><?php echo $data['district_name']; ?></td>
                                                        <td><?php echo $data['hotel_name']; ?></td>
                                                        <td><?php echo $data['meeting_room']; ?></td>
                                                        <td><?php echo $data['free_wifi']; ?></td>
                                                        <td><?php echo $data['fitness']; ?></td>
                                                        <td><?php echo $data['car_parking']; ?></td>
                                                        <td><?php echo $data['swimming_pool']; ?></td>
                                                        <td><?php echo $data['security']; ?></td>

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