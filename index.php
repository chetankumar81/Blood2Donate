<?php
include 'header.php';
require 'core.php';                                         //or include.php
require 'connect.php';
if(loggedin())                                               //i am right now at index, so $current_file in loginform will have value index.php
{
	if($_SESSION['table']== 'hospital')
		header('Location: hospital.php');
	else if($_SESSION['table']== 'administrator')
		header('Location: index_administrator.php');
	else
		header('Location: loggedin.php');
}
else
{
	include 'loginform.php';
?>
</div>
<?php
}
include 'footer.php';
?>
