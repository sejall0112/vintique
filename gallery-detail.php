<?php
include 'header.php';
$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM `gallery` WHERE `ID` = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
?>>
<body id="blog-detail" class="blog">
    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">
                    <br> <br> <br> <br> <br> <br>
                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <span>Vintique</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Gallery</span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                                        <!-- category menu -->
                                        <div class="sidebar-block">
                                            <div class="title-block">Categories</div>
                                            <div class="block-content">
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#livingroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Furniture</a>
                                                    <div class="subCategory collapse" id="livingroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">Side Table</a>
                                                            <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">Side Table</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">floor lamp</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">ottoman</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">armchair</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">cushion</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FIREPLACE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">floor lamp</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ottoman</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">armchair</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">cushion</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bathroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Jewellry</a>
                                                    <div class="subCategory collapse" id="bathroom" aria-expanded="false" role="status">
                                                    <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">Side Table</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">floor lamp</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">ottoman</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">armchair</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">cushion</a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#diningroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Art</a>
                                                    <div class="subCategory collapse" id="diningroom" aria-expanded="true" role="status">
                                                    <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">Side Table</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">floor lamp</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">ottoman</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">armchair</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">cushion</a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bedroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Clocks</a>
                                                    <div class="subCategory collapse" id="bedroom" aria-expanded="true" role="status">
                                                    <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">Side Table</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">floor lamp</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">ottoman</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">armchair</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">cushion</a>
                                                                </div>
                                                            </div>

                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#kitchen" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Porcelain</a>
                                                    <div class="subCategory collapse" id="kitchen" aria-expanded="true" role="status">
                                                    <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">Side Table</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">floor lamp</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">ottoman</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">armchair</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">cushion</a>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product tag -->
                                        <div class="sidebar-block product-tags">
                                            <div class="title-block">
                                                Product Tags
                                            </div>
                                            <div class="block-content">
                                                <ul class="listSidebarBlog list-unstyled">
                                                    <li>
                                                        <a href="#" title="Show products matching tag Hot Trend">Hot Trend</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Jewelry">Jewellry</a>
                                                    </li>

                                                    <li>
                                                        <a href="man.html" title="Show products matching tag Man">Watches</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Party">Table</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag SamSung">Art</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Shirt Dresses">Bottles</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Shoes">Wall Pieces</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Summer">Makeup</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Sweaters">Aesthetic</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Winter">Chair</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Woman">Clocks</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-9 flex-xs-first main-blogs">
                                    <h3><?php echo htmlspecialchars($row['Name']);?></h3>
                                        <div class="hover-after">
                                            <img style="height:600px;width:600px;"src="./admin/images/gallery/<?php echo $row['Image'];?>" alt="img" class="img-fluid">
                                        </div>
                                        <div class="late-item">
                                        <p class="detail"><?php echo $row['Detail'];?></p>
                                            
                                            <div class="border-detail">
                                                <p class="post-info float-left">
                                                    <span>3 minutes ago</span>
                                                    <span>113 Comments</span>
                                                </p>
                                                <div class="btn-group">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-share"></i>
                                                        <span>Share</span>
                                                    </a>
                                                    <a href="#" class="email">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                        <span>SEND TO A FRIEND</span>
                                                    </a>
                                                    <a href="#" class="print">
                                                        <i class="zmdi zmdi-print"></i>
                                                        <span>Print</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="related">
                                            <h2 class="title-block">Related News</h2>
                                            <div class="main-blogs">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="hover-after">
                                                            <a href="gallery-detail.php">
                                                                <img src="img/blog/7.jpeg" alt="img" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <div class="late-item">
                                                            <p class="content-title">
                                                                <a href="gallery-detail.php">Blog 1</a>
                                                            </p>
                                                            <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin,
                                                                lorem quis bibendum auctor.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="hover-after">
                                                            <a href="gallery-detail.php">
                                                                <img src="img/blog/8.jpeg" alt="img" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <div class="late-item">
                                                            <p class="content-title">
                                                                <a href="gallery-detail.php">Blog 2</a>
                                                            </p>
                                                            <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin,
                                                                lorem quis bibendum auctor.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="hover-after">
                                                            <a href="gallery-detail.php">
                                                                <img src="img/blog/9.jpeg" alt="img" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <div class="late-item">
                                                            <p class="content-title">
                                                                <a href="gallery-detail.php">Blog 3</a>
                                                            </p>
                                                            <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin,
                                                                lorem quis bibendum auctor .
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply late-item">
                                            <div class="blog-comment" id="blog-comment">
                                                <h2 class="title-block">Comments</h2>
                                            </div>
                                            <div class="comment-content">
                                                <p class="user-title">
                                                    <a href="#">JOHN DOE</a>
                                                    <span class="time">Posted on Mar 17, 2024 at 6:57am /
                                                        <a href="#">repost</a> /
                                                        <span class="green">
                                                            <a href="#">Reply</a>
                                                        </span>
                                                    </span>
                                                </p>
                                                <p class="content-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam.
                                                </p>
                                            </div>
                                            <div class="blog-comment margin-right-comment">
                                                <div class="avatar">
                                                </div>
                                                <div class="comment-content">
                                                    <p class="user-title">
                                                        <a href="#">JOHN DOE</a>
                                                        <span class="time">Posted on Apr 17, 2017 at 6:57am /
                                                            <a href="#">repost</a> /
                                                            <span class="green">
                                                                <a href="#">Reply</a>
                                                            </span>
                                                        </span>
                                                    </p>
                                                    <p class="content-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim
                                                        veniam.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="blog-comment">
                                                <div class="avatar">
                                                </div>
                                                <div class="comment-content">
                                                    <p class="user-title">
                                                        <a href="#">JOHN DOE</a>
                                                        <span class="time">Posted on Mar 17, 2024 at 6:57am /
                                                            <a href="#">repost</a> /
                                                            <span class="green">
                                                                <a href="#">Reply</a>
                                                            </span>
                                                        </span>
                                                    </p>
                                                    <p class="content-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim
                                                        veniam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-comment" id="respond">
                                            <h2 class="title-block">Submit comment</h2>
                                            <div id="commentInput">
                                                <form action="#" method="post" id="commentform">
                                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                    <div class="row">
                                                        <div class="form-group col col-sm-12 col-md-4 ">
                                                            <input type="text" class="inputName form-control" name="name" placeholder="Your Name *">
                                                        </div>
                                                        <div class="form-group col col-sm-12  col-md-4">
                                                            <input type="text" class="inputMail form-control" name="mail" placeholder="Your E-mail *">
                                                        </div>
                                                        <div class="form-group col col-sm-12  col-md-4">
                                                            <input type="text" class="form-control" name="website" placeholder="Your Website">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col col-md-12">
                                                            <textarea tabindex="4" class="inputContent form-control grey" rows="10" name="comment" placeholder="Your Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="submit">
                                                        <input type="submit" name="addComment" id="submitComment" class="btn btn-default" value="Send Message">
                                                    </div>
                                                </form>
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
<?php
include 'footer.php';
?>
</body>
</html>