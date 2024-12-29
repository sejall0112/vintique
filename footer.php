<?php
include 'config.php';

$sql = "SELECT * FROM contact_details";
$result = $connect->query($sql);
$row = $result->fetch_assoc();
?>

   <footer class="footer-one">
        <div class="inner-footer">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                <div id="logo">
                                <a href="index.php">
                                <span style=" font-size:2.5em; font-family: ‘helvectica’;">VINTIQUE</span>
                                </a>
                            </div>
                                    <p class="content-logo">Vintique is your premier destination for exquisite antiques and timeless treasures. 
                                        We curate a diverse collection of vintage furniture, rare collectibles, decorative arts, jewelry, and artworks, 
                                        each piece carefully selected for its unique story and craftsmanship. Discover the beauty of history with us.</p>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-lg-3 col-md-4 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                    <div class="title-block">
                                        WHO WE ARE
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="about-us.php">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Reasons to shop</a>
                                        </li>
                                        <li>
                                            <a href="#">What our customers say</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact our buyers</a>
                                        </li>
                                        <li>
                                            <a href="#">Cookies & privacy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-lg-3 col-md-4">
                            <div class="block">
                                <div class="block-content">
                                    <div class="title-block">
                                        CUSTOMER SERVICES
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="contact.php">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Delivery</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms and conditions</a>
                                        </li>
                                        <li>
                                            <a href="#">Refund Policy</a>
                                        </li>
                                        <li>
                                            <a href="#">FAQs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-lg-3 col-md-4">
                            <div class="block">
                                <div class="block-content">
                                    <div class="title-block">
                                        CONTACT US
                                    </div>
                                    <div class="contact-content">
                                        <div class="data align-self-stretch d-flex">
                                            <i class="fa fa-home float-left m-bottom" aria-hidden="true"></i>
                                            <div class="content-data">
                                                <b class="mr-2">Address:</b><p><a href="sentto:<?php echo $row['Address']; ?>"><?php echo $row ['Address'];?></a></p>
											</div>
                                        </div>
                                        <div class="data d-flex align-self-stretch">
                                            <i class="fa fa-clock-o float-left" aria-hidden="true"></i>
                                            <div class="content-data">
                                                <b class="mr-2">Opening Hours: </b>08.00AM - 18.00PM
                                            </div>
                                        </div>
                                        <div class="support d-dflex align-self-stretch">
                                            <div class="data mail-support">
                                                <i class="fa fa-envelope float-left" aria-hidden="true"></i>
                                                <p><a href="sentto:<?php echo $row['Email_id']; ?>"><?php echo $row ['Email_id'];?></a></p>
                                            </div>
                                        </div>
                                        <div class="data d-flex align-self-stretch phone-support">
                                            <div class="title-icon">
                                                <i class="fa fa-phone float-left" aria-hidden="true"></i>
                                            </div>
                                            <p><a href="tel:91<?php echo $row['Mobile']; ?>"> +91 <?php echo $row ['Mobile'];?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <div id="tiva-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 align-items-center justify-content-md-start justify-content-sm-center justify-content-xs-center">
                        <span>
                            <a style="color:#fff;"target="_blank">Design By Sejal Pawar</a>
                        </span>
                    </div>
                    <div class="col-md-6 col-xs-12 align-items-center justify-content-md-end d-flex justify-content-xs-center">
                        <img src="img/home/payment.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <!-- Vendor JS -->
    <script src="libs/jquery/jquery.min.js"></script>
    <script src="libs/popper/popper.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="libs/slider-range/js/tmpl.js"></script>
    <script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="libs/slider-range/js/draggable-0.1.js"></script>
    <script src="libs/slider-range/js/jquery.slider.js"></script>
    <script src="libs/slick-slider/js/slick.min.js"></script>

    <!-- Template JS -->
    <script src="js/theme.js"></script>
</body>
</html>