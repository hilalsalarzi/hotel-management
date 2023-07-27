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
            <h3>Add Plan</h3>
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
                                                <label for="">Plan Name</label>
                                                <input type="text" name="plan" class="form-control" placeholder="Plan Name" required>
                                            </div>
                                            <!-- /.card-body -->
                                            <input type="submit" name="save" class="btn btn-primary" value="Submit" required />
                                        </form>

                                        <?php

                                        if(isset($_POST['save'])){

                                            $plan = $_POST['plan'];
                                                
                                            $sql = "INSERT INTO `plan`( `name`) VALUES ('$plan')";
                                            $run = mysqli_query($connection,$sql) or die("Query Failed");
                                            if ($run) 
                                            {
                                                echo "<script>
                                                        Swal.fire(
                                                        'Added!',
                                                        'Plan has been successfully added!',
                                                        'success'
                                                        ).then((result) => {
                                                        if (result.isConfirmed) {
                                                        window.location.href = 'plan.php';
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