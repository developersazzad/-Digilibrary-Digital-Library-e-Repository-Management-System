<?php
 include("header.php");
 ?>
<!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app">
    <!-- CONTAINER -->
    <div class="main-container container-fluid">
      <!-- PAGE-HEADER -->
      <div class="page-header">
        <h1 class="page-title"><?php echo $page ?></h1>
        <div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $page ?></li>
          </ol>
        </div>
      </div>
      <!-- PAGE-HEADER END -->

      <!-- Row -->
      <!-- Container -->
      <div class="container">
          <ul class="notification">
            <?php
            if(isset($_GET["student_id"])){
              $student_ids = $_GET["student_id"];
            }else{
              $student_ids = "";
            }
             $activity = activity_admin($student_ids);
             foreach ($activity as $fetch) {
                $activity_text = $fetch["activity_text"];
                $student_id = $fetch["student_id"];

                $data_st = student_data($student_id);
                $student_name = $data_st["fname"]." ".$data_st["lname"];
                $pp_img = $data_st["pp_img"];
                $date = $fetch["date"];


                // Extract day, month, and year
                $day   = date('D', strtotime($date));
                $month = date('M', strtotime($date));
                $year  = date('Y', strtotime($date));
                $hour  = date('H', strtotime($date));
                $min   = date('I', strtotime($date));
                $sec   =  date('s', strtotime($date));
                $time   =  date('h:i A', strtotime($date));


                ?>
                <li>
                    <div class="notification-time">
                        <span class="date">
                          Date : <?php echo  $day.'-'.$month.'-'.$year ?> | </span>
                        <span class="time"><?php echo $time ?> </span>
                    </div>
                    <div class="notification-icon">
                        <a href="javascript:void(0);"></a>
                    </div>
                    <div class="notification-time-date mb-2 d-block d-md-none">
                      <span class="date">
                        Date : <?php echo  $day.'-'.$month.'-'.$year ?></span>
                      <span class="time"><?php echo $time ?> </span>
                    </div>
                    <div class="notification-body">
                        <div class="media mt-0">
                            <div class="main-avatar avatar-md online">
                                <img alt="avatar" class="br-7" src="../assets/images/students/<?php echo $pp_img ?>">
                            </div>
                            <div class="media-body ms-3 d-flex">
                                <div class="">
                                    <p class="fs-15 text-dark fw-bold mb-0">Name: <?php echo $student_name ?></p>
                                    <p class="mb-0 fs-13 text-dark"><?php echo $activity_text ?></p>
                                </div>
                                <div class="notify-time">
                                    <p class="mb-0 text-muted fs-11"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
             }
             ?>


          </ul>
          <div class="text-center mb-4">
              <button class="btn ripple btn-primary w-md">Load more</button>
          </div>
      </div>
      <!-- End Container -->
      <!-- /Row -->

    </div>
    <!-- CONTAINER END -->
  </div>
</div>
<!--app-content close-->

</div>
<?php
  include($modal);
  include($footer);
?>
