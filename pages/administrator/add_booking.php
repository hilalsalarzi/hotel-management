<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
        <div class=" shadow-sm card ">
        <div class=" col-md-12">
            <h3>Booking</h3>
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
                            <div class="col-md-6">
                            <label for="">Room No: / Price</label>
                                <select id="room_id" name="room_id" class="form-control">
                                <option selected disabled> Select Room</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Plan</label>
                                <select name="plan" class="form-control">
                                    <option disabled selected> Select Plan</option>
                                    <?php

                                    $sql = "SELECT * FROM plan";
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
                        <!-- <br> -->
                        <br>
                        <div class="row">   
                         <br>
                         <div class="col-md-4">
                                <label for="">Customer</label>
                                <select name="customer" class="form-control">
                                    <option disabled selected> Select Customer</option>
                                    <?php

                                    $sql = "SELECT * FROM customer";
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
                                <label for="">Check In:</label>
                                <input type="datetime-local" class="form-control" name="check_in" value="" placeholder="Room No">
                            </div>
                           
                            <div class="col-md-4">
                                <label for="">Check Out:</label>
                                <input type="datetime-local" class="form-control" name="check_out" value="" placeholder="Room No">
                            </div>
                           
                        </div>
                        <br>
                        <div class="row">
                            
                            <!-- <div class="col-md-4">
                                <label for="">Status:</label>
                                <input type="text" class="form-control" name="status" value="" placeholder="Status">
                            </div> -->
                            <div class="col-md-4">
                            <label for="">Room Available</label>
                                <select id="room_price" name="room_id" readonly class="form-control">
                                <option selected disabled> Available</option>
                                </select>
                            <!-- <label for="">Amount:</label>
                            <input type="number" class="form-control" name="amount" value="" id="room_price" placeholder="Enter Amount"> -->
                        </div>
                        <div class="col-md-4">
                          <label for=""><strong>Remarks:</strong></label>   
                          <select name="remarks" class="form-control">
                            <option value="cash">CASH</option>
                            <option value="mcb">MCB</option>
                          </select> 
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

<?php
if(isset($_POST['save']))
{
   
    $hotel_name = $_POST['hotel'];
    $room_no = $_POST['room_id'];
    $plan = $_POST['plan'];
    $customer = $_POST['customer'];
    $gps  = $_POST['gps'];
    $date = $_POST['date'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $status = $_POST['status'];
    $amount = $_POST['amount'];
    $p_type = $_POST['remarks'];

    $sql = "INSERT INTO `booking`( `plan_id`, `hotel_id`, `room_id`, `customer_id`, `book_date`, `check_in`, `check_out`, `status`, `amount`, `p_type`) 
            VALUES ('$plan',' $hotel_name','$room_no ','$customer','$date','$check_in','$check_out','$status','$amount','$p_type')";
    $run = mysqli_query($connection, $sql);
    $contid=mysqli_insert_id($connection);

    if ($run) 
    {
        $sql1="UPDATE `room` SET `status`='Booked',`contract_id`='$contid' WHERE id= $room_no";
        $run1 = mysqli_query($connection, $sql1);
        
        echo "<script>
                Swal.fire(
                'Added!',
                'Booking has been successfully added!',
                'success'
                ).then((result) => {
                if (result.isConfirmed) {
                window.location.href = 'booking.php';
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
$('#hotel_id').on('change', function() {
  var romid = this.value;
//   console.log(plaza_id);
  $.ajax({
    url: "new.php",
    type: "POST",
    data:{
        roomidf:romid
    },
    success: function(room){
      $('#room_id').html(room);
    //  $('#room_price').html(pricrm);
    //  console.log(pricrm);
    }

  });
});
 </script>
<?php include("include/footer.php");?>