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
                                        <form  method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="row">
                                            <div class="col-md-4">
                                                    <label for=""><strong>Province</strong></label>
                                                    <select  name="province" class="form-control" id="province_id">
                                                        <option  selected disabled>Select Province</option>
                                                        <?php
                        $selectp=" SELECT `id`, `name` FROM `province`  ";
                        $runp= mysqli_query($connection,$selectp);
                        while($rowp=mysqli_fetch_assoc($runp)){
                        ?>
                        <option value="<?php echo $rowp['id']; ?>"><?php echo $rowp['name']; ?></option>
                       
                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for=""><strong>District</strong></label>
                                                    <select  name="district" class="form-control" id="dis_id">
                                                    <option selected disabled> Select District</option>
                                                       
                                                    </select>
                                                    </div>

                                                  
                                                    <div class="col-md-4">
                                                    <label for=""><strong>Picnic Spot</strong></label>
                                                    <select  name="picnic_id" class="form-control" id="pic_id">
                                                    <option selected disabled> Picnic Spot</option>
                                                       
                                                    </select>
                                                    </div>
                                                 
                                                
                                            </div>
                        <!--/row-->
                        <div class="row">
                         

                        
                                            
                            <div class="col-md-4 py-2">
                                <div class="form-group">
                                    <label>Picture</label>
                                    <input type="file" name="b_image[]" class="form-control" multiple placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <!--  Start Row  -->
                        <!-- <div class="row">

                       
                          
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label>Comments</label>
                                   <textarea name="b_comment" id="" class="form-control" ></textarea>
                                </div>
                            </div> -->
                          
                        
                        <!--/row-->
                      
            <div class="card-body">
                <button type="submit" name="saveData" class="btn btn-success">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- End Row  -->
</div>
<?php include("include/footer.php");

if (isset($_POST['saveData'])) {
   
    // gallery
   
$extension=array("jpeg', 'jpg','png','gif");
foreach ($_FILES['b_image']['tmp_name'] as $key => $value) {
  
    $picnic     = $_POST['picnic_id'];
$filename=$_FILES['b_image']['name'][$key];
$filename_tmp=$_FILES['b_image']['tmp_name'][$key];
  $path_banimage = "../../images/gallery/". $filename;
 move_uploaded_file($filename_tmp,$path_banimage);
 $ban_insert= "INSERT INTO gallery (picture, picnic_id) VALUES ('$filename','$picnic')";

    
    $run = mysqli_query($connection, $ban_insert);
}

    // gallery
  
   
    
   
   
    if ($run) {
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
                                window.location.href = 'add_gallery.php';
                                }
                                });
                                </script>
                                </body>
                            </html>";
    } else {
        echo "<!DOCTYPE html>
                                        <html>
                                        <body>
                                            <script>
                                            Swal.fire(
                                            'Error !',
                                            'Gallery not add, Some error occur',
                                            'error'
                                            ).then((result) => {
                                            if (result.isConfirmed) {
                                            window.location.href = 'add_gallery.php';
                                            }
                                            });
                                            </script>
                                        </body>
                                        </html>";
    }
}
?>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script type="text/javascript">

$('#province_id').on('change', function() {
  var plaza_v = this.value;
  //console.log(plaza_id);
  $.ajax({
    url: "district_ajax.php",
    type: "POST",
    data:{
      pid:plaza_v
    },
    success: function(result){
      $('#dis_id').html(result);
      //console.log(result);
    }

  });
});

$('#dis_id').on('change', function() {
  var block_v = this.value;
  //console.log(plaza_id);
  $.ajax({
    url: "picnic_ajax.php",
    type: "POST",
    data:{
      bid:block_v
    },
    success: function(flor){
      $('#pic_id').html(flor);
      console.log(flor);
    }

  });
});

</script>

<?php
 include("include/db.php");
$dis_id= $_POST['bid'];
 $slt1= "SELECT * FROM `picnic` WHERE `district_id`='$dis_id'";
$qry1= mysqli_query($connection,$slt1);
$picnic1="";
$picnic1 .='<option value="">Select spot </option>';
while($row1=mysqli_fetch_assoc($qry1)){
	$picnic1 .='<option value="'. $row1['id'].'">'. $row1['name'] . '</option>';
}
echo $picnic1;

?>