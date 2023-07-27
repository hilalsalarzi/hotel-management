<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
        <!--  Start Row  -->

        <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
        <div class=" shadow-sm card ">
        <div class=" col-md-12">
            <h3>Add Customer</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <!-- <h3>Add Product</h3> -->
                <br>
                <form method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Customer Name">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label>Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="other" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Other
                                    </label>
                                </div>
                        </div>
                        <br>
                        <!--/row-->
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>CNIC</label>
                                    <input type="text" name="cnic" class="form-control" placeholder="CNIC">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--  Start Row  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="number" name="contact_no" class="form-control" placeholder="Contact Number"> 
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
            </div>
            <!-- End Row  -->
            <div class="card-body">
                <button type="submit" name="save" class="btn btn-success">Save</button>
            </div>
        </div>
        </form>

    </div>
</div>
<!-- End Row  -->
</div>
<?php include("include/footer.php");

if (isset($_POST['save'])) {
    $name        = $_POST['name'];
    $gender       = $_POST['gender'];
    $cnic        = $_POST['cnic'];
    $email     = $_POST['email'];
    $contact     = $_POST['contact_no'];
    $address= $_POST['address'];

    $sql = "INSERT INTO `customer`( `name`, `gender`, `cnic`, `email`, `contact`, `address`) 
            VALUES ('$name','$gender','$cnic','$email','$contact','$address')";
    $run = mysqli_query($connection, $sql);

       $commission_Id = mysqli_insert_id($connection);


       if ($run) 
       {
           echo "<script>
                   Swal.fire(
                   'Added!',
                   'Customer has been successfully added!',
                   'success'
                   ).then((result) => {
                   if (result.isConfirmed) {
                   window.location.href = 'customer.php';
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