<?php
$token = 'f9hsUuYkjakjbakvbjat71t81bhkjsbibwdauyfd86qwdqygdwig';
// Initiate curl session in a variable (resource)
// header('Content-Type:application/json');
$curl_handle = curl_init();
$url = "https://arohidraw.com/admin/api/web/v1/index?token=$token";
// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);
// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);
curl_close($curl_handle);
// Decode JSON into PHP array
$response_data = json_decode($curl_data,true);
// extra_data========
if(is_array($response_data['data'])){
  $hd_sm_t1 = $response_data["data"]["hd_sm_t1"];
  $hd_hero_t1 = $response_data["data"]["hd_hero_t1"];
  $hd_sbt_t1 = $response_data["data"]["hd_sbt_t1"];
  $hd_btn_1 = $response_data["data"]["hd_btn_1"];
  $hd_btn_2 = $response_data["data"]["hd_btn_2"];
  $hd_hero_pic = $response_data["data"]["hd_hero_pic"];
  $co_tiket = $response_data["data"]["co_tiket"];
  $co_marcent = $response_data["data"]["co_marcent"];
  $co_sale = $response_data["data"]["co_sale"];
  $co_winamt = $response_data["data"]["co_winamt"];

  $ab_sm_top = $response_data["data"]["ab_sm_top"];
  $sb_hro_t1 = $response_data["data"]["sb_hro_t1"];
  $sb_sub_t1 = $response_data["data"]["sb_sub_t1"];
  $ab_sm_t = $response_data["data"]["ab_sm_t"];
  $ab_m_txt1 = $response_data["data"]["ab_m_txt1"];
  $ab_sb_title = $response_data["data"]["ab_sb_title"];
  $ab_sbt_sub_t = $response_data["data"]["ab_sbt_sub_t"];
  $ab_sbt_sub_t2tx = $response_data["data"]["ab_sbt_sub_t2tx"];

 // loop image
  $app_loop_img = $response_data["data"]["app_loop_img"];
  $marcent_image = explode(",",$app_loop_img);
  $marcent_img_count = count($marcent_image);


  $ab_m_img = $response_data["data"]["ab_m_img"];
  $marcent_images = $response_data["data"]["marcent_images"];
  $all_marcent = explode(",",$marcent_images);
  $all_marcent_c = count($marcent_image);

  $Faq_t1 = $response_data["data"]["Faq_t1"];
  $Faq_sub_text1 = $response_data["data"]["Faq_sub_text1"];
  $Faq_t2 = $response_data["data"]["Faq_t2"];
  $Faq_sub_text2 = $response_data["data"]["Faq_sub_text2"];
  $Faq_t3 = $response_data["data"]["Faq_t3"];
  $Faq_sub_text3 = $response_data["data"]["Faq_sub_text3"];
  $Faq_t4 = $response_data["data"]["Faq_t4"];
  $Faq_sub_text4 = $response_data["data"]["Faq_sub_text4"];
  $foo_link1 = $response_data["data"]["foo_link1"];
  $foo_link2 = $response_data["data"]["foo_link2"];
  $foo_link3 = $response_data["data"]["foo_link3"];
  $last_update = $response_data["data"]["last_update"];

  $pakage_data = $response_data['pakage_data'];

  // check Domain====================================
  // $carrentDomain = trim($_SERVER["SERVER_NAME"]);
  // $dataDomain = str_replace("/","",$domin);

  // echo "____All Ok____";
}else{
 $status99="LoadFail";
}


?>
