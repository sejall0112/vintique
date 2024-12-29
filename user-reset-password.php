<body class="user-reset-password blog">
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
                                    <span>User Reset Password</span>
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
                    <div id="content-wrapper" class="onecol">
                        <div id="main">
                            <div class="page-content">
                                <form action="#" class="forgotten-password" method="post" id="customer-form">
                                    <h1 class="text-center title-page">User Reset Password</h1>
                                    <div class="form-fields text-center ">
                                        <div class="form-group center-email-fields">
                                            <div class="email">
                                                <input type="email" name="email" id="email" value="" class="form-control" placeholder="Email address">
                                            </div>
                                            <div>
                                                <button class="form-control-submit btn btn-primary" name="submit" type="submit">
                                                    Send reset link
                                                </button>
                                            </div>
                                        </div>
                                        <a href="user-login.html" class="account-link">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                            <span class="text-center">Back to login</span>
                                        </a>
                                    </div>
                                </form>
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