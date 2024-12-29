<body id="blog-grid-full-width" class="blog">
<?php
include 'header.php';
$sql = "SELECT * FROM `gallery`";
$result = mysqli_query($connect, $sql);
?>
   
    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">
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
                                    <div class="col main-blogs">
                                        <h2 class="text-center col">Recent Posts</h2>
                                        <div class="row">
                                                        <?php 
                                                        while($row = mysqli_fetch_assoc($result)){
                                                        ?>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="hover-after">
                                                                <a href="gallery-detail.php?id=<?php echo $row['ID'];?>">
                                                                    <img style="height:auto;width:auto;"class="img-fluid" src="./admin/images/gallery/<?php echo $row['Image'];?>">
                                                                </a>
                                                </div>
                                                <div cass="late-item">
                                                    <p class="content-title">
                                                    <a><?php echo $row['Name'];?></a>
                                                    </p>
                                                    <p class="post-info">
                                                        <span>3 minutes ago</span>
                                                        <span>115 Comments</span>
                                                    </p>
                                                    <p class="description"><a><?php echo $row['Detail'];?></a>
                                                        <span class="view-more">
                                                            <a href="gallery-detail.php">view more</a>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            
                                        <?php }?>
                                        </div>
                                        <div class="page-list col">
                                            <ul class="justify-content-center d-flex">
                                                <li>
                                                    <a rel="prev" href="#" class="previous disabled js-search-link">
                                                        Previous
                                                    </a>
                                                </li>
                                                <li class="current active">
                                                    <a rel="nofollow" href="#" class="disabled js-search-link">
                                                        1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="nofollow" href="#" class="disabled js-search-link">
                                                        2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="next" href="#" class="next disabled js-search-link">
                                                        Next
                                                    </a>
                                                </li>
                                            </ul>
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