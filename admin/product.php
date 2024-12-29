<?php
include ('config.php');
$query = "SELECT * FROM product";
$result = mysqli_query($connect, $query);
error_reporting();
$msg = "";
if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM product WHERE ID='$id'";
  mysqli_query($connect, $sql);
  if (mysqli_query($connect, $sql)) {
    echo '<script>alert("Product removed successfully.")</script>';
  echo "<script type='text/javascript'> document.location = 'product.php'; </script>";
  }
}
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

    <title>Products</title>

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

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

<?php
include('header.php');
?>        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
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
                <h4 class="card-header fw-bold">Products</h4>
              </div>
              <!-- /Search -->
          </nav>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              

              <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header">Product List</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Product Name</th>
                          <th>Product Detail</th>
                          <th>Price</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                       <?php
                       if (mysqli_num_rows($result) > 0) {
                        while($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <form action="" method="post" class="mb-3">
                              <td><?php echo $data['ID'];?> </td>
                              <td><img src="./product_img/<?php echo $data['Image']; ?>" style="width: 70px; height: 70px;"></td>
                              <td><?php echo $data['Name']; ?></td>
                              <td><?php echo $data['Detail']; ?></td>
                              <td><?php echo $data['Price']; ?></td>
                              <td><?php echo $data['Category_Name']; ?></td>
                              <td><?php echo $data['Status'];?></td>
                              <td><a href="edit-product.php?id=<?php echo $data['ID'];?>" class="btn btn-primary">Edit</a>
                                  <form action="" method="post">
                                    <input type="hidden" name ="id" value="<?php echo $data['ID'];?>">
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                  </form>
                                  </td>
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
                <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-outline-warning"><a href="add-product.php">Add Product</a></button>
                      </div>
                </div>
              </div>
              <!--/ Bordered Table -->
              

            </div>

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                   Copyright ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  ,  Design & Developed By
                  <a target="_blank" href="https://radhakrishnawebsolution.com">RADHAKRISHNA WEB SOLUTION</a>                  All rights reserved.
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
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
