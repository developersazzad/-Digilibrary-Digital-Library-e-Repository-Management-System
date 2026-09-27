<?php
 include("../config/connection.php");
  if(isset($_GET["token"])){
    $token = $_GET["token"];
    $type = $_GET["type"];
    if($type=="validate"){
      $sql = mysqli_query($con,"UPDATE `users` SET `verification_status`='active' WHERE verification_code='$token'");
      header("location:login.php");
    }else{
      $sql = mysqli_query($con,"SELECT * FROM `users` WHERE verification_code='$token'");
      $check = mysqli_num_rows($sql);
      if($check>0){
        $fetch_data = mysqli_fetch_assoc($sql);
        $email = $fetch_data['email'];
        $_SESSION["email_is"] = $email;
        header("location:new_password_set.php");
      }else{
        ?>
        <script>
          alert("session Expire. try again");
        </script>
        <?php
      }
    }

  }
 ?>
