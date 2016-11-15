<?php
$mysql_host='localhost';
$mysql_username='root';
$mysql_password='';
$error_message='could not connect';
$mysql_database='b_database';
if(!@mysql_connect($mysql_host,$mysql_username,$mysql_password) || !@mysql_select_db($mysql_database))
{
echo $error_message;
}
?>