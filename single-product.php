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
        <link href="js/bxslider/bxslider.css" rel="stylesheet" type="text/css" />
        <!--js --->
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/bxslider/bxslider.js" type="text/javascript"></script>
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
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.php">Home</a></li>
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
                                                <div class="image"><a href="single-product.php" id="img1-specials"><img src="product/artwork/74861/main.jpg" class="img-responsive"></a></div>
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
                    <div class="col-sm-9 single-product" id="content">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                            <li><a href="single-product.php">Single Product</a></li>
                        </ul>
                        <div class="row product-content">
                            <div class="col-sm-9">
                                <ul class="thumbnails list-unstyled">
                                    <li class="main-image-set"><a class="thumbnail"><img src="images/pro1.jpg" class="changeimg"></a></li>
                                    <li class="image-additional"><a class="thumbnail"> <img class="galleryimg" src="images/pro1.jpg"></a></li>
                                    <li class="image-additional"><a class="thumbnail"> <img class="galleryimg" src="images/pro2.jpg"></a></li>
                                    <li class="image-additional"><a class="thumbnail"> <img class="galleryimg" src="images/pro3.jpg"></a></li>
                                    <li class="image-additional"><a class="thumbnail"> <img class="galleryimg" src="images/pro4.jpg"></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-10">
                                <h1>Texture Design</h1>

                                <ul class="list-unstyled product-info">
                                    <li>Brand: <a>Art</a></li>
                                    <li>Product Code: Product 3</li>
                                    <li>Reward Points: 200</li>
                                    <li>Availability: In Stock</li>
                                </ul>
                                <ul class="list-unstyled price-list">
                                    <li><span class="price-old">$122.00</span>

                                        <span class="price-new">$98.00</span>
                                    </li>
                                    <li class="text-right text-color-g">Ex Tax: $80.00</li>
                                </ul>
                                <div id="product">
                                    <hr>
                                    <h3>Available Options</h3>
                                    <div class="form-group required">
                                        <label for="input-option226" class="control-label">Select</label>
                                        <select class="form-control" id="input-option226" name="option[226]">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="15">Red </option>
                                            <option value="16">Blue </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-quantity" class="control-label">Qty</label>
                                        <input type="text" class="form-control" id="input-quantity" size="2" value="1" name="quantity">
                                        <input type="hidden" value="30" name="product_id">
                                        <br>
                                    </div>
                                    <div class="add-block-one row">
                                        <div class="col-md-4 col-sm-6 col-xs-12 text-left">
                                            <a class="btn btn-add-cart" id="add-cart-item" href="javascript:void(0);"><span>Add to Cart</span><i class="fa fa-shopping-cart"></i></a>  
                                        </div>
                                        <div class="col-md-8 col-sm-6 col-xs-12 text-left">
                                            <a class="btn-wishlist"><i class="fa fa-heart"></i> Add to Wish List</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="rating">
                                    <p>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <a>0 reviews</a> / <a>Write a review</a></p>
                                    <hr>
                                    <!-- AddThis Button BEGIN -->
                                    <!-- AddThis Button END -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-description">Description</a></li>
                                    <li><a data-toggle="tab" href="#tab-review">Reviews (0)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-description" class="tab-pane active">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <div id="tab-review" class="tab-pane">
                                        <form id="form-review" class="form-horizontal">
                                            <div id="review"><p>There are no reviews for this product.</p>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label for="input-name" class="control-label">Your Name</label>
                                                    <input type="text" class="form-control" id="input-name" value="" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label for="input-review" class="control-label">Your Review</label>
                                                    <textarea class="form-control" id="input-review" rows="5" name="text"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" value="1" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="2" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="3" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="4" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="5" name="rating">
                                                    &nbsp;Good</div>
                                            </div>
                                            <div class="buttons clearfix">
                                                <div class="pull-right">
                                                    <button class="btn btn-primary"  id="button-review" type="button">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--related product-->
                        <div class="box related-product-heading margin-top">
                            <div class="box-heading">
                                <h3>Related Products</h3>
                            </div>
                            <div class="box-content">
                                <ul class="related-slider">
                                    <li class="slide-wrap-img">
                                        <div class="product-thumb transiction">
                                            <div class="image"><a href="single-product.php"><img src="product/artwork/75766/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Texture design</a></div>
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

                                        </div>
                                    </li>
                                    <li class="slide-wrap-img">
                                        <div class="product-thumb transiction">
                                            <div class="image"><a href="single-product.php"><img src="product/artwork/47818/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Ationixcc</a></div>
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

                                        </div>
                                    </li>
                                    <li class="slide-wrap-img">
                                        <div class="product-thumb transiction">
                                            <div class="image"><a href="single-product.php"><img src="product/artwork/68418/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Smart paint</a></div>
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

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end-->
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
        <script>
            $(document).ready(function () {
                $(".galleryimg").on("click", function () {
                    var src = $(this).attr('src');
                    console.log(src)
                    $(".changeimg").attr('src', src);
                });

                $('.related-slider').bxSlider({
                    pager: false,
                    controls: true,
                    slideMargin: 30,
                    minSlides: 1,
                    maxSlides: 5,
                    slideWidth: 200,
                    infiniteLoop: true,
                    moveSlides: 1
                });
            });
        </script>
    </body>
</html>
