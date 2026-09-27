<?php
 include("viewer_header.php");
 $page = "view";

// WORK fOR PDF
 if(isset($_POST["get_pdf_file"])){
   $links_gen = $_POST["links_gen"];
   $book_id = $_POST["book_id"];
   $file_name = $_POST["file_name"];
   $back_link = $_POST["back_link"];
   $mail_iframe_link = $links_gen."/".$file_name;
   $_SESSION["pdf_link_is"] = $mail_iframe_link;
   // track activity
   if( $role == "student" ){
          activity_tracker($user_id,"book id |$book_id| start read book");
   }

 }elseif(isset($_SESSION["pdf_link_is"])){
    $mail_iframe_link = $_SESSION["pdf_link_is"];
  }else{
    go_to("pdfs");
  }
?>

<!--app-content open-->
<div class="main-content app-content mt-0 p-0 m-0">
  <div class="side-app p-0 m-0">
    <!-- CONTAINER -->
    <a class="nav-link border " id="button_floting_back" href="<?php echo $back_link ?>">
      <span class="nav-link-icon d-block"><i class="fa fa-reply"></i> Back</span>
    </a>

      <!-- PAGE-HEADER END -->

      <!-- IFRAME EBOOKS -->
       <div class="row p-0 m-0">
         <div class="col-12 p-0 m-0">
           <iframe id="view_iframe" src="<?php echo $mail_iframe_link ?>" height="auto" width="100%" title="Iframe"></iframe>
         </div>
       </div>
        <!-- IFRAME EBOOKS -->
    </div>
    <!-- CONTAINER END -->
  </div>
</div>
<!--app-content close-->

</div>


<!-- Footer -->
<!-- FOOTER -->

</div>


<!-- JQUERY JS -->
<script src="assets/data/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/data/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/data/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="assets/data/js/apexcharts.js"></script>
<script src="assets/data/plugins/apexchart/irregular-data-series.js"></script>


<!-- INTERNAL Vector js -->
<script src="assets/data/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/data/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- SIDE-MENU JS-->
<script src="assets/data/plugins/sidemenu/sidemenu.js"></script>

<!-- Color Theme js -->
<script src="assets/data/js/themeColors.js"></script>

<!-- INTERNAL Notifications js -->
<script src="assets/data/plugins/notify/js/rainbow.js"></script>
<script src="assets/data/plugins/notify/js/jquery.growl.js"></script>
<script src="assets/data/plugins/notify/js/notifIt.js"></script>

<?php
     include("snippet/footer_codeblockJs.php");
    include("snippet/footer_codeblockPhp.php");
  
?>
</body>

</html>
