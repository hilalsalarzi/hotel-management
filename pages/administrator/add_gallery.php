<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h3>Add Gallery Pictures</h3>
        </div>
    </div>
    <div class="page-content container-fluid">
        <!--  Start Row  -->

        <div class="card">
            <div class="card-body">
                <!-- <h3>Add Product</h3> -->

                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-10">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for=""><strong>Province</strong></label>
                                                <select id="province_id" name="province" class="form-control">
                                                    <option selected disabled>Select Province</option>
                                                    <?php
                                                    $sql = " SELECT `id`, `name` FROM `province`  ";
                                                    $run = mysqli_query($connection, $sql);
                                                    while ($row = mysqli_fetch_assoc($run)) {
                                                    ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">District</label>
                                                <select id="district_id" name="district" class="form-control">
                                                    <option selected disabled> Select District</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for=""><strong>Hotel</strong></label>
                                                <select id="hotel_id" name="hotel" class="form-control">
                                                    <option selected disabled>Select Hotel</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 py-2">
                                                <div class="form-group">
                                                    <label>Picture</label>
                                                    <input type="file" name="files[]" class="form-control" multiple required>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
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

                    if (isset($_POST['save'])) 
                    {
                        // gallery

                        $extension = array("jpeg', 'jpg','png','gif");
                        $fileNames = array_filter($_FILES['files']['name']);
                        
                        if (!empty($fileNames)) 
                        {
                            foreach ($_FILES['files']['name'] as $key => $value) 
                            {
                                $file_name = $_FILES['files']['name'][$key];
                                $filename_tmp = $_FILES['files']['tmp_name'][$key];
                                $target = "../../images/gallery/".$file_name;
                                move_uploaded_file($filename_tmp, $target);



                                $province_id = $_POST['province'];
                                $district_id = $_POST['district'];
                                $hotel = $_POST['hotel'];
                                $sql1 = "INSERT INTO gallery(`province_id`, `district_id`, `hotel_picture`, `hotel_id`) 
                                         VALUES ('$province_id','$district_id','$file_name','$hotel')";


                               echo $run1 = mysqli_query($connection, $sql1);
                            }
                        }


    // gallery





                        if ($run1) 
                        {
                // move_uploaded_file($_FILES["b_image"]["tmp_name"], "../../images/bank/" . $_FILES["b_image"]["name"]);
                            echo "<!DOCTYPE html>
                                                <html>
                                                    <body>
                                                    <script>
                                                    Swal.fire(
                                                    'Added!',
                                                    'Gallery has been successfully added!',
                                                    'success'
                                                    ).then((result) => {
                                                    if (result.isConfirmed) {
                                                    window.location.href = 'gallery.php';
                                                    }
                                                    });
                                                    </script>
                                                    </body>
                                                </html>";
                        }

                    }
                    ?>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $('#province_id').on('change', function() {
    var province_v = this.value;
    //console.log(plaza_id);
    $.ajax({
        url: "new.php",
        type: "POST",
        data:{
        pid:province_v
        },
        success: function(result){
        $('#district_id').html(result);
        // console.log(result);
        }

    });
});
  $('#district_id').on('change', function() {
  var district_v = this.value;
  //console.log(plaza_id);
  $.ajax({
    url: "new.php",
    type: "POST",
    data:{
      did:district_v
    },
    success: function(flor){
      $('#hotel_id').html(flor);
      console.log(flor);
    }

  });
});
 </script>
<?php include("include/footer.php");?>