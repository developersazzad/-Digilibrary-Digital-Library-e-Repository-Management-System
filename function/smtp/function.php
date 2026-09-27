<?php
//====================
//====Server Age============
function server_time_status($server_use=""){
  if($server_use==0){
    $limit = 50;
  }elseif($server_use==1){
    $limit = 100;
  }elseif($server_use==2){
    $limit = 200;
  }elseif($server_use==3){
    $limit = 250;
  }elseif($server_use==4){
    $limit = 500;
  }elseif($server_use==5){
    $limit = 500;
  }elseif($server_use==6){
    $limit = 1000;
  }elseif($server_use==7){
    $limit = 1000;
  }elseif($server_use==8){
    $limit = 1000;
  }elseif($server_use==9){
    $limit = 5000;
  }elseif($server_use==9){
    $limit = 8000;
  }else{
    $limit = 9000;
  }
  return $limit;
}
// unique group name==
function unique_group_name($group_name=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `group_name`, `date` FROM `group_email_name` WHERE group_name='$group_name'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $group_name = "BZM".rand(11111,99999)."Zm".rand(98765,12345);
  }
  return $group_name;
}
//================================
//======Uplode Images========
// uplode images glovbal function===
function uplode_image($image="",$type="",$path=""){
  $image_tmp_name=$image["tmp_name"];
  if($image_tmp_name!=""){
    if($type=="img"){
      if($path=="business"){
        $custom_text_all = "business";
        $path = "./assets/images/business/";
      }elseif($path=="admin"){
          $custom_text_all = "admin";
          $path = "./assets/images/admin_profile/";
      }elseif($path=="template_p_i"){
          $custom_text_all = "ecom1";
          $path = "./assets/images/premade_template/";
      }
      $new_name = "BZ_".$custom_text_all."_".sha1(md5(rand("11111","99999"))).".png";
      move_uploaded_file($image_tmp_name,$path.$new_name);
      return $new_name;
    }elseif($type=="file"){
      $image_name="GM_".sha1(md5(rand("11111","99999"))).".pdf";
      $path = "../assets/images/iNvestorDocs/";
      move_uploaded_file($image_tmp_name,$path.$image_name);
      return $image_name;
    }
  }
}

//======
//=====Main Admin====
//===
function main_admin(){
 global $con;

}

//====
//=====All Admin====
//==
function all_admin(){
 global $con;
 $sql = mysqli_query($con,"SELECT * FROM `admin` WHERE status != 'superAdmin'");
 $data = array();
 while($row = mysqli_fetch_assoc($sql)){
   $data[] = $row;
 }
 return $data;
}
//========
//===All Business use for only Supera admin========
//==================
function all_business(){
 global $con;
 $sql = mysqli_query($con,"SELECT * FROM `besiness` WHERE 1");
 $data = array();
 while($row = mysqli_fetch_assoc($sql)){
   $data[] = $row;
 }
 return $data;
}
//=======
//=======all server====
//===
function all_server(){
  global $con;
  $sql = mysqli_query($con,"SELECT server.*,server.id as SERVER_id, server.server_use as Server_used FROM `server` WHERE 1");
  $data = array();
  while($row = mysqli_fetch_assoc($sql)){
    $data[] = $row;
  }
  return $data;
}

//=======Server By Business====
//===
function server_by_business($business_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT business_by_server.`server_id` as SERVER_id,server.*, server.server_use as Server_used FROM `business_by_server` INNER JOIN server ON business_by_server.server_id = server.id WHERE business_by_server.business_id = '$business_id'");
  $data = array();
  while($row = mysqli_fetch_assoc($sql)){
    $data[] = $row;
  }
  return $data;
}

//sp server
function only_server_details($serer_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `name`, `host`, `port`, `user_name`, `email`, `password`, `status`, `switch`, `server_use`, `date` FROM `server` WHERE id='$serer_id'");
  $data = mysqli_fetch_assoc($sql);
  return $data;
}
//========
//======all email====
//==
function all_emails_data($business=""){
  global $con;
  if($business=="superAdmin"){
       $query = " 1";
  }else{
      $query = " email_list.business_id='$business'";
   }
  $sql = mysqli_query($con,"SELECT email_list.*,open_email_date.date_only,
   open_email_date.time_only,group_email_name.group_name FROM `email_list`
   INNER JOIN open_email_date ON open_email_date.email_id = email_list.id
   INNER JOIN group_email_name ON email_list.group_id = group_email_name.id
   WHERE $query");
  $data = array();
  while($row = mysqli_fetch_assoc($sql)){
    $data[] = $row;
  }
  return $data;
}

// validate email====
function find_in_validate($email=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `admin` WHERE email =  '$email'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    return "valid";
  }else{
    return "invalid";
  }
}
// Unique code======
function unique_varification_code($code=""){
 global $con;
 $sql = mysqli_query($con,"SELECT `id` FROM `admin` WHERE verify_code='$code'");
 $check = mysqli_num_rows($sql);
 if($check>0){
   $varification = "BZ".rand(112233,778899);
   return $varification;
 }else{
   return $code;
 }
}
// Unique code======
function unique_code_for_login($code=""){
 global $con;
 $sql = mysqli_query($con,"SELECT `id`, `email`, `valid_token`, `date` FROM `login_activity_track` WHERE valid_token='$code'");
 $check = mysqli_num_rows($sql);
 if($check>0){
   $varification = "BZ".rand(112233,778899);
   return $varification;
 }else{
   return $code;
 }
}

