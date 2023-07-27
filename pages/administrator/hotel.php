<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row mb-2">
        <div class="col-md-12">
            <h3 class="ps-4">Hotel Detail</h3>
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
                                $sql = "SELECT district.name as district_name, hotel.name as hotel_name, hotel.picture as picture, category.name as category_name, hotel.latitude,hotel.longitude, hotel.phone, hotel.address, hotel.comment FROM hotel
                                        LEFT JOIN district ON hotel.district_id = district.id
                                        LEFT JOIN category ON hotel.category_id = category.id";
                                $run = mysqli_query($connection, $sql);
                                $row = mysqli_num_rows($run);


                                if ($row > 0) {
                                ?>

                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover shadow datatable text-center table-striped my-only-div-shadow">
                                            <thead class="my-table-style bg-dark text-white ">
                                                <th>S.No</th>
                                                <th>Hotel Name</th>
                                                <th>District Name</th>
                                                <th>Category</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Comment</th>
                                                <th>Picture</th>
                                            </thead>
                                            <tbody class="table-font-size">
                                                <?php
                                                $serial = 1;
                                                while ($data = mysqli_fetch_assoc($run)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $serial++ ?></td>
                                                        <td><?php echo $data['hotel_name']; ?></td>
                                                        <td><?php echo $data['district_name']; ?></td>
                                                        <td><?php echo $data['category_name']; ?></td>
                                                        <td><?php echo $data['latitude']; ?></td>
                                                        <td><?php echo $data['longitude']; ?></td>
                                                        <td><?php echo $data['phone']; ?></td>
                                                        <td><?php echo $data['address']; ?></td>
                                                        <td><?php echo $data['comment']; ?></td>
                                                        <td><img src="../../images/gallery/<?php echo $data['picture']; ?>" width="100" height="100" alt=""></td>
                                                        <!-- <td><img src="gallery/<?php echo $row['hotel_picture']; ?>" width="100" height="100" alt=""></td> -->

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