<?php
include 'header.php';
$sql = "SELECT * FROM product";
$result = mysqli_query($connect, $sql);
?>

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

            <!-- category menu  -->
            <div class="container position">
                <div id="show-menu" class="menu-banner d-xs-none dropdown-menu collapse">
                    <div class="tiva-verticalmenu block">
                        <div class="verticalmenu" role="navigation">
                            <ul class="menu level1">
                                <li class="item parent">
                                    <a href="shop.php" class="hasicon" title="SIDE TABLE">
                                        <img src="img/home/table-lamp.png" alt="img">ARMCHAIR</a>
                                <li class="item parent group">
                                    <a href="shop.php" class="hasicon" title="FI">
                                        <img src="img/home/fireplace.png" alt="img">NECKLACE</a>
                                <li class="item group-category-img parent group">
                                    <a href="shop.php" class="hasicon" title="TABLE LAMP">
                                        <img src="img/home/table-lamp.png" alt="img">PORTRAIT</a>
                                <li class="item">
                                    <a href="shop.php" class="hasicon" title="OTTOMAN">
                                        <img src="img/home/ottoman.png" alt="img">VASE</a>
                                </li>
                                <li class="item">
                                    <a href="shop.php" class="hasicon" title="ARMCHAIR">
                                        <img src="img/home/armchair.png" alt="img">CLOCK</a>
                                </li>
                                <li class="item">
                                    <a href="shop.php" class="hasicon" title="CUSHION">
                                        <img src="img/home/cushion.png" alt="img">TABLE </a>
                                </li>
                                <li class="item">
                                    <a href="shop.php" class="hasicon" title="COFFEE TABLE">
                                        <img src="img/home/coffee_table.png" alt="img">BROOCH</a>
                                </li>
                                <li class="item">
                                    <a href="shop.php" class="hasicon" title="SHELF">
                                        <img src="img/home/shelf.png" alt="img">SCULPTURE</a>
                                </li>
                                <li class="item">
                                    <a href="shop.php" class="hasicon" title="SOFA">
                                        <img src="img/home/sofa.png" alt="img">CHANDELIER</a>
                                </li>
                                <li class="item">
                                    <a href="shop.php" class="hasicon" title="DRESSING TABLE">
                                        <img src="img/home/dressing.png" alt="img">WATCH</a>
                                </li>
                                <li class="item">
                                    <a href="shop.php" class="hasicon" title="WINDOWN CURTAIN">
                                        <img src="img/home/windown.png" alt="img">CABINET</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="shop.php" class="hasicon" title="CHANDELIER">
                                        <img src="img/home/chandelier.png" alt="img">RING</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="shop.php" class="hasicon" title="CEILING FAN">
                                        <img src="img/home/ceiling_fan.png" alt="img">PAINTING</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="shop.php" class="hasicon" title="WARDROBE">
                                        <img src="img/home/wardrobe.png" alt="img">MIRROR</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="shop.php" class="hasicon" title="FLOOR LAMP">
                                        <img src="img/home/floor_lamp.png" alt="img">FLOOR LAMP</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="shop.php" class="hasicon" title="VASE-FLOWER">
                                        <img src="img/home/vase-flower.png" alt="img">DESK</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="shop.php" class="hasicon" title="BED">
                                        <img src="img/home/bed.png" alt="img">CANDELABRA</a>
                                </li>
                                <li class="more item">Show More</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slide-show -->
            <div class="slideshow">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#" title="Slideshow image">
                            <img class="img-responsive" src="img/home/file2.jpg" title="#caption1" alt="Slideshowimage">
                        </a>
                        <a href="#" title="Slideshow image">
                            <img class="img-responsive" src="img/home/file.jpg" title="#caption2" alt="Slideshowimage">
                        </a>
                        <a href="#" title="Slideshow image">
                            <img class="img-responsive" src="img/home/file3.jpg" title="#caption3" alt="Slideshowimage">
                        </a>
                    </div>
                    <div id="caption1" class="nivo-html-caption">
                        <div class="tiva-caption">
                            <div class="left-right hidden-xs">
                                <p class="caption-1">
									Aesthetic<span>Vintage</span> Art
								</p>
                            </div>
                        </div>
                    </div>
                    <div id="caption2" class="nivo-html-caption caption">
                        <div class="tiva-caption">
                            <div class="left-right hidden-xs">
                                <p class="caption-2">
                                    <span class="text-1">Authentic</span>
                                    <span class="text-2">Antique</span>
                                    <span class="text-3">Watches</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="caption3" class="nivo-html-caption caption">
                        <div class="left-right hidden-xs">
                            <div class="tiva-caption">
                                <p class="caption-3">
                                    <span class="text-1">Vintage</span>
                                    <span class="text-2">Fashion</span>
                                    <span class="text-3">Jewellery</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <!-- banner -->
                        <div class="section spacing-10 group-image-special">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="img/home/effectss10.png" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="img/home/effectss11.png" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- best sellers -->
                        <div class="section product-living-room">
                            <div class="container">
                                <div class="row">
                                    <div class="new-arrivals product-tab col">
                                        <div class="tab-content">
                                            <div class="title-tab-content product-tab justify-content-between">
                                                <div class="title-product">
                                                    <h2>Best Sellers</h2>
                                                    <p>Dive into our various products loved by our customers.</p>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div id="new" class="tab-pane fade in active show">
                                                    <div class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                                                        <?php 
                                                        while($row = mysqli_fetch_assoc($result)){
                                                        ?>
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="product-detail.php?id=<?php echo $row['Product_ID'];?>">
                                                                        <img src="admin/product_img/<?php echo $row['Image'];?>" alt="">
                                                                    </a>
                                                                    <div class="highlighted-informations">
                                                                        <div class="variant-links">
                                                                            <a href="#" class="color beige" title="Beige"></a>
                                                                            <a href="#" class="color orange" title="Orange"></a>
                                                                            <a href="#" class="color green" title="Green"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a><?php echo $row['Name'];?></a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">₹ <?php echo $row['Price'];?></span>
                                                                                <del class="regular-price">₹ 2000</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="token">
                                                                            <input type="hidden" name="id_product" value="1">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- deal of the day -->
                        <div class="section deal-of-day">
                            <div class="container">
                                <div class="row">
                                    <div class="new-arrivals prodcut-tab col">
                                        <div>
                                            <div class="title-tab-content product-tab">
                                                <div class="title-product text-center">
                                                    <h2>Deal Of The Day!</h2>
                                                    <p>Hurry Up, The Time is Running!</p>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="deal_of_day" class="slick">
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="shop.php">
                                                                        <img class="img-fluid" src="img/product/8.jpeg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="d-flex justify-content-center">
                                                                        <div class="days"></div>
                                                                        <div class="hours"></div>
                                                                        <div class="minutes"></div>
                                                                        <div class="seconds"></div>
                                                                    </div>
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a href="shop.php">Aesthetic Candle Holder</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <span class="price">₹ 490</span>
                                                                            <del class="regular-price">₹ 700</del>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="token">
                                                                            <input type="hidden" name="id_product" value="1">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="shop.php">
                                                                        <img class="img-fluid" src="img/product/9.jpeg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="days"></div>
                                                                            <div class="hours"></div>
                                                                            <div class="minutes"></div>
                                                                            <div class="seconds"></div>
                                                                        </div>
                                                                        <div class="product-title">
                                                                            <a href="shop.php">Hanging Glass Lamps</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">₹ 650</span>
                                                                                <del class="regular-price">₹ 950</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="token">
                                                                            <input type="hidden" name="id_product" value="1">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="shop.php">
                                                                        <img class="img-fluid" src="img/product/10.jpeg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="days"></div>
                                                                            <div class="hours"></div>
                                                                            <div class="minutes"></div>
                                                                            <div class="seconds"></div>
                                                                        </div>
                                                                        <div class="product-title">
                                                                            <a href="shop.php">Vintage Hand Mirror</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">₹ 450</span>
                                                                                <del class="regular-price">₹ 600</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="token">
                                                                            <input type="hidden" name="id_product" value="1">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="shop.php">
                                                                        <img class="img-fluid" src="img/product/12.jpeg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="d-flex justify-content-center">
                                                                        <div class="days"></div>
                                                                        <div class="hours"></div>
                                                                        <div class="minutes"></div>
                                                                        <div class="seconds"></div>
                                                                    </div>
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a href="shop.php">Antique Makeup Kit</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">₹ 800</span>
                                                                                <del class="regular-price">₹ 1400</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="token">
                                                                            <input type="hidden" name="id_product" value="1">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="shop.php">
                                                                        <img class="img-fluid" src="img/product/13.jpeg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="days"></div>
                                                                            <div class="hours"></div>
                                                                            <div class="minutes"></div>
                                                                            <div class="seconds"></div>
                                                                        </div>
                                                                        <div class="product-title">
                                                                            <a href="shop.php">Antique Illuminator</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">₹ 900</span>
                                                                                <del class="regular-price">₹ 1500</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="token">
                                                                            <input type="hidden" name="id_product" value="1">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="shop.php">
                                                                        <img class="img-fluid" src="img/product/14.jpeg" alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="days"></div>
                                                                            <div class="hours"></div>
                                                                            <div class="minutes"></div>
                                                                            <div class="seconds"></div>
                                                                        </div>
                                                                        <div class="product-title">
                                                                            <a href="shop.php">Antique Hourglass</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">₹ 450</span>
                                                                                <del class="regular-price">₹ 700</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="token">
                                                                            <input type="hidden" name="id_product" value="1">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- newsletter -->
                        <div class="section newsletter">
                            <div class="container">
                                <div class="row">
                                    <div class="news-content">
                                        <div class="tiva-modules">
                                            <div class="block">
                                                <div class="title-block">Newsletter</div>
                                                <div class="sub-title">Sign up to our newsletter to get the latest articles, lookbooks voucher codes
                                                    direct to your inbox</div>
                                                <div class="block-newsletter">
                                                    <form action="#" method="post">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                                            <span class="input-group-btn">
                                                                <button class="effect-btn btn btn-secondary" name="submitNewsletter" type="submit">
                                                                    <span>subscribe</span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="action" value="0">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="block">
                                                <div class="social-content">
                                                    <div id="social-block">
                                                        <div class="social">
                                                            <ul class="list-inline mb-0 justify-content-end">
                                                                <li class="list-inline-item mb-0">
                                                                    <a href="#" target="_blank">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <a href="#" target="_blank">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <a href="#" target="_blank">
                                                                        <i class="fa fa-google"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <a href="#" target="_blank">
                                                                        <i class="fa fa-instagram"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Popup newsletter -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
	
<?php
include 'footer.php';
?>