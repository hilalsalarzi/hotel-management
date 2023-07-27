<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
        <div class=" shadow-sm card ">
        <div class=" col-md-8">
            <h3>Add Hotel</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <!-- <h3>Add Product</h3> -->
                <br>
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">District</label>
                                <select name="district" class="form-control">
                                    <option disabled> Select District</option>
                                    <?php

                                    $sql = "SELECT * FROM district";
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
                                <label for="">Hotel Name:</label>
                                <input type="text" class="form-control" name="hotel_name" value="" placeholder="Hotel" required>
                            </div>
                           
                            <div class="col-md-4">
                                <label for="">Category</label>
                                <select name="category" class="form-control">
                                    <option disabled> Select Category</option>
                                    <?php

                                    $sql = "SELECT * FROM category";
                                    $run = mysqli_query($connection, $sql) or die('Connection failed');

                                    if (mysqli_num_rows($run) > 0) {
                                        while ($data = mysqli_fetch_assoc($run)) {
                                            echo "<option value='{$data['id']}'>{$data['name']}</option>";
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Latitude:</label>
                                <input type="text" class="form-control" name="latitude" value="" placeholder="latitude">
                            </div>
                            <div class="col-md-4">
                                <label for="">Longitude:</label>
                                <input type="text" class="form-control" name="longitude" value="" placeholder="longitude">
                            </div>
                            <div class="col-md-4">
                                <label for="">Phone:</label>
                                <input type="number" class="form-control" name="phone" value="" placeholder="Phone Number">
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Address:</label>
                                <input type="text" class="form-control" name="address" value="" placeholder="Enter Address">
                            </div>
                            <div class="col-md-4">
                                <label for="">Comment:</label>
                                <input type="text" class="form-control" name="comment" value="" placeholder="Enter Comment">
                            </div>
                            <div class="col-md-3">
                                <label for="">Hotel Image</label>
                                <input type="file" name="files" required>
                            </div>
                        </div>
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

if(isset($_POST['save']))
{
    $file_name = $_FILES['files']['name'];
    $filename_tmp = $_FILES['files']['tmp_name'];
    $target = "hotel_management/images/".$file_name;
    move_uploaded_file($filename_tmp, $target);

	
    $district = $_POST['district'];
    $hotel_name = $_POST['hotel_name'];
    $category = $_POST['category'];
    $latitude  = $_POST['latitude'];
    $longitude  = $_POST['longitude'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `hotel`(`district_id`, `name`, `picture`, `category_id`, `latitude`, `longitude`, `phone`, `address`, `comment`) 
    VALUES ('$district','$hotel_name','$file_name','$category','$latitude','$longitude','$phone','$address','$comment')";
    $run = mysqli_query($connection, $sql);

    if ($run) 
    {
        echo "<script>
                Swal.fire(
                'Added!',
                'Hotel has been successfully added!',
                'success'
                ).then((result) => {
                if (result.isConfirmed) {
                window.location.href = 'hotel.php';
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