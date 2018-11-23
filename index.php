<?php
        session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | NitRr.in</title>
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
	
	<!--section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<!?php
								include("category.php");
						?>
					
						<div class="shipping text-center"><!--shipping-->
							<!--img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					<!--/div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<!--h2 class="title text-center">Best Selling Product</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.jpg" alt="" />
											<h2>₹250</h2>
											<p>Elegant Silver Ring</p>
											<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
										</div>	
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product2.jpg" alt="" />
										<h2>₹550</h2>
										<p>Gold Platted Necklace</p>
										<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
									</div>
								</div>								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product3.jpg" alt="" />
										<h2>₹ 300</h2>
										<p>Golden Bangles</p>
										<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
									</div>
								</div>								
							</div>
						</div>						
						<div class="col-sm-4">							
						</div>
</div><!--features_items-->
				  <!--/category-tab-->
					
					<!--div class="recommended_items"><!--recommended_items-->
						<!--h2 class="title text-center">casual</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/beautiful%20white%20and%20gold%20color%20nechlace.jpg" alt="" />
													<h2>₹80</h2>
													<p>Beautiful White and Gold Color Necklace For Women</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/gold%20platted%20austrian%20stone%20green.jpg" alt="" />
													<h2>₹100</h2>
													<p>Gold Plated Austrian Stone Yellow Thread Necklace Set</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/red%20and%20mjulti%20color%20silk%20bangle.jpg" alt="" />
													<h2>₹60</h2>
													<p>Red & Multi Colour Silk Thread Bangle Set For Women</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/oxidised%20gold%20platted%20earings.jpg" alt="" />
													<h2>₹150</h2>
													<p>Oxidised Gold Plated Earrings for womens</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/red%20color%20beads.jpg" alt="" />
													<h2>₹110</h2>
													<p>Red Color Beads Necklace For Womens and girls</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/ads%20leaf%20size%20earings.jpg" alt="" />
													<h2>₹85</h2>
													<p>American Diamond Studded Gold Plated Leaf Size Earrings</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
						<a href="casual.php" class="btn btn-default get1">View All</a>
						
					</div><!--/recommended_items-->
					<!--div class="recommended_items"><!--recommended_items-->
						<!--h2 class="title text-center">daily fashion</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/white%20color%20pearl%20necklace.jpg" alt="" />
													<h2>₹140</h2>
													<p>White Color Pearl Necklace Set For Women</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/beautiful%20designer%20silk%20bangle.jpg" alt="" />
													<h2>₹80</h2>
													<p>Beautiful Designer Silk Thread Bangle For Women</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/black%20and%20gold%20color%20necklace.jpg" alt="" />
													<h2>₹130</h2>
													<p>Black and Gold Color Necklace For Women</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/designer%20mlti%20color%20gold%20platted.jpg" alt="" />
													<h2>₹140</h2>
													<p>Designer Multi Color Gold Plated Necklace</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/ads%20gold%20platted%20earings.jpg" alt="" />
													<h2>₹80</h2>
													<p>American Diamond Studded Gold Plated Earings</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/gold%20platted%20chain%20necklace%20set.jpg" alt="" />
													<h2>₹170</h2>
													<p>Gold Plated Chain Necklace Set White Pearl & Black Beads</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
						<a href="daily-fashion.php" class="btn btn-default get1">View All</a>
					</div><!--/recommended_items-->
					<!--div class="recommended_items"><!--recommended_items-->
						<!--h2 class="title text-center">Wedding Jwellery</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/kundan%20multi%20color%20necklace.jpg" alt="" />
													<h2>₹440</h2>
													<p>Kundan Multi Color Necklace Set With Earrings</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/square%20shape%20kundan%20necklace.jpg" alt="" />
													<h2>₹315</h2>
													<p>Square Shape Kundan Studded Necklace Set</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/elegant%20gold%20platted%203%20layer%20ball%20chain.jpg" alt="" />
													<h2>₹250</h2>
													<p>Elegant Gold Plated Three Layer Ball Chain Necklace Set</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/ad%20silver%20platted%20necklace.jpg" alt="" />
													<h2>₹450</h2>
													<p>American Diamond Silver Plated Necklace Set</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/gold%20platted%20ginni.jpg" alt="" />
													<h2>₹325</h2>
													<p>Gold Plated Ginni Necklace Set For Women</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/white%20pear%20string%20pandent.jpg" alt="" />
													<h2>₹192</h2>
													<p>White Pearl String Pendant Gold Plated Necklace Set</p>
													<a href="#" class="btn btn-default add-to-cart">Shop Now</a>
												</div>												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
						<a href="wedding.php" class="btn btn-default get1">View All</a>
					</div><!--/recommended_items-->	
				<!--/div>
			<!--/div>
		<!--/div>
	<!--/section>
	
<!--Footer-->
		

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>