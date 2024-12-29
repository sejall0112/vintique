<body class="user-acount">
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
                                    <span>My Account</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <div class="acount head-acount">
                <div class="container">
                    <div id="main">
                        <h1 class="title-page">My Account</h1>
                        <div class="content" id="block-history">
                            <table class="std table">
                                <tbody>
                                    <tr>
                                        <th class="first_item">My Name :</th>
                                        <td>David James</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Company :</th>
                                        <td>Vintour</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Address :</th>
                                        <td>123 canberra Street, New York, USA</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">City :</th>
                                        <td>New York</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Postal/Zip Code :</th>
                                        <td>10001</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Phone :</th>
                                        <td>0123456789</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Country:</th>
                                        <td>USA</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                            View Address
                        </button>
                        <div class="order">
                            <h4>Order
                                <span class="detail">History</span>
                            </h4>
                            <p>You haven't placed any orders yet.</p>
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