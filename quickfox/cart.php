<?php
include 'shopping.php';
include 'config.php';
include 'autocomplete.php';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mimosa-Responsive eCommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<!-- ionicons.min css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
		<!-- nivo-slider.css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		<!-- style css -->
		<link rel="stylesheet" href="style1.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="cart">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- page-wraper-start -->
		<div id="page-wraper">
			<!-- header-area-start -->
			<header>
                <!-- header-top-area-start -->
                <div class="header-top-area" id="sticky-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <!-- logo-area-start -->
                                <div class="logo-area">
                                    <a href="index.html"><img src="img/flash.png" alt="logo" /></a>
                                </div>
                                <!-- logo-area-end -->
                            </div>
                            <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                                <!-- menu-area-start -->
                                <div class="menu-area">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="index.html">Home</a>
                                                
                                            </li>
                                            <li><a href="bakeries1.php">Shop</a>
                                                <ul class="mega-menu">
                                                    <li><a href="#">Categories</a>
                                                     <ul class="mega-menu mega-menu-2">
                                                    <li>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="bakeries1.php">Bakeries</a></li>
                                                            <li><a href="bakeries1.php">Groceries</a></li>
                                                            <li><a href="bakeries1.php">Stationaries</a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="bakeries1.php">Home care</a></li>
                                                            <li><a href="bakeries1.php">Personal Care</a></li>
                                                            <li><a href="bakeries1.php">Fruits & Veggies</a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                </ul>
                                                    </li>
                                                    
                                        </ul>
                                    </nav>
                                </div>
                                <!-- menu-area-end -->
                            </div>
                            <div class="mobile-menu-area hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul id="nav">
                                            <li><a href="index.php">Home</a>
                                                
                                            </li>
                                            <li><a href="shop.html">Men</a>
                                                <ul>
                                                    <li><a href="shop.html">Bakeries</a></li>
                                                    <li><a href="shop.html">Groceries</a></li>
                                                    <li><a href="shop.html">Stationeries</a></li>
                                                    <li><a href="shop.html">Homecare</a></li>
                                                    <li><a href="shop.html">Personal Care</a></li>
                                                    <li><a href="shop.html">Fruits and Veggies </a></li>
                                                    
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-3 com-sm-6 col-xs-6">
                                <!-- header-right-area-start -->
                                <div class="header-right-area">
                                    <ul>
                                        <li><a href="#" title="Shops Nearby"><img src="img/mark.jpeg"></a>
                                            
                                        </li>
                                        <li><a href="#" id="show-search"><i class="icon ion-ios-search-strong"></i></a>
                                            <div class="search-content" id="hide-search">
                                                <span class="close" id="close-search">
                                                    <i class="ion-close"></i>
                                                </span>
                                                <div class="search-text">
                                                    <h1>Search</h1>
                                                    <form autocomplete="off" action="search.php" method="get" id="search">
                            <div class="autocomplete">    
                            <input type="text" name="Items" id="myInput" placeholder="Type your keyword...">

                            <button type="submit" class="btn"><img src="img/core-img/search.png" alt="Submit"></button>
                        </div>
                     
                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="cart.php"><img src="img/cart.jpg" style="width: 30px;padding-bottom: -2px; "></a>
                                            <span><?php if(isset($_SESSION["shopping_cart"])){echo count($_SESSION["shopping_cart"]);}else{echo "0";};?></span>
                                            <div class="mini-cart-sub">
                                                <div class="cart-product">
                                                    <div class="single-cart">
                                                        <?php   

                          if(isset($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?> 
                                                        <div class="cart-img">
                                                            <a href="#"><img src="<?php echo $values["image_source"];?>" alt="book" /></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="#" data-toggle="modal" data-target="#mymodal<?php echo $values["item_id"]; ?>" ><?php echo $values["item_name"] ?></a></h5>
                                                            <p>Quantity : <?php echo $values["quantity"]?> </p>
                                                        </div>
                                                    <?php }} ?>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="cart-bottom">
                                                    <a href="cart.php">Edit Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#" id="show-cart" title="Account"><img src="img/menu.png"></a>
                                            <div class="shapping-area" id="hide-cart">
                                                
                                                <div class="single-shapping">
                                                    <span>My Account</span>
                                                    <ul>
                                                        <li><a href="account/signup.php">Register</a></li>
                                                        <li><a href="account/login.php">Login</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header-right-area-end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-top-area-end -->
                <!-- mobile-menu-area-start -->
                <div class="mobile-menu-area hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul id="nav">
                                            <li><a href="index.html">Home</a>
                                                <!--  -->
                                            </li>
                               <li><a href="bakeries1.php">Shop</a>
                                                
                                                    <li><a href="#">Categories</a>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="bakeries1.php">Bakeries</a></li>
                                                            <li><a href="bakeries1.php">Stationaries</a></li>
                                                            <li><a href="bakeries1.php">Personal Care</a></li>
                                                            <li><a href="bakeries1.php">Home Care</a></li>
                                                            <li><a href="bakeries1.php">Fruits & Veggies</a></li>
                                                            <li><a href="bakeries1.php">Groceries</a></li>

                                                        </ul>
                                                    </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area-end -->
            </header>
			<!-- header-area-end -->
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<h2 id="c">cart</h2>
								<ul>
									<li><a href="#">Home /</a></li>
									<li class="active"><a href="#">cart</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<!-- cart-main-area-start -->
				<div class="cart-main-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<form action="#">
									<div class="table-content table-responsive">
										<table>
											<thead>
												<tr>
													<th class="product-thumbnail">Image</th>
													<th class="product-name">Product</th>
													<th class="product-quantity">Quantity</th>
													<th class="product-remove">Remove</th>
												</tr>
											</thead>
											<tbody>
												<?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
												<tr>
													<td class="product-thumbnail"><a href="#"><img src="<?php echo $values["image_source"]; ?>" alt="man" /></a></td>
													<td class="product-name"><a href="#"><?php echo $values["item_name"];   ?></a></td>
													<td class="product-quantity"><input style="border:none;
	background-color: #333;
	color: white;" type="number" value="<?php echo $values["quantity"]; ?>"></td>
													
													<td>
                                             <form method="get" >
                                                 <input type="hidden" name="id_" value="<?php echo $values["item_id"]; ?>" />
                                                <input type="submit" name="remove" value="Remove">
                                            </form>
                                        </td>
												</tr>
												<?php
											}}
												?>
											</tbody>
										</table>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
								<div class="buttons-cart mb-30 mt-3">
									<ul>
										<li><a href="#"><form method="post"><input type="submit" name="clear_cart" value="Clear Cart" class="buttons-cart mb-30 mt-3"></form></a></li>
										<li><a href="bakeries1.php">Continue Shopping</a></li>
										<li><a href="#"> GO!!!</a></li>
									</ul>
								</div>
								
							</div>
							
					</div>
				</div>
				<!-- cart-main-area-end -->
			</div>
			<!-- shop-main-area-end -->
			
			<!-- footer-area-start -->
			<footer>
				<div class="footer-area ptb-40">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<!-- footer-logo-start -->
								<div class="footer-logo mb-3">
									<a href="#"><img src="img/logo/2.png" alt="logo" /></a>
								</div>
								<!-- footer-logo-end -->
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<!-- copy-right-area-start -->
								<div class="copy-right-area mb-3 text-center">
									<p>Copyright © 2018 <a href="#">Hastech</a> . All Right Reserved</p>
								</div>
								<!-- copy-right-area-end -->
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<!-- footer-social-icon-start -->
								<div class="footer-social-icon">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<!-- footer-social-icon-end -->
							</div>
						</div>
					</div>
				</div>
		   </footer>
			<!-- footer-area-end -->
	   </div>
	  <!-- page-wraper-start -->
	  
	  
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- owl.carousel.min.js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- jquery.nivo.slider.js -->
        <script src="js/jquery.nivo.slider.js"></script>
		<!-- jquery.elevateZoom-3.0.8.min.js -->
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- jquery.parallax-1.1.3.js -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.counterup.min.js -->
        <script src="js/jquery.counterup.min.js"></script>
		<!-- waypoints.min.js -->
        <script src="js/waypoints.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
