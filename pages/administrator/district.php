<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row mb-2">
        <div class="col-md-12">
            <h3 class="ps-4">District Detail</h3>
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
                                $sql = "SELECT district.name as district_name, province.name as province_name FROM district
                                        LEFT JOIN province ON district.province_id = province.id";
                                $run = mysqli_query($connection, $sql);
                                $row = mysqli_num_rows($run);


                                if ($row > 0) {
                                ?>

                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover shadow datatable text-center table-striped my-only-div-shadow">
                                            <thead class="my-table-style bg-dark text-white ">
                                                <th>S.No</th>
                                                <th>District Name</th>
                                                <th>Province Name</th>
                                            </thead>
                                            <tbody class="table-font-size">
                                                <?php
                                                $serial = 1;
                                                while ($data = mysqli_fetch_assoc($run)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $serial++ ?></td>
                                                        <td><?php echo $data['district_name']; ?></td>
                                                        <td><?php echo $data['province_name']; ?></td>

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