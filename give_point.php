<?php
require 'connect.php';
include'header.php';
echo'<h3 style="color:#00cc00;font-family:Comic sans ms;font-size:30px;margin-left:1290px;margin-top:0px;">Hospital Staff</h3>';
echo '<a href="logout.php" class="btn btn-primary" style="margin-left:1400px;">Log out</a></br> ';
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
 {$http_referer=$_SERVER['HTTP_REFERER'];}

 if(isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['points']))
 {
   $id=$_POST['id'];
   $name=$_POST['name'];
   $points=$_POST['points'];
   if(!empty($id)&&!empty($name))
   {
      $query1="select `id` from `donor` where `id`='$id' && `firstname`='$name' ";
                              if($query_run1=mysql_query($query1))
                        {
                               if(mysql_num_rows($query_run1)!=0)
                          {
                             $query2="select `id` from `donated` where `id`='$id'";
                             $query_run2=mysql_query($query2);
                             if(mysql_num_rows($query_run2)==0)
                                {
                                  $query="insert into `donated` (`id`,`points`,`allow`) values('".mysql_real_escape_string($id)."','".mysql_real_escape_string($points)."','yes')";
                                  if($query_run=mysql_query($query))
                                  {
                                      echo '</br><div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                                      echo'Points inserted';
                                      echo'</div>';
                                  }
                                }
                              else
                                  {
                                    $query3="update `donated` set `points`='$points' where `id`='$id'";
                                    if($query_run2=mysql_query($query3))
                                    { echo '</br><div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                                      echo'Points Updated';
                                      echo'</div>'; }
                                  }

                          }
                          else
                          { echo '</br><div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                              echo'Incorrect details';
                              echo'</div>'; }

                        }




   }
   else
   { echo '</br><div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                              echo'Please fill all Details';
                              echo'</div>'; }

 }


?>
 <form action="give_point.php" method="post">
 <h3 style="color:#00cc00;font-family:Comic sans ms;font-size:30px;margin-left:10px;margin-top:0px;">Give Blood donation point to:</h3>
 <div style="color:#f2f2f2;font-size:20px; margin-left:10px">
  Enter ID: <input type="text" name="id" style="font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;"></br></br>
  Enter Firstname: <input type="text" name="name" style="font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;"></br></br>
  Enter Points: <input type="text" name="points" style="font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;"></br></br>
  <input type="submit" value="Submit" class="btn btn-success btn-lg" style="font-size:20px;margin-left:10px">
 </form>
 </div>

<br><br>
<center style="color:#f2f2f2;font-family:Comic sans ms;font-size:30px;"><h1>Available donor list</h1></center>


<?php
 if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
 {
   echo '<div style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;color:#f2f2f2;">';
  $query="select * from `donor`";
  $query_run=mysql_query($query);
  while($query_row=mysql_fetch_assoc($query_run))
                {
                 $k=$query_row['id'];
                 echo 'ID: '.$query_row['id'].'<br>';
                 echo 'Firstname: '.$query_row['firstname'].'<br>';
                 echo 'Lastname: '.$query_row['lastname'].'<br>';
                 echo 'Username: '.$query_row['username'].'<br>';
                 echo 'Password: '.$query_row['password'].'<br>';
                 echo 'Gender: '.$query_row['gender'].'<br>';
                 echo 'Bloodgroup: '.$query_row['bloodgroup'].'<br>';
                 echo 'Location: '.$query_row['location'].'<br>';
                 echo 'Distance from Hospital: '.$query_row['distance'].'Km<br>';
                 echo 'Mobile No: '.$query_row['mob_no'].'<br>';
                 echo 'Date of birth: '.$query_row['dob'].'/'.$query_row['mob'].'/'.$query_row['yob'].'<br>';
                 $query4="select `points` from `donated` where `id`='$k'";
                 $query_run4=mysql_query($query4);
                 if($query_num_rows=mysql_num_rows($query_run4)!=0)
                 {
                 $p=mysql_result($query_run4,0,'points');
                 echo'Points:'.$p.'<br>';
                 }
                 else
                 echo 'Points: 0';
                 echo'<br><br>';
                }
 }
 else
 {
   header('Location:index.php');
 }
 echo'</div>';
 ?>
