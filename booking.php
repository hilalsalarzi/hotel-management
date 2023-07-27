<?php include 'include-front/header.php';?>



<!--HEADER END-->
<!-- sign up banner start-->
<div class="s-banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="s-heading-section">
                    <h2><a href="javascript:;">Booking</a></h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;"><i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="javascript:;">Add Booking</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- add hotel section start-->
<div class="hotel-main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h2>New-Booking</h2>
                <form class="new_property_box" method="post">
                    <div class="form_property">
                        <h3>Booking</h3>
                        <div class="fields">
                            <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                           
                            <label for=""><strong>Province</strong></label>
                            <select  name="province" class="form-control" id="province_id">
                                <option  selected disabled>Select Province</option>
                                <?php
                        $sql=" SELECT `id`, `name` FROM `province`  ";
                        $run= mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($run)){
                        ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                       
                        <?php } ?>
                            </select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                   <label for="">District</label>
                                <select id="district_id" name="district" class="form-control">
                                <option selected disabled> Select District</option>
                                </select >
                                      </div>
                                      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                      <label for=""><strong>Hotel</strong></label>
                                <select id="hotel_id" name="hotel" class="form-control">
                                <option selected disabled> Select Hotel</option>
                                </select>
                                      </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <label for="">Room No: / Price</label>
                                <select id="room_id" name="room_id" class="form-control">
                                <option selected disabled> Select Room</option>
                                </select>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <label for="">Plan</label>
                                <select name="plan" class="form-control">
                                    <option disabled selected> Select Plan</option>
                                    <?php

                                    $sql = "SELECT * FROM plan";
                                    $run = mysqli_query($conn, $sql) or die('conn failed');

                                    if (mysqli_num_rows($run) > 0) {
                                        while ($data = mysqli_fetch_assoc($run)) {
                                            echo "<option value='{$data['id']}'>{$data['name']}</option>";
                                        }
                                    }
                                    ?>

                                </select>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <label for="">Customer</label>
                                <select name="customer" class="form-control">
                                    <option disabled selected> Select Customer</option>
                                    <?php

                                    $sql = "SELECT * FROM customer";
                                    $run = mysqli_query($conn, $sql) or die('conn failed');

                                    if (mysqli_num_rows($run) > 0) {
                                        while ($data = mysqli_fetch_assoc($run)) {
                                            echo "<option value='{$data['id']}'>{$data['name']}</option>";
                                        }
                                    }
                                    ?>

                                </select>
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <label for="">Date:</label>
                                <input type="date" class="form-control" name="date" value="" placeholder="date" required>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <label for="">Room Available</label>
                                <select id="room_price" name="room_id" readonly class="form-control">
                                <option selected disabled> Available</option>
                                </select>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <label for=""><strong>Remarks:</strong></label>   
                          <select name="remarks" class="form-control">
                            <option value="cash">CASH</option>
                            <option value="mcb">MCB</option>
                          </select> 
                                         </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <label for="">Check In:</label>
                                <input type="datetime-local" class="form-control" name="check_in" value="" placeholder="Room No">
                                    </div>
            
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <label for="">Check Out:</label>
                                <input type="datetime-local" class="form-control" name="check_out" value="" placeholder="Room No">
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                   
                                    
                                </div> -->
                                </div>
                <div class="card-body">
                <button type="submit" name="submit" class="btn btn-success">Save</button>
                 </div>
                            </div>
                            
                        </div>
                    </div>
                
                </div>
</form>
            </div>
            </div>
</div>


<!-- new code  -->
<?php
if(isset($_POST['submit']))
{
   
    $hotel_name = $_POST['hotel'];
    $room_no = $_POST['room_id'];
    $plan = $_POST['plan'];
    $customer = $_POST['customer'];
    // $gps  = $_POST['gps'];
    $date = $_POST['date'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    // $status = $_POST['status'];
    // $amount = $_POST['amount'];
    $p_type = $_POST['remarks'];

    $sql = "INSERT INTO `booking`( `plan_id`, `hotel_id`, `room_id`, `customer_id`, `book_date`, `check_in`, `check_out`) 
            VALUES ('$plan',' $hotel_name','$room_no ','$customer','$date','$check_in','$check_out')";
  $run = mysqli_query($conn, $sql);
    $contid=mysqli_insert_id($conn);

    if ($run) 
    {
        $sql1="UPDATE `room` SET `status`='Booked',`contract_id`='$contid' WHERE id= $room_no";
        $run1 = mysqli_query($conn, $sql1);
       
            echo "<script>
            Swal.fire(
            'Added!',
            'Booking has been successfully added!',
            'success'
            ).then((result) => {
            if (result.isConfirmed) {
            window.location.href = 'index.php';
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
<!-- new code  -->
            <!-- footer section start -->
            <?php include 'include-front/footer.php';?>
