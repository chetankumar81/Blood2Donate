<?php
ob_start();                           //no need here,see video tutorial
session_start();
 $current_file=$_SERVER['SCRIPT_NAME'];           //current file location
 if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
 {$http_referer=$_SERVER['HTTP_REFERER'];}          //URL it(webpage) came from
 function loggedin()
 {
   if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
   return true;
   else
   return false;                             //the http_referer error that comes in the beginning(when we load the page first time) is because
 }                                           //there is no url that the index.php comes from and hence undefined
function getuserinfo($field)
{
  $query="select `$field` from `donor` where `id`='".$_SESSION['user_id']."'";
  if($query_run=mysql_query($query))
  {
    if($query_result=mysql_result($query_run,0,$field))
    {
      return $query_result;
    }
  }
}
?>