<?php
$end_point = explode("/",$_SERVER["SCRIPT_NAME"]);
$length =  count($end_point);
for ($i=0; $i <$length  ; $i++) {
   $end_path = $end_point[$i];
}
if($end_path=="deshbord.php"){
  $page = "deshbord";
}elseif($end_path=="students.php"){
  $page = "students";
}elseif($end_path=="staffs.php"){
  $page = "staffs";
}elseif($end_path=="pdfs.php"){
  $page = "pdfs";
}elseif($end_path=="category.php"){
  $page = "category";
}elseif($end_path=="setting.php"){
  $page = "setting";
}elseif($end_path=="activity.php"){
  $page = "activity";
}elseif($end_path=="profile.php"){
  $page = "profile";
}elseif($end_path=="favorite.php"){
  $page = "favorite";
}elseif($end_path=="book_details.php"){
  $page = "book_details";
}elseif($end_path=="book_request.php"){
  $page = "book_request";
}
