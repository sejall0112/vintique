<?php
include('config.php');
$query = "SELECT * FROM about_us";
$result = mysqli_query($connect, $query);
error_reporting();
$msg = "";
if (isset($_POST['submit'])) {
  $h1 = $_POST['heading1'];
  $h2 = $_POST['heading2'];
  $h3 = $_POST['heading3'];
  $a1 = $_POST['about-1'];
  $a2 = $_POST['about-2'];
  $a3 = $_POST['about-3'];
  $name = $_POST['name1'];
  $sql = "UPDATE about_us SET
  Founder_Name='$name',
  Heading_1='$h1',
  Heading_2='$h2',
  Heading_3='$h3',
  About_1='$a1',
  About_2='$a2',
  About_3='$a3'";
  mysqli_query($connect, $sql);
  if (mysqli_query($connect, $sql)==true) {
    echo '<script>alert("About Us updated successfully.")</script>';
  echo "<script type='text/javascript'> document.location = 'about-us.php'; </script>";
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

    <title>About Us</title>

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
?>        
<!-- / Menu -->

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
                <h4 class="card-header fw-bold"><span class="text-muted fw-light">Pages/</span> About Us</h4>
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
                      <h5 class="mb-0">Update About Us Details</h5>
                    </div>
                    <div class="card-body">
                    
                    <?php
                       if (mysqli_num_rows($result) > 0) {
                        while($data = mysqli_fetch_assoc($result)) {

                        ?>
                      <form action="" method="post">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Heading 1</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-dock-top"></i
                              ></span>
                              <input
                                name="heading1"
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                                value="<?php echo $data['Heading_1'];?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">About us Details -1</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-comment"></i
                              ></span>
                              <input
                                name="about-1"
                                id="basic-icon-default-message"
                                class="form-control"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                                rows="5"
                                value="<?php echo $data['About_1'];?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Heading 2</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-dock-top"></i></span>
                              <input
                                name="heading2"
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control"
                                value="<?php echo $data['Heading_2'];?>"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                             </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">About us Details -2</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class="bx bx-comment"></i
                              ></span>
                              <input
                                name="about-2"
                                id="basic-icon-default-message"
                                class="form-control"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                                rows="5"
                                value="<?php echo $data['About_2'];?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Heading 3</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-dock-top"></i></span>
                              <input
                                name="heading3"
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control"
                                value="<?php echo $data['Heading_3'];?>"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                             </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">About us Details -3</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class="bx bx-comment"></i
                              ></span>
                              <input
                                name="about-3"
                                id="basic-icon-default-message"
                                class="form-control"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                                rows="5"
                                value="<?php echo $data['About_3'];?>"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Founder Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-user"></i></span>
                              <input
                                name="name1"
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control"
                                value="<?php echo $data['Founder_Name'];?>"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                              />
                             </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            <a class="btn btn-link ml-2 w-40 " href="index.php">Cancel</a>
                          </div>
                        </div>
                      </form>
                        <?php
                        }} ?>
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
                  <a>Sejal Pawar</a>                  All rights reserved.
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
