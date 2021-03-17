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
        <!--js-->
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
                    <div class="col-lg-9 lg-9 col-md-9 md-9 col-sm-10 sm-10 rightside-add-space"> 
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
                                        <li><a href="/innovarts/">Home</a></li>
                                        <li><a>About Us</a></li>
                                        <li><a href="product.php">Gallery</a></li>
                                        <li><a>Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
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
                    </aside>
                    <!--end sidebar-->

                    <!--main content-->
                    <div class="col-sm-9 checkout-page" id="content">
                        <ul class="breadcrumb">
                            <li><a href="/innovarts/"><i class="fa fa-home"></i></a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                        </ul>
                        <span class="checkout-img">
                            <i class="fa fa-shopping-cart" style="font-size:36px"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-check"></i>
                        </span>
                        <h1>Checkout</h2>
                        <div id="accordion" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-option">Step 1: Checkout Options <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div id="collapse-checkout-option" class="panel-collapse collapse in" aria-expanded="false">
                                    <div class="panel-body"><div class="row">
                                            <div class="col-sm-6">
                                                <h2>New Customer</h2>
                                                <p>Checkout Options:</p>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked" value="register" name="account">
                                                        Register Account</label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="guest" name="account">
                                                        Guest Checkout</label>
                                                </div>
                                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                                <input type="button" class="btn btn-custom" id="button-account" value="Continue">
                                            </div>
                                            <div class="col-sm-6">
                                                <h2>Returning Customer</h2>
                                                <p>I am a returning customer</p>
                                                <div class="form-group">
                                                    <label for="input-email" class="control-label">E-Mail</label>
                                                    <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="input-password" class="control-label">Password</label>
                                                    <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                                                    <br/>
                                                    <a>Forgotten Password</a></div>
                                                <input type="button" class="btn btn-custom" id="button-login" value="Login">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-address">Step 2: Account &amp; Billing Details <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-payment-address" style="height: auto;">
                                    <div class="panel-body"><div class="row">
                                            <div class="col-sm-6">
                                                <fieldset id="account">
                                                    <legend>Your Personal Details</legend>
                                                    <div style="display: none;" class="form-group">
                                                        <label class="control-label">Customer Group</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" checked="checked" value="1" name="customer_group_id">
                                                                Default</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-firstname" class="control-label">First Name</label>
                                                        <input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="" name="firstname">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-lastname" class="control-label">Last Name</label>
                                                        <input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="" name="lastname">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-email" class="control-label">E-Mail</label>
                                                        <input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="email">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-telephone" class="control-label">Telephone</label>
                                                        <input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="" name="telephone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-payment-fax" class="control-label">Fax</label>
                                                        <input type="text" class="form-control" id="input-payment-fax" placeholder="Fax" value="" name="fax">
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>Your Password</legend>
                                                    <div class="form-group required">
                                                        <label for="input-payment-password" class="control-label">Password</label>
                                                        <input type="password" class="form-control" id="input-payment-password" placeholder="Password" value="" name="password">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-confirm" class="control-label">Password Confirm</label>
                                                        <input type="password" class="form-control" id="input-payment-confirm" placeholder="Password Confirm" value="" name="confirm">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <fieldset id="address" class="required">
                                                    <legend>Your Address</legend>
                                                    <div class="form-group">
                                                        <label for="input-payment-company" class="control-label">Company</label>
                                                        <input type="text" class="form-control" id="input-payment-company" placeholder="Company" value="" name="company">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-address-1" class="control-label">Address 1</label>
                                                        <input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="address_1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-payment-address-2" class="control-label">Address 2</label>
                                                        <input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="" name="address_2">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-city" class="control-label">City</label>
                                                        <input type="text" class="form-control" id="input-payment-city" placeholder="City" value="" name="city">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-postcode" class="control-label">Post Code</label>
                                                        <input type="text" class="form-control" id="input-payment-postcode" placeholder="Post Code" value="" name="postcode">
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-country" class="control-label">Country</label>
                                                        <select class="form-control" id="input-payment-country" name="country_id">
                                                            <option value=""> --- Please Select --- </option>
                                                            <option value="1">India</option>
                                                            <option value="2">U.K</option>
                                                            <option value="3">U.S.A</option>
                                                            <option value="4">Japan</option>
                                                            <option value="5">Malaysia</option>

                                                        </select> 
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-payment-zone" class="control-label">Region / State</label>
                                                        <select class="form-control" id="input-payment-zone" name="zone_id">
                                                            <option value=""> --- Please Select --- </option>
                                                            <option value="3513">Gujarat</option>
                                                            <option value="3514">Manchester</option>
                                                            <option value="3515">New Jersey</option>
                                                            <option value="3516">Tokyo</option>
                                                            <option value="3517">Johor</option>  
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="checkbox">
                                            <label for="newsletter">
                                                <input type="checkbox"  checked="checked" id="newsletter" value="1" name="newsletter">
                                                I wish to subscribe to the PrintStore online store newsletter.</label>


                                        </div>
                                        <div class="checkbox">
                                            <label for="newsletter">
                                                <input type="checkbox" checked="checked"  id="newsletter" value="1" name="shipping_address">
                                                My delivery and billing addresses are the same.</label>
                                        </div> 
                                        <div class="buttons clearfix">
                                            <div class="pull-right">I have read and agree to the <a><b>Privacy Policy</b></a> &nbsp;
                                                <input type="checkbox" value="1" name="agree" style="vertical-align: text-bottom">
                                                <input type="button" class="btn btn-custom"  id="button-register" value="Continue">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true">Step 3: Delivery Details <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div id="collapse-shipping-address" class="panel-collapse collapse" aria-expanded="true" style="">
                                    <div class="panel-body"><form class="form-horizontal">
                                            <div class="form-group required">
                                                <label for="input-shipping-firstname" class="col-sm-2 control-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="Enter First Name" name="firstname">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-shipping-lastname" class="col-sm-2 control-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input-shipping-lastname" placeholder="Last Name" value="Enter Last Name" name="lastname">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-shipping-company" class="col-sm-2 control-label">Company</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input-shipping-company" placeholder="Company" value="Enter Company Name" name="company">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-shipping-address-1" class="col-sm-2 control-label">Address 1</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Address 1" value="Enter Address1" name="address_1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-shipping-address-2" class="col-sm-2 control-label">Address 2</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input-shipping-address-2" placeholder="Address 2" value="Enter Address2" name="address_2">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-shipping-city" class="col-sm-2 control-label">City</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input-shipping-city" placeholder="City" value="Enter City Name" name="city">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-shipping-postcode" class="col-sm-2 control-label">Post Code</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Post Code" value="Enter Post Code" name="postcode">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-shipping-country" class="col-sm-2 control-label">Country</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="input-shipping-country" name="country_id">
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
                                                <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="input-shipping-zone" name="zone_id">
                                                        <option value=""> --- Please Select --- </option>
                                                        <option value="3513">Gujarat</option>
                                                        <option value="3514">Manchester</option>
                                                        <option value="3515">New Jersey</option>
                                                        <option value="3516">Tokyo</option>
                                                        <option value="3517">Johor</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <input type="button" class="btn btn-custom" id="button-guest-shipping" value="Continue">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-method">Step 4: Delivery Method <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div id="collapse-shipping-method" class="panel-collapse collapse" aria-expanded="true" style="">
                                    <div class="panel-body"><p>Please select the preferred shipping method to use on this order.</p>
                                        <p><strong>Flat Rate</strong></p>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="checked" value="flat.flat" name="shipping_method">
                                                Flat Shipping Rate - $8.00</label>
                                        </div>
                                        <p><strong>Add Comments About Your Order</strong></p>
                                        <p>
                                            <textarea class="form-control" rows="8" name="comment"></textarea>
                                        </p>
                                        <div class="buttons">
                                            <div class="pull-right">
                                                <input type="button" class="btn btn-custom" id="button-shipping-method" value="Continue">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method" aria-expanded="true">Step 5: Payment Method <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div id="collapse-payment-method" class="panel-collapse collapse" aria-expanded="true" style="">
                                    <div class="panel-body"><p>Please select the preferred payment method to use on this order.</p>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="checked" value="cod" name="payment_method">
                                                Cash On Delivery    
                                            </label>
                                            <label>
                                                <input type="radio" checked="checked" value="cod" name="payment_method">
                                                Online Payment
                                            </label>
                                        </div>
                                        <p><strong>Add Comments About Your Order</strong></p>
                                        <p>
                                            <textarea class="form-control" rows="8" name="comment"></textarea>
                                        </p>
                                        <div class="buttons">
                                            <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a>        <input type="checkbox" value="1" name="agree">
                                                &nbsp;
                                                <input type="button" class="btn btn-custom" id="button-payment-method" value="Continue">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">Step 6: Confirm Order <i class="fa fa-caret-down"></i></a></h4>
                                </div>
                                <div id="collapse-checkout-confirm" class="panel-collapse collapse" aria-expanded="true" style="">
                                    <div class="panel-body"><div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="text-left">Product Name</td>
                                                        <td class="text-left">Model</td>
                                                        <td class="text-right">Quantity</td>
                                                        <td class="text-right">Unit Price</td>
                                                        <td class="text-right">Total</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><a href="single-product.php">Texture Design</a>
                                                        </td>
                                                        <td class="text-left">Product 6</td>
                                                        <td class="text-right">1</td>
                                                        <td class="text-right">$242.00</td>
                                                        <td class="text-right">$242.00</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                                        <td class="text-right">$200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                                                        <td class="text-right">$5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>Eco Tax (-2.00):</strong></td>
                                                        <td class="text-right">$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>VAT (20%):</strong></td>
                                                        <td class="text-right">$41.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                                        <td class="text-right">$250.00</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="buttons">
                                            <div class="pull-right">
                                                <input type="button"  class="btn btn-custom" id="button-confirm" value="Confirm Order">
                                            </div>
                                        </div>

                                    </div>
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
