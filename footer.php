<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="row align-items-center flex-row-reverse">
      <div class="col-md-12 col-sm-12 text-center">
        Copyright © <span id="year"></span>All rights reserved.
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER END -->

</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- JQUERY JS -->
<script src="assets/data/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/data/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/data/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SPARKLINE JS-->
<script src="assets/data/js/jquery.sparkline.min.js"></script>

<!-- Sticky js -->
<script src="assets/data/js/sticky.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="assets/data/js/circle-progress.min.js"></script>

<!-- PIETY CHART JS-->
<script src="assets/data/plugins/peitychart/jquery.peity.min.js"></script>
<script src="assets/data/plugins/peitychart/peitychart.init.js"></script>

<!-- SIDEBAR JS -->
<script src="assets/data/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="assets/data/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="assets/data/plugins/p-scroll/pscroll.js"></script>
<script src="assets/data/plugins/p-scroll/pscroll-1.js"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="assets/data/plugins/chart/Chart.bundle.js"></script>
<script src="assets/data/plugins/chart/rounded-barchart.js"></script>
<script src="assets/data/plugins/chart/utils.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="assets/data/plugins/select2/select2.full.min.js"></script>

<!-- INTERNAL Data tables js-->
<script src="assets/data/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/data/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="assets/data/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- datatable js -->
<?php
 if($page=="staffs" || $page=="students" || $page=="pdfs"){
   ?>
   <!-- demo  -->
   <!-- BOOTSTRAP JS -->
    <!-- TIME COUNTER JS-->
   <script src="assets/data/plugins/counters/jquery.missofis-countdown.js"></script>
   <script src="assets/data/plugins/counters/counter.js"></script>
   <!-- DATA TABLE JS-->
   <script src="assets/data/plugins/datatable/js/jquery.dataTables.min.js"></script>
   <script src="assets/data/plugins/datatable/js/dataTables.bootstrap5.js"></script>
   <script src="assets/data/plugins/datatable/js/dataTables.buttons.min.js"></script>
   <script src="assets/data/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
   <script src="assets/data/plugins/datatable/js/jszip.min.js"></script>
   <script src="assets/data/plugins/datatable/pdfmake/pdfmake.min.js"></script>
   <script src="assets/data/plugins/datatable/pdfmake/vfs_fonts.js"></script>
   <script src="assets/data/plugins/datatable/js/buttons.html5.min.js"></script>
   <script src="assets/data/plugins/datatable/js/buttons.print.min.js"></script>
   <script src="assets/data/plugins/datatable/js/buttons.colVis.min.js"></script>
   <script src="assets/data/plugins/datatable/dataTables.responsive.min.js"></script>
   <script src="assets/data/plugins/datatable/responsive.bootstrap5.min.js"></script>
   <script src="assets/data/js/table-data.js"></script>
   <?php
  }
  if($page=="deshbord"){
    ?>
    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="/assets/data/plugins/wysiwyag/jquery.richtext.js"></script>
    <script type="text/javascript">
      $(function(e) {
        $('.content5').richText();
      });
    </script>
    <?php
  }
  ?>
  <!-- INTERNAL WYSIWYG Editor JS -->
  <script src="assets/data/plugins/wysiwyag/jquery.richtext.js"></script>
  <script src="assets/data/plugins/wysiwyag/wysiwyag.js"></script>

  <?php
  if($page=="Setting"){
    ?>
    <!-- Switcher js -->
    <script src="assets/data/switcher/js/switcher.js"></script>
    <?php
  }
  ?>
<!-- INTERNAL APEXCHART JS -->
<script src="assets/data/js/apexcharts.js"></script>
<script src="assets/data/plugins/apexchart/irregular-data-series.js"></script>

<!-- INTERNAL Flot JS -->
<script src="assets/data/plugins/flot/jquery.flot.js"></script>
<script src="assets/data/plugins/flot/jquery.flot.fillbetween.js"></script>
<script src="assets/data/plugins/flot/chart.flot.sampledata.js"></script>
<script src="assets/data/plugins/flot/dashboard.sampledata.js"></script>

<!-- INTERNAL Vector js -->
<script src="assets/data/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/data/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- SIDE-MENU JS-->
<script src="assets/data/plugins/sidemenu/sidemenu.js"></script>

<!-- TypeHead js -->
<script src="assets/data/plugins/bootstrap5-typehead/autocomplete.js"></script>
<script src="assets/data/js/typehead.js"></script>

<!-- INTERNAL INDEX JS -->
<script src="assets/data/js/index1.js"></script>

<!-- Color Theme js -->
<script src="assets/data/js/themeColors.js"></script>

<!-- SELECT2 JS -->
<script src="assets/data/plugins/select2/select2.full.min.js"></script>
<script src="assets/data/js/select2.js"></script>

<!-- INTERNAL Notifications js -->
<script src="assets/data/plugins/notify/js/rainbow.js"></script>
<script src="assets/data/plugins/notify/js/jquery.growl.js"></script>
<script src="assets/data/plugins/notify/js/notifIt.js"></script>

<!-- CHARTJS JS -->
<script src="assets/plugins/chart/Chart.bundle.js"></script>
<script src="assets/js/chart.js"></script>

<!-- SHOW PASSWORD JS -->
<script src="assets/data/js/show-password.min.js"></script>
<!-- CUSTOM JS -->
<script src="assets/data/js/custom.js"></script>
 <script>
 // send mail==
  function send_mail_go(mail){
     $("#emails_student3222").val(mail);
   }
 </script>
<?php
  include("snippet/footer_codeblockJs.php");
  include("snippet/footer_codeblockPhp.php");
?>
</body>

</html>
