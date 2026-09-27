<?php
// error show code========
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
// session========
  session_save_path("/opt/alt/php74/var/lib/php/session");
  session_start();
// timezone========
  date_default_timezone_set("Asia/Dhaka");
  $host = "localhost";
  $username = "lavishco_degi_liberray";
  $password = "SjncyjP((aN^";
  $database = "lavishco_degi_liberray";
  $logo_url = "https://digilibrary.gibsbd.org/assets/data/images/brand/logo.png";
  $create_student1 = "";
  $edit_student1 = "";
  $create_book1 = "";
  $edit_book1 = "";
  $mail_student1 = "";
$con = mysqli_connect($host,$username,$password,$database);
if(!$con){
  echo "connection False!";
}
 
?>
