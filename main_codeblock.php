<?php
// Validation======================
if(isset($_SESSION["ADMIN_SECRAT_SESSION"])){
  $session = $_SESSION["ADMIN_SECRAT_SESSION"];
  $check_sql =  mysqli_query($con,"SELECT * FROM `admin` WHERE session_hash='$session'");
  $fetch_admin = mysqli_fetch_assoc($check_sql);
  $role = $fetch_admin["role"];
  $Email = $fetch_admin["email"];
  $frist_name = $fetch_admin["fname"];
  $profile_pic = "admin-logo.avif";
  $path = "assets/images/students/";
  if($role=="staff"){
    $profile_pic = $fetch_admin['pp_img'];
    $path = "assets/images/staffs/";
    $access = $fetch_admin["access"];
    $acc_ex = explode(",",$access);
    $acc_count = count($acc_ex);
    for ($is=0; $is < $acc_count; $is++) {
      $id_a = $acc_ex[$is];
      $get_acc_name = get_access($id_a);
      if($get_acc_name=="create_student"){
          $create_student1 = "yes";
      }
      if($get_acc_name=="edit_student"){
          $edit_student1 = "yes";
      }
      if($get_acc_name=="create_book"){
          $create_book1 = "yes";
      }
      if($get_acc_name=="edit_book"){
          $edit_book1 = "yes";
      }
      if($get_acc_name=="mail_student"){
          $mail_student1 = "yes";
      }
    }
  }
  $verify_req = mysqli_num_rows($check_sql);
  if($verify_req==0){
    go_to("index?notification=danger&msg=Session Error&title=Try Again Loged in");
  }
}elseif(isset($_SESSION["STUDENT_SECRAT_SESSION"])){
  $session = $_SESSION["STUDENT_SECRAT_SESSION"];
  $check_sql =  mysqli_query($con,"SELECT * FROM `student` WHERE session_hash='$session'");
  $role = "student";
  $verify_req = mysqli_num_rows($check_sql);
  if($verify_req>0){
    $path = "assets/images/students/";
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




// Create Student======================
if(isset($_POST["create_student"])){
    $f_name = validate($_POST["f_name"]);
    $l_name = validate($_POST["l_name"]);
    $email = validate($_POST["Email"]);
    $password = validate($_POST["password"]);
    $password = passwordGen($password);

    $programe_name = validate($_POST["programe_name"]);
    $country = validate($_POST["country"]);
    $go_to_page = $_POST["go_to_page"];

    // userid
    // profile pic===
    $prfile_pic = $_FILES["prfile_pic"];
    if($prfile_pic["name"]!=""){
      $prfile_pic = uplode_image($prfile_pic,"img","students");
    }else{
      $prfile_pic = "";
    }

    $sql = mysqli_query($con,"INSERT INTO `student`(`fname`, `lname`, `email`, `password`, `session_hash`, `verifycation_code`, `pp_img`, `programe_name`, `country`, `status`, `online_status`, `date`) VALUES (
      '$f_name',
      '$l_name',
      '$email',
      '$password',
      '',
      '',
      '$prfile_pic',
      '$programe_name',
      '$country',
      'active',
      '0',
      '$date'
    )");

    if($sql==true){
       go_to($go_to_page."?title=success&message=Student account create success&status=success");
      }else{
        go_to($go_to_page."?title=error&message=Student account create Fail&status=fail");
      }
 }

//Create Staff ============
//================================================
if(isset($_POST["create_staff001"])){
    $f_name = validate($_POST["f_name"]);
    $l_name = validate($_POST["l_name"]);
    $email = validate($_POST["Email"]);
    $password = validate($_POST["password"]);
    $password = passwordGen($password);
    $go_to_page = $_POST["go_to_page"];

    // Access

    if(isset($_POST["create_student_01"])){
        $create_student = 1;
    }else{
        $create_student = "";
    }

    if(isset($_POST["edit_student"])){
        $edit_student = 2;
    }else{
        $edit_student = "";
    }

    if(isset($_POST["create_book"])){
        $create_book = 3;
    }else{
        $create_book = "";
    }

    if(isset($_POST["edit_book"])){
        $edit_book = 4;
    }else{
        $edit_book = "";
    }

    if(isset($_POST["mail_student"])){
        $mail_student = 5;
    }else{
        $mail_student = "";
    }

    $Access = $create_student.",".$edit_student.",".$create_book.",".$edit_book.",".$mail_student;

    // profile pic===
    $prfile_pic = $_FILES["prfile_pic"];
    if($prfile_pic["name"]!=""){
      $prfile_pic = uplode_image($prfile_pic,"img","staffs");
    }else{
      $prfile_pic = "";
    }

    $sql = mysqli_query($con,"INSERT INTO `admin`( `email`, `fname`, `lname`, `password`, `session_hash`, `verifycation_code`, `pp_img`, `role`, `status`, `access`, `date`) VALUES (
      '$email',
      '$f_name',
      '$l_name',
      '$password',
      '',
      '',
      '$prfile_pic',
      'staff',
      'active',
      '$Access',
      '$date'
    )");

    if($sql==true){
       go_to($go_to_page."?title=success&message=Staff account create success&status=success");
      }else{
        go_to($go_to_page."?title=error&message=Staff account create Fail&status=fail");
      }
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




if(isset($_POST["pdf_create"])){

  $pdf_autor = validate($_POST["pdf_autor01"]);
  $pdf_title = validate($_POST["pdf_title01"]);
  $pdf_publisher = validate($_POST["pdf_publisher01"]);
  $publish_year = validate($_POST["publish_year01"]);
  $category = $_POST["category_select"];

  // uplode pdf file====
  $pdf_file =  $_FILES["pdf_file"];
  if($pdf_file['name']!=""){
      $pdf_file = uplode_image($pdf_file,"file","");
      $pdf_link = "";
   }else{
     $pdf_file="";
     $pdf_link = validate($_POST["pdf_link01"]);
   }
  // uplode logo
  $pdf_cover = $_FILES["pdf_covers01"];
   if($pdf_cover['name']!=""){
      $pdf_cover = uplode_image($pdf_cover,"img","pdf_covers");
    }else{
      $pdf_cover="";
    }
  $go_to_page = validate($_POST["go_to_page"]);

 $sql = mysqli_query($con,"INSERT INTO `ebook`( `category_id`,`autor`, `title`, `publisher`, `year`, `book_cover`, `pdf_link_own`, `pdf_link_ext`, `status`, `date`) VALUES (
   '$category',
   '$pdf_autor',
   '$pdf_title',
   '$pdf_publisher',
   '$publish_year',
   '$pdf_cover',
   '$pdf_file',
   '$pdf_link',
   'active',
   '$date'
   )");

  if($sql==true){
      go_to($go_to_page."?title=success&message=Ebook/Pdf create success&status=success");
    }else{
      go_to($go_to_page."?title=error&message=Ebook/Pdf create Fail&status=fail");
    }
  }

  // create category=
  if(isset($_POST["create_category"])){
    $category = validate($_POST["category_name"]);
    $sql = mysqli_query($con,"INSERT INTO `category`( `name`, `status`, `date`) VALUES (
      '$category',
      'active',
      '$date'
    )");
    $go_to_page = validate($_POST["go_to_page"]);
    if($sql==true){
        go_to($go_to_page."?title=success&message=category create done&status=success");
      }else{
        go_to($go_to_page."?title=error&message=category create Fail&status=fail");
      }
    }

// Update Marcent================
if(isset($_POST["update_ebook"])){
  $id = $_POST["mrc_id"];
  $f_name = validate($_POST["f_name"]);
  $l_name = validate($_POST["l_name"]);
  $Email = validate($_POST["Email"]);

  $prfile_pic = $_FILES["prfile_pic"];
  if($prfile_pic["name"]!==""){
    $pic = uplode_image($prfile_pic,"img","marcents");
    $pic_query = " `profile_pic`='$pic', ";
  }else{
    $pic_query = " ";
  }

  $mrc_password = validate($_POST["mrc_password"]);
  $address = validate($_POST["address"]);
  $commitions = validate($_POST["commitions"]);
  $phone_number = validate($_POST["phone_number"]);
  $mrc_ticketsale = validate($_POST["mrc_ticketsale"]);

  $up_sql = mysqli_query($con," ");

  if($up_sql==true){
      go_to("agents?title=update success&message=Marcent Account update &status=success");
    }else{
      go_to("agents?title=update error&message=Marcent Account update fail &status=fail");
    }
  }


  // pakages Update===============
  if(isset($_POST["student_update"])){
    $val = $_REQUEST["val"];

    $cover = $_FILES['cover'];
    if($project_logo["name"]!=""){
      $project_logo = uplode_image($project_logo,"img","pakages");
      $logo_q = " `logo`='$project_logo',";
    }else{
      $logo_q = " ";
    }

    $sql = mysqli_query($con," ");

      if($sql==true){
          go_to("pakages?title=update success&message=Pakage data update &status=success");
      }else{
          go_to("pakages?title=update error&message=Pakage data update fail &status=fail");
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


// update_student==
// Create Student======================
if(isset($_POST["update_student"])){
    $f_name = validate($_POST["f_name"]);
    $l_name = validate($_POST["l_name"]);
    $email = validate($_POST["Email"]);
    $ids = $_POST['ids'];
    $password = validate($_POST["password"]);
    if($password!=""){
      $password = passwordGen($password);
      $pass_q = " `password`='$password', ";
    }else{
      $pass_q = " ";
    }

    $programe_name = validate($_POST["programe_name"]);
    $country = validate($_POST["country"]);
    $go_to_page = $_POST["go_to_page"];

    // userid
    // profile pic===
    $prfile_pic = $_FILES["prfile_pic"];
    if($prfile_pic["name"]!=""){
      $prfile_pic = uplode_image($prfile_pic,"img","students");
      $pic_q = "`pp_img`='$prfile_pic',";
    }else{
      $pic_q = " ";
    }

    $sql = mysqli_query($con,"UPDATE `student` SET
      `fname`='$f_name',
      `lname`='$l_name',
      `email`='$email',
       $pass_q
       $pic_q
      `programe_name`='$programe_name',
      `country`='$country' WHERE id='$ids'");

    if($sql==true){
       go_to("students?title=success&message=Student account update success&status=success");
      }else{
        go_to("students?title=error&message=Student account update Fail&status=fail");
      }
 }



 // update PDF===

 if(isset($_POST["update_pdf"])){

   $pdf_autor = validate($_POST["pdf_autor01"]);
   $pdf_title = validate($_POST["pdf_title01"]);
   $pdf_publisher = validate($_POST["pdf_publisher01"]);
   $publish_year = validate($_POST["publish_year01"]);
   $category = $_POST["category_id"];
   $ids = $_POST["ids"];
   // uplode pdf file====
   $pdf_file =  $_FILES["pdf_file"];
   if($pdf_file['name']!=""){
       $pdf_file = uplode_image($pdf_file,"file","");
       $old_pdf_file = $_POST["old_pdf_file"];
       $pdf_path = "function/pdf/web/pdfs/";
       delete_file($old_pdf_file,$pdf_path);
       $pdf_link = "";
       $pdf_f_q = "`pdf_link_own`='$pdf_file',";
    }else{
      $pdf_file="";
      $pdf_link = validate($_POST["pdf_link01"]);
      $pdf_f_q = " ";
    }
   // uplode logo
   $pdf_cover = $_FILES["pdf_covers01"];
    if($pdf_cover['name']!=""){
       $pdf_cover = uplode_image($pdf_cover,"img","pdf_covers");
       $pdf_cover_q = "`book_cover`='$pdf_cover',";
     }else{
       $pdf_cover="";
       $pdf_cover_q = " ";
     }
   $go_to_page = validate($_POST["go_to_page"]);

  $sql = mysqli_query($con,"UPDATE `ebook` SET
    `category_id`='$category',
    `autor`='$pdf_autor',
    `title`='$pdf_title',
    `publisher`='$pdf_publisher',
    `year`='$publish_year',
     $pdf_cover_q
     $pdf_f_q
    `pdf_link_ext`='$pdf_link',
    `date`='$date' WHERE id='$ids'");

   if($sql==true){
       go_to("pdfs?title=success&message=Ebook/Pdf update success&status=success");
     }else{
       go_to("pdfs?title=error&message=Ebook/Pdf update Fail&status=fail");
     }
   }


// update staffs
//Create Staff ============
//================================================
if(isset($_POST["update_staff"])){
    $f_name = validate($_POST["f_name"]);
    $l_name = validate($_POST["l_name"]);
    $email = validate($_POST["Email"]);
    $ids = $_POST["ids"];

    if($_POST["password"]!=""){
     $password = validate($_POST["password"]);
     $password = passwordGen($password);
      $pass_q = "`password`='$password',";
   }else{
     $pass_q = "";
   }

    if(isset($_POST["create_student_01"])){
        $create_student = "1,";
    }else{
        $create_student = "";
    }

    if(isset($_POST["edit_student"])){
        $edit_student = "2,";
    }else{
        $edit_student = "";
    }

    if(isset($_POST["create_book"])){
        $create_book = "3,";
    }else{
        $create_book = "";
    }

    if(isset($_POST["edit_book"])){
        $edit_book = "4,";
    }else{
        $edit_book = "";
    }

    if(isset($_POST["mail_student"])){
        $mail_student = "5,";
    }else{
        $mail_student = "";
    }

    $Access = $create_student.$edit_student.$create_book.$edit_book.$mail_student;

    // profile pic===
    $prfile_pic = $_FILES["prfile_pic"];
    if($prfile_pic["name"]!=""){
      $prfile_pic = uplode_image($prfile_pic,"img","staffs");
      $profile_q = "`pp_img`='$prfile_pic',";
    }else{
      $prfile_pic = "";
      $profile_q = "";
    }

    $sql = mysqli_query($con,"UPDATE `admin` SET
      `email`='$email',
      `fname`='$f_name',
      `lname`='$l_name',
       $pass_q
       $profile_q
      `access`='$Access',
      `date`='$date' WHERE id='$ids'");

    if($sql==true){
       go_to("staffs?title=success&message=Staff account update success&status=success");
      }else{
        go_to("staffs?title=error&message=Staff account update Fail&status=fail");
      }
 }

 // update Category
 if(isset($_POST["update_category"])){
   $category = validate($_POST["category_name"]);
   $ids = $_POST["ids"];
   $sql = mysqli_query($con,"UPDATE `category` SET `name`='$category',`date`='$date' WHERE id='$ids'");
   if($sql==true){
       go_to("category?title=success&message=category update done&status=success");
     }else{
       go_to("category?title=error&message=category update Fail&status=fail");
     }
   }

// smtp update==
if(isset($_POST["update_smtp"])){
  $smtp_host = $_POST["smtp_host"];
  $smtp_port = $_POST["smtp_port"];
  $smtp_email = $_POST["smtp_email"];
  $smtp_pass = $_POST["smtp_pass"];

  $sql = mysqli_query($con,"UPDATE `smtp` SET `host`='$smtp_host',`email`='$smtp_email',`password`='$smtp_pass',`port`='$smtp_port' WHERE id='1'");

  if($sql==true){
      go_to("deshbord?title=success&message=SMTP update done&status=success");
    }else{
      go_to("deshbord?title=error&message=SMTP update Fail&status=fail");
    }
}


// notice update==
if(isset($_POST["update_notice"])){
  $notice_title = $_POST["notice_title"];
  $notice_body = $_POST["notice_body"];
  $sql = mysqli_query($con,"UPDATE `live_notice` SET `notice_title`='$notice_title',`notice_body`='$notice_body',`date`='$date' WHERE 1");
  if($sql==true){
      go_to("deshbord?title=success&message=Notice update done&status=success");
    }else{
      go_to("deshbord?title=error&message=Notice update Fail&status=fail");
    }
}

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
        // track activity
        activity_tracker($user_id,"update profile success");
      }else{
        // track activity
        activity_tracker($user_id,"update profile fail");
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
    // track activity
     activity_tracker($user_id,"password changed");
     go_to("profile?title=success&message=Password update done&status=success");
   }else{
     // track activity
     activity_tracker($user_id,"password change fail");
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
       // track activity
       activity_tracker($user_id,"Create book request success");
       go_to($go_to_page."?title=success&message=Book Request Accept&status=success");
     }else{
       // track activity
       activity_tracker($user_id,"Create book request fail");
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
