<?php
 // login form is==
 if(isset($_POST["login_bth"])){
  include("../config/connection.php");
  include("../function/function.php");
  include("../config/routs.php");
  include("../function/smtp_shoot.php");

  $email = $_POST["email"];
  $password = $_POST["password"];
  $sql = mysqli_query($con,"SELECT * FROM `admin` WHERE email='$email'");
  $check = mysqli_num_rows($sql);
  if($check>0){
    $fetch_data = mysqli_fetch_assoc($sql);
    $password_db = $fetch_data["password"];
    $check_pass = password_verify($password,$password_db);
    if($check_pass==true){
      // user validate
        $email = $fetch_data["email"];
        $user_id = $fetch_data["id"];
        $session = md5(sha1(rand(1111111111,99999999999)));
        $_SESSION["ADMIN_SECRAT_SESSION"] = $session;
        $sql_update = mysqli_query($con,"UPDATE `admin` SET `session_hash`='$session' WHERE email='$email'");
        if($sql==true){
          header("location:../deshbord?notification=success&title=Login success&msg=Welcome");
        }else{
          header("location:../index?notification=danger&title=Password Error&msg=Your password wrong!");
        }
      }else{
        header("location:../index?notification=danger&title=Password Error&msg=Your password wrong!");
      }
      // user validate
    }else{
      $sql = mysqli_query($con,"SELECT * FROM `student` WHERE email='$email'");
      $check = mysqli_num_rows($sql);
      if($check>0){
        $fetch_data = mysqli_fetch_assoc($sql);
        $password_db = $fetch_data["password"];
        $check_pass = password_verify($password,$password_db);
        if($check_pass==true){
          // user validate
            $email = $fetch_data["email"];
            $user_id = $fetch_data["id"];
            $session = md5(sha1(rand(1111111111,99999999999)));
            $_SESSION["STUDENT_SECRAT_SESSION"] = $session;
            $sql_update = mysqli_query($con,"UPDATE `student` SET `session_hash`='$session' WHERE email='$email'");
            header("location:../deshbord?status=success&title=Login success&message=Welcome");
          }else{
            header("location:../index?notification=danger&title=Password Error&msg=Your password wrong!");
          }
          // user validate
      }else{
        header("location:../index?notification=danger&title=Email Cannot Find database &msg=Please try valid email and password");
      }
  }
}

//=====Forgat Password====
if(isset($_POST["forgat_password"])){
  $email = $_POST["forgat_email"];
  $valid = check_role($email);
  if($valid=="admin"){
    $gen_code = rand(111111,999999);
    $verify_code = unique_varification_code($gen_code);
    $sql = mysqli_query($con,"UPDATE `admin` SET `verifycation_code`='$verify_code' WHERE email = '$email'");
    // smtp shoot on email========================
     $smtp = verification_coad($email,$verify_code,"rest_password");
     go_to("verify?type=admin");
    // smtp shoot on email========================
  }elseif($valid=="student"){
    $gen_code = rand(111111,999999);
    $verify_code = unique_varification_code($gen_code);
    $sql = mysqli_query($con,"UPDATE `student` SET `verifycation_code`='$verify_code' WHERE email = '$email'");
    // smtp shoot on email========================
     $smtp = verification_coad($email,$verify_code,"rest_password");
     go_to("verify?type=student");
    // smtp shoot on email========================
  }else{
    header("location:login?notification=danger&title=Account Don't Find &msg=Account Not Find");
  }
}

//=======Verify Code===========
if(isset($_POST['verify_btn'])){
   $verify_code = validate($_POST["verify_code"]);
   $type = $_POST["type"];
 if($type=="admin"){
   $sql = mysqli_query($con,"SELECT id,email FROM `admin` WHERE verifycation_code='$verify_code'");
   $check = mysqli_num_rows($sql);
     if($check>0){
       $fetch = mysqli_fetch_assoc($sql);
       $email = $fetch["email"];
       $_SESSION["email_is"] = $email;
       go_to("new_password_set");
     }else{
        go_to("verify?notification=danger&title=you type wrong verification code&type=$type");
     }

 }elseif($type=="student"){
   $sql = mysqli_query($con,"SELECT * FROM `student` WHERE `verifycation_code`='$verify_code'");
   $check = mysqli_num_rows($sql);
   if($check>0){
     $fetch_data = mysqli_fetch_assoc($sql);
     $email = $fetch_data['email'];
     $_SESSION["email_is"] = $email;
     go_to("new_password_set");
   }else{
      go_to("verify?notification=danger&title=you type wrong verification code&type=$type");
   }
 }
}



// New Password========
if(isset($_POST["rest_password"])){
  $new_password1 = $_POST["new_password1"];
  $new_password2 = $_POST["new_password2"];
  if($new_password1==$new_password2){
    $password_hash = password_hash($new_password1,PASSWORD_DEFAULT);
    $email = $_SESSION["email_is"];
    $check_r = check_role($email);
    if($check_r=='admin'){
      $sql = mysqli_query($con,"UPDATE `admin` SET `password`='$password_hash' WHERE email='$email'");
      if($sql==true){
        go_to("../index?notification=success&title=Rest Success&msg=Rest Password Success");
      }
    }elseif($check_r=="student"){
      $sql = mysqli_query($con,"UPDATE `student` SET `password`='$password_hash' WHERE email='$email'");
      if($sql==true){
        go_to("../index?notification=success&title=Rest Success&msg=Rest Password Success");
      }
    }else{
       go_to("new_password_set?notification=danger&title=Somthing error&msg=error!");
    }

  }else{
     go_to("new_password_set?notification=danger&title=Password Are Not Same&msg=Retype Password Not Same");
  }
}


if(isset($_POST["forgate_admin"])){
  $verify_code = rand(111111,999999);
  $sql_up = mysqli_query($con,"UPDATE `admin` SET `verifycation_code`='$verify_code' WHERE 1");
  // smtp shoot on email===============
   $type = "admin_rest_password";
   $smtp = verification_admin($Admin_email,$verify_code,"admin_rest_password");
   go_to("verify?notification=danger&title=Send verification &msg=code in Admin Mail&type=$type");
  }

// Admin Login =============================

 ?>
