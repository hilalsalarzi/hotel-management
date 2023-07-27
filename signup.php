
<?php include 'include-front/dbcon.php';?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Synadmin – Bootstrap5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<!--wrapper-->
	<div class="wrapper">
		<div class="authentication-header"></div>
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<img src="assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign Up</h3>
										<p>Already have an account? <a href="signin.php">Sign in here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
												<span>Sign Up with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
										<hr />
									</div>
									<div class="form-body">
										<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post" class="row g-3" >
											<div class="col-sm-6">
												<label for="name" class="form-label">Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name">
											</div>
											<div class="col-sm-6">
												<label for="fathername" class="form-label">Father Name</label>
												<input type="text" class="form-control" name="fathername" id="fathername" placeholder="Father Name">
											</div>
											<div class="col-12">
												<label for="email" class="form-label">Email Address</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email">
											</div>
											<div class="col-12">
												<label for="Password" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" name="password" id="Password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12">
												<label for="address" class="form-label">Address</label>
												<input type="text" class="form-control" name="address" id="address" placeholder="Address">
											</div>
											<div class="col-12">
											<label for="">Phone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="Phone">
											</div>
											<div class="col-12">
												<label for="cnic" class="form-label">CNIC</label>
												<input type="text" class="form-control" name="cnic" id="cnic" placeholder="cnic">
											</div>
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="adduser" class="btn btn-primary"><i class='bx bx-user'></i>Register Now</button>
												</div>
											</div>
										</form>
										<?php
                            $method = $_SERVER['REQUEST_METHOD'];
                            if(isset($_POST['adduser']))
                                {
                                    $name = $_POST['name'];
                                    $fathername = $_POST['fathername'];                                    
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $address = $_POST['address'];
                                    $phone = $_POST['phone'];
                                    $cnic = $_POST['cnic'];
                         $sql = "INSERT INTO `users` (`name`, `fathername`, `email`,`password`, `address`, `phone`,`cnic`) VALUES ('$name', '$fathername', '$email','$password','$address','$phone','$cnic' )";
                        $result = mysqli_query($conn, $sql);

                        if($result)
                        {
                     
                          echo '<div class="alert alert-primary" role="alert">
					 	 user registered sucessfully
					   </div>'; 
                 
                        }
                        else
                        {
                         echo  '<div class="alert alert-danger" role="alert">
						 user registration failed
					   </div>';
                        }
                    }
                                ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>