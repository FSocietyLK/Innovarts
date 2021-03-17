<?php if (!isset($_SESSION)) session_start();?>
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
		<link href="font-awesome/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <!--js --->
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
		<script src="js/form-validate.js" type="text/javascript"></script>
    </head>
    <body>
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
                        <a href="/innovarts/"><img src="images/logo.png" alt="art-design" class="img-responsive" width="200"/></a>
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

                                    <!--                                    <a class="navbar-brand" href="#">WebSiteName</a>-->
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/innovarts/">Home</a></li>
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
                                                        <a href="<?php echo dirname($item['img_src']);?>"><img class="img-responsive" title="<?php echo $item['name'];?>" src="<?php echo $item['img_src'];?>" width="50"></a>
                                                    </td>
                                                    <td class="text-left"><a href="<?php echo dirname($item['img_src']);?>" class="view_cart cart-product-name"><?php echo $item['name'];?></a></td>
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
													<td class="text-center" colspan="4">
														<strong>Your cart is empty!</strong>
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
                    <aside class="col-sm-3 left-sidebar">
                        <div class="box category">
                            <div class="box-heading">
                                <h3>Account <i class="fa fa-angle-up"></i></h3>
                            </div>

                            <div class="box-content test">
                                <div class="box-category">
                                    <ul class="menu">
                                        <li><a>Login</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        <li><a>Forgotten Password</a></li>
                                        <li><a>My Account</a></li>
                                        <li><a>Address Books</a></li>
                                        <li><a>Wish List</a> </li>
                                        <li><a>Order History</a> </li>
                                        <li><a>Downloads</a></li>
                                        <li><a>Reward Points</a></li>
                                        <li><a>Returns</a></li>
                                        <li><a>Transactions</a> </li>
                                        <li><a>Newsletter</a></li>
                                        <li><a>Recurring payments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </aside>
                    <!--end sidebar-->

                    <!--main content-->
                    <div id="content" class="col-sm-9">
                        <ul class="breadcrumb">
                            <li><a href="/innovarts/"><i class="fa fa-home"></i></a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="well">
                                    <div class="heading-text">
                                        <i class="fa fa-file-text-o"></i>
                                        <div class="extra-wrap">
                                            <h2>New Customer</h2>
                                            <strong>Register Account</strong>
                                            <hr/>
                                        </div>
                                    </div>
                                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                    <a class="btn btn-custom" href="register.php">Continue</a></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="well">
                                    <div class="heading-text">
                                        <i class="fa fc-key"></i>
                                        <h2>Returning Customer</h2>
                                        <strong>I am a returning customer</strong>
                                        <hr/>
                                    </div>
									<div class="alert alert-danger alert-dismissible" style="display: none;">
										<button type="button" class="close" aria-hidden="true">&times;</button>
										<strong>Login failed!</strong> The email or password you entered is incorrect. Please try gain.
									</div>
                                    <form>
                                        <div class="form-group">
                                            <label for="input-email" class="label-email">Email Address</label>
                                            <div class="email-wrapper">
												<input type="text" class="form-control" id="input-email" placeholder="&#61447;  Email" value="" name="email">
											</div>
											<small class="help-block"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-password" class="label-password">Password</label>
                                            <div class="password-wrapper">
												<input type="password" class="form-control" id="input-password" placeholder="&#61475;  Password" value="" name="password">
                                            </div>
											<small class="help-block"></small>
                                        </div>
										<div class="form-group">
											<a>Forgotten password?</a>
										</div>
                                        <input type="submit" class="btn btn-custom" id="login" value="Login">
                                    </form>
                                </div>
                            </div>
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
