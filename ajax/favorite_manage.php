<?php
include("../config/connection.php");

if(isset($_REQUEST["id"])){
  $id = $_REQUEST["id"];
  $student_id = $_REQUEST["student_id"];
  $work = $_REQUEST["work"];
  if($work=="add_favorite"){
    $sql = mysqli_query($con,"SELECT `id` FROM `favorite_book_st` WHERE book_id='$id' AND student_id = '$student_id'");
    $check = mysqli_num_rows($sql);
    if($check>0){
      echo "done";
    }else{
      $sql = mysqli_query($con,"INSERT INTO `favorite_book_st`(`book_id`, `student_id`) VALUES ('$id','$student_id')");
      echo "done";
    }
  }elseif($work=="remove_favorite"){
    $sql = mysqli_query($con,"SELECT `id` FROM `favorite_book_st` WHERE book_id='$id' AND student_id = '$student_id'");
    $check = mysqli_num_rows($sql);
    if($check>0){
      $sql = mysqli_query($con,"DELETE FROM `favorite_book_st` WHERE  book_id='$id' AND student_id = '$student_id'");
      echo "remove";
    }else{
      echo "remove";
    }
  }
}

 ?>
