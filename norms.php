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
    <title>Norms | NitRr</title>
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
	
	<section id="advertisement">
		<div class="container">
		 <table class="table table-bordered" cellpadding="20" cellspacing="10" width="100%" border="0" align="center">
  
   
    <thead style="color:white;background:#00014e;">
      <tr>
                                    <th class="title" style="color:black;background:black; font-weight:bold; text-align:center;"> 

		<a href="images/nitrr/guestrequisition.pdf">GUEST REQUISITION FORM </a>
			<!-- img src="images/nitrr/norms.png" alt="" /-->
			                                  </tr>
    </thead>
	</table>
 
 

		<!--/div>
	</section>
	
	<section>
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
						<!--h2 class="title text-center">DAILY FASHION</h2>
                        <!?php
                                 $cat_sql = "SELECT * FROM stock WHERE collection='1' ";
                                 $cat_query = mysqli_query($dbconnect, $cat_sql);
                                 $cat_rs = mysqli_fetch_assoc($cat_query);
                                 $row=mysqli_fetch_array($cat_query);
                
                                do
                                { 
                                        $price = $row[9];
                                        $prd_name = $row[2];
                                        $photo = $row[15];
                        ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center prd_name">
                                        <!?php
                                            
                                             echo'<img src="'.$photo.'"alt="" />';
                                            echo"<h2>Rs.".$price."</h2>";
                                            echo"<p>".$prd_name."</p>";
                                        
                                        ?>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Shop Now</a>
									</div>
									
									</div>
								</div>
							</div>
                        <!?php
                                 }
                                while($row=mysqli_fetch_array($cat_query))
                        ?>
						</div>
											
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				<!--/div>
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
		
	

  
    <!--script src="js/jquery.js"></script!-->
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>