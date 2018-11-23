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
    <title>Contact | NitRr</title>
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

	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">
	    		<!--<div class="col-sm-4 map">
                    <img src="images/nitrr/map.png" alt="Google Map" />
                    <a  class="map1" href='https://www.google.com/maps/place/Public+and+Media+Relations+Cell,+NIT+Raipur/@21.2497222,81.6028404,17z/data=!3m1!4b1!4m5!3m4!1s0x3a28dde213f66723:0x21543965c50c43c7!8m2!3d21.2497222!4d81.6050291' >View On Google Map</a>
					</div>-->
          <div id="googleMap" style="width:100%;height:400px;margin-bottom:20px"></div>

          <script>
          function myMap() {
          var mapProp= {
              center:new google.maps.LatLng(21.255910,81.589840),
              zoom:5,
          };
          var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
          }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz6TJ7YDphAZNtzTaAXv0TtACOwDd3IgQ&callback=myMap"></script>
				</div>
			</div>
    		<div class="row">
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">FEEDBACK</h2>
                        <div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" style="border-color:black;"required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" style="border-color:black;"required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" style="border-color:black;"required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required class="form-control"style="border-color:black;" rows="8" placeholder="Your Message Here"></textarea>
				            </div>
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>

                        <?php
                                include("contact-db.php");
                        ?>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>nitrr.ac.in</p>
							<p>NIT Raipur</p>
							<p>Raipur,Chhattisgarh</p>
							<p>Mobile: +91-771-2254200 </p>
							<p>Email: abc@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
							     <li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>
	    	</div>
    	</div>
    </div><!--/#contact-page-->





    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/contact.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