// Business Name=================
function business_data($admin_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT business_admin.*,besiness.business_name,besiness.logo FROM `business_admin`
  INNER JOIN besiness ON business_admin.business_id = besiness.id
  WHERE business_admin.admin_id = '$admin_id'");
  $data = array();
  while($row = mysqli_fetch_assoc($sql)){
    $data[] = $row;
  }
  return $data;
}

// Business by bserver count===
function besiness_by_count($business_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT COUNT(id) as server_count FROM `business_by_server` WHERE business_id='$business_id'");
  $fetch = mysqli_fetch_assoc($sql);
  $count  = $fetch["server_count"];
  return $count;
}
// Business admin==================
function admin_business($business_id){
  global $con;
  $sql = mysqli_query($con,"SELECT business_admin.admin_id,admin.frist_name as AdminName FROM `business_admin` INNER JOIN admin  ON business_admin.admin_id=admin.id
  WHERE business_admin.business_id='$business_id'");
  $data = array();
  while($row=mysqli_fetch_assoc($sql)){
    $data[] = $row;
  }
  return $data;
}

// user based all business============
function userAll_business($admin_id=""){
  global $con;
  if(isset($_SESSION["STATUS_ADMIN_9"])){
    if($_SESSION["STATUS_ADMIN_9"] =="superAdmin"){
        $sql = mysqli_query($con,"SELECT business_admin.business_id,business_admin.admin_id,besiness.logo,besiness.id as ID,besiness.business_name,besiness.id as business_id,besiness.status FROM `business_admin` INNER JOIN besiness ON business_admin.business_id = besiness.id WHERE 1");
    }else{
        $sql = mysqli_query($con,"SELECT business_admin.business_id,business_admin.admin_id,besiness.logo,besiness.id as ID,besiness.business_name,besiness.id as business_id,besiness.status FROM `business_admin` INNER JOIN besiness ON business_admin.business_id = besiness.id WHERE business_admin.admin_id = '$admin_id'");
   }
  }
  $data = array();
  while($row=mysqli_fetch_assoc($sql)){
    $data[] = $row;
  }
  return $data;
}

// custom made template fetch===========
function customMadeTemplate($business_id="",$admin_id=""){
  global $con;
  $row = array();
  $sql = "SELECT `id`,`main_name`, `business_id`, `admin_id`, `template_name`, DATE(`date`) as D_date FROM `custom_made_template` WHERE ";
  if($business_id!=""){
     $sql .=" business_id='$business_id' AND admin_id='$admin_id'";
  }else{
    $sql .=" admin_id='$admin_id'";
  }
  $sql_is = mysqli_query($con,$sql);
  while($data=mysqli_fetch_assoc($sql_is)){
    $row[] = $data;
  }
  return $row;
}
// Custom Made Template============
//======================================================
//====================================================
// CALCULATE ALL EMAIL HOME DATA AVG================
function OpenRate_Now(){
  global $con;
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE open='Yes'");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE 1");
 if(mysqli_num_rows($sql_total)>0){
    $sql_total = mysqli_fetch_assoc($sql_total);
    $sql_total = $sql_total["All_is"];

    if($sql_total!=0){
     $OPEN_RATE = ($sql_count*100)/$sql_total;
     return $OPEN_RATE;
  }else{
    return 0;
  }
 }
}
function OpenRate_LastWeek(){
  global $con;
  $p_date = date("Y-m-d");
  $old_date = date('Y-M-d', strtotime($p_date. " -6 days"));
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE open='Yes' AND date BETWEEN '$old_date' AND '$p_date'");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE date BETWEEN '$old_date' AND '$p_date'");
  $sql_total = mysqli_fetch_assoc($sql_total);
  $sql_total = $sql_total["All_is"];
  if($sql_total!=0){
  $OPEN_RATE = ($sql_count*100)/$sql_total;
  return $OPEN_RATE;
}else{
  return 0;
}
}
function OpenRate_LastMonth(){
  global $con;
  $p_date = date("Y-m-d");
  $old_date = date('Y-M-d', strtotime($p_date. " -29 days"));
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE open='Yes' AND date BETWEEN '$old_date' AND '$p_date'");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE date BETWEEN '$old_date' AND '$p_date'");
  $sql_total = mysqli_fetch_assoc($sql_total);
  $sql_total = $sql_total["All_is"];
  if($sql_total!=0){
  $OPEN_RATE = ($sql_count*100)/$sql_total;
  return $OPEN_RATE;
}else{
  return 0;
}
}
//==============================================
//====================================
//====================================
// CALCULATE ALL EMAIL HOME CLICK RATE==========
function ClickRate_Now(){
  global $con;
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE click!=0");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE 1");
  $sql_total = mysqli_fetch_assoc($sql_total);
  $sql_total = $sql_total["All_is"];
 if($sql_total!=0){
  $CLICK_RATE = ($sql_count*100)/$sql_total;
  return $CLICK_RATE;
}else{
  return 0;
}
}
function ClickRate_LastWeek(){
  global $con;
  $p_date = date("Y-m-d");
  $old_date = date('Y-M-d', strtotime($p_date. " -6 days"));
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE click!=0 AND date BETWEEN '$old_date' AND '$p_date'");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE date BETWEEN '$old_date' AND '$p_date'");
  $sql_total = mysqli_fetch_assoc($sql_total);
  $sql_total = $sql_total["All_is"];
   if($sql_total!=0){
  $CLICK_RATE = ($sql_count*100)/$sql_total;
  return $CLICK_RATE;
}else{
  return 0;
 }
}
function ClickRate_LastMonth(){
  global $con;
  $p_date = date("Y-m-d");
  $old_date = date('Y-M-d', strtotime($p_date. " -29 days"));
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE click!=0 AND date BETWEEN '$old_date' AND '$p_date'");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE date BETWEEN '$old_date' AND '$p_date'");
  $sql_total = mysqli_fetch_assoc($sql_total);
  $sql_total = $sql_total["All_is"];
   if($sql_total!=0){
  $CLICK_RATE = ($sql_count*100)/$sql_total;
  return $CLICK_RATE;
}else{
  return 0;
}
}
//==============================================
//====================================
//====================================
// CALCULATE ALL EMAIL BOUNCH RATE==========
function BounchRate_Now(){
  global $con;
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE send='NO'");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE 1");
  $sql_total = mysqli_fetch_assoc($sql_total);
  $sql_total = $sql_total["All_is"];
 if($sql_total!=0){
  $BOUNCH_RATE = ($sql_count*100)/$sql_total;
  return $BOUNCH_RATE;
}else{
  return 0;
}
}
function BounchRate_LastWeek(){
  global $con;
  $p_date = date("Y-m-d");
  $old_date = date('Y-M-d', strtotime($p_date. " -6 days"));
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE send='NO' AND date BETWEEN '$old_date' AND '$p_date'");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE date BETWEEN '$old_date' AND '$p_date'");
  $sql_total = mysqli_fetch_assoc($sql_total);
  $sql_total = $sql_total["All_is"];
 if($sql_total!=0){
  $BOUNCH_RATE = ($sql_count*100)/$sql_total;
  return $BOUNCH_RATE;
}else{
  return 0;
}
}
function BounchRate_LastMonth(){
  global $con;
  $p_date = date("Y-m-d");
  $old_date = date('Y-M-d', strtotime($p_date. " -29 days"));
  $sql_count = mysqli_query($con,"SELECT COUNT(`id`) as openIs FROM `email_list` WHERE send='NO' AND date BETWEEN '$old_date' AND '$p_date'");
  $sql_count = mysqli_fetch_assoc($sql_count);
  $sql_count = $sql_count["openIs"];
  $sql_total  = mysqli_query($con,"SELECT COUNT(`id`) as All_is FROM `email_list` WHERE date BETWEEN '$old_date' AND '$p_date'");
  $sql_total = mysqli_fetch_assoc($sql_total);
  $sql_total = $sql_total["All_is"];
if($sql_total!=0){
  $BOUNCH_RATE = ($sql_count*100)/$sql_total;
  return $BOUNCH_RATE;
 }else{
   return 0;
 }
}
function GroupName($business_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `group_email_name` WHERE business_idGroup='$business_id'");
  $data = array();
  while($row=mysqli_fetch_assoc($sql)){
    $data[]=$row;
  }
 return $data;
}
 ?>
