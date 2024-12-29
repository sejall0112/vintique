<?php
include('config.php');
session_start();
if(!isset($_SESSION['login_admin'])) {
  header('location:login.php');
  exit();
}
$query2 = "SELECT * FROM `enquiry`";
$result2 = mysqli_query($connect, $query2);
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
  </head>
  
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
<?php
include('header.php');
?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <h4 class="card-header fw-bold">Welcome Admin!</h4>
              </div>
              <!-- /Search -->
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                          <i class="menu-icon tf-icons bx bx-image"></i>
                          </div>
                          <span class="fw-semibold d-block mb-1"><a href="gallery.php">Gallery</a></span>
                          <h3><?php
                          $sql = "SELECT COUNT(*) AS total FROM gallery";
                          $result = $connect->query($sql);
                          $row = $result->fetch_assoc();
                          ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <i class="menu-icon tf-icons bx bx-comment-detail"></i>
                          </div>
                          <span class="fw-semibold d-block mb-1"><a href="product.php">Products</a></span>
                          <h3><?php
                          $sql = "SELECT COUNT(*) AS total FROM product";
                          $result = $connect->query($sql);
                          $row = $result->fetch_assoc();
                          ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                          <i class="menu-icon tf-icons bx bx-star"></i>
                          </div>
                          <span class="fw-semibold d-block mb-1"><a href="category.php">Categories</a></span>
                          <h3><?php
                          $sql = "SELECT COUNT(*) AS total FROM category";
                          $result = $connect->query($sql);
                          $row = $result->fetch_assoc();
                          ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
              <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
              <div class="card">
                <h5 class="card-header">Enquiry</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <?php
                       if ($result-> num_rows > 0){
                        while ($data = mysqli_fetch_assoc($result)) {
                          ?> 
                            <form action="" method="post" class="mb-3">
                                <td><?php echo $data['ID']; ?></td>
                                <td><?php echo $data['Name']; ?></td>
                                <td><?php echo $data['Mobile']; ?></td>
                                <td><?php echo $data['Email_Id']; ?></td>
                            </form>
                          </tr>
                          <?php 
                        }} else { ?>
                        <tr><td colspan="8">No data found</td></tr>
                        </tr>
                        <?php } ?>
                      </tbody>

                    </table>
                  </div>
                </div>
                
               </div>
                </div>
                </div>
                
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                   Copyright ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  ,  Designed & Developed By
                  <a>Sejal Pawar.</a>                  All rights reserved.
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>