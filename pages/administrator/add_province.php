<?php include("include/header.php"); ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row mb-2">
    </div>
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
        <div class=" shadow-sm card ">
        <div class=" col-md-12">
            <h3>Add Province</h3>
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
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Province Name</label>
                                                <input type="text" name="province" class="form-control" placeholder="Enter District name" required>
                                            </div>
                                            <!-- /.card-body -->
                                            <input type="submit" name="save" class="btn btn-primary" value="Submit" required />
                                        </form>

                                        <?php

                                        if(isset($_POST['save'])){

                                            $province = $_POST['province'];
                                                
                                            $sql = "INSERT INTO `province`( `name`) VALUES ('$province')";
                                            $run = mysqli_query($connection,$sql) or die("Query Failed");
                                            if ($run) 
                                            {
                                                echo "<script>
                                                        Swal.fire(
                                                        'Added!',
                                                        'Province has been successfully added!',
                                                        'success'
                                                        ).then((result) => {
                                                        if (result.isConfirmed) {
                                                        window.location.href = 'province.php';
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
                    <?php
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include("include/footer.php") ?>