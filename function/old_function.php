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
      if($path=="pakages"){
        $custom_text_all = "pakages_logo_";
        $path = "assets/images/pakages/";
      }elseif($path=="banners"){
          $custom_text_all = "banner_";
          $path = "assets/images/banners/";
      }elseif($path=="marcents"){
          $custom_text_all = "marcent_";
          $path = "assets/images/marcents/";
      }elseif($path=="icon"){
          $custom_text_all = "icon_";
          $path = "assets/images/icon/";
      }elseif($path=="marcents_docs"){
          $custom_text_all = "marcent_docs_";
          $path = "assets/images/marcents_docs/";
      }elseif($path=="site_logo"){
          $path = "assets/images/";
          $sp_new_name = "lucky_win_llc.png";
          $spcfiq = "yes";
      }elseif($path=="website"){
          $custom_text_all = "website_";
          $path = "assets/images/website/";
      }
      if($spcfiq=="yes"){
        $new_name = $sp_new_name;
        move_uploaded_file($image_tmp_name,$path.$new_name);
      }else{
        $new_name = $custom_text_all."_".sha1(md5(rand("11111","99999"))).".png";
        move_uploaded_file($image_tmp_name,$path.$new_name);
      }

      return $new_name;
    }elseif($type=="file"){
      $image_name="GM_".sha1(md5(rand("11111","99999"))).".pdf";
      $path = "assets/images/iNvestorDocs/";
      move_uploaded_file($image_tmp_name,$path.$image_name);
      return $image_name;
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

// all withdrow request get====
function withdrow_request_get(){
  global $con;
  $row = array();
  $sql = mysqli_query($con,"SELECT `balance_data`.*,`marcents`.`fname`, `marcents`.`lname`,
  `marcents`.`phone`,`marcents`.`profile_pic` FROM `balance_data`
   INNER JOIN marcents ON
   marcents.id=balance_data.`marcent_id` WHERE 1");
   while ($data = mysqli_fetch_assoc($sql)){
     // code...
     $row[] = $data;
   }
   return $row;
}

// function from data Get =====
// All Agents ====
function all_agents_get($id=""){
  global $con;
  if($id!=""){
    $sql = mysqli_query($con,"SELECT * FROM `marcents` WHERE id = '$id'");
    $row = array();
    $fetch = mysqli_fetch_assoc($sql);
    return $fetch;
  }else{
    $sql = mysqli_query($con,"SELECT * FROM `marcents` ORDER BY `id` DESC");
    $row = array();
    while ($data = mysqli_fetch_assoc($sql)){
      // code...
      $row[] = $data;
    }
    return $row;
  }
}

// Best Result====

function Best_result_ticket($from="",$to=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`,`ticket_number`,`pakage_id`, COUNT(`ticket_number`) as count_value
  FROM tickets WHERE
  DATE(tickets.`purchased_date`) BETWEEN '$from' AND '$to'
  GROUP BY `ticket_number` HAVING COUNT(`ticket_number`) > 1 ");
  $row = array();
  while ($fetch=mysqli_fetch_assoc($sql)) {
    // code...
    $row[] = $fetch;
  }
  return $row;
}

// All pakages====
function all_pakages_get(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `pakages` ORDER BY `id` DESC");
  $row = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    // code...
    $row[] = $data;
  }
  return $row;
}

// LOGOUT Function==
function logout(){
  unset($_SESSION["ADMIN_SECRAT_SESSION"]);
   go_to("index");
}

// All Ticket====
function all_ticket_get(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `tickets`  ORDER BY `id` DESC");
  $row = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    // code...
    $row[] = $data;
  }
  return $row;
}

// all banner ==========
function all_banner_get(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `home_banner` ORDER BY `id` DESC");
  $row = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    // code...
    $row[] = $data;
  }
  return $row;
}

function sp_pakage($val="",$id=""){
 global $con;
 $sql = mysqli_query($con,"SELECT `name`, `logo`, `num_limit`, `price`, `status`, `end_date`, `date`, `result_next_num_days`, `time_day` FROM `pakages` WHERE id='$id'");
 $check = mysqli_num_rows($sql);
 if($check>0){
   $fetch = mysqli_fetch_assoc($sql);
   $data = $fetch[$val];
 }else{
   $data="";
 }

 return $data;
}

function sp_marcent($val="",$id="",$token=""){
  global $con;
  if($token!=""){
    $query = "token_hash='$token'";
  }else{
    $query = "id='$id'";
  }
  $sql = mysqli_query($con,"SELECT * FROM `marcents` WHERE $query");
  $fetch = mysqli_fetch_assoc($sql);
  $data = $fetch[$val];
  return $data;
}


// SMTP Details========
function SMTP_DETAILS(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `host`, `email`, `password`, `port`, `date` FROM `smtp` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  return $fetch;
}

// Segment Get by pakage id===
function Get_segment($pakage_id=''){
  global $con;
  $sql = mysqli_query($con,"SELECT `id` as Segm_data, `pakage_id`, `name`, `profit`, `ammount`, `status`, `date` FROM `segment` WHERE pakage_id='$pakage_id'");
  $row = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    // code...
    $row[] = $data;
  }
  return $row;
}

// Ticket live===
function ticket_live($seg_neme="",$pakage_id="",$from="",$to=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `tickets` WHERE
  `pakage_id`='$pakage_id' AND
   `segment_name` = '$seg_neme' AND
   DATE(purchased_date) BETWEEN '$from' AND '$to'");
  $row = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    // code...
    $row[] = $data;
  }
  return $row;

}
// pakage end date Cal===

function pakage_end_dateCAL($end_date=""){
  $timesPr = strtotime(date("Y-m-d h:i:s"));
  $timesDb = strtotime($end_date);
  if($timesDb>$timesPr){
     $Main_time = $timesDb - $timesPr;
   }else{
     $Main_time = 0;
   }
   return $Main_time;
}

function live_pakages(){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`, `name`, `logo`, `num_limit`, `price`, `end_date`, `date`, `result_next_num_days`, `time_day` FROM `pakages` WHERE status='active'");
  $data = array();
  while ($row = mysqli_fetch_assoc($sql)) {
    $data[] = $row;
  }
  return $data;
}

function layerOne(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `layerone` WHERE 1");
  $data = array();
  while ($row = mysqli_fetch_assoc($sql)) {
    $data[] = $row;
  }
  return $data;
}

// Admin data==
function admin_data($val=""){
  global $con;
  if($val=="total_ticket"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `tickets` WHERE 1 ");
  }elseif($val=="active_ticket"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `tickets` WHERE `status`='active'");
  }elseif($val=="total_sale"){
    $sql = mysqli_query($con,"SELECT SUM(price) AS val_11 FROM `tickets` WHERE 1");
  }elseif($val=="total_agents"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `marcents` WHERE 1");
  }elseif($val=="total_win"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `winTicket` WHERE 1");
  }elseif($val=="live_pakage"){
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `pakages` WHERE  `status`='active'");
  }elseif($val=="today_ticket_sale"){
    $date = date("d");
    $sql = mysqli_query($con,"SELECT COUNT(`id`) AS val_11 FROM `tickets` WHERE DAY(`date`) = '$date'");
  }
  $fetch = mysqli_fetch_assoc($sql);
  $data = $fetch["val_11"];
  return $data;
}

function winner_list(){
  global $con;
  $row = array();
  $sql = mysqli_query($con,"SELECT `id`, `pakage_id`, `win_ticket_number`, `win_date`, `status`, `date` FROM `winTicket` WHERE 1");
  while ($fetch = mysqli_fetch_assoc($sql)) {
    $row[]=$fetch;
  }
  return $row;
}

function winner_list_cron(){
  global $con;
  $row = array();
  $sql = mysqli_query($con,"SELECT * FROM `winTicket` WHERE status='active'");
  while ($fetch = mysqli_fetch_assoc($sql)) {
    $row[]=$fetch;
  }
  return $row;
}

function winner_ac_check($pakage_id="",$win_date=""){
  global $con;
  $windate = date("Y-m-d",strtotime($win_date));
  $sql = mysqli_query($con,"SELECT COUNT(id) as c_note FROM `winTicket` WHERE pakage_id='$pakage_id' AND DATE(win_date)='$windate'");
  $check = mysqli_fetch_assoc($sql);
  $check = $check["c_note"];
  if($check>0){
    return 1;
  }else{
    return 0;
  }
}

function segment_ammount($segm_id="",$pakage_id="",$name=""){
  global $con;
  if($segm_id!=""){
  $sql = mysqli_query($con,"SELECT `ammount` FROM `segment` WHERE id='$segm_id'");
}elseif($pakage_id!="" && $name!=""){
   $sql = mysqli_query($con,"SELECT `ammount` FROM `segment` WHERE pakage_id='$pakage_id' AND name='$name'");
}
$check = mysqli_num_rows($sql);
  if($check>0){
    $fetch = mysqli_fetch_assoc($sql);
    $amt = $fetch["ammount"];
    return $amt;
  }else{
    return 0;
  }

}
function activity_cron($win_id="",$pakage_id=""){
  global $con;
  $date = date("Y-m-d h:i:s");
  $sql = mysqli_query($con,"INSERT INTO `cron_activity`(`win_id`, `pakage_id`, `date`) VALUES (
    '$win_id',
    '$pakage_id',
    '$date'
    )");
  if($sql==true){
    return "done";
  }else{
    return "fail";
  }
}

// Work for API Function============
// Token validation
// ===========================================
// ===========================================
// ===========================================
function TOKEN_VALIDATE($token=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `id`,`status`,`adb_balance` FROM `marcents` WHERE token_hash='$token'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $data = mysqli_fetch_assoc($sql);
    $token_status = "active";
    $status = $data["status"];
    $adb_balance = $data["adb_balance"];
    $arr = array('token_status' => $token_status,"acc_status"=>$status,'adb_balance' => $adb_balance, );
  }else{
    $token_status = "inactive";
    $arr = array('token_status' => $token_status);
  }
  return $arr;
}

// find marcent By token==
function FIND_MARCENT_BY_TOKEN($token=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `marcents` WHERE token_hash='$token'");
  $data = mysqli_fetch_assoc($sql);
  return $data;
}

// Qr code Get==
function QR_HASH_VALIDATE(){
  global $con;
  $hash = md5(sha1(rand(1898991111111212,9902323230999898)));
  $sql = mysqli_query($con,"SELECT `id` FROM `tickets` WHERE ticket_hash='$hash'");
  $check = mysqli_num_rows($sql);
  if($check>0){
      $hash = md5(sha1(rand(1898991111111212,9902323230999898)));
      $sql = mysqli_query($con,"SELECT `id` FROM `tickets` WHERE ticket_hash='$hash'");
        $check = mysqli_num_rows($sql);
          if($check>0){
              $hash = md5(sha1(rand(1898991111111212,9902323230999898)));
              return $hash;
          }else{
            return $hash;
          }
   }else{
     return $hash;
  }
}

function get_docs($marcent_id=''){
    global $con;
    $data = array();
    $sql = mysqli_query($con,"SELECT `id`, `marcent_id`, `docs_link`, `date` FROM `marcent_docs` WHERE `marcent_id`='$marcent_id'");
    while ($row=mysqli_fetch_assoc($sql)) {
       $data[]=$row;
    }
    return $data;
}

function Qr_TICKET_VALIDATE($hash="",$date_p="",$ids=""){
  $winList1 = array();
  global $con;
  $error = "";
  if($ids!=""){
    $sql = mysqli_query($con,"SELECT `qr_hash` FROM `group_ticket` WHERE id='$ids'");
    $check = mysqli_num_rows($sql);
    if($check>0){
      $fetch = mysqli_fetch_assoc($sql);
      $hash = $fetch["qr_hash"];
    }else{
      $error = "yes";
    }
  }

if($error == ""){

    $sql = mysqli_query($con,"SELECT `tickets`.*,`pakages`.`logo` AS pakage_logo,`pakages`.`name` AS pakage_name,CONCAT('https://arohidraw.com/admin/assets/images/pakages/') AS pakage_logo_link FROM `tickets`
    INNER JOIN `pakages` ON `tickets`.`pakage_id`=`pakages`.id
    WHERE `tickets`.`ticket_hash`='$hash'");
    $check = mysqli_num_rows($sql);
      if($check>0){
        $data = array();
        while ($fetch = mysqli_fetch_assoc($sql)) {
          $exp_date = $fetch["exp_date"];
          $pakage_id = $fetch["pakage_id"];
          $p_name_1 = sp_pakage("name",$pakage_id);
          if($date_p > $exp_date){
            $result = $fetch["status"];
            if($result==="active"){
              $data = array("Message" =>"Publish winner soon please wait" ,"Pakage Name"=>$p_name_1 );
            }else{
             $st = 1;
              //pakage - name and logo, segment
              $data[]=$fetch;

              if($fetch["win_ammount"]!=0){
                $win_ticket_num = $fetch["win_ticket_num"];
                $win_ammount = $fetch["win_ammount"];
                $segment_name = $fetch["segment_name"];
                $winList2 = array(
                  'win_ticket_num' =>$win_ticket_num ,
                  'win_ammount' =>$win_ammount ,
                  'segment_name' =>$segment_name ,
                 );
                 $winList1[]=$winList2;
              }

            }
          }else{
            $data = "Not Publish Yet";
          }
        }
      }else{
        $data = "unvalid Qr/id ";
      }
  }else{
    $data = "unvalid Ticket id";
  }
    // return $data;
    // return $winList1;
    return array($data, $winList1);
 }

 function MARCENT_DATA($token=""){
   global $con;
   global $domain;
   $data = FIND_MARCENT_BY_TOKEN($token);
   $id = $data["id"];
   $bonus_each_sale = $data["get_bonus_each_sale"];
   $total_ticket_sale = $data["total_ticket_sale"];
   $total_ticket_sale_balance = $data["total_ticket_sale_balance"];
   $adb_balance = $data["adb_balance"];
   $ticket_tharshhold = $data["sale_ticket_tharshhold"];
   $balance_tharshhold = $data["balance_tharshhold"];

   // make bonus==============
   $bonus = ($balance_tharshhold/100)*$bonus_each_sale;
   $full_name = $data["fname"]." ".$data["lname"];
   $user_id = $data["user_id"];
   $email = $data["email"];
   $phone = $data["phone"];
   $address = $data["address"];

   $profile_pic = $data["profile_pic"];
   $profile_pic = "https://".$domain."/admin/assets/images/marcents/".$profile_pic;
   $SITE = SITE();
   $delete_acc_req = $SITE["delete_acc_req"];
   $trams_condition = $SITE["trams_condition"];
   $about_us = $SITE["about_us"];

   $data_arr = array(
         'id' =>$id,
         'bonus_each_sale' =>$bonus_each_sale,
         'total_ticket_sale' =>$total_ticket_sale,
         'total_ticket_sale_balance'=>$total_ticket_sale_balance,
         'ticket_tharshhold' =>$ticket_tharshhold,
         'balance_tharshhold' =>$balance_tharshhold,
         'bonus' =>$bonus,
         'full_name' =>$full_name,
         'user_id' =>$user_id,
         'email' =>$email,
         'phone' =>$phone,
         'address' =>$address,
         'profile_pic' =>$profile_pic,
         'adb_balance' =>$adb_balance,
         "site_delete_req_btn"=>$delete_acc_req,
         "site_about_us_btn"=>$about_us,
         "site_trams_condition_btn"=>$trams_condition,
        );
      return $data_arr;
 }

function TICKET_GET_BY_MARCENT_ID($MARCENT_ID="",$filter="",$start="",$to=""){
  global $con;
  $date_raw = date("Y-m-d");
  if($filter!=""){
    if($filter=="today"){
      $end_q = " AND DATE(purchased_date)='$date_raw' ";
    }elseif($filter=="last3day"){
      $to = $date_raw;
      $from = date("Y-m-d",strtotime('-3 day', strtotime($date_raw)));

      $end_q = " AND DATE(purchased_date) BETWEEN '$from' AND '$to' ";
    }elseif($filter=="last7day"){
      $to = $date_raw;
      $from = date("Y-m-d",strtotime('-6 day', strtotime($date_raw)));

      $end_q = " AND DATE(purchased_date) BETWEEN '$from' AND '$to' ";
    }elseif($filter=="last15day"){
      $to = $date_raw;
      $from = date("Y-m-d",strtotime('-14 day', strtotime($date_raw)));

      $end_q = " AND DATE(purchased_date) BETWEEN '$from' AND '$to' ";
    }elseif($filter=="this_month"){
      $Month = date("m");
      $end_q = " AND MONTH(purchased_date)='$Month' ";
    }elseif($filter=="last_month"){
      $Month = date("m")-1;
      $end_q = " AND MONTH(purchased_date)='$Month' ";
    }elseif($filter=="cal"){
      $start;
      $to;
      $end_q = " AND DATE(purchased_date) BETWEEN '$start' AND '$to' ";
    }else{
      $ep = explode("-",$filter);
      $count = count($ep);
      if($count==2){
        $month = $ep[1];
        $year = $ep[0];
        $end_q = " AND MONTH(purchased_date)='$month' AND YEAR(purchased_date)='$year'";
      }elseif($count==3){
        // $filter must Y-m-d formet
        $end_q = " AND DATE(purchased_date)='$filter'";
      }
    }
  }else{
    $end_q =' ';
  }
  $sql = mysqli_query($con,"SELECT * FROM `tickets` WHERE marcent_id='$MARCENT_ID' $end_q  ORDER BY `id` DESC");

  $row = array();
  while ($data = mysqli_fetch_assoc($sql)) {
    // code...
    $row[] = $data;
  }
  return $row;
}

function WINNER_CHECK($pakage_id="",$segment_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `ammount` FROM `segment` WHERE pakage_id='$pakage_id' AND id='$segment_id'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $ammount = mysqli_fetch_assoc($sql);
    $ammount = $ammount['ammount'];
    return $ammount;
  }else{
    return 0;
  }

}

// Func CronJobs==
function Cron_Jobs_Winner_set($pakage_id=""){
  global $con;
  global $date;
  $ch_d = "";
  $sql = mysqli_query($con,"SELECT * FROM `winTicket` WHERE status='active' AND pakage_id='$pakage_id'");
  while ($winner_data = mysqli_fetch_assoc($sql)) {
    $id_winner_lst = $winner_data["id"];
    $pakage_id = $winner_data["pakage_id"];
    $win_ticket_number = $winner_data["win_ticket_number"];
    $unique_id = $winner_data["unique_id"];

    $win_date = $winner_data["win_date"];
    $status = $winner_data["status"];
    $cal = pakage_end_dateCAL($win_date);
    if($cal==0){
      $sql_f = mysqli_query($con,"SELECT * FROM `tickets` WHERE pakage_id='$pakage_id' AND `status`='active'");
      while ($tic_data = mysqli_fetch_assoc($sql_f)) {
        $ch_d = "get data";
        $tic_id = $tic_data["id"];
        $ticket_number = $tic_data["ticket_number"];

        if($ticket_number==$win_ticket_number){
          $segment_id = $tic_data["segment_id"];
          $win_ammount = segment_ammount($segment_id);
          $sql_update = mysqli_query($con,"UPDATE `tickets` SET `win_ammount`='$win_ammount',`status`='win' WHERE id='$tic_id'");
        }elseif($ticket_number!=$win_ticket_number){
          // work win_ticket num
          // win num=========
           $win_num_i = explode(",",$win_ticket_number);
           $win_num_c = count($win_num_i);
           $win_c_is = ($win_num_c-1);
           $match = 0;
           for ($isx=0; $isx < $win_num_c ; $isx++) {
             // ticket num============
             $ticket_num_i = explode(",",$ticket_number);
             if($win_num_i[$isx]==$ticket_num_i[$isx]){
               $match++;

             }
           }

           if($match==$win_c_is){
             $match_ticket_id = $tic_id;
             // update payment by ticket===
             $cus_segm_data = cus_segment_ammount($segment_id,$unique_id);
             $seg_amt = $cus_segm_data["seg_amt"];
             $seg_name = $cus_segm_data["seg_name"];
             $sql_update = mysqli_query($con,"UPDATE `tickets` SET `win_ammount`='$seg_amt',
              `win_ticket_num`='$win_ticket_number',
              `status`='win',
              `segment_name`='$seg_name'
               WHERE id='$tic_id'");
          }else{
            $sql_update = mysqli_query($con,"UPDATE `tickets` SET `status`='lose' WHERE id='$tic_id'");
          }
          // work win_ticket num
        }else{
          $sql_update = mysqli_query($con,"UPDATE `tickets` SET `status`='lose' WHERE id='$tic_id'");
        }
      }
      $updateW_list = mysqli_query($con,"UPDATE `winTicket` SET `status`='inactive',`date`='$date' WHERE id='$id_winner_lst'");
      if($updateW_list==true){
        $shoot = activity_cron($id_winner_lst,$pakage_id);
        return $shoot;
      }else{
        return "Fail Cron Sql";
      }
    }
  }
  if($ch_d==""){
    return "data not find";
  }
}

// custom_seg_data
function cus_segment_ammount($segment_id="",$unique_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT `seg_amt`,`seg_name` FROM `custom_segment` WHERE old_seg_id='$segment_id' AND unique_id='$unique_id'");
  $fetch = mysqli_fetch_assoc($sql);
  $data = $fetch;
  return $data;
}

// sp_segment==
function sp_segment($value,$pakage_id="",$segment_name=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `segment` WHERE name='$segment_name' AND pakage_id='$pakage_id'");
  $fetch = mysqli_fetch_assoc($sql);
  $data = $fetch[$value];
  return $data;
}


// withdrow history api==
function WITHDROW_HISTORY_DATA($token="",$filter="",$from="",$to=""){
  global $con;
  if($filter!=""){
     if($filter=="cal"){
      $from;
      $to;
      $end_q = " AND DATE(`date`) BETWEEN '$from' AND '$to' ";
    }else{
      $ep = explode("-",$filter);
      $count = count($ep);
      if($count==2){
        $month = $ep[1];
        $year = $ep[0];
        $end_q = " AND MONTH(`date`)='$month' AND YEAR(`date`)='$year' ";
      }elseif($count==3){
        // $filter must Y-m-d formet
        $end_q = " AND DATE(`date`)='$filter' ";
      }
    }
  }else{
    $end_q = " ";
  }
  $marcent_id = sp_marcent("id","",$token);
  $row = array();
  $sql = mysqli_query($con,"SELECT * FROM `balance_data` WHERE    `marcent_id`='$marcent_id' $end_q ORDER BY id DESC");
   while ($data = mysqli_fetch_assoc($sql)){
     // code...
     $row[] = $data;
   }
   return $row;
}

function MARCENT_UPDATE($marcent_id="",$total_ticket="",$total_price="",$work=""){
 global $con;
 $sql = mysqli_query($con,"SELECT * FROM `marcents` WHERE id='$marcent_id'");
 $fetch = mysqli_fetch_assoc($sql);
  $bonus = $fetch["get_bonus_each_sale"];
  $total_t_sale = $fetch["total_ticket_sale"];
  $total_t_balance = $fetch["total_ticket_sale_balance"];
  $adb_balance = $fetch["adb_balance"];
  $t_s_trash = $fetch["sale_ticket_tharshhold"];
  $b_trash = $fetch["balance_tharshhold"];

  if($work=="revarce"){
    // Calculation==
    // main
    $tkt_cal = $total_t_sale-$total_ticket;
    $tkt_b_cal = $total_t_balance-$total_price;
    $adb_balance_cal = $adb_balance+$total_price;
   // trashhold
    $tkt_s_trash_cal = $t_s_trash-$total_ticket;
    $blance_trash_cal = $b_trash-$total_price;
    // update data==
  }else{
    // Calculation==
    // main
    $tkt_cal = $total_t_sale+$total_ticket;
    $tkt_b_cal = $total_t_balance+$total_price;
    $adb_balance_cal = $adb_balance-$total_price;
   // trashhold
    $tkt_s_trash_cal = $t_s_trash+$total_ticket;
    $blance_trash_cal = $b_trash+$total_price;
    // update data==
  }

  $sql_update = mysqli_query($con,"UPDATE `marcents` SET
    `total_ticket_sale`='$tkt_cal',
    `total_ticket_sale_balance`='$tkt_b_cal',
    `adb_balance`='$adb_balance_cal',
    `sale_ticket_tharshhold`='$tkt_s_trash_cal',
    `balance_tharshhold`='$blance_trash_cal'
     WHERE id='$marcent_id'");
     if($sql_update==true){
       return 1;
     }else{
       return 0;
     }
}

// function Site===
function SITE(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `site` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  return $fetch;
}

// adb balance list loop
function adb_balance_loop(){
  global $con;
  $row = array();
  $sql = mysqli_query($con,"SELECT * FROM `marcent_advance_balance` WHERE 1");
   while ($data = mysqli_fetch_assoc($sql)){
     // code...
     $row[] = $data;
   }
   return $row;
}

function get_website_data($value=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `website_api` WHERE 1");
  $fetch = mysqli_fetch_assoc($sql);
  $data = $fetch[$value];
  return $data;
}

function WEBSITE_API_DATA(){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `website_api` WHERE 1");
  $data = mysqli_fetch_assoc($sql);
  return $data;
}

 function WEB_TOKEN_VALIDATE($token=""){
   global $con;
   $sql = mysqli_query($con,"SELECT * FROM `website_api` WHERE token='$token'");
   $check = mysqli_num_rows($sql);
   if($check>0){
     return 1;
   }else{
     return 0;
   }
 }

 function PAKAGE_FOR_SHOW_HOME(){
   global $con;
   $sql = mysqli_query($con,"SELECT `id`, `name`, `logo`, `num_limit`, `price`, `status`, `show_status`, `vat_gst_pkg`, `end_date`, `date`, `result_next_num_days`, `time_day` FROM `pakages` WHERE show_status=1");
   $row = array();
   while ($data = mysqli_fetch_assoc($sql)) {
     // code...
     $row[] = $data;
   }
   return $row;
 }

function get_ticket($value="",$ticket_id=""){
  global $con;
  $sql = mysqli_query($con,"SELECT * FROM `tickets` WHERE id='$ticket_id'");
  $fetch = mysqli_fetch_assoc($sql);
  $data = $fetch[$value];
  return $data;
}
?>
