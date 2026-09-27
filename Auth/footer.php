
    <!-- JQUERY JS -->
    <script src="../assets/data/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/data/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/data/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../assets/data/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="../assets/data/js/generate-otp.js"></script>

    <!-- INTERNAL Notifications js -->
    <script src="../assets/data/plugins/notify/js/rainbow.js"></script>
    <!-- <script src="../admin/assets/plugins/notify/js/sample.js"></script> -->
    <script src="../assets/data/plugins/notify/js/jquery.growl.js"></script>
    <script src="../assets/data/plugins/notify/js/notifIt.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/data/plugins/p-scroll/perfect-scrollbar.js"></script>
    <!-- INTERNAL Notifications js -->
    <script src="../assets/data/plugins/notify/js/rainbow.js"></script>
    <script src="../assets/data/plugins/notify/js/jquery.growl.js"></script>
    <script src="../assets/data/plugins/notify/js/notifIt.js"></script>
    <!-- Color Theme js -->
    <script src="../assets/data/js/themeColors.js"></script>
    <!-- CUSTOM JS -->
    <script src="../assets/data/js/custom.js"></script>

    <!-- //======CODE FOR NOTIFUICATION -->
    <?php
    // danger=Admin Account inactive
    if(isset($_REQUEST["notification"])){
      if($_REQUEST["notification"]=="danger"){
        $msg = $_REQUEST['msg'];
        $title = $_REQUEST['title'];
       ?>
      <script>
       $.growl.error1({
        title: "<?php echo $title ?>",
        message: "<?php echo $msg ?>"
       });
      </script>
       <?php
      }
    }
    // error
    if(isset($_REQUEST["notification"])){
      if($_REQUEST["notification"]=="success"){
        $msg = $_REQUEST['msg'];
        $title = $_REQUEST['title'];
       ?>
     <script>
      $.growl.notice({
       title: "<?php echo $msg ?>",
       message: "<?php echo $title ?>"
      });
     </script>
     <?php
     }
    }
    ?>

</body>
</html>
