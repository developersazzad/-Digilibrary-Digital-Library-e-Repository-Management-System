<?php
include($path."config/connection.php");
include($path."function/function.php");
 if(isset($_GET["role"])){
   $role = $_GET['role'];
   logout($role);
 }

?>
