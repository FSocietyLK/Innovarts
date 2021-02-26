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
        <!--header block-->
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
                                        <li><a href="index.php">Home</a></li>
                                        <li><a>About Us</a></li>
                                        <li class="active"><a href="product.php">Gallery</a></li>
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
                    <aside  class="col-sm-3 left-sidebar">
                        <div class="box category">
                            <div class="box-heading">
                                <h3>Categories <i class="fa fa-angle-up"></i></h3>
                            </div>

                            <div class="box-content test">
                                <div class="box-category">
                                    <ul class="menu">
                                        
                                        <li><a class="custom_hover">Painting</a>
                                            <i class="fa fa-plus"></i>
                                            <ul>
                                                <li>
                                                    <a class="parent" href="product.php">Oil Painting</a><i class="fa fa-plus"></i>
                                                    <ul>
                                                        <li><a>Aliquam eget</a></li>
                                                        <li><a>Lorem ipsum</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a>Acrylic Painting</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="custom_hover">New Media</a></li>
                                        <li><a class="custom_hover">Drawing</a></li>
                                        <li><a class="custom_hover">Fine art</a></li>
										<li><a class="custom_hover">Craft</a></li>
                                        <li><a class="custom_hover">Photography</a></li>
                                        <li><a class="custom_hover">Decorative art</a></li>
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
                                                <div class="image"><a href="single-product.php"><img src="product/artwork/74861/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a>Texture design</a></div>
                                                    <div class="price">
                                                        <span class="price-new">$34.90</span>
                                                        <span class="price-old"></span>
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


                                        <li>
                                            <div class="product-thumb transiction">
                                                <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                                <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                                <div class="image"><a href="single-product.php"><img src="product/artwork/27344/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a>Soft Panting </a></div>
                                                    <div class="price">
                                                        <span class="price-new">$34.90</span>
                                                        <span class="price-old"></span>
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
                    <div class="col-sm-9" id="content">         
                        <ul class="breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                            <li><a>Gallery</a></li>
                        </ul>
                        <h2></h2>
                        <div class="row ref-search">
                            <div class="col-sm-2 col-xs-12"><img class="img-thumbnail" src="product/artwork/33660/main.jpg"></div>
                            <div class="col-sm-10 col-xs-12"><p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                            </div>
                        </div>
                        <hr>
                        <h3>Refine Search</h3>

                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="ref-search">
                                    <li><a>Paint soft (0)</a></li>
                                    <li><a>paint overlay</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-filter clearfix">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="input-sort" class="control-label">Sort By:</label>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" id="input-sort">
                                        <option selected="selected">Default</option>
                                        <option>Name (A - Z)</option>
                                        <option>Name (Z - A)</option>
                                        <option>Price (Low &gt; High)</option>
                                        <option>Price (High &gt; Low)</option>
                                        <option>Rating (Highest)</option>
                                        <option>Rating (Lowest)</option>
                                        <option>Model (A - Z)</option>
                                        <option>Model (Z - A)</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="input-limit" class="control-label">Show:</label>
                                </div>
                                <div class="col-md-3" >
                                    <select class="form-control" id="input-limit">
                                        <option selected="selected" >15</option>
                                        <option>25</option>
                                        <option>50</option>
                                        <option>75</option>
                                        <option>100</option>
                                    </select>
                                </div>


                                <div class="col-md-2 text-right" style="margin-top: 5px;">
                                    <div class="button-view">
                                        <a  class="" id="list-view" href="product-list.php"><i class="fa fa-th-list"></i></a>
                                        <a  class="active" id="grid-view"><i class="fa fa-th"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-cat-top clearfix">
                            <div class="pull-left"></div>
                            <div class="pull-left result-page">Showing 1 to 12 of 12 (1 Pages)</div>
                            <div class="pull-right">

                                <a class="btn special-button" id="compare-total">
                                    <span>Product Compare (1)</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row product-gallery-block">
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="single-product.php"><img class="img-responsive" src="product/artwork/50773/main.jpg"></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="single-product.php">Painting</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p class="price">
                                                <span class="price-new">$110.00</span> <span class="price-old"></span>
                                                <span class="price-tax"></span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a class="btn special-button add-cart-item" href="javascript:void(0);"><span>Add to Cart</span><i class="fa fa-shopping-cart"></i></a>
                                            <button class="btn special-button" type="button"><i class="fa fa-heart"></i></button>
                                            <button class="btn special-button" type="button"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="single-product.php"><img class="img-responsive" src="product/artwork/21083/main.jpg"></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="single-product.php">Laterica</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p class="price">
                                                <span class="price-new">$150.00</span> <span class="price-old"></span>
                                                <span class="price-tax"></span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a class="btn special-button add-cart-item" href="javascript:void(0);"><span>Add to Cart</span><i class="fa fa-shopping-cart"></i></a>
                                            <button class="btn special-button" type="button"><i class="fa fa-heart"></i></button>
                                            <button class="btn special-button" type="button"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="single-product.php"><img class="img-responsive" src="product/artwork/88310/main.jpg"></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="single-product.php">Painting Softness</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p class="price">
                                                <span class="price-new">$200.00</span> <span class="price-old"></span>
                                                <span class="price-tax"></span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a class="btn special-button add-cart-item" href="javascript:void(0);"><span>Add to Cart</span><i class="fa fa-shopping-cart"></i></a>
                                            <button class="btn special-button" type="button"><i class="fa fa-heart"></i></button>
                                            <button class="btn special-button" type="button"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="single-product.php"><img class="img-responsive" src="product/artwork/25467/main.jpg"></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="single-product.php">Painting Like</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p class="price">
                                                <span class="price-new">$110.00</span> <span class="price-old"></span>
                                                <span class="price-tax"></span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a class="btn special-button add-cart-item" href="javascript:void(0);"><span>Add to Cart</span><i class="fa fa-shopping-cart"></i></a>
                                            <button class="btn special-button" type="button"><i class="fa fa-heart"></i></button>
                                            <button class="btn special-button" type="button"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="single-product.php"><img class="img-responsive" src="product/artwork/65286/main.jpg"></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="single-product.php">Texture Design</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p class="price">
                                                <span class="price-new">$150.00</span> <span class="price-old"></span>
                                                <span class="price-tax"></span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a class="btn special-button add-cart-item" href="javascript:void(0);"><span>Add to Cart</span><i class="fa fa-shopping-cart"></i></a>
                                            <button class="btn special-button" type="button"><i class="fa fa-heart"></i></button>
                                            <button class="btn special-button" type="button"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="single-product.php"><img class="img-responsive" src="product/artwork/40784/main.jpg"></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="single-product.php">HD Paint</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p class="price">
                                                <span class="price-new">$250.00</span> <span class="price-old"></span>
                                                <span class="price-tax"></span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <a class="btn special-button add-cart-item" href="javascript:void(0);"><span>Add to Cart</span><i class="fa fa-shopping-cart"></i></a>
                                            <button class="btn special-button" type="button"><i class="fa fa-heart"></i></button>
                                            <button class="btn special-button" type="button"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 text-left"></div>
                            <div class="col-sm-6 text-right">Showing 1 to 12 of 12 (1 Pages)</div>
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
