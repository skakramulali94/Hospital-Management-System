<?php 
session_start();
include './common/public_header.php' ;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">

				<p style="color:red; font-size: 20">
                            <!-- Display warnings here -->
                            <?php
                            if(!empty($_SESSION['signup_errors'])){
                                foreach ($_SESSION['signup_errors'] as $error) {
                                    echo $error."<br/>";
                                }
                            }
                            ?>
                        </p>

				<form action="<?php echo site_url('/controllers/signup.php'); ?>"  class="user" method="POST">
                        	<h3>Doctor's Signup</h3>



<div class="form-holder">
						<span class="lnr lnr-user"></span>
								<input class="form-control" id="fullname"  type="text" name="fullname" placeholder="Full Name" >
	</div>			

			
			<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
								<input class="form-control" id="phonenumber"  type="text" name="phonenumber" placeholder="phonenumber">
	</div>


					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>

    <input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="Email Address" value="">

	</div>

	<div class="form-holder">
						<span class="lnr lnr-lock"></span>
  <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
    </div>
		<div class="form-holder">
						<span class="lnr lnr-lock"></span>
								 <input name="pw_confirm" type="password" class="form-control" id="exampleRepeatPassword" placeholder="Repeat Password">
                              
	</div>

					<button>
						<span>Register</span>
					</button>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>