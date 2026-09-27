<?php
include("config/connection.php");
include("function/function.php");
 if(isset($_GET["role"])){
   $role = $_GET['role'];
   logout($role);
 }

?>
