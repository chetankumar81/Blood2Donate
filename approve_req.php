<?php
require 'core.php';
require 'connect.php';
$current_file=$_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
 {$http_referer=$_SERVER['HTTP_REFERER'];}


 if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
 {
 echo 'You\'r logged in <a href="logout.php">Log out</a> <br><br>';
 }