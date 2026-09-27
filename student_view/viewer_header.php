<?php
// php all page============
 include("config/connection.php");
 include("function/function.php");
 include("config/routs.php");
 include("config/controler.php");
 include("main_codeblock.php");
// php all page============
?>
<!doctype html>
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
    <link id="style" href="assets/data/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="assets/data/css/style.css" rel="stylesheet" />
    <link href="assets/data/css/dark-style.css" rel="stylesheet" />
    <link href="assets/data/css/transparent-style.css" rel="stylesheet">
    <link href="assets/data/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="assets/data/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/data/colors/color1.css" />

    <link rel="stylesheet" type="text/css" href="assets/data/css/master.css">
</head>

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
iframe#view_iframe {
    height: 100vh !important;
    width: 100% !important;
}

.main-sidemenu {
    display: none;
}

.app-sidebar.ps {
    display: none;
}

.main-content.app-content.mt-0 {
    margin: 0 !important;
}
a#button_floting_back {
    transition: 0.3s ease;
    opacity: .7 !important;
    transform: scale(0.9);
    position: absolute;
    top: 5%;
    right: 1%;
    z-index: 99999;
    background: linear-gradient(45deg, #fb0606, #070899f0);
    padding: 3px 8px !important;
    color: white;
    font-weight: 700;
    border-radius: 5px;
}
a#button_floting_back:hover {
    opacity: 1 !important;
    transform: scale(1.1);
}
</style>
<!-- // apps and sidebar=================== -->
<body class="app sidebar-mini ltr light-mode">
  <!-- /GLOBAL-LOADER -->

  <!-- PAGE -->
  <div class="page">
    <div class="page-main">
      <!-- app-Header -->
