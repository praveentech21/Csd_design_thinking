<?php
  session_start();
  if(!isset($_SESSION['supid'])) header('location:login.php');
  include('connect.php');
  $teams = mysqli_query($con,"SELECT * FROM teams");
  $rank = 1;
  $students_scores = mysqli_query($con,"SELECT scrto FROM `score` GROUP BY scrto order by avg(score) desc");
?>
<!DOCTYPE html>
<!-- All Done Shiva -->
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
            <li class="menu-item active">
              <a href="index.php" class="menu-link ">
                <!-- <i class="menu-icon tf-icons bx bx-home-circle"></i> -->
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item ">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-bold">Team Wise Ranking</h4>

            <!-- Bordered Table -->
            <div class="card">
              <?php while($row = mysqli_fetch_assoc($teams)){ 
                $students = mysqli_query($con,"SELECT * FROM students WHERE team = '{$row['team_id']}' ");
              ?>
                <h5 class="card-header"><?php echo $row['team_name'] ?></h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Student Name</th>
                          <th>Register Number</th>
                          <th>Score</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($row1 = mysqli_fetch_assoc($students)){
                          $scores = mysqli_fetch_assoc(mysqli_query($con,"SELECT avg(score) FROM score WHERE scrto = '{$row1['regno']}'"));
                        ?>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $row1['student_name'] ?></strong></td>
                          <td><?php echo $row1['regno'] ?></td>
                          <td><span class="badge bg-label-primary me-1"><?php echo $scores['avg(score)'] ?></span></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <?php } ?>
            </div>

            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-bold">Design Thinking Ranking</h4>
            <!--/ Bordered Table -->
            <div class="card">
                <h5 class="card-header">Student Wise Ranking</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Student Name</th>
                          <th>Team Name</th>
                          <th>Register Number</th>
                          <th>Score</th>
                          <th>Ranking</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while($row = mysqli_fetch_assoc($students_scores)){
                            $student = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM students WHERE regno = '{$row['scrto']}'"));
                            $team = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM teams WHERE team_id = '{$student['team']}'"));
                            $scores = mysqli_fetch_assoc(mysqli_query($con,"SELECT avg(score) FROM score WHERE scrto = '{$row['scrto']}'"));
                        ?>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $student['student_name'] ?></strong></td>
                          <td><?php echo $team['team_name'] ?></td>
                          <td><span class="badge bg-label-primary me-1"><?php echo $student['regno'] ?></span></td>
                          <td><span class="badge bg-label-info me-1"><?php echo $scores['avg(score)'] ?> Points</span></td>
                          <td><span class="badge bg-label-success me-1">Rank <?php echo $rank ?></span></td>
                        </tr>
                        <?php $rank++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>


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
