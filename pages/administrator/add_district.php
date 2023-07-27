<?php include("include/header.php"); ?>
<div class="page-content">
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
        <div class=" shadow-sm card ">
        <div class=" col-md-12">
            <h3>Add District</h3>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card my-only-div-shadow">
                    <div class="card-body">
                        <br>
                        <form method="post" action="">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="save_district.php" method="post">
                                        <div class="row"> 
                                            <div class="col-md-4">
                                                <label for="exampleInputPassword1">Province</label>
                                                <select name="province" class="form-control">
                                                    <option disabled> Select Province</option>
                                                    <?php
                                                    // include_once('dbcon.php');

                                                    $sql = "SELECT * FROM province";
                                                    $run = mysqli_query($connection, $sql) or die('Connection failed');

                                                    if (mysqli_num_rows($run) > 0) {
                                                        while ($data = mysqli_fetch_assoc($run)) {
                                                            echo "<option value='{$data['id']}'>{$data['name']}</option>";
                                                        }
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="exampleInputPassword1">District Name</label>
                                                <input type="text" name="district" class="form-control" placeholder="Enter District name" required>
                                            </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <br>
                                            <input type="submit" name="save" class="btn btn-primary" value="Submit" required />
                                        </form>

                                        <?php

                                        if(isset($_POST['save'])){


                                            $district = $_POST['district'];
                                            $province = $_POST['province'];
                                                
                                            $sql = "INSERT INTO `district`( `name`, `province_id`) VALUES ('$district', '$province')";
                                            $run = mysqli_query($connection,$sql) or die("Query Failed");
                                            if ($run) 
                                            {
                                                echo "<script>
                                                        Swal.fire(
                                                        'Added!',
                                                        'District has been successfully added!',
                                                        'success'
                                                        ).then((result) => {
                                                        if (result.isConfirmed) {
                                                        window.location.href = 'district.php';
                                                        }
                                                        });
                                                    </script>";
                                            } 
                                            else
                                            {
                                            echo "<p style = 'color:red;text-align:center;margin: 10px 0';>Query Failed.</p>";
                                            }
         
                                        }
                                        ?>
                                    </div>


                                </div>
                            </div>
                            <!-- Account Jason -->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include("include/footer.php") ?>