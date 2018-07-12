<?php
include 'config.php';
include 'shopping.php';
include 'autocomplete.php';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>quickFox</title>
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
        <script src="js/search.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="shop">
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
                                    <a href="index.php"><img src="logo7.png" alt="logo" /></a>
                                </div>
                                <!-- logo-area-end -->
                            </div>
                            <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                                <!-- menu-area-start -->
                                <div class="menu-area">
                                    <nav>
                                        <ul>
                                            <li><a href="index.php">Home</a>
                                                
                                            </li>
                                            <li><a style="color: red;" href="bakeries1.php">Shop</a>
                                                <ul class="mega-menu">
                                                    <li><a href="#">Categories</a>
                                                     <ul class="mega-menu mega-menu-2">
                                                    <li>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="bakeries1.php">Bakeries</a></li>
                                                            <li><a href="groceries1.php">Groceries</a></li>
                                                            <li><a href="stationeries1.php">Stationaries</a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="sub-menu-2">
                                                            <li><a href="homecare1.php">Home care</a></li>
                                                            <li><a href="personalcare1.php">Personal Care</a></li>
                                                            <li><a href="fruits1.php">Fruits & Veggies</a></li>
                                                           
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
                                            <li><a href="bakeries1.php">Shop</a>
                                                <ul>
                                                    <li><a href="bakeries1.php">Bakeries</a></li>
                                                    <li><a href="groceries1.php">Groceries</a></li>
                                                    <li><a href="stationeries1.php">Stationeries</a></li>
                                                    <li><a href="homecare1.php">Homecare</a></li>
                                                    <li><a href="personalcare1.php">Personal Care</a></li>
                                                    <li><a href="fruits1.php">Fruits and Veggies </a></li>
                                                    
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
                                        <li><a href="near.php" title="Shops Nearby"><i class="fa fa-map-marker"></i></a>
                                            
                                        </li>
                                        <li><a href="#" id="show-search"><i class="fa fa-search"></i></a>
                                            <div class="search-content" id="hide-search">
                                                <span class="close" id="close-search">
                                                    <i class="fa fa-window-close"></i>
                                                </span>
                                                <div class="search-text">
                                                    <h1>Search</h1>
                                                    <form autocomplete="off" action="search.php" method="get" id="search">
                            <div class="autocomplete">    
                            <input type="text" name="Items" id="myInput" placeholder="Type your keyword...">

                            <button type="submit" class="btn"><i class="fa fa-search" alt="Submit"></i></button>
                        </div>
                     
                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="<?php if(isset($_SESSION["user"])){?>cart.php<?php } else{ ?>account/login.php<?php } ?> "><i class="fa fa-shopping-basket"></i></a>
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
                                                    <a href="<?php if(isset($_SESSION["user"])){?>cart.php<?php } else{ ?>account/login.php<?php } ?> ">Edit Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#" id="show-cart" title="Account"><i class="fa fa-reorder"></i></a>
                                            <div class="shapping-area" id="hide-cart">
                                                
                                                <div class="single-shapping">
                                                    <span>My Account</span>
                                                    <?php if(isset($_SESSION["user"])){ ?>
                                                    <ul>
                                                        <li>Hello <?php echo $_SESSION["user"]; ?></li>
                                                        <li><a href="logout.php">Log Out</a>                
</li>
                                                    </ul>    
                                                    <?php } 
                                                    else{
                                                    ?>
                                                    <ul>
                                                        <li><a href="account/login.php">Register</a></li>
                                                        <li><a href="account/login.php">Login</a></li>
                                                    </ul>
                                                <?php } ?>
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
                <!-- <div class="mobile-menu-area hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul id="nav">
                                            <li><a href="index.php">Home</a>
                                                
                                            </li>
                                            <li><a href="groceries1.php">Shop</a>
                                                <ul>
                                                    <li><a style="color: red;" href="#">Bakeries</a></li>
                                                    <li><a href="groceries1.php">Groceries</a></li>
                                                    <li><a href="stationeries1.php">Stationeries</a></li>
                                                    <li><a href="homecare1.php">Homecare</a></li>
                                                    <li><a href="personalcare1.php">Personal Care</a></li>
                                                    <li><a href="fruits1.php">Fruits and Veggies </a></li>
                                                    
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- mobile-menu-area-end -->
            </header>
            <!-- header-area-end -->
            <!-- breadcrumbs-area-start -->
            <div class="breadcrumbs-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content text-center">
                                <h2>shop</h2>
                                <ul>
                                    <li><a href="#">Home /</a></li>
                                    <li><a style="color: red;" href="#">shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs-area-end -->
            <!-- shop-main-area-start -->
            <div class="shop-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-bar">
                                <div class="shop-tab">
                                    <!-- tab-menu-start -->
                                    <div class="tab-menu-3">
                                        <ul>
                                            <li><a href="#th" data-toggle="tab"><img src="img/list.png"> ></a></li>
                                            <li><a style="color: red;" href="#list"  data-toggle="tab"><img src="img/th.jpg">></a></li>
                                        </ul>
                                    </div>
                                    <!-- tab-menu-end -->
                                    
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right">
                            <!-- shop-right-area-start -->
                            <div class="shop-right-area mb-40-2 mb-30">
                                <!-- tab-area-start -->
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="th">
                                        <?php
                $query="SELECT * FROM items WHERE categories='Bakeries' LIMIT 36,12" ;
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
            ?>

                                        <!-- product-wrapper-start -->
                                        <div class="product-wrapper product-wrapper-3 mb-40">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="<?php echo $row["source"]; ?>" alt="product" class="primary"/>
                                                    <img src="<?php echo $row["source"]; ?>" alt="product" class="secondary"/>
                                                </a>
                                                <div class="product-icon">
                                                    <a href="shopping.php?hidden_id=<?php echo $row["id_"]; ?>&hidden_name=<?php echo $row["name"]; ?>&hidden_source=<?php echo $row["source"]; ?>&quantity=1&add_to_cart=" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket" style="color: black;"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#mymodal<?php echo $row["id_"]; ?>" title="Quick View"><i class="fa fa-bars" style="color: black;"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="manufacture-product">
                                                    
                                                    <div class="rating">
                                                        <ul>
                                                            <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h2><a href="#" data-toggle="modal" data-target="#mymodal<?php echo $row["id_"]; ?>"><br><br><br><?php echo $row["name"]; ?></a></h2>
                                                
                                            </div>
                                        </div>
                                        
                                                                                <?php }} ?>

                                    </div>
                                    <div class="tab-pane active" id="list">
                                        <div class="row"><?php
                $query="SELECT * FROM items WHERE categories='Bakeries' LIMIT 36,12" ;
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
            ?>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <!-- product-wrapper-start -->
                                                <div class="product-wrapper mb-40">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="<?php echo $row["source"]; ?>" alt="product" class="primary"/>
                                                            <img src="<?php echo $row["source"]; ?>" alt="product" class="secondary"/>
                                                        </a>
                                                        <div class="product-icon">
                                                    <a href="shopping.php?hidden_id=<?php echo $row["id_"]; ?>&hidden_name=<?php echo $row["name"]; ?>&hidden_source=<?php echo $row["source"]; ?>&quantity=1&add_to_cart=" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-basket" style="color: black;"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#mymodal<?php echo $row["id_"]; ?>" title="Quick View"><i class="fa fa-bars" style="color: black;"></i></a>
                                                </div>
                                                    </div>
                                                    <div class="product-content pt-20">
                                                        <div class="manufacture-product">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-star"></i></amymodal></li>
                                                                    <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h2><a href="product-details.html"><?php echo $row["name"]; ?></a></h2>
                                                    </div>
                                                </div>
                                                <!-- product-wrapper-end -->
                                            </div>
                                            <!-- product-wrapper-end --><div class="modal-area">
                <!-- single-modal-start -->
                <div class="modal fade" id="mymodal<?php echo $row["id_"]; ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-img">
                                    <div class="single-img">
                                        <img src="<?php echo $row["source"]; ?>" alt="hat" class="primary" />
                                    </div>
                                </div>
                                <div class="model-text">
                                    <h2><a href="#"><?php echo $row["name"]; ?></a> </h2>
                                    <div class="product-rating">
                                        <a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a>
                                        <a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a>
                                        <a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a>
                                        <a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a>
                                        <a href="#"><i style="color: #FFD700;" class="fa fa-star"></i></a>
                                    </div>
                                    
                                    
                                    <form method="get">
                                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                                         <input type="hidden" name="hidden_source" value="<?php echo $row["source"]; ?>" />  
                                         <input type="hidden" name="hidden_id" value="<?php echo $row["id_"]; ?>" /> 
                                        <input type="number"  name="quantity" value="1"/>
                                        <button type="submit" name="add_to_cart">Add to cart</button>
                                    </form>
                                    <div class="product-meta">
                                        <span>
                                            Categories: 
                                            <a href="#"><?php echo $row["categories"]; ?></a>
                                        </span>
                                        
                                    </div>
                                    <!-- social-icon-start -->
                                    <div class="social-icon mt-20">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Share on Facebook"><i class="fa fa-facebook" style="color: black;"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Share on Twitter"><i  class="fa fa-twitter" style="color: black;"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Email to a Friend"><i class="fa fa-envelope-o" style="color: black;"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Pin on Pinterest"><i class="fa fa-pinterest" style="color: black;"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Share on Google+"><i class="fa fa-google-plus" style="color: black;"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- social-icon-end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-modal-end -->
            </div>
                                            <?php }} ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- tab-area-end -->
								<!-- pagination-area-start -->
								<div class="pagination-area">
									<div class="pagination-number">
										<ul>
											<li><a href="bakeries3.php"><i class="fa fa-angle-left"></i></a></li>
											<li><a href="bakeries1.php">1</a></li>
											<li><a href="bakeries2.php">2</a></li>
											<li><a href="bakeries3.php">3</a></li>
											<li><a style="color: red;" href="#">4</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
									<div class="product-count">
										<p>Showing 1 - 12 of 48 items</p>
									</div>
									
								</div>
								<!-- pagination-area-end -->
							</div>
							<!-- shop-right-area-end -->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<!-- shop-left-area-start -->
							<div class="shop-left-area">
								<!-- single-shop-start -->
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Categories</h3>
									</div>
									<div class="Categories-list">
										<ul>
											<li><a style="color: red;" href="#">Bakeries</a></li>
											<li><a href="stationeries1.php">Stationeries</a></li>
											<li><a href="personalcare1.php">Personal Care</a></li>
											<li><a href="homecare1.php">Home Care</a></li>
											<li><a href="fruits1.php">Fruits and Veggies</a></li>
											<li><a href="groceries1.php">Groceries</a></li>
										</ul>
									</div>
								</div>
								<!-- single-shop-end -->
								
							</div>
							<!-- shop-left-area-end -->
						</div>
					</div>	
				</div>
			</div>
			<!-- shop-main-area-end -->
			
			<!-- footer-area-start -->
			<footer>
				<div class="footer-area ptb-40">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<!-- footer-logo-start -->
									<a href="#" id="logoo"><img src="logo7.png" alt="logo" /></a>
								<!-- footer-logo-end -->
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<!-- copy-right-area-start -->
								<div class="copy-right-area mb-3 text-center">
									<p>Copyright © 2018 <a href="#">quickFox</a> . All Right Reserved</p>
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
			<!-- modal-area-start -->
			
			<!-- modal-area-end -->
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
        <script src="js/search.js"></script>
    </body>
</html>
<script type="text/javascript"> 	
	
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}

/*An array containing all the country names in the world:*/
// 
var countries= <?php echo json_encode($shoplat);?>

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);


</script>