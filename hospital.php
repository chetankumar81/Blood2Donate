<?php
require 'core.php';
require 'connect.php';
include'header.php';
echo'<h3 style="color:black;font-family:Comic sans ms;font-size:30px;margin-left:70%;margin-top:0px;">Volunteer</h3>';
$current_file=$_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
 {$http_referer=$_SERVER['HTTP_REFERER'];}

 if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
 {
 
 echo'<br><br>';
 echo'<h3><a href="all_approved_requests.php" class="btn btn-primary" style="margin-left:50px;font-size:25px;">Check approved blood donation requests </a></h3>';
 echo'<br><br>';
 echo'<h3><a href="give_point.php" class="btn btn-primary" style="margin-left:50px;font-size:25px;">Give points to donor </a></h3>';
 }
 else
 {
   header('Location:index.php');
 }

 include 'footer.php';
?>