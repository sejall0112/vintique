<?php
include "config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vintique - An Antiques Store</title>

    <meta name="keywords" content="Antiques, Decor, Furniture, Art">
    <meta name="description" content="Vintique - An Antiques Store">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- libs CSS -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="libs/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/slick-slider/css/slick.css">
    <link rel="stylesheet" href="libs/slick-slider/css/slick-theme.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reponsive.css">
</head>

<body id="home3">
    <header>
        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <br> <br> <br>
                <!-- logo -->
                <div class="mobile-logo">
                    <a href="index.php">
                    <img class="logo-mobile img-fluid" src="img/home/vintique_logo.png" alt="Prestashop_Furnitica">
                    </a>
                </div>

                <!-- menu right -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div>
            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="#">
                        <input type="text" name="s" value="" placeholder="Search">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="product-image">
                                                <a href="product-detail.php">
                                                    <img src="img/product/5.jpg" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="product-detail.php">Aesthetic Bracelets</a>
                                                </div>
                                                <div>
                                                    2 x
                                                    <span class="product-price">₹ 250</span>
                                                </div>
                                            </td>
                                            <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2">Total:</td>
                                            <td>₹ 500</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" class="d-flex justify-content-center">
                                                <div class="cart-button">
                                                    <a href="product-cart.php" title="View Cart">View Cart</a>
                                                    <a href="product-checkout.php" title="Checkout">Checkout</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <!-- menu -->
                    <div class="main-menu d-flex align-items-center justify-content-start navbar-expand-md col-md-6">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li class="nav-link">
                                    <a href="index.php" class="parent">Home</a>
                                </li>
                                <li>
                                    <a href="shop.php" class="parent">Shop</a>
                                </li>
                                <li>
                                    <a href="gallery.php" class="parent">Gallery</a>
                                </li>
                                <li>
                                    <a href="about-us.php" class="parent">About Us</a>
                                </li>
                                <li> <a href="contact.php" class="parent">Contact US</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- search_widget -->
                    <div class="search_widget col-lg-6 col-md-6 d-flex justify-content-end hidden-xs">

                        <!-- My Account -->
                        <div id="block_myaccount_info" class="hidden-sm-down dropdown d-flex align-items-center">
                            <div class="myaccount-title">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <span>My Account</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <div>
                                        <a class="login" href="user-account.php" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="login" href="user-login.php" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-sign-in"></i>
                                            <span>Sign in</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="register" href="user-register.php" rel="nofollow" title="Register Account">
                                            <i class="fa fa-user"></i>
                                            <span>Register Account</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="check-out" href="product-checkout.php" rel="nofollow" title="Checkout">
                                            <i class="fa fa-check" aria-hidden="true"></i>Checkout
                                        </a>
                                    </div>

                                    <div class="link_wishlist">
                                        <a href="user-wishlist.php" title="My Wishlists">
                                            <i class="fa fa-heart"></i>
                                            <span>My Wishlists</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header desktop -->
        <div class="header-top d-xs-none">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-8 col-md-4 align-items-center">
                        <div class="vertical-header d-flex align-items-center">
                            <div class="dropdown vertical-dropdown has-showmore" data-textshowmore="Show More" data-textless="Hide" data-desktop_item="5">
                                <div data-toggle="collapse" data-target="#show-menu">
                                    <div id="nav_icon3">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div id="logo">
                                <a href="index.php">
                                <img class="logo-mobile img-fluid"  src="img/home/vintique_logo.png" alt="Prestashop_Furnitica">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--policy-->
                    <div class="policy-home col-sm-0 col-md-5 d-flex justify-content-start">
                    </div>

                    <!-- search -->
                    <div id="search_widget" class="col-sm-4 col-md-3 align-items-center justify-content-start d-flex">
                        <form method="get" action="#">

                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input type="text" name="s" value="" placeholder="Search" class="ui-autocomplete-input" autocomplete="off">
                            <button type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <div class="desktop_cart">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count">1</span>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail.php">
                                                            <img src="img/product/5.jpg" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail.php">Aesthetic Bracelets</a>
                                                        </div>
                                                        <div>
                                                            2 x
                                                            <span class="product-price">₹ 250</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="total">
                                                    <td colspan="2">Total:</td>
                                                    <td>₹ 500</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="d-flex justify-content-center">
                                                        <div class="cart-button">
                                                            <a href="product-cart.php" title="View Cart">View Cart</a>
                                                            <a href="product-checkout.php" title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>