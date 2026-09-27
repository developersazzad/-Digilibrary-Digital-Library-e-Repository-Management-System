<?php
$title = " ";
$logo = "logo.png";
$logo_main = "logo.png";
$logo_sub = "logo-3.png";
$date = date("Y-m-d h:i:s");
$date_sp = date("Y-m-d");
$date_time = date("h:i:s");
$domain = $_SERVER["SERVER_NAME"];
// function========
$siteName = "Stuff Manage";
// get admin email
$Admin_data = mysqli_fetch_assoc(mysqli_query($con,"select * from admin where 1"));
$Admin_email = $Admin_data['email'];
// tamplates=======
$modal = "tamplates/modal.php";
$admin_data = "tamplates/admin_data.php";
$buttons = "tamplates/button_group.php";
$accordion = "tamplates/accordian.php";
$canvas = "tamplates/canvas.php";
$notification = "tamplates/notification.php";
$footer = "footer.php";
$logout_link = "log_out.php";
// links
$home_link = "index";
$deshbord  = "deshbord";
$all_students = "students";
$all_staffs = "staffs";
$all_pdfs = "pdfs";
$category = "category";
$setting_link = "setting";
$activity = "activity";
$profile = "profile";
$favorite = "favorite";
$book_details = "book_details";
$book_request = "book_request";

// functions
// $agents_loop  = all_agents_get();
// $pakages_loop = all_pakages_get();
// $ticket_loop  = all_ticket_get();
// $banner_loop  = all_banner_get();
// js function===

 ?>
