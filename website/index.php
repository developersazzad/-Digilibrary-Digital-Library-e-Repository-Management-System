<?php
include("get.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>luckywinUk.com</title>

  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/lightcase.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

  <!-- main css for template -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/67319c612480f5b4f59b7e89/1iccslnkr';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  <style type="text/css">
    section#home {
      padding-top: 80px !important;
    }

    img.iamge_pkg {
      width: 300px !important;
    }
    .header-wrapper .logo a img {
      max-width: 140px;
    }

    .footer__content.text-center img {
      width: 260px;
    }

    .collection__item-thumb {
      margin: 5px !important;
      border: 1px solid white;
    }

    @media (min-width: 1400px) {
      .banner {
        padding-block: 120px !Important;
        padding-top: 80px !Important;
      }

      .banner__content h1 {
        max-inline-size: 90%;
        line-height: 72px;
      }
    }

    h2.setsh2 {
      margin: auto;
    }

    /* designer css pakages*/
    .accordion__body.box_drow {
      background: none;
      border: 2px solid goldenrod;
      border-radius: 12px;
    }

    .accordion__body.box_drow .box {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
    }

    .accordion__body.box_drow .box_us_1 {
      text-align: left;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
    }

    .winning {
      margin-top: 5px;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      margin-left: -5px;
    }

    .winning .bx_span {
      margin-top: 3px;
      padding: 3px 8px;
      border-radius: 6px;
      font-size: 12px;
      margin-left: 6px;
      color: white;
    }

    .bx_span.str {
      background: #e44f00;
    }

    .bx_span.str_1 {
      background: green;
    }

    .bx_span.str_2 {
      background: #e50097;
    }


    span.pkg_name {
      padding: 2px 8px;
      border: 2px solid green;
    }

    @media(max-width:768px) {
      .box_us {
        display: flex;
        align-items: center;
      }

      .box_us_1 h4 {
            font-size: 18px !important;
        }

      .box_us img.iamge_pkg {
        max-width: 150px;
        margin-right: 8px;
      }

      .box_us_1 p {
        font-size: 12px;
      }

      .accordion__body.box_drow {
        padding: 26px 12px;
      }
    }
  </style>
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="assets/images/logo/preloader.png" alt="Apes land">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ========== Multipage Header Section Starts Here========== -->
  <header class="header-section">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="index.html">
              <img src="assets/images/logo/logo.png" alt="logo">
            </a>
          </div>
          <div class="menu-area">
            <ul class="menu">
              <li>
                <a href="#home">Home</a>
              </li>

              <li>
                <a href="#about">About</a>
              </li>
              <li>
                <a href="#marcents">Marcents</a>
              </li>
              <li>
                <a href="#faq">FAQ</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>

            </ul>
            <div class="header-btn">
              <a href="<?php echo $hd_btn_1 ?>" class="default-btn default-btn--secondary">
                <span>Join <i class="fa-brands fa-facebook"></i></span>
              </a>
              <a href="<?php echo $hd_btn_2 ?>" class="default-btn" data-bs-toggle="modal" data-bs-target="#wallet-option">
                <span>Connect <i class="fa-solid fa-wallet"></i></span>
              </a>
            </div>

            <!-- toggle icons -->
            <div class="header-bar d-lg-none">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ========== Multipage Header Section Ends Here========== -->





  <!-- connect wallet modal start -->
  <!-- <div class="wallet-modal modal fade" id="wallet-option" tabindex="-1" aria-labelledby="choose-wallet" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="choose-wallet">Connect Your Wallet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Please select a wallet to connect for <br> Start Minting your NFTs</p>
          <ul class="wallet__list">
            <li class="wallet__list-item"><a href="#"> <span><img src="assets/images/wallet/metamask.jpg" alt="metamask">
                </span> </a></li>
            <li class="wallet__list-item"><a href="#"> <span><img src="assets/images/wallet/coinbase.jpg" alt="coinbase">
                </span> </a></li>
            <li class="wallet__list-item"><a href="#"> <span><img src="assets/images/wallet/bsc.jpg" alt="bsc">
                </span></a></li>
            <li class="wallet__list-item"><a href="#"> <span><img src="assets/images/wallet/trust.jpg" alt="Trust Wallet">
                </span></a></li>
          </ul>
          <p>By connecting your wallet, you agree to our Terms of Service and our Privacy Policy.</p>
        </div>
      </div>
    </div>
  </div> -->
  <!-- connect wallet modal end -->





  <!-- ================> Banner section start here <================== -->
  <section id="home" class="banner" style="background-image: url(assets/images/banner/bg.png);">
    <div class="container">
      <div class="banner__wrapper">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <div class="banner__content" data-aos="fade-right" data-aos-duration="2000">
              <h3><?php echo $hd_sm_t1 ?> <span class="color--secondary-color"> Now
                  <i class="fa-solid fa-wifi"></i></span></h3>
              <h1><?php echo $hd_hero_t1 ?></h1>
              <p><?php echo $hd_sbt_t1 ?></p>
              <div class="btn-group">
                <a href="<?php echo $hd_btn_1 ?>" class="default-btn default-btn--secondary">Contact Us</a>
                <a href="<?php echo $hd_btn_2 ?>" class="default-btn">Facebook</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="banner__thumb d-flex justify-content-center" data-aos="fade-left" data-aos-duration="2000">
              <img src="assets/images/all_images/cover_images.png" alt="banner Image">
              <a class="banner__video" href="https://www.youtube.com/embed/BKkc2v8echI" data-rel="lightcase">
                <div class="banner__video-inner">
                  <svg viewBox="0 0 100 100">
                    <defs>
                      <path id="circle" d="
                              M 50, 50
                              m -37, 0
                              a 37,37 0 1,1 74,0
                              a 37,37 0 1,1 -74,0" />
                    </defs>
                    <text>
                      <textPath xlink:href="#circle">
                        lottery is live * luckywin is live * luckywin play
                      </textPath>
                    </text>
                  </svg>
                  <span><i class="fa-solid fa-play"></i></span>
                </div>
              </a>
              <div class="banner-shape">
                <img src="assets/images/banner/icon/01.png" alt="shape">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================> Banner section end here <================== -->



  <!-- ================> Counter section start here <================== -->
  <section class="counter counter--uplifted">
    <div class="container">
      <div class="counter__wrapper">
        <div class="row g-1">
          <div class="col-lg-3 col-sm-6">
            <div class="counter__item">
              <div class="counter__item-content">
                <h2><span class="purecounter" data-purecounter-start="0" data-purecounter-end="<?php echo $co_tiket ?>"><?php echo $co_tiket ?></span> </h2>
                <p>Total Ticket Sale</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="counter__item">
              <div class="counter__item-content">
                <h2><span class="purecounter" data-purecounter-start="0" data-purecounter-end="<?php echo $co_marcent ?>" data-purecounter-once="false"><?php echo $co_marcent ?></span></h2>
                <p>Total Winner</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="counter__item">
              <div class="counter__item-content">
                <h2><span class="purecounter" data-purecounter-start="1" data-purecounter-end="<?php echo $co_sale ?>" data-purecounter-once="false"><?php echo $co_sale ?></span></h2>
                <p>Total Marcents</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="counter__item">
              <div class="counter__item-content">
                <h2><span class="purecounter" data-purecounter-start="0" data-purecounter-end="<?php echo $co_winamt ?>" data-purecounter-once="false"><?php echo $co_winamt ?></span>K</h2>
                <p>Total Win Ammount</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================> Counter section end here <================== -->


  <!-- ================> Counter section end here <================== -->
  <section class="page-header bg--cover mt-5" style="background-image: url(assets/images/header/bg.jpg);">
    <div class="container">
      <div class="page-header__content text-center">
        <div class="roadmap__item   aos-init aos-animate">
          <div class="roadmap__item-inner">
            <div class="roadmap__item-content">
              <div class="roadmap__item-header sets">
                <h2 class="setsh2" style="text-align:center">Upcoming Drow </h2>
              </div>
              <!-- loop -->
              <?php
               foreach ($pakage_data as $p_data) {
                 $p_name = $p_data["name"];
                 $p_logo = $p_data["logo"];
                 $price = $p_data["price"];
                 $end_date = $p_data["end_date"];
                 $segment_data = $p_data['segment_data'];

                 ?>
              <div class="accordion__body box_drow mb-4">
                <div class="box">
                  <div class="box_us">
                    <img class="iamge_pkg" src="https://arohidraw.com/admin/assets/images/pakages/<?php echo $p_logo ?>" alt="">
                  </div>
                  <div class="box_us_1">
                    <h4>Pakage Name - <span class="pkg_name"><?php echo $p_name ?></span></h4>
                    <p>Drow Date - <?php echo $end_date ?> | Price : <?php echo $price ?></p>
                    <div class="winning">
                      <?php
                      $isi = 0;
                      foreach ($segment_data as $segment) {
                        $segment_name = $segment["name"];
                        $segment_ammount = $segment["ammount"];
                        if($isi==0){
                          $class = "str";
                        }elseif($isi==1){
                          $class = "str_1";
                        }elseif($isi==2){
                          $class = "str_2";
                        }else{
                          $class = "";
                        }
                         ?>
                         <div class="bx_span <?php echo $class ?>">
                           <?php echo $segment_name ?> : <?php echo $segment_ammount ?> AED
                         </div>
                         <?php
                         $isi++;
                      }
                       ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
            </div>
          </div>
          <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                        Z"></path>
              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                        Z"></path>
              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                        Z"></path>
              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                        Z"></path>
              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                        L125.000,-0.001 Z"></path>
              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                        L155.000,-0.001 Z"></path>
              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                        L185.000,-0.001 Z"></path>
            </svg></span>
        </div>
      </div>
    </div>
   </section>
  <!-- ================> Counter section end here <================== -->



  <!-- ================>collection section start here <================== -->
  <section class="collection padding-top padding-bottom">
    <div class="container">
      <div class="collection__wrapper">
        <div class="row g-4">
          <div class="col-lg-3">
            <div class="collection__header ">
              <div class="collection__header-content">
                <p class="subtitle"><?php echo $ab_sm_top ?></p>
                <h2><?php echo $sb_hro_t1 ?></h2>
                <p><?php echo $sb_sub_t1 ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="swiper collection__slider1">
              <div class="swiper-wrapper">
                <?php
                  for ($i=0; $i < $marcent_img_count; $i++) {
                    ?>
                    <div class="swiper-slide">
                      <div class="collection__item">
                        <div class="collection__item-thumb"><img src="https://arohidraw.com/admin/assets/images/website/<?php echo $marcent_image[$i] ?>" alt="NFT Image"></div>
                      </div>
                    </div>
                    <?php
                  }
                 ?>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================>collection section end here <================== -->



  <!-- ================> About section start here <================== -->
  <section class="about padding-top padding-bottom" id="about">
    <div class="container">
      <div class="about__wrapper">
        <div class="row g-5">
          <div class="col-lg-6">
            <div class="about__thumb" data-aos="fade-up" data-aos-duration="1500">
              <img src="https://arohidraw.com/admin/assets/images/website/<?php echo $ab_m_img ?>" alt="About Image">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about__content" data-aos="fade-up" data-aos-duration="2000">
              <p class="subtitle"><?php echo $ab_sm_t ?></p>
              <h2><?php echo $ab_m_txt1 ?></h2>
              <p>
                <?php echo $ab_sb_title ?></p>

              <div class="mint-step">
                <p class="subtitle color--secondary-color">Easy Steps</p>
                <p><?php echo $ab_sbt_sub_t2tx ?></p>

                <div class="btn-group">
                  <a href="<?php echo $hd_btn_1 ?>" class="default-btn default-btn--secondary">Start Now</a>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================> About section end here <================== -->





  <!-- ================>Roadmap section start here <================== -->
  <section class="roadmap roadmap--style1 padding-top padding-bottom" id="roadmap" style="background-image: url(assets/images/roadmap/bg.jpg);">
    <div class="container">
      <div class="section-header text-center">
        <p class="subtitle">Roadmap</p>
        <h2>How it all started</h2>
      </div>
      <div class="roadmap__wrapper">
        <div class="row gy-4 gy-md-0 gx-5">
          <div class="col-md-6 offset-md-6">
            <div class=" roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h4>Purchase Ticket</h4>
                    <p>10%</p>
                  </div>
                  <p>Customers visit a local merchant and purchase a lottery ticket. They can choose from a variety of ticket options, each linked to a unique lottery game.</p>
                </div>
              </div>
              <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                  <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                        Z" />
                  <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                        Z" />
                  <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                        Z" />
                  <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                        Z" />
                  <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                        L125.000,-0.001 Z" />
                  <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                        L155.000,-0.001 Z" />
                  <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                        L185.000,-0.001 Z" />
                </svg></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class=" roadmap__item ms-auto me-md-4 aos-init" data-aos="fade-right" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h4>Select Numbers</h4>
                    <p>50%</p>
                  </div>
                  <p>Customers choose their preferred numbers for the lottery. Each ticket includes a unique QR code.</p>
                </div>
              </div>
              <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                  <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                                L125.000,-0.001 Z" />
                  <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                                L155.000,-0.001 Z" />
                  <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                                L185.000,-0.001 Z" />
                </svg></span>
            </div>
          </div>
          <div class="col-md-6 offset-md-6">
            <div class="roadmap__item ms-md-4  aos-init" data-aos="fade-left" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h4>Receive Ticket</h4>
                    <p>30%</p>
                  </div>
                  <p>After purchase, customers receive their ticket with a QR code for easy scanning.</p>
                </div>
              </div>
              <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                  <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                                L125.000,-0.001 Z" />
                  <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                                L155.000,-0.001 Z" />
                  <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                                L185.000,-0.001 Z" />
                </svg></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="roadmap__item ms-auto me-md-4  aos-init" data-aos="fade-right" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h4>Wait for Drawing</h4>
                    <p>70%</p>
                  </div>
                  <p>Customers wait for the lottery drawing at the designated time.</p>
                </div>
              </div>
              <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                  <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                                L125.000,-0.001 Z" />
                  <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                                L155.000,-0.001 Z" />
                  <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                                L185.000,-0.001 Z" />
                </svg></span>
            </div>
          </div>
          <div class="col-md-6 offset-md-6">
            <div class="roadmap__item ms-md-4  aos-init" data-aos="fade-left" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h4>Scan QR Code</h4>
                    <p>80%</p>
                  </div>
                  <p>At the drawing time, customers return to the merchant, who scans the ticket's QR code to check if they’ve won.</p>
                </div>
              </div>
              <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                  <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                                L125.000,-0.001 Z" />
                  <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                                L155.000,-0.001 Z" />
                  <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                                L185.000,-0.001 Z" />
                </svg></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="roadmap__item ms-auto me-md-4  aos-init" data-aos="fade-right" data-aos-duration="800">
              <div class="roadmap__item-inner">
                <div class="roadmap__item-content">
                  <div class="roadmap__item-header">
                    <h4>Manual Check</h4>
                    <p>100%</p>
                  </div>
                  <p>If the QR code cannot be scanned, the customer can provide the ticket number, and the merchant will manually verify the result.</p>
                </div>
              </div>
              <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                  <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                                Z" />
                  <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                                L125.000,-0.001 Z" />
                  <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                                L155.000,-0.001 Z" />
                  <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                                L185.000,-0.001 Z" />
                </svg></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================>Roadmap section end here <================== -->


  <!-- ================>collection section start here <================== -->
  <section class="collection padding-top padding-bottom" id="marcents">
    <div class="container-fluid">
      <div class="section-header text-center">
        <p class="subtitle">Lucky Win</p>
        <h2>Our Popular Marcents</h2>
      </div>
      <div class="collection__wrapper">
        <div class="row g-0">
          <div class="col-12">
            <div class="swiper collection__slider1--home2">
              <div class="swiper-wrapper">
                <?php
                for ($i=0; $i < $all_marcent_c; $i++) {
                  ?>
                 <div class="swiper-slide">
                    <div class="collection__item">
                      <div class="collection__item-thumb"><img src="https://arohidraw.com/admin/assets/images/website/<?php echo $all_marcent[$i] ?>" alt="NFT Image"></div>
                    </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="swiper collection__slider2--home2">
              <div class="swiper-wrapper">
                <?php
                for ($i=0; $i < $all_marcent_c; $i++) {
                  ?>
                 <div class="swiper-slide">
                    <div class="collection__item">
                      <div class="collection__item-thumb"><img src="https://arohidraw.com/admin/assets/images/website/<?php echo $all_marcent[$i] ?>" alt="Lw Image"></div>
                    </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <a href="#" class="default-btn default-btn--secondary"> <span><img src="assets/images/opensea.svg" alt="opensea icon" width="20" height="20">
              Contact Us admin</span> </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ================>collection section end here <================== -->



  <!-- ================FAQ section start here <================== -->
  <section id="faq" class="faq padding-top padding-bottom">
    <div class="container">
      <div class="section-header text-center">
        <p class="subtitle">Questions & Answers</p>
        <h2>Frequently Asked Questions</h2>
      </div>
      <div class="faq__wrapper">
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="accordion" id="faqAccordion1">
              <div class="row g-4">
                <div class="col-12">
                  <div class="accordion__item" data-aos="fade-up" data-aos-duration="1000">
                    <div class="accordion__header" id="faq1">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
                    <?php echo $Faq_t1 ?> <span class="plus-icon"></span>
                      </button>
                    </div>
                    <div id="faqBody1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body"><?php echo $Faq_sub_text1 ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item" data-aos="fade-up" data-aos-duration="1100">
                    <div class="accordion__header" id="faq2">
                      <button class="accordion__button" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="true" aria-controls="faqBody2">
                      <?php echo $Faq_t2 ?><span class="plus-icon"></span>
                      </button>
                    </div>
                    <div id="faqBody2" class="accordion-collapse collapse show" aria-labelledby="faq2" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body"><?php echo $Faq_sub_text2 ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item" data-aos="fade-up" data-aos-duration="1200">
                    <div class="accordion__header" id="faq3">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody3" aria-expanded="false" aria-controls="faqBody3"><?php echo $Faq_t3 ?><span class="plus-icon"></span>
                      </button>
                    </div>
                    <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion1">
                      <div class="accordion__body"><?php echo $Faq_sub_text3 ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="accordion" id="faqAccordion2">
              <div class="row g-4">
                <div class="col-12">
                  <div class="accordion__item" data-aos="fade-up" data-aos-duration="1000">
                    <div class="accordion__header" id="faq1-two">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody1-two" aria-expanded="false" aria-controls="faqBody1-two">
                      <?php echo $Faq_t4 ?>
                      <span class="plus-icon"></span>
                      </button>
                    </div>
                    <div id="faqBody1-two" class="accordion-collapse collapse" aria-labelledby="faq1-two" data-bs-parent="#faqAccordion2">
                      <div class="accordion__body"><?php echo $Faq_sub_text4 ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item" data-aos="fade-up" data-aos-duration="1100">
                    <div class="accordion__header" id="faq2-two">
                      <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody2-two" aria-expanded="true" aria-controls="faqBody2-two">

                        Do I need to register before playing? <span class="plus-icon"></span>
                      </button>
                    </div>
                    <div id="faqBody2-two" class="accordion-collapse collapse" aria-labelledby="faq2-two" data-bs-parent="#faqAccordion2">
                      <div class="accordion__body">
                        No, you don’t need to register to buy tickets. However, registering on our platform can give you updates, exclusive offers, and a record of your past tickets.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item" data-aos="fade-up" data-aos-duration="1200">
                    <div class="accordion__header" id="faq3-two">
                      <button class="accordion__button" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody3-two" aria-expanded="false" aria-controls="faqBody3-two">

                        Can I win multiple times?<span class="plus-icon"></span>
                      </button>
                    </div>
                    <div id="faqBody3-two" class="accordion-collapse collapse show" aria-labelledby="faq3-two" data-bs-parent="#faqAccordion2">
                      <div class="accordion__body">
                        Yes! There is no limit to how many times you can win. Each ticket you purchase gives you another chance to win big.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item" data-aos="fade-up" data-aos-duration="1200">
                    <div class="accordion__header" id="faq3-two">
                      <button class="accordion__button" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody3-two" aria-expanded="false" aria-controls="faqBody3-two">

                        Is the lottery fair?<span class="plus-icon"></span>
                      </button>
                    </div>
                    <div id="faqBody3-two" class="accordion-collapse collapse show" aria-labelledby="faq3-two" data-bs-parent="#faqAccordion2">
                      <div class="accordion__body">Yes, Lucky Win Lottery operates with full transparency and fairness. All results are generated through a secure and random system, ensuring every ticket has an equal chance of winning.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="accordion__item" data-aos="fade-up" data-aos-duration="1200">
                    <div class="accordion__header" id="faq3-two">
                      <button class="accordion__button" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody3-two" aria-expanded="false" aria-controls="faqBody3-two">
                        What happens if I lose?<span class="plus-icon"></span>
                      </button>
                    </div>
                    <div id="faqBody3-two" class="accordion-collapse collapse show" aria-labelledby="faq3-two" data-bs-parent="#faqAccordion2">
                      <div class="accordion__body">
                        If you don’t win, don’t worry! You can keep playing and try your luck again in the next draw. We offer regular lottery events and prizes to keep the excitement going.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================FAQ section end here <================== -->



  <!-- ================>Community section start here <================== -->
  <section class="community padding-top padding-bottom" style="background-image:url(assets/images/community/bg.jpg)" id="contact">
    <div class="container">
      <div class="comminity__wrapper">
        <div class="section-header text-center">
          <p class="subtitle">Our Community</p>
          <h2>Join Our Cumminity and get early access</h2>
        </div>
        <div class="btn-group justify-content-center">
          <a href="<?php echo $foo_link1 ?>" class="default-btn default-btn--secondary"><span><i class="fab fa-discord"></i> Join
              Facebook</span></a>
          <a href="<?php echo $foo_link2 ?>" class="default-btn"> <span><img src="assets/images/opensea.svg" alt="opensea icon" width="20" height="20"> Join Whatsapp</span> </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ================>Community section end here <================== -->





  <!-- ================> Footer section start here <================== -->
  <footer class="footer" style="background-image: url(assets/images/footer/bg.png);">
    <div class="footer__wrapper padding-top padding-bottom">
      <div class="container">
        <div class="footer__content text-center">
          <a class="mb-4 d-inline-block" href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
          <ul class="social justify-content-center">
            <li class="social__item">
              <a href="<?php echo $foo_link1 ?>" class="social__link"><i class="fab fa-twitter"></i></a>
            </li>

            <li class="social__item">
              <a href="<?php echo $foo_link2 ?>" class="social__link"><i class="fab fa-instagram"></i></a>
            </li>

            <li class="social__item">
              <a href="<?php echo $foo_link3 ?>" class="social__link"><i class="fab fa-facebook-f"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__copyright">
      <div class="container">
        <div class="text-center py-4">
          <p class=" mb-0">© 2023 - 2030 | All Rights Reserved. </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================> Footer section end here <================== -->


  <!-- vendor plugins -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/all.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/countdown.min.js"></script>
  <script src="assets/js/lightcase.js"></script>
  <script src="assets/js/purecounter_vanilla.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>
