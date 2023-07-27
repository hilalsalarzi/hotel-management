<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
        <div class=" shadow-sm card ">
        <div class=" col-md-12">
            <h3>Add Hotel Facilities</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <!-- <h3>Add Product</h3> -->
                <br>
                <form method="POST">
                    <div class="modal-body">
                        <div class="row">
                        <div class="col-md-4">
                            <label for=""><strong>Province</strong></label>
                            <select  name="province" class="form-control" id="province_id">
                                <option  selected disabled>Select Province</option>
                                <?php
                        $sql=" SELECT `id`, `name` FROM `province`  ";
                        $run= mysqli_query($connection,$sql);
                        while($row=mysqli_fetch_assoc($run)){
                        ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                       
                        <?php } ?>
                            </select>
                    </div>
                            <div class="col-md-4">
                                <label for="">District</label>
                                <select id="district_id" name="district" class="form-control">
                                <option selected disabled> Select District</option>
                                </select >
                            </div>
                        
                            <div class="col-md-4">
                                <label for=""><strong>Hotel</strong></label>
                                <select id="hotel_id" name="hotel" class="form-control">
                                <option selected disabled> Select Hotel</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Meeting Room:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="meeting_room" value="yes" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="meeting_room" value="no" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Free Wifi:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="wifi" value="yes" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="wifi" value="no" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                            </div>
                            <!-- <br> -->
                            <div class="col-md-2">
                                <label>Fitness:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fitness"  value="yes" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fitness"  value="no" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Car Parking:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="car_parking" value="yes" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="car_parking"  value="no" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Swimming Pool:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="swimming_pool" value="yes" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="swimming_pool"  value="no" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- <br> -->
                            <br>
                        <div class="row">
                            
                           
                            <div class="col-md-2">
                                <label>Security:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="security" value="yes" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="security"  value="no" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                            </div>
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
	
    $hotel = $_POST['hotel'];
    $meeting_room = $_POST['meeting_room'];
    $wifi  = $_POST['wifi'];
    $fitness = $_POST['fitness'];
    $car_parking = $_POST['car_parking'];
    $swimming_pool = $_POST['swimming_pool'];
    $security = $_POST['security'];

    $sql = "INSERT INTO `hotel_facilities`( `meeting_room`, `free_wifi`, `fitness`, `car_parking`, `swimming_pool`, `security`, `hotel_id`) 
            VALUES ('$meeting_room','$wifi','$fitness','$car_parking','$swimming_pool','$security','$hotel')";
    $run = mysqli_query($connection, $sql);

    if ($run) 
    {
        echo "<script>
                Swal.fire(
                'Added!',
                'Hotel Facility has been successfully added!',
                'success'
                ).then((result) => {
                if (result.isConfirmed) {
                window.location.href = 'hotel_facilities.php';
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
