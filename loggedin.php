<?php
require 'core.php';                                         //or include.php
require 'connect.php';
include 'header.php';
echo '<div style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;color:black;">';
$firstname=getuserinfo('firstname');
$lastname=getuserinfo('lastname');
$user_id=$_SESSION['user_id'];
echo 'You\'re logged in as '.$firstname.' '.$lastname;
$query4="select `points` from `donated` where `id`='$user_id'";
$query_run4=mysql_query($query4);
if(mysql_num_rows($query_run4)==0)
{
  echo'</br> Your points:0';
}
else
{
$result=mysql_result($query_run4,0,'points');
echo'</br> Your points:'.$result;
}

if(isset($_POST['feedback']))
{
  $feedback=$_POST['feedback'];
  if(!empty($feedback))
  {
    $query1="select `id` from `donated` where `id`=$user_id";
    $query_run1=mysql_query($query1);
     if(mysql_num_rows($query_run1)==0)
     {
     $query2="insert into `donated` (`id`,`feedback`) values('".mysql_real_escape_string($user_id)."','".mysql_real_escape_string($feedback)."')";
     $query_run2=mysql_query($query2);
     }
     else
    {
    $query="update `donated` set `feedback`='$feedback' where `id`='$user_id'";
    $query_run=mysql_query($query);
    }
    echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
  echo'Feedback Poasted!';
  echo'</div>';
  }
  else
  {
    echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
    echo'Please write something';
    echo'</div>';
  }
}
echo'</div>';




?>

<form action="loggedin.php" method="POST">
<h3 style="color:green;font-size:25px;padding-left:20px;border-radius:10px;">Please give feedback about your health after donation:</h3>
<textarea name="feedback" rows="10" cols="50" style=" font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;"></textarea>
    </br>
<input type="submit" value="Submit" class="btn btn-success btn-lg">
</form>
<br>

<?php
include 'footer.php';
?>