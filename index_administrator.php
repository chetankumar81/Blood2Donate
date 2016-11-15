<?php
require 'connect.php';
include'header.php';
ob_start();
session_start();
echo'<h3 style="color:black;font-family:Comic sans ms;font-size:30px;margin-left:70%;margin-top:0px;">Administrator</h3>';
echo '<div style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
$current_file=$_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
 {$http_referer=$_SERVER['HTTP_REFERER'];}

 if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
 {
 echo '<a href="logout.php" class="btn btn-primary" style="margin-left:70%;">Log out</a></br></br> ';
      if(isset($_POST['name']))
      {
        $name=$_POST['name'];
        if(!empty($name))
        {
            $query="select * from `donor` where `firstname`='".mysql_real_escape_string($name)."'";
            if($query_run=mysql_query($query))
            {
              $query_num_rows=mysql_num_rows($query_run);
              if($query_num_rows==0)
              {

                 echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                 echo'Name doesn\'t exist ';
                 echo'</div>';
              }
              else
              {
				  echo '<div class="col-sm-12">
						<table class="table table-hover">
						<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Username</th>
							<th>Gender</th>
							<th>Blood Group</th>
							<th>Location</th>
							<th>Distance from Hospital</th>
							<th>Mobile</th>
							<th>DOB</th>
						</tr>
						</thead>
						<tbody>';
                while($query_row=mysql_fetch_assoc($query_run))
                {
					echo '<tr>
					<td>'.$query_row['id'].'</td>
					<td>'.$query_row['firstname'].'&nbsp'.$query_row['lastname'].'</td>
					<td>'.$query_row['username'].'</td>
					<td>'.$query_row['gender'].'</td>
					<td>'.$query_row['bloodgroup'].'</td>
					<td>'.$query_row['location'].'</td>
					<td>'.$query_row['distance'].'</td>
					<td>'.$query_row['mob_no'].'</td>
					<td>'.$query_row['dob'].'/'.$query_row['mob'].'/'.$query_row['yob'].'</td>
				</tr>';
                }
				echo '</tbody>
				</table>
				</div>';
              }
            }
        }
        else
       { echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
  echo'Please enter name to search';
  echo'</div>'; }
      }
 }

 else
 {
   header('Location:index.php');
 }
 echo'</div>';
?>


<form action="index_administrator.php" method="POST">
<br><br>
<h2 style="color:#00cc00;font-family:Comic sans ms;font-size:30px;margin-left:10px;margin-top:0px;">Search donor :</h2>
<div>
<label><h2>Enter name: &nbsp</h2></label><input type="text" name="name" style="font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;">
<input type="submit" value="Search" class="btn btn-success btn-lg">
</form>
<br><br><br><br><br>
<a href="blood_donation_approve.php" class="btn btn-primary" style="margin-left:10%;font-size:25px;">Click here to check for pending blood donation requests</a>
</div>

<?php
include 'footer.php';
?>