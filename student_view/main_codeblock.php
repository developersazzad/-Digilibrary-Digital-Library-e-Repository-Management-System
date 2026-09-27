<?php
// Validation======================
if(isset($_SESSION["STUDENT_VIEW_SECRAT_SESSION"])){
  $session_is = $_SESSION["STUDENT_VIEW_SECRAT_SESSION"];
  // session - DEMOH565757JJK
  $check_sql =  mysqli_query($con,"SELECT * FROM `student` WHERE session_hash='$session_is'");
  $role = "student";
  $verify_req = mysqli_num_rows($check_sql);
  if($verify_req>0){
    $path = "../assets/images/students/";
    $fetch = mysqli_fetch_assoc($check_sql);
    $user_id = $fetch["id"];
    $frist_name = $fetch["fname"];
    $last_name = $fetch["lname"];
    $email = $fetch["email"];
    $profile_pic = $fetch["pp_img"];
    $full_name = $frist_name." ".$last_name;
    $status = $fetch["status"];
    $programe_name = $fetch["programe_name"];
    $country = $fetch["country"];
  }else{
    go_to("index?notification=danger&msg=Session Error&title=Try Again Loged in");
  }
}else{
  go_to("index?notification=danger&msg=Session Expierd!&title=Try Again");
}




// Send Mail Student===
if(isset($_POST["Send_mail_stu"])){
  $email_sub = $_POST["email_subject9"];
  $email_body = $_POST["email_body9"];
  $go_to_page = $_POST["go_to_page"];
  if($role=="student"){
    $email = adminEmail();
  }else{
    $email = $_POST["email_stu9"];
  }
  $send_mail = message_from_student($email,$email_sub,$email_body);
  if($send_mail=="done"){
      go_to($go_to_page."?title=success&message=Mail Send Success&status=success");
  }else{
      go_to($go_to_page."?title=error&message=Mail Send Fail&status=fail");
  }
}




 // Get & Set Filter Data======
  if(isset($_GET["filter_data_home_p"])){
    $from = $_GET["from"];
    $to = $_GET["to"];
    $_SESSION["d_form"] = $from;
    $_SESSION["d_to"] = $to;
  }else{
    if(isset($_SESSION['d_form']) && isset($_SESSION['d_to'])){
      $from = $_SESSION["d_form"];
      $to = $_SESSION["d_to"];
    }else{
      $from = date("Y-m-d");
      $to = date("Y-m-d");
    }
  }

// site data update===
if(isset($_POST["site_data"])){
    $site_title = $_POST["site_title"];
    $site_link = $_POST["site_link"];
    $site_email = $_POST["site_email"];
    $site_phone = $_POST["site_phone"];
    $site_info = $_POST["site_info"];

    $site_logo = $_FILES["site_logo"];
    if($site_logo["name"] !=""){
      $site_logo =  uplode_image($site_logo,"img","site_logo");
    }

    $sql_up = mysqli_query($con,"UPDATE `site` SET
      `site_title`='$site_title',
      `site_link`='$site_link',
      `site_text_info`='$site_info',
      `site_email`='$site_email',
      `site_call`='$site_phone',
      `date`='$date'
      WHERE 1");

      if($sql_up==true){
        go_to("index?title=Success&message=update done site data &status=success");
      }else{
        go_to("index?title=Error&message=site data update fail&status=fail");
      }
}

// Website Data=====
if(isset($_POST["header_web_data_save"])){
 $sm_t1 = validate($_POST["sm_t1"]);

 $hero_pic1 = $_FILES["hero_pic1"];
 if($hero_pic1['name'] !=""){
   $hero_pic1 = uplode_image($hero_pic1,"img","website");
   $query_pic = " `hd_hero_pic`='$hero_pic1', ";
 }else{
   $query_pic = " ";
 }

 $sql = mysqli_query($con," ");

    if($sql==true){
      go_to("website?title=Success&message=Website data update done &status=success");
    }else{
      go_to("website?title=Error&message=website data update fail&status=fail");
    }
}
 // update profile
if(isset($_POST["update_profile"])){
    $frist_name = $_POST["frist_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $ids = $user_id;
    $prfile_pic = $_FILES["profile_pic"];
    if($prfile_pic["name"]!=""){
      $prfile_pic = uplode_image($prfile_pic,"img","students");
      $profile_q = "`pp_img`='$prfile_pic',";
    }else{
      $profile_q = "";
    }
    $programe_name = $_POST["programe_name"];
    $country = $_POST["country"];
    $sql = mysqli_query($con,"UPDATE `student` SET
      `fname`='$frist_name',
      `lname`='$last_name',
      `email`='$email',
      $profile_q
      `programe_name`='$programe_name',
      `country`='$country',
      `date`='$date'
      WHERE id='$ids'");
      if($sql==true){
        go_to("profile?title=success&message=profile update done&status=success");
      }else{
        go_to("profile?title=error&message=profile update Fail&status=fail");
      }
  }

// password change option
if(isset($_POST["change_pas_bt"])){
  $new_password = $_POST["new_password"];
  $new_password1 = $_POST["new_password1"];
  if($new_password==$new_password1){
   $password = passwordGen($new_password);
   $ids = $user_id;
   $sql = mysqli_query($con,"UPDATE `student` SET `password`='$password',`date`='$date' WHERE id='$ids'");
  if($sql==true){
     go_to("profile?title=success&message=Password update done&status=success");
   }else{
     go_to("profile?title=error&message=Password update Fail&status=fail");
   }
  }else{
    go_to("profile?title=error&message=Your 2 Password is't same&status=fail");
  }
}

if(isset($_POST["book_request"])){
    $book_name = $_POST["book_name"];
    $book_autor = $_POST["book_autor"];
    $details = $_POST["details"];
    $go_to_page = $_POST["go_to_page"];
    $sql = mysqli_query($con,"INSERT INTO `book_request`( `student_id`, `book_name`, `bok_autor`, `details`, `date`) VALUES ('$user_id','$book_name','$book_autor','$details','$date')");

    if($sql==true){
       go_to($go_to_page."?title=success&message=Book Request Accept&status=success");
     }else{
       go_to($go_to_page."?title=error&message=Book Request Send Fail&status=fail");
     }
}


// status and delete
// Delete any==
if(isset($_GET["status_catch"])){
  $status = $_GET["status_catch"];
  $er_is = "";
  if(isset($_GET["work"])){
    $work = $_GET["work"];
  }else{
    $er_is = "yes";
  }

  if(isset($_GET["id"])){
    $id = $_GET["id"];
  }else{
    $er_is = "yes";
  }

  if($status=="staffs"){
    $table = "admin";
    $g_page = "staffs";
  }elseif($status=="pdfs"){
    $table = "ebook";
    $g_page = "pdfs";
  }elseif($status=="student"){
    $table = "student";
    $g_page = "students";
  }
  if($er_is!="yes"){
    $sql = mysqli_query($con,"UPDATE $table SET `status`='$work' WHERE id='$id'");

    if($sql==true){
       go_to($g_page."?title=success&message=status update success&status=success");
     }else{
       go_to($g_page."?title=error&message=status update Fail&status=fail");
     }
  }
}

if(isset($_GET["delete"])){
  $delete = $_GET["delete"];
  $err_is = "";
  if(isset($_GET["id"])){
      $id = $_GET["id"];
  }else{
    $err_is = "yes";
  }
  if($delete=="book_request"){
    $table = "book_request";
    $g_page = "book_request";
  }elseif($delete=="students"){
    $table = "students";
    $g_page = "students";
  }elseif($delete=="staffs"){
    $table = "admin";
    $g_page = "staffs";
  }elseif($delete=="pdfs"){
    $table = "ebook";
    $g_page = "pdfs";
  }
  if($err_is!="yes"){
    $sql = mysqli_query($con,"DELETE FROM $table WHERE id='$id'");
    if($sql==true){
      go_to($g_page."?title=success&message=$table Delete success&status=success");
    }else{
      go_to($g_page."?title=Fail&message=$table Delete fail&status=success");
    }
  }
}

 ?>
