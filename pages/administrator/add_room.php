<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
        <div class=" shadow-sm card ">
        <div class=" col-md-12">
            <h3>Add Room</h3>
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

                                <?php
                                     $sql=" SELECT `id`, `name` FROM `district`  ";
                                      $run= mysqli_query($connection,$sql);
                                      while($row=mysqli_fetch_assoc($run)){
                                    ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                       
                        <?php } ?>
                                </select >
                            </div>
                        
                            <div class="col-md-4">
                                <label for=""><strong>Hotel</strong></label>
                                <select id="hotel_id" name="hotel_id" class="form-control">
                                <!-- <option selected disabled> Select Hotel</option> -->
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Room No:</label>
                                <input type="text" class="form-control" name="room_no" value="" placeholder="Room No">
                            </div>
                            <div class="col-md-4">
                                <label for="">Price Rs</label>
                                <input type="number" class="form-control" name="price" value="" placeholder="price">
                            </div>
                            <div class="col-md-4">
                         <label for=""><strong>Status</strong></label>   
                          <select name="rmstatus" class="form-control">
                            <option selected value="Available">Available</option>
                            <option value="Booked">Booked</option>
                          </select> 
                            </div>
                            
                           
                        </div>
                        </div>
                        <!-- <br> -->
                      
                        <!-- <div class="row">
                            <div class="col-md-4">
                                <label for="">Check In:</label>
                                <input type="datetime-local" class="form-control" name="check_in" value="" placeholder="Room No">
                            </div>
                           
                            <div class="col-md-4">
                                <label for="">Check Out:</label>
                                <input type="datetime-local" class="form-control" name="check_out" value="" placeholder="Room No">
                            </div>
                            <div class="col-md-4">
                                <label for="">Status:</label>
                                <input type="text" class="form-control" name="status" value="" placeholder="Status">
                            </div>
                        </div>
                        <br> -->
                     
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

<?php
if(isset($_POST['save']))
{
    

      $hotel_name = $_POST['hotel_id'];
    $room_no = $_POST['room_no'];
    $price = $_POST['price'];
    // $plan = $_POST['plan'];
   

   
    $status = $_POST['rmstatus'];
    
  

    $sql = "INSERT INTO `room`(`name`, `hotel_id`, `price`, `status`,`contract_id`) VALUES ('$room_no','$hotel_name','$price','$status','0')";
    $run = mysqli_query($connection, $sql);

    if ($run) 
    {
        echo "<script>
                Swal.fire(
                'Added!',
                'Room has been successfully added!',
                'success'
                ).then((result) => {
                if (result.isConfirmed) {
                window.location.href = 'add_room.php';
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