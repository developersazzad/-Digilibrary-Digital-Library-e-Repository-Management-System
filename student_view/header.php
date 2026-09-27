<?php
// php all page============
 $path = "../";
 include($path."config/connection.php");
 include($path."function/function.php");
 include($path."function/smtp_shoot.php");
 include($path."config/routs.php");
 include($path."config/controler.php");
 include("main_codeblock.php");

// php all page============

$switcher = '<head>
    <!-- META DATA -->
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Digital Library Brit College of Engineering & Technology (BCET)">
    <meta name="author" content="Digital Library - BCET">
    <meta name="keywords" content="Digital Library,BCET,Brit College of Engineering & Technology (BCET)">
    <meta property="og:image" content="https://bcet.uk/frontend/template/default.png" >
    <meta property="og:image:secure_url" content="https://bcet.uk/frontend/template/default.png" >
    <meta name="twitter:image:src" content="https://bcet.uk/frontend/template/default.png" >
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="https://bcet.uk/cdn/settings/136999600.png" >

    <!-- TITLE -->
    <title>Digital Library Brit College of Engineering & Technology (BCET)</title>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/data/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/data/css/style.css" rel="stylesheet" />
    <link href="../assets/data/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/data/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/data/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/data/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/data/colors/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="../assets/data/switcher/css/switcher.css" rel="stylesheet" />
    <link href="../assets/data/switcher/demo.css" rel="stylesheet" />
  </head>';

$main_links = '<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Digital Library Brit College of Engineering & Technology (BCET)">
    <meta name="author" content="Digital Library - BCET">
    <meta name="keywords" content="Digital Library,BCET,Brit College of Engineering & Technology (BCET)">
    <meta property="og:image" content="https://bcet.uk/frontend/template/default.png" >
    <meta property="og:image:secure_url" content="https://bcet.uk/frontend/template/default.png" >
    <meta name="twitter:image:src" content="https://bcet.uk/frontend/template/default.png" >
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="https://bcet.uk/cdn/settings/136999600.png" >

    <!-- TITLE -->
    <title>Digital Library Brit College of Engineering & Technology (BCET)</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/data/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/data/css/style.css" rel="stylesheet" />
    <link href="../assets/data/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/data/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/data/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/data/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/data/colors/color1.css" />
    <!----Master css---->
    <link rel="stylesheet" type="text/css" href="../assets/data/css/master.css">
</head>';
if($page=="setting"){
  echo $switcher;
}else{
  echo $main_links;
}
?>
<style type="text/css">
img.header-brand-img.light-logo1, img.header-brand-img.desktop-logo {
  width: 150px !important;
}
h5.fw-normal.mb-0 {
    font-size: 14px;
}
div#file-datatable_length {
    width: 700px !important;
}

.dt-buttons.btn-group.flex-wrap {
    width: 450px !important;
}
</style>
<!-- // apps and sidebar=================== -->
<body class="app sidebar-mini ltr light-mode">
  <!-- GLOBAL-LOADER -->
  <div id="global-loader">
    <img src="../assets/data/images/loader.svg" class="loader-img" alt="Loader">
  </div>
  <!-- /GLOBAL-LOADER -->

  <!-- PAGE -->
  <div class="page">
    <div class="page-main">
      <!-- app-Header -->
      <div class="app-header header sticky">
        <div class="container-fluid main-container">
          <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index">
              <img src="../assets/data/images/brand/<?php echo $logo_main ?>" class="header-brand-img desktop-logo" alt="logo">
              <img src="../assets/data/images/brand/<?php echo $logo_sub ?>" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->

            <div class="d-flex order-lg-2 ms-auto header-right-icons">
              <div class="dropdown d-none">
                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                  <i class="fe fe-search"></i>
                </a>
                <div class="dropdown-menu header-search dropdown-menu-start">
                  <div class="input-group w-100 p-2">
                    <input type="text" class="form-control" placeholder="Search....">
                    <div class="input-group-text btn btn-primary">
                      <i class="fe fe-search" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- SEARCH -->
              <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
              </button>
              <div class="navbar navbar-collapse responsive-navbar p-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                  <div class="d-flex order-lg-2">
                    <div class="dropdown d-lg-none d-flex">
                      <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                        <i class="fe fe-search"></i>
                      </a>
                      <div class="dropdown-menu header-search dropdown-menu-start">
                        <div class="input-group w-100 p-2">
                          <input type="text" class="form-control" placeholder="Search....">
                          <div class="input-group-text btn btn-primary">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- dark and white theme switch -->
                    <div class="d-flex country">
                      <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                        <span class="dark-layout"><i class="fe fe-moon"></i></span>
                        <span class="light-layout"><i class="fe fe-sun"></i></span>
                      </a>
                    </div>
                    <!-- COUNTRY -->
                    <!-- model have old -->
                    <div class="dropdown d-flex">
                      <a class="nav-link icon full-screen-link nav-link-bg">
                        <i class="fe fe-minimize fullscreen-button"></i>
                      </a>
                    </div>
                    <?php
                     if($role=="admin"){
                     ?>
                    <!-- FULL-SCREEN -->
                    <div class="dropdown  d-flex notifications">
                      <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading border-bottom">
                          <div class="d-flex">
                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                            </h6>
                          </div>
                        </div>
                        <div class="notifications-menu">

                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a href="#" class="dropdown-item text-center p-3 text-muted">View all
                          Notification</a>
                      </div>
                    </div>
                    <!-- NOTIFICATIONS -->
                  <?php } ?>
                    <!-- SIDE-MENU -->
                    <div class="dropdown d-flex profile-1">
                      <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                        <?php
                          $pic_pro = $path.$profile_pic;
                         ?>
                        <img src="<?php echo $pic_pro ?>" alt="profile-user" class="avatar  profile-user brround cover-image">
                      </a>
                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading">
                          <div class="text-center">
                            <h5 class="text-dark mb-0 fs-14 fw-semibold"><?php echo $role." Name" ?></h5>
                            <small class="text-muted"><?php echo $frist_name ?></small>
                          </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="<?php echo $logout_link ?>?role=<?php echo $role ?>">
                          <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
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
      <!-- /app-Header -->

      <!--APP-SIDEBAR-->
      <div class="sticky">
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar">
          <div class="side-header">
            <a class="header-brand1" href="index">
              <img src="../assets/data/images/brand/<?php echo $logo ?>" class="header-brand-img desktop-logo" alt="logo">
              <img src="../assets/data/images/brand/<?php echo $logo ?>" class="header-brand-img toggle-logo" alt="logo">
              <img src="../assets/data/images/brand/<?php echo $logo ?>" class="header-brand-img light-logo" alt="logo">
              <img src="../assets/data/images/brand/<?php echo $logo ?>" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
          </div>
          <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
              </svg></div>
            <ul class="side-menu">
              <li class="sub-category">
                <h3>Main</h3>
              </li>
              <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $deshbord ?>"><i class="side-menu__icon fa fa-dashboard"></i><span class="side-menu__label">Dashboard</span></a>
              </li>
              <li class="sub-category">
                <h3>Others</h3>
              </li>
              <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $all_pdfs ?>"><i class="side-menu__icon fa fa-book"></i><span class="side-menu__label">All Ebooks/Pdfs</span><span class="badge bg-green br-5 side-badge blink-text pb-1">important</span></a>
              </li>
              <?php
              if($role == "admin"){
                ?>
                <li class="slide">
                  <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $all_students ?>"><i class="side-menu__icon fa fa-vcard "></i><span class="side-menu__label">All Students</span></a>
                </li>
                <li class="slide">
                  <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $all_staffs ?>"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label">All Staffs</span></a>
                </li>
                <li class="slide">
                  <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $category ?>"><i class="side-menu__icon fa fa-cubes "></i><span class="side-menu__label">Category</span></a>
                </li>
                <?php
              }elseif($role == "staff"){
                ?>
                <li class="slide">
                  <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $all_students ?>"><i class="side-menu__icon fa fa-vcard "></i><span class="side-menu__label">All Students</span></a>
                </li>
                <li class="slide">
                  <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $category ?>"><i class="side-menu__icon fa fa-cubes "></i><span class="side-menu__label">Category</span></a>
                </li>
                <?php
              }elseif($role == "student"){
                ?>
                <li class="slide">
                  <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $profile ?>"><i class="side-menu__icon fa fa-user "></i><span class="side-menu__label">Profile</span></a>
                </li>
                <li class="slide">
                  <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $favorite ?>"><i class="side-menu__icon fa fa-heart "></i><span class="side-menu__label">Favorite</span></a>
                </li>
                <?php
                }
               ?>
               <li class="slide">
                 <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $book_request ?>"><i class="side-menu__icon fa fa-clipboard"></i><span class="side-menu__label">Book Request</span></a>
               </li>

              <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $activity ?>"><i class="side-menu__icon fa fa-hourglass-2"></i><span class="side-menu__label">Activity</span></a>
              </li>
              <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?php echo $setting_link ?>"><i class="side-menu__icon fa fa-gears"></i><span class="side-menu__label">Setting</span></a>
              </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
              </svg></div>
          </div>
        </div>
        <!--/APP-SIDEBAR-->
      </div>
