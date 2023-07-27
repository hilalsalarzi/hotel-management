<?php include("include/header.php") ?>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-content container-fluid">
        <!--  Start Row  -->
        <div class="card">
        <div class=" shadow-sm card ">
        <div class=" col-md-12">
            <h3>Add Item</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <!-- <h3>Add Product</h3> -->
                <br>
                <form method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Item Name:</label>
                                <input type="text" class="form-control" name="name" value="" placeholder="Item" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Cost:</label>
                                <input type="text" class="form-control" name="cost" value="" placeholder="Cost" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Detail:</label>
                                <input type="text" class="form-control" name="detail" value="" placeholder="Detail" required>
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
	
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $detail = $_POST['detail'];

    $sql = "INSERT INTO items(name, cost, details) 
            VALUES ('$name','$cost','$detail')";
    $run = mysqli_query($connection, $sql);

    if ($run) 
    {
        echo "<script>
                Swal.fire(
                'Added!',
                'Item has been successfully added!',
                'success'
                ).then((result) => {
                if (result.isConfirmed) {
                window.location.href = 'item.php';
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