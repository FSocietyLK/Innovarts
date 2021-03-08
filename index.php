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
                                    <span  data-toggle="dropdown" class="toggle">ENGLISH
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
                                            <i class="fa fa-plus" style="vertical-align: text-bottom"></i>
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
						<!--slidder for small screens--->
                        <div class="slidder" id="slidder-sm">
                            <div id="myCarousel-sm" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel-sm" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel-sm" data-slide-to="1"></li>
                                    <li data-target="#myCarousel-sm" data-slide-to="2"></li>
                                </ol>

                                <!-- wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/banner1.jpg" class="img-responsive" alt="1">
                                    </div>

                                    <div class="item">
                                        <img src="images/banner2.jpg" class="img-responsive" alt="2">
                                    </div>

                                    <div class="item">
                                        <img src="images/banner3.jpg" class="img-responsive" alt="3">
                                    </div>
                                </div>
                                <!-- controls -->
                                <a class="left carousel-control" href="#myCarousel-sm" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel-sm" role="button" data-slide="next">
                                    <i class="fa fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
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
                                                <div class="image"><a href="/innovarts/product/artwork/53193/"><img src="/innovarts/product/artwork/53193/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a href="single-product.php">Texture Design</a></div>
                                                    <div class="price">
                                                        <span class="price-new">$35.90</span>
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
                                                <div class="image"><a href="/innovarts/product/artwork/74861/"><img src="/innovarts/product/artwork/74861/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a href="single-product.php">Texture Design</a></div>
                                                    <div class="price">
                                                        <span class="price-new">$45.90</span>
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
                                                <div class="image"><a href="/innovarts/product/artwork/47818/"><img src="/innovarts/product/artwork/47818/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a>Texture Paint</a></div>
                                                    <div class="price">
                                                        <span class="price-new">$50.90</span>
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
                                                <div class="image"><a href="/innovarts/product/artwork/27344/"><img src="/innovarts/product/artwork/27344/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a href="single-product.php">Texture Gallery Design</a></div>
                                                    <div class="price">
                                                        <span class="price-new">$60.90</span>
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
                                                <div class="image"><a href="/innovarts/product/artwork/55307/"><img src="/innovarts/product/artwork/55307/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a href="single-product.php">Texture Design</a></div>
                                                    <div class="price">
                                                        <span class="price-new">$85.90</span>
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
                                                <div class="image"><a href="/innovarts/product/artwork/68418/"><img src="/innovarts/product/artwork/68418/main.jpg" class="img-responsive"></a></div>
                                                <div class="caption">
                                                    <div class="product-name"><a href="single-product.php">Smart Painting</a></div>
                                                    <div class="price">
                                                        <span class="price-new">$95.90</span>
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
                    <div id="content" class="col-sm-9">
                        <!--slidder for large screens--->
                        <div class="slidder" id="slidder">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/banner1.jpg" class="img-responsive" alt="1">
                                    </div>

                                    <div class="item">
                                        <img src="images/banner2.jpg" class="img-responsive" alt="2">
                                    </div>

                                    <div class="item">
                                        <img src="images/banner3.jpg" class="img-responsive" alt="3">
                                    </div>
                                </div>
                                <!-- controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <i class="fa fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!--end slidder-->

                        <!---featured image-->
                        <div class="box featured-product featured-product-heading">
                            <div class="box-heading">
                                <h3>Featured Products</h3>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/21083/"><img src="/innovarts/product/artwork/21083/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Texture Design</a></div>
                                                <div class="price">
                                                    <span class="price-new">$50.90</span>
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

                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/25327/"><img src="/innovarts/product/artwork/25327/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Laterica</a></div>
                                                <div class="price">
                                                    <span class="price-new">$40.00</span>
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

                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/29968/"><img src="/innovarts/product/artwork/29968/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Smart Paint</a></div>
                                                <div class="price">
                                                    <span class="price-new">$35.90</span>
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

                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/33312/"><img src="/innovarts/product/artwork/33312/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php"> Folk Art </a></div>
                                                <div class="price">
                                                    <span class="price-new">$70.90</span>
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

                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/33660/"><img src="/innovarts/product/artwork/33660/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Texture Pattern</a></div>
                                                <div class="price">
                                                    <span class="price-new">$55.90</span>
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

                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/50773/"><img src="/innovarts/product/artwork/50773/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Easy Paint</a></div>
                                                <div class="price">
                                                    <span class="price-new">$28.90</span>
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

                                        </div>
                                    </div>                           
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/51986/"><img src="/innovarts/product/artwork/51986/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Texture Design</a></div>
                                                <div class="price">
                                                    <span class="price-new">$24.90</span>
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
                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/52873/"><img src="/innovarts/product/artwork/52873/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">HD Paint</a></div>
                                                <div class="price">
                                                    <span class="price-new">$54.90</span>
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
                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/22210/"><img src="/innovarts/product/artwork/22210/main.jpg" class="img-responsive"></a></div>
                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Auscipit Dissentiet</a></div>
                                                <div class="price">
                                                    <span class="price-new">$24.90</span>
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

                                        </div>
                                    </div>
                                </div>
                            </div>                       
                        </div>
                        <div class="clearfix"></div>
                        <!---end featured image-->
                        <!---best seller image-->
                        <div class="box bestsell-product bestsell-product-heading">
                            <div class="box-heading">
                                <h3>Best seller</h3>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/65286/"><img src="/innovarts/product/artwork/65286/main.jpg" class="img-responsive"></a></div>

                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Paint Design</a></div>
                                                <div class="price">
                                                    <span class="price-new">$35.90</span>
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

                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/76253/"><img src="/innovarts/product/artwork/76253/main.jpg" class="img-responsive"></a></div>

                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Paint Hard</a></div>
                                                <div class="price">
                                                    <span class="price-new">$40.90</span>
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

                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/92948/"><img src="/innovarts/product/artwork/92948/main.jpg" class="img-responsive"></a></div>

                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Paint Easy Note</a></div>
                                                <div class="price">
                                                    <span class="price-new">$50.90</span>
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

                                        </div>
                                    </div>

                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/27344/"><img src="/innovarts/product/artwork/27344/main.jpg" class="img-responsive"></a></div>

                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Paint Design Wall Art</a></div>
                                                <div class="price">
                                                    <span class="price-new">$30.90</span>
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

                                        </div>
                                    </div>
                                    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-thumb transiction">
                                            <a class="compare-button"><i class="fa fa-retweet"></i></a>
                                            <a class="wishlist-button"><i class="fa fa-heart-o"></i></a>
                                            <div class="image"><a href="/innovarts/product/artwork/25512/"><img src="/innovarts/product/artwork/25512/main.jpg" class="img-responsive"></a></div>

                                            <div class="caption">
                                                <div class="product-name"><a href="single-product.php">Easy Painting</a></div>
                                                <div class="price">
                                                    <span class="price-new">$35.90</span>
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

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!---end best seller image-->
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
                        <div class="bottom-block-heading"><h4>Money back guarantee <span><i class="fa fa-money"></i></span></h4></div>
                        <div class="bottom-block-description">
                            <p>We offer 15 day easy return</p>
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
