<?php
include 'config.php';
error_reporting();
if(isset($_POST['add-submit'])){
  $pro_id = substr(uniqid(),0,10);
  $name = $_POST['name'];
  $det1 = $_POST['detail1'];
  $det2 = $_POST['detail2'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $product_img = $_FILES['product_img']['name'];
  $tmp_img = $_FILES['product_img']['tmp_name'];
  $move_to = "product_img/" . $product_img;
  $status = $_POST['ss'];

  $sql = "INSERT INTO `product`(`Product_ID`, `Name`, `Detail`, `Description`,`Price`,`Category_Name`, `Image`, `Status`) 
  VALUES ('$pro_id','$name','$det1','$det2','$price','$category','$product_img','$status')";
  mysqli_query($connect, $sql);
  if (move_uploaded_file($tmp_img, $move_to)) {
    echo "<script> alert('Product Added Successfully') </script>";
  }
    else{
    echo "<script> alert('Product Not Added') </script>";
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
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Product</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

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
                <h4 class="card-header fw-bold"><span class="text-muted fw-light"></span> Add Product Details</h4>
              </div>
              <!-- /Search -->
          </nav>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add Product Details</h5>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-dock-top"></i></span>
                              <input
                                name="name"type="text"class="form-control"id="basic-icon-default-fullname"
                                aria-label="John Doe"aria-describedby="basic-icon-default-fullname2"required/>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Detail</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-dock-top"></i
                              ></span>
                              <input
                                name="detail1"type="text"class="form-control"id="basic-icon-default-fullname"
                                aria-label="John Doe"aria-describedby="basic-icon-default-fullname2"required
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Description</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-dock-top"></i
                              ></span>
                              <input
                                name="detail2"type="text"class="form-control"id="basic-icon-default-fullname"
                                aria-label="John Doe"aria-describedby="basic-icon-default-fullname2"required
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Category</label>
                          <div class="col-sm-10">
                          <div class="mb-3">
                        <select id="defaultSelect" class="form-select" name="category">
                          <option value="Active">Please Select Category</option>
                          <?php
                          $sql = "SELECT * FROM `category`";
                          $result = mysqli_query($connect, $sql);
                          while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <option value="<?php echo $row['Category_Name']; ?>"><?php echo $row['Category_Name'];?></option>
                          <?php } ?>
                        </select>
                        </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Price</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-dock-top"></i
                              ></span>
                              <input
                                name="price"type="text"class="form-control"id="basic-icon-default-fullname"
                                aria-label="John Doe"aria-describedby="basic-icon-default-fullname2"required
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Image</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-dock-top"></i
                              ></span>
                              <input
                                name="product_img"type="file"class="form-control"id="basic-icon-default-fullname" required/>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Status</label>
                          <div class="col-sm-10">
                          <div class="mb-3">
                        <select id="defaultSelect" class="form-select" name="ss">
                          <option value="Active">Active</option>
                          <option value="Deactive">Inactive</option>
                        </select>
                      </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="add-submit" class="btn btn-primary">Add</button>
                            <a class="btn btn-link ml-2 w-40 " href="product.php">Cancel</a>
                          </div>
                        </div>
                      </form>
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
                  ,  Design & Developed By
                  <a target="_blank" href="https://radhakrishnawebsolution.com">RADHAKRISHNA WEB SOLUTION</a>
                                    All rights reserved.
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
