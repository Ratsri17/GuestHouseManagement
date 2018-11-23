<?php
        include("dbconnect.php");
?>
<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="accomodation.php"><img src="images/nitrr/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
                                <?php
                                if(!empty($_SESSION['email']) )
              {
								echo'<li><a href=""><i class="fa fa-user"></i>'.$_SESSION['email'].'</a></li>';
               # echo'<li><a href=""><i class="fa fa-crosshairs"></i>'.session_destroy().'</a></li>';
              }
                                else
                                {
                                    echo'<li><a href=""><i class="fa fa-user"></i>Account</a></li>';
                                }
								echo'<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>';
                                 if(!empty($_SESSION['email']) )
              {
              }
                                else
                                {
                                    echo'<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>';
                                }
                                
                                
                                if(!empty($_SESSION['email']) )
              {
                echo'<li><a href=""><i class="fa fa-user"></i> Log ou'.session_destroy().'</a></li>';
              }
                                ?>

							</ul>

						</div>
					</div>
				</div>
