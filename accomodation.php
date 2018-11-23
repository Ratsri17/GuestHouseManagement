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
    <title>Accomodation | NitRr.in</title>
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
        </div>
	</header>

	<!--section id="advertisement">
		<div class="container">
			<img src="images/nitrr/nitRr3.png" alt="" />
		</div>
	</section !-->
		<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
                            <li data-target="#slider-carousel" data-slide-to="4"></li>
                            <li data-target="#slider-carousel" data-slide-to="5"></li>
							</ol>

						<div class="carousel-inner">
							<div class="item active">
									<img src="images/nitrr/nitRr.png" class="girl img-responsive" alt="" />

							</div>
							<div class="item">

									<img src="images/nitrr/nitRr1.png" class="girl img-responsive" alt="" />
							</div>

							<div class="item">

									<img src="images/nitrr/nitRr2.png" class="girl img-responsive" alt=""/>

							</div>

							<div class="item">

									<img src="images/nitrr/nitRr.png" class="girl img-responsive" alt=""/>

							</div>
                            <div class="item">

									<img src="images/nitrr/nitRr1.png" class="girl img-responsive" alt=""/>

							</div>
                            <div class="item">

									<img src="images/nitrr/nitRr2.png" class="girl img-responsive" alt=""/>

							</div>
						</div>
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/slider-->


	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Rooms</h2>
						<?php
								include("category.php");
						?>


						<!--div class="shipping text-center">
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Photo Gallery</h2>

						<!--div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center prd_name">
                                        <?php

                                            echo'<img src="'.$photo.'"alt="" />';
                                            echo"<h2>Rs.".$price."</h2>";
                                            echo"<p>".$prd_name."</p>";

                                        ?>
										<a href="product-details.php" name="shop" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Shop Now</a>
									</div>

									</div>
								</div>
							</div>
						</div>

						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<!--Footer-->

		<!--div class="footer-widget">
			<div class="container">
				<!?php
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
