<?php
	include("dbconnect.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Log In or Sign Up | asHeeta</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<?php
                        include("head-top.php");
                ?>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<?php
                        include("head-middle.php");
                ?>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
	           <?php
                        include("head-bottom.php");
                ?>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2><b>Login to your account</b></h2>
						<form action="login-db.php" method="post">

							<label><b>Email</b></label>
              <input name="email" type="email" placeholder="Email Address" required />
							<label><b>Password</b> </label>
							<input name="password" type="password" placeholder="Password" required/>
							<span>
								<input name="checkbox" type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<button name ="login" type="submit" class="btn btn-default">Login</button>
						</form>
								<?php
										include("login-db.php");
								?>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>

				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2><b>New User Signup!</b></h2>
						<form action="signup-db.php" method="post">
							<label><b>Name</b></label>
							<input name="username" type="text" placeholder="Name" required/>
							<label><b>Faculty ID</b></label>
							<input name="facultyid" type="text" placeholder="Faculty ID" required/>
							<label><b>Email</b></label>
							<input name="email" type="email" placeholder="Email Address" required/>
							<label><b>Department</b></label>
							<input name="department" type="text" placeholder="Department" required/>
							<label><b>Designation</b></label>
							<input name="designation" type="text" placeholder="Designation" required/>
							<label><b>Mobile Number</b></label>
							<input name="mobile" type="tel" placeholder="Phone Number" required/>
							<label><b>Password</b></label>
							<input name ="password" type="password" placeholder="Password" required/>
							<label><b>Confirm Password</b></label>
							<input name="cpassword" type="password" placeholder="Confirm Password" required/>
                            <button name="submit" type="submit" class="btn btn-default">Signup</button>
						</form>
								<?php
										include("signup-db.php");
								?>

					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<!--Footer-->

		<div class="footer-widget">
			<div class="container">
				<?php
                        include("footer.php");
                ?>
			</div>
		</div>

	</footer><!--/Footer-->

    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
