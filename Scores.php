<?php
  session_start();
  if(!isset($_SESSION['supid'])) header('location:login.php');
  include('connect.php');
  $teams = mysqli_query($con,"SELECT * FROM teams");
  if(isset($_POST['submit'])){
    $team = $_POST['team'];
    $regno1 = $_POST['regno'];
    $student = mysqli_query($con,"SELECT * FROM students where team ='$team' ");
    while($row = mysqli_fetch_assoc($student)){
      $score = $_POST[$row['regno']];
      $regno = $row['regno'];
      $sql = mysqli_query($con,"insert into score (scrto,scrby,team,score) values ('$regno1','$regno','$team','$score')");
    }
  }
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="Bhavani/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>CSD - Computer Science and Design</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="Bhavani/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="Bhavani/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="Bhavani/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="Bhavani/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="Bhavani/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="Bhavani/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="Bhavani/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="Bhavani/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Design </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="index.php" class="menu-link ">
                <!-- <i class="menu-icon tf-icons bx bx-home-circle"></i> -->
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item active">
              <a href="Scores.php" class="menu-link ">
              <!-- <i class="menu-icon tf-icons bx bx-cube-alt"></i> -->
                <div data-i18n="Analytics">Scores</div>
              </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"  >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <h3 style="padding-top: 20px;">Computer Science and Design</h3>
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="Bhavani/img/avatars/sureshsir.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-bold">Student Scoring</h4>
              
              <?php
                while($row = mysqli_fetch_assoc($teams)){
                  $student = mysqli_query($con,"SELECT * FROM students WHERE team = '{$row['team_id']}'");
                  $student1 = mysqli_query($con,"SELECT * FROM students WHERE team = '{$row['team_id']}'");
                ?>
              <!-- Basic Layout -->
                <div class="row">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><?php echo $row['team_name'] ?></h5>
                  </div>
                  <?php  while($row1 = mysqli_fetch_assoc($student)){
                      $score_check = mysqli_query($con,"SELECT * FROM score WHERE scrto = '{$row1['regno']}'  AND team = '{$row['team_id']}'");
                      if(mysqli_num_rows($score_check) == 0){ 
                      $student1 = mysqli_query($con,"SELECT * FROM students WHERE team = '{$row['team_id']}'");  ?>
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-body">
                      
                      <form method="post" action="#">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname"><?php echo $row1['regno'] ?></label>
                          <?php while($row2 = mysqli_fetch_assoc($student1)){ ?>
                            <label class="form-label" for="basic-default-fullname"></label>
                          <input type="<?php  if($row2['regno'] == $row1['regno'])  echo 'hidden';  else echo 'number';?>" name="<?php echo $row2['regno'] ?>" class="form-control" id="basic-default-fullname"  placeholder="<?php echo $row2['regno'] ?>" <?php  if($row2['regno'] == $row1['regno'])  echo 'value=0'; ?> />
                          <?php } ?>
                        </div>
                        <input type="hidden" name="team" value="<?php echo $row['team_id']; ?>">
                        <input type="hidden" name="regno" value="<?php echo $row1['regno']; ?>">
                        <button type="submit" name="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
                <?php }} ?>
            </div>
                <!-- <?php   } ?> -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://github.com/praveentech21" target="_blank" class="footer-link fw-bolder">Sai Praveen</a>
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
    <!-- build:js vendor/js/core.js -->
    <script src="Bhavani/vendor/libs/jquery/jquery.js"></script>
    <script src="Bhavani/vendor/libs/popper/popper.js"></script>
    <script src="Bhavani/vendor/js/bootstrap.js"></script>
    <script src="Bhavani/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="Bhavani/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="Bhavani/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  </body>
</html>
