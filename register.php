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

                                    <!--                                    <a class="navbar-brand" href="#">WebSiteName</a>-->
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
                            <a class="dropdown-toggle" id="dropdown-toggle"> <span><span id="item-count">0</span> Items <i class="fa fa-caret-down"></i></span></a>
                            <ul class="dropdown-menu pull-right btn-block cartView" id="dropdown-menu">
                                <li>
									<div class="cart-upper">
										<table class="table cart-items" id="cart-items">
											<tbody>
												<tr id="cart-total" style="display: none;">
													<td class="text-left cart-total"><strong>Total</strong></td>
													<td></td>
													<td class="text-left cart-total total-price"><strong>$0.00</strong></td>
													<td></td>
												</tr>
												<tr id="cart-empty">
													<td class="text-center" colspan="4" style="padding-top: 16px;">
														<strong style="text-transform: uppercase; cursor: default;">Your cart is empty!</strong>
													</td>
												</tr>
                                            </tbody></table>
									</div>
									<div style="display: none;"></div>
									<div class="cart-lower">
                                        <a href="cart.php" class="btn btn-add-cart" id="view-cart" type="button" style="width: 260px;">
                                            <span style="width: 185px;">
                                                View </span>
                                            <i class="fa fa-shopping-cart" style="width: 75px;"></i>
                                        </a>

                                        <a href="checkout.php" class="btn btn-add-cart" id="checkout" type="button" style="display: none;">
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
                    <div class="col-sm-9" id="content"><ul class="breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                            <li><a>Register</a></li>
                        </ul>
                        <h2>Register Account</h2>
                        <p>If you already have an account with us, please login at the 
                            <a href="login.php">login page</a>.</p>
                        <form class="form-horizontal">
                            <fieldset id="account">
                                <legend>Your Personal Details</legend>
                                <div style="display: none;" class="form-group required">
                                    <label class="col-sm-4 control-label">Customer Group</label>
                                    <div class="col-sm-8">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="checked" value="1" name="">
                                                Default</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-firstname" class="col-sm-4 control-label">First Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-lastname" class="col-sm-4 control-label">Last Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-email" class="col-sm-4 control-label">E-Mail</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-telephone" class="col-sm-4 control-label">Telephone</label>
                                    <div class="col-sm-8">
                                        <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-fax" class="col-sm-4 control-label">Fax</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-fax" placeholder="Fax" value="" name="fax">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset id="address">
                                <legend>Your Address</legend>
                                <div class="form-group">
                                    <label for="input-company" class="col-sm-4 control-label">Company</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-company" placeholder="Company" value="" name="company">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-address-1" class="col-sm-4 control-label">Address 1</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="address_1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-address-2" class="col-sm-4 control-label">Address 2</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-address-2" placeholder="Address 2" value="" name="address_2">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-city" class="col-sm-4 control-label">City</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-postcode" class="col-sm-4 control-label">Post Code</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-country" class="col-sm-4 control-label">Country</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="input-country" name="country_id">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="2">U.K</option>
                                            <option value="3">U.S.A</option>
                                            <option value="4">Japan</option>
                                            <option value="5">Malaysia</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-zone" class="col-sm-4 control-label">Region / State</label>
                                    <div class="col-sm-8">
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
                            </fieldset>
                            <fieldset>
                                <legend>Your Password</legend>
                                <div class="form-group required">
                                    <label for="input-password" class="col-sm-4 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="input-confirm" class="col-sm-4 control-label">Password Confirm</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Newsletter</legend>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Subscribe</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" value="1" name="newsletter">
                                            Yes</label>
                                        <label class="radio-inline">
                                            <input type="radio" checked="checked" value="0" name="newsletter">
                                            No</label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="buttons">
                                <div class="pull-right">I have read and agree to the <a class="agree"><b>Privacy Policy</b></a> <input type="checkbox" value="1" name="agree" style="vertical-align:text-bottom" >
                                    &nbsp;
                                    <input type="submit" class="btn btn-custom" value="Continue">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
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
