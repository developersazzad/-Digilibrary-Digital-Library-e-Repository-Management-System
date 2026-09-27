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
        <h1 class="page-title">
          <?php
          if($role=="admin"){
            echo "Admin ";
          }elseif($role=="staff"){
            echo "Staff ";
          }elseif($role=="student"){
            echo "Student ";
          }
          echo $page;
          ?>
        </h1>
        <div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $page ?></li>
          </ol>
        </div>
      </div>
      <!-- PAGE-HEADER END -->
      <?php
       if($role == "student"){
          include($notification);
        }
        include($buttons);
        include($admin_data);
        include($accordion);
      ?>
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
