<?php
// all functions=========
function go_to($path=""){
  echo '<script>
    window.location.href = "'.$path.'";
   </script>';
}

// MySQL validate Function
function validate($value=""){
  global $con;
  $val = mysqli_real_escape_string($con,$value);
  return $val;
}


// verification code gen
function unique_varification_code(){
  $code = rand(123456,987654);
  return $code;
}
// userid gen
function userIdGen($pre=""){
    global $con;
    $id = $pre.rand(12,98).rand(45,87);
    return $id;
}
// uplode images glovbal function===
function uplode_image($image="",$type="",$path=""){
  $image_tmp_name=$image["tmp_name"];
  $spcfiq = "";
  if($image_tmp_name!=""){
    if($type=="img"){
      if($path=="students"){
        $cus_tx_al = "students_";
        $path = "assets/images/students/";
      }elseif($path=="staffs"){
          $cus_tx_al = "staffs_";
          $path = "assets/images/staffs/";
      }elseif($path=="pdf_covers"){
          $cus_tx_al = "pdf_covers_";
          $path = "assets/images/pdf_covers/";
      }elseif($path=="site_logo"){
          $path = "assets/images/";
          $sp_new_name = "lucky_win_llc.png";
          $spcfiq = "yes";
      }elseif($path=="website"){
          $cus_tx_al = "website_";
          $path = "assets/images/website/";
      }
      if($spcfiq=="yes"){
        $new_name = $sp_new_name;
        move_uploaded_file($image_tmp_name,$path.$new_name);
      }else{
        $new_name = $cus_tx_al."_".sha1(md5(rand("11111","99999"))).".png";
        move_uploaded_file($image_tmp_name,$path.$new_name);
      }
      return $new_name;
    }elseif($type=="file"){
      $pdfName="MrKEbook_".sha1(md5(rand("11111","99999"))).".pdf";
      $path = "function/pdf/web/pdfs/";
      move_uploaded_file($image_tmp_name,$path.$pdfName);
      return $pdfName;
    }
  }
}

// password
function passwordGen($type_password=""){
  $hash = password_hash($type_password,
            PASSWORD_DEFAULT);
  return $hash;
}

// password verify
function passwordVerify($db_password="",$type_password=""){
  $verify = password_verify($type_password, $db_password);
   // Print the result depending if they match
   if ($verify==false) {
      return "fail";
   } else {
      return "work";
   }
}

// LOGOUT Function==
function logout($role=""){
  if($role=="staff" || $role=="admin"){
    unset($_SESSION["ADMIN_SECRAT_SESSION"]);
    go_to("index");
  }elseif($role=="student"){
    unset($_SESSION["STUDENT_SECRAT_SESSION"]);
    go_to("index");
  }
}

// SMTP Details========
function SMTP_DETAILS(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `host`, `email`, `password`, `port`, `date` FROM `smtp` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  return $fetch;
}

// function Site===
function SITE(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `site` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  return $fetch;
}

// function admin or stu
function check_role($email=""){
  global $con;
  $Sql = mysqli_query($con,"SELECT `id`  FROM `admin` WHERE email='$email'");
  $check = mysqli_num_rows($Sql);
 if($check>0){
   return "admin";
 }else{
   $Sql = mysqli_query($con,"SELECT `id`  FROM `student` WHERE email='$email'");
   $check = mysqli_num_rows($Sql);
   if($check>0){
     return "student";
   }else{
     return "not_find";
   }
 }
}

// student loop
function students_loop($id=""){
  global $con;
  $row =array();
  if($id!=""){
    $sql = mysqli_query($con,"SELECT * FROM `student` WHERE id='$id'");
    $row = mysqli_fetch_assoc($sql);
  }else{
    $sql = mysqli_query($con,"SELECT * FROM `student` WHERE 1");
    while ($data=mysqli_fetch_assoc($sql)) {
       $row[]=$data;
    }
  }
  return $row;
}

// sp
function pdfs_loop_sp(){
  global $con;
  $row =array();
    $sql = mysqli_query($con,"SELECT * FROM `ebook` WHERE status='active'");
    while ($data=mysqli_fetch_assoc($sql)) {
       $row[]=$data;
  }
  return $row;
}
// pdfs loop
function pdfs_loop(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `ebook` WHERE 1");
  $row = array();
  while ($data=mysqli_fetch_assoc($sql)) {
     $row[]=$data;
  }
  return $row;
}

// pdfs loop
function staff_loop(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `admin` WHERE `role`='staff'");
  $row = array();
  while ($data=mysqli_fetch_assoc($sql)) {
     $row[]=$data;
  }
  return $row;
}

// Category Loop
function category_loop(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `category` WHERE status='active'");
  $row = array();
  while ($data=mysqli_fetch_assoc($sql)) {
     $row[]=$data;
  }
  return $row;
}


// Admin data==
function admin_data($val="",$role="",$user_id=""){
  global $con;
  if($val=="total_students"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `student` WHERE 1 ");
  }elseif($val=="total_pdfs"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `ebook` WHERE 1");
  }elseif($val=="total_staffs"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `admin` WHERE `role`='staff'");
  }elseif($val=="total_category"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `category` WHERE 1");
  }elseif($val=="online_students"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `student` WHERE online_status='online'");
  }elseif($val=="today_open_book_c"){
    $date = date("d");
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `open_book_record` WHERE DAY(`date`) = '$date'");
  }
  if($role=="student"){
    if($val=="favorite_book"){
      $date = date("d");
      $sql = mysqli_query($con,"SELECT COUNT(id) as val_11 FROM `favorite_book_st` WHERE student_id='$user_id'");
    }
  }
  $check = mysqli_num_rows($sql);
  if($check>0){
    $fetch = mysqli_fetch_assoc($sql);
    $data = $fetch["val_11"];
    return $data;
  }else{
    return 0;
  }
}

function pdfs_total_storage($path=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `ebook` WHERE pdf_link_own!=''");
  $all_pdf_storage = 0;
  while ($data=mysqli_fetch_assoc($sql)){
       $pdf_link_own = $data["pdf_link_own"];
     if($path!=""){

     }else{
       $path = "function/pdf/web/pdfs/";
     }


     $pdf_file = $path.$pdf_link_own;
     $file_size = filesize($pdf_file);
     $Mb_pdf_size = ($file_size/1024)/1024;
     $Mb_pdf_size = round($Mb_pdf_size, 2);
     $all_pdf_storage = $all_pdf_storage+$Mb_pdf_size;
  }
  return $all_pdf_storage;
}

// delete file===
function delete_file($file="",$director=""){
  $delete = unlink($director . $file);
  return $delete;
}

function get_access($id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `access_staffs` WHERE id='$id'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $fetch = mysqli_fetch_assoc($sql);
    $name = $fetch["name"];
    return $name;
  }else{
    return 0;
  }
}

// notice function ==
function live_notice(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `notice_title`, `notice_body`, `date` FROM `live_notice` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  return $fetch;
}

// activity text===
function activity_admin($id=""){
  global $con;
  $fetch = array();
  if($id!=""){
    $sql = mysqli_query($con,"SELECT `activity_text`, `student_id`, `date` FROM `activity` WHERE student_id='$id'");
    $check = mysqli_num_rows($sql);
    if($check>0){
      while ($data=mysqli_fetch_assoc($sql)) {
        $fetch[] = $data;
      }
    }
  }else{
    $sql = mysqli_query($con,"SELECT `activity_text`, `student_id`, `date` FROM `activity` WHERE 1");
    while ($data=mysqli_fetch_assoc($sql)) {
      $fetch[] = $data;
    }
  }

  return $fetch;
}


function student_data($id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT *  FROM `student` WHERE id='$id'");
  $fetch = array();
  $data=mysqli_fetch_assoc($sql);

  return $data;
}

function category_name($id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT *  FROM `category` WHERE id='$id' and status='active'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $data1=mysqli_fetch_assoc($sql);
    $data = $data1["name"];
  }else{
    $data = "Not have any category";
  }
  return $data;
}

// favorite check stu
function favorite_check($book_id="",$student_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `date` FROM `favorite_book_st` WHERE `book_id`='$book_id' AND `student_id`='$student_id'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    return 1;
  }else{
    return 0;
  }
}

function favorite_loop($user_id=""){
  global $con;
  $mdata = array();
  $sql = mysqli_query($con,"SELECT favorite_book_st.book_id as book_id, ebook.* FROM `favorite_book_st`
  INNER JOIN ebook ON favorite_book_st.book_id=ebook.id
  WHERE `student_id` = '$user_id'");
  while($data=mysqli_fetch_assoc($sql)){
    $mdata[]=$data;
  }
  return $mdata;
}

function adminEmail(){
  global $con;
  $sql = mysqli_query($con,"SELECT email FROM `admin` WHERE 1");
  $data = mysqli_fetch_assoc($sql);
  $email = $data["email"];
  return $email;
}

function sp_book_details($id=''){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `ebook` WHERE id='$id'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $fetch = mysqli_fetch_assoc($sql);
    return $fetch;
  }else{
    return 0;
  }

}

function book_req_loop(){
  global $con;
  $row = array();
  $sql = mysqli_query($con,"SELECT `id`, `student_id`, `book_name`, `bok_autor`, `details`, `date` FROM `book_request` WHERE 1");
  while($data = mysqli_fetch_assoc($sql)){
    $row[]=$data;
  }
  return $row;
}

function activity_tracker($student_id="",$activity=""){
  global $con;
  global $date;
  $sql = mysqli_query($con,"INSERT INTO `activity`(`activity_text`, `student_id`, `date`) VALUES ('$student_id','$activity','$date')");
 if($sql==true){
   return "done";
 }else{
   return "fail";
 }
}
?>
