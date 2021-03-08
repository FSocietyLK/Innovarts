<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>InnovArts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.png">
        <!--custom css-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <!--js --->
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>
    <body class="checkout-cart">
        <!--headerblock-->
        <header>
            <div class="top-line">
                <div class="container top-box">
                    <div class="leftside">
                        <div class="language-block">
                            <form>
                                <div class="dropdown">
                                    <span  data-toggle="dropdown" class="toggle"> ENGLISH
                                        <span class="fa fa-angle-down"></span></span>
                                    <ul class="dropdown-menu">
                                        <li><a>SINHALA</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="currency-block">
                            <form>
                                <div class="dropdown">
                                    <span  data-toggle="dropdown" class="toggle"> AUD
                                        <span class="fa fa-angle-down"></span></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">LKR</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="social-icon-block">
                            <ul class="social-list">
                                <li><a><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i> </a></li>
                                <li><a><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="rightside">
                        <div class="top-button">
                            <a><i class="fa fa-retweet" aria-hidden="true"></i></a>
                        </div>
                        <div class="top-button">
                            <a><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="top-button">
                            <div class="dropdown">
                                <span class="toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> 
                                </span>
                                <ul class="dropdown-menu">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---logo--->
            <div class="container">
                <div class="leftside">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="art-design" class="img-responsive" width="200"/></a>
                    </div>
                </div>
                <div class="rightside">
                    <div class="input-group" id="search">
                        <input type="text" class="form-control input-lg search-box" placeholder="Search" value="" name="search">
                        <span class="input-group-btn">
                            <button class="btn-lg search-button" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            <!---navbar--->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-7 col-sm-7 col-xs-7 rightside-add-space"> 
                        <nav class="navbar navbar-inverse menu-bar">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="index.php">Home</a></li>
                                        <li><a>About Us</a></li>
                                        <li><a href="product.php">Gallery</a></li>
                                        <li><a>Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-5 leftside-remove-space">
                        <div class="btn-group btn-block box-cart">
                            <div id="cart"><img src="images/shopping-cart.png" width="30"/></div>
                            <a class="dropdown-toggle" id="dropdown-toggle"> <span><span id="item-count"><?php echo count($_SESSION['guest_user_cart']);?></span> Items <i class="fa fa-caret-down"></i></span></a>
                            <ul class="dropdown-menu pull-right btn-block cartView" id="dropdown-menu">
                                <li>
									<div class="cart-upper">
										<table class="table cart-items" id="cart-items">
											<tbody>
                                        <?php
                                            if(!empty($_SESSION['guest_user_cart'])) {
                                                $cart_total = 0;
                                                foreach($_SESSION['guest_user_cart'] as $key => $item) {
                                                    $cart_total += substr($item['price'], 1);
                                        ?>
                                                <tr id="cart-item<?php echo $key;?>">
                                                    <td class="text-center item-img">
                                                        <a href="single-product.php"><img class="img-responsive" title="<?php echo $item['name'];?>" src="<?php echo $item['img_src'];?>" width="50"></a>
                                                    </td>
                                                    <td class="text-left"><a href="single-product.php" class="view_cart cart-product-name"><?php echo $item['name'];?></a></td>
                                                    <td class="text-left cart-item-price"><?php echo $item['price'];?></td>
                                                    <td class="product-remove text-center">
                                                        <a href="javascript:void(0)" class="product-remove" title="Remove"><i class="fa fa-times"></i></a>
                                                    </td>
                                                </tr>
                                        <?php   }
                                            }   ?>
												<tr id="cart-total" style="<?php if(empty($_SESSION['guest_user_cart'])) echo 'display: none;';?>">
													<td class="text-left cart-total"><strong>Total</strong></td>
													<td></td>
													<td class="text-left cart-total total-price"><strong><?php if(!empty($_SESSION['guest_user_cart'])) echo "$".number_format((float)$cart_total, 2); else echo "$0.00"; ?></strong></td>
													<td></td>
												</tr>
                                    <?php   if(empty($_SESSION['guest_user_cart'])) {   ?>
												<tr id="cart-empty">
													<td class="text-center" colspan="4" style="padding-top: 16px;">
														<strong style="text-transform: uppercase; cursor: default;">Your cart is empty!</strong>
													</td>
												</tr>
                                    <?php   }   ?>
                                            </tbody></table>
									</div>
									<div style="<?php if(empty($_SESSION['guest_user_cart'])) echo 'display: none;'; else echo 'height: 12px;';?>"></div>
									<div class="cart-lower">
                                        <a href="cart.php" class="btn btn-add-cart" id="view-cart" type="button" style="<?php if(empty($_SESSION['guest_user_cart'])) echo 'width: 260px;';?>">
                                            <span style="<?php if(empty($_SESSION['guest_user_cart'])) echo 'width: 185px;';?>">
                                                View </span>
                                            <i class="fa fa-shopping-cart" style="<?php if(empty($_SESSION['guest_user_cart'])) echo 'width: 75px;';?>"></i>
                                        </a>

                                        <a href="checkout.php" class="btn btn-add-cart" id="checkout" type="button" style="<?php if(empty($_SESSION['guest_user_cart'])) echo 'display: none;';?>">
                                            <span>
                                                Checkout </span>
                                            <i class="fa fa-share"></i> 
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--end of header block-->

        <!--middle content-->
        <div id="container">
            <div class="container">
                <div class="row">
                    <!--left sidebar---->
                    <aside  class="col-sm-3 left-sidebar">
                        <div class="box category">
                            <div class="box-heading">
                                <h3>Categories <i class="fa fa-angle-up"></i></h3>
                            </div>

                            <div class="box-content test">
                                <div class="box-category">
                                    <ul class="menu">
                                        <li><a href="product.php" class="custom_hover">Painting</a>
                                            <i class="fa fa-plus"></i>
                                            <ul>
                                                <li>
                                                    <a class="parent" href="product.php">Oil Painting</a><i class="fa fa-plus"></i>
                                                    <ul>
                                                        <li><a href="product.php">Aliquam eget</a></li>
                                                        <li><a href="product.php">Lorem ipsum</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product.php">Acrylic Painting</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="product.php" class="custom_hover">New Media</a></li>
                                        <li><a href="product.php" class="custom_hover">Drawing</a></li>
                                        <li><a href="product.php" class="custom_hover">Fine art</a></li>
										<li><a href="product.php" class="custom_hover">Craft</a></li>
                                        <li><a href="product.php" class="custom_hover">Photography</a></li>
                                        <li><a href="product.php" class="custom_hover">Decorative art</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box special">
                            <div class="box-heading">
                                <h3>Special</h3>
                            </div>
                            <div class="box-content">
                                <div class="product-layout">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="product-thumb transiction">
                                                <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                                <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                                <div class="image"><a href="/innovarts/product/artwork/74861/"><img src="/innovarts/product/artwork/74861/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a>Texture Design</a></div>
                                                    <div class="price">
                                                        <span class="price-new">$34.90</span>
                                                        <span class="price-old">$49.50</span>
                                                    </div>
                                                </div>
                                                <div class="cart-button">
                                                    <a class="btn btn-add-cart add-cart-item" href="javascript:void(0);">
                                                        <span>
                                                            Add to Cart </span>
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--end sidebar-->

                    <!--main content-->
                    <div class="col-sm-9 checkout-page" id="content">
                        <ul class="breadcrumb">
                            <li><a href="login.php"><i class="fa fa-home"></i></a></li>
                            <li><a href="cart.php">Cart</a></li>
                        </ul>
                        <h1>Shopping Cart &nbsp;(35.00kg)</h1>
                        <br/>
                        <form class="shoping-cart-view">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td class="text-center">Image</td>
                                            <td class="text-left">Product Name</td>
                                            <td class="text-left">Model</td>
                                            <td class="text-left">Quantity</td>
                                            <td class="text-right">Unit Price</td>
                                            <td class="text-right">Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"> <div class="image">
                                                    <a href="/innovarts/product/artwork/74861/"><img class="img-thumbnail" src="/innovarts/product/artwork/74861/main.jpg" width="100"></a></div>
                                            </td>
                                            <td class="text-left"><a href="single-product.php">Texture Design</a>
                                                <br>
                                                <small>Color: black</small>
                                                <br>
                                                <small>Size: Medium</small>
                                                <br>
                                                <small>Reward Points: 200</small>
                                            </td>
                                            <td class="text-left">Product 3</td>
                                            <td class="text-center">
                                                <div style="max-width: 200px;" class="input-group btn-block">
                                                    <p class="clearfix">
                                                        <input type="text" id="cart-q" class="form-control cart-q" size="1" value="1"></p>
                                                    <div>
                                                        <button class="btn btn-custom"  type="submit" ><i class="fa fa-refresh"></i></button>
                                                        <button class="btn btn-custom"  type="button" ><i class="fa fa-times-circle"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right"><div class="price">$194.50</div></td>
                                            <td class="text-right"><div class="price price-total">$194.50</div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <h2>What would you like to do next?</h2>
                        <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                        <div id="accordion" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#collapse-coupon">Use Coupon Code <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div class="panel-collapse collapse in" id="collapse-coupon">
                                    <div class="panel-body">
                                        <label for="input-coupon" class="col-sm-2 control-label">Enter Your Coupon Code Here</label>
                                        <div>
                                            <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon  code here" value="" name="coupon">
                                            <span>
                                                <input type="button" class="btn btn-custom"  id="button-coupon" value="Apply Coupon">
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-voucher">Use Gift Voucher <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-voucher" style="height: auto;">
                                    <div class="panel-body">
                                        <label for="input-voucher" class="col-sm-2 control-label">Enter Your Gift Voucher Code Here</label>
                                        <div>
                                            <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
                                            <span>
                                                <input type="submit" class="btn btn-custom"  id="button-voucher" value="Apply Voucher">
                                            </span> </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#collapse-shipping">Estimate Shipping &amp; Taxes <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-shipping" style="height: auto;">
                                    <div class="panel-body">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <form class="form-horizontal">
                                            <div class="form-group required">
                                                <label for="input-country" class="col-sm-2 control-label">Country</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="input-country" name="country_id">
                                                        <option value=""> --- Please Select --- </option>
                                                        <option value="1">India</option>
                                                        <option value="2">U.K</option>
                                                        <option value="3">U.S.A</option>
                                                        <option value="4">Japan</option>
                                                        <option value="5">Malaysia</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-zone" class="col-sm-2 control-label">Region / State</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="input-zone" name="zone_id">
                                                        <option value=""> --- Please Select --- </option>
                                                        <option value="3513">Gujarat</option>
                                                        <option value="3514">Manchester</option>
                                                        <option value="3515">New Jersey</option>
                                                        <option value="3516">Tokyo</option>
                                                        <option value="3517">Johor</option>     
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-postcode" class="col-sm-2 control-label">Post Code</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="Enter Proper Post Code" name="postcode">
                                                </div>
                                            </div>
                                            <input type="button" class="btn btn-custom"  id="button-quote" value="Get Quotes">
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                            <td class="text-right"><strong>Sub-Total:</strong></td>
                                            <td class="text-right"><div class="price">$1,034.50</div></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                                            <td class="text-right"><div class="price">$2.00</div></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>VAT (20%):</strong></td>
                                            <td class="text-right"><div class="price">$206.90</div></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Total:</strong></td>
                                            <td class="text-right"><div class="price">$1,243.40</div></td>
                                        </tr>
                                    </tbody></table>
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="pull-left"><a class="btn btn-custom" href="product.php">Continue Shopping</a></div>
                            <div class="pull-right"><a class="btn btn-custom" href="checkout.php">Checkout</a></div>
                        </div>
                    </div>
                    <!--end main content-->
                </div>
            </div>
        </div>
        <!--End of middle content-->

        <!--bottom block-->
        <div class="container">
            <div class="row">
                <div class="bottom-block">
                    <div class="col-md-4">
                        <div class="bottom-block-heading"><h4>Free Shopping <span><i class="fa fa-truck"></i></span></h4></div>
                        <div class="bottom-block-description">
                            <p>Free delivery on all orders over $199</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bottom-block-heading"><h4>Money back garanty <span><i class="fa fa-money"></i></span></h4></div>
                        <div class="bottom-block-description">
                            <p>we offer 15 day easy return</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bottom-block-heading"><h4>Online support 24/7 <span><i class="fa fa-phone-square"></i></span></h4></div>
                        <div class="bottom-block-description">
                            <p>Our operators are available 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end bottom block-->
        <hr class="margin-top hidden-xs"/>
        <!--footer block--->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="footer-block"><h4>Information <i class="fa fa-angle-up"></i></h4>


                            <ul class="list-unstyled">
                                <li><a>About Us</a></li>
                                <li><a>Delivery Information</a></li>
                                <li><a>Privacy Policy</a></li>
                                <li><a>Terms &amp; Conditions</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-block"><h4>Customer Service <i class="fa fa-angle-up"></i></h4>
                            <ul class="list-unstyled">
                                <li><a>Contact Us</a></li>
                                <li><a>Returns</a></li>
                                <li><a>Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-block"><h4>Extras <i class="fa fa-angle-up"></i></h4>
                            <ul class="list-unstyled">
                                <li><a>Brands</a></li>
                                <li><a>Gift Vouchers</a></li>
                                <li><a>Affiliates</a></li>
                                <li><a>Specials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-block"><h4>My Account <i class="fa fa-angle-up"></i></h4>
                            <ul class="list-unstyled">
                                <li><a>My Account</a></li>
                                <li><a>Order History</a></li>
                                <li><a>Wish List</a></li>
                                <li><a>Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                    © 2017 All right reserved. Designed by
                    <a href="https://fsocietylk.wordpress.com/" target="_blank">FSocietyLK.</a>
                </div>
            </div>
        </footer>
        <!--end footer block--->
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html>
