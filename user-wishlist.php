<body class="user-wishlist blog">
<?php
include 'header.php';
?>
    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Wishlist</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <div id="main">
                            <div id="content" class="page-content">
                                <div id="mywishlist">
                                    <h1 class="title-page">My Wishlist</h1>
                                    <form method="post" class="std" id="customer-form">
                                        <fieldset>
                                            <h3>New wishlist</h3>
                                            <div class="input-group">
                                                <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="">
                                                <button class="btn" type="submit" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                                                    Save
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <div id="block-history" class="block-center">
                                        <table class="std table">
                                            <thead>
                                                <tr>
                                                    <th class="first_item">Name</th>
                                                    <th class="item mywishlist_first">Qty</th>
                                                    <th class="item mywishlist_first">Viewed</th>
                                                    <th class="item mywishlist_second">Created</th>
                                                    <th class="item mywishlist_second">Direct Link</th>
                                                    <th class="item mywishlist_second">Default</th>
                                                    <th class="last_item mywishlist_first">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="wishlist_1">
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');">My wishlist</a>
                                                    </td>
                                                    <td class="bold align_center">
                                                        3
                                                    </td>
                                                    <td>0</td>
                                                    <td>2024-06-14</td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');">View</a>
                                                    </td>
                                                    <td class="wishlist_default">
                                                        <p class="is_wish_list_default">
                                                            <i class="icon icon-check-square"></i>
                                                        </p>
                                                    </td>
                                                    <td class="wishlist_delete">
                                                        <a href="javascript:;" onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="page-home">
                                        <a class="btn btn-default" href="index.php">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Homepage</span>
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
    <?php
include 'footer.php';
?>
</body>
</html>