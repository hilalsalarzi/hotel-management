<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row mb-2">
        <div class="col-md-12">
            <h3 class="ps-4">Gallery Detail</h3>
        </div>
        <div>
            <div class="page-content container-fluid">
                <!--  Start Row  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-left">
                                </div>
                                <br>
                                <table class="table table-striped text-center table-bordered table-hover datatable my-only-div-shadow" id="export_table" data-page-length="10000000">
                                    <thead class="my-table-style printcolor text-white">
                                        <th>S-No</th>
                                        <th>Province</th>
                                        <th>District</th>
                                        <th>Hotel</th>
                                        <th>Picture</th>
                                    </thead>
                                    <?php
                                    $sql = "SELECT province.name as province_name,district.name as district_name, gallery.hotel_picture as hotel_picture, hotel.name as hotel_name FROM gallery
                                        LEFT JOIN province ON gallery.province_id = province.id
                                        LEFT JOIN district ON gallery.district_id = district.id
                                        LEFT JOIN hotel ON gallery.hotel_id = hotel.id";
                                    $run = mysqli_query($connection, $sql) or die("not connected");
                                    $serial = 1;
                                    while ($row = $run->fetch_assoc()) {

                                     

                                    //   $picture =  $row['hotel_picture'];
                                    //   $location="gallery/".$picture;
                                 ?>
                                        <tr class="my-table-row-hover">
                                            <td><?php echo $serial++ ?></td>
                                            <td><?php echo $row['province_name']; ?></td>
                                            <td><?php echo $row['district_name']; ?></td>
                                            <td><?php echo $row['hotel_name']; ?></td>
                                            <td><img src="../../images/gallery/<?php echo $row['hotel_picture']; ?>" width="100" height="100" alt=""></td>
                                            
                                          
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row  -->
            </div>
        </div>
        <?php include("include/footer.php") ?>