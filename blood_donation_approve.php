<?php
include'header.php';
echo'<h3 style="font-family:Comic sans ms;font-size:30px;margin-left:70%;margin-top:0px;">Administrator</h3>';
echo '<a href="logout.php" class="btn btn-primary" style="margin-left:70%;">Log out</a><br><br> ';
?>

<h2 style="color:#00cc00;font-family:Comic sans ms;font-size:30px;margin-left:10px;margin-top:0px;">Enter ID & name of the patient to approve blood donation request</h2>
<div style="font-size:20px; margin-left:10px">
<form action="blood_donation_approve.php" method="POST">
</br>
Patient ID: <input type=text name="id" style="font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;"><br><br>
Patient Name: <input type=text name="name" style="font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;"><br><br>
<input type="submit" value="Submit" class="btn btn-success btn-lg" style="font-size:20px;margin-left:10px">
</form>
</div>
</br></br>

<?php
require 'connect.php';
ob_start();
session_start();
echo '<div style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
$current_file=$_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
 {$http_referer=$_SERVER['HTTP_REFERER'];}

 if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
 {    

$query="select * from `request` where `allow`!='yes'";

 $i=0;
 $k=1;
 if($query_run=mysql_query($query))
    {
      $query_num_rows=mysql_num_rows($query_run);
	  echo '<div class="col-sm-12">
			<table class="table table-hover">
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Blood Group</th>
				<th>Age</th>
				<th>Date when needed</th>
				<th>Units</th>
				<th>Mobile</th>
				<th>Location</th>
				<th>Hospital</th>
				<th>Address</th>
				<th>Purpose</th>
			</tr>
			</thead>
			<tbody>';
      while($query_row=mysql_fetch_assoc($query_run))
      {
          $i++;
		  echo '<tr>
					<td>'.$query_row['id'].'</td>
					<td>'.$query_row['name'].'</td>
					<td>'.$query_row['bloodgroup'].'</td>
					<td>'.$query_row['age'].'</td>
					<td>'.$query_row['day'].'/'.$query_row['month'].'/'.$query_row['year'].'</td>
					<td>'.$query_row['units'].'</td>
					<td>'.$query_row['mob_no'].'</td>
					<td>'.$query_row['location'].'</td>
					<td>'.$query_row['hospital'].'</td>
					<td>'.$query_row['address'].'</td>
					<td>'.$query_row['purpose'].'</td>
				</tr>';
          $name[$i]=$query_row['name'];
          $store[$i]=$query_row['id'];
       }
	   echo '</tbody>
			</table>
		</div>';
     }

                    if(isset($_POST['id'])&&isset($_POST['name']))
                    {
                      $id=$_POST['id'];
                      $name=$_POST['name'];
                      if(!empty($id)&&!empty($name))
                      {
                              $query1="select `id` from `request` where `id`='$id' && `name`='$name' ";
                              if($query_run1=mysql_query($query1))
                        {
                               if(mysql_num_rows($query_run1)!=0)
                          {
                              $query="update `request` set `allow`='yes' where `id`='$id' && `name`='$name' ";
                              if($query_run=mysql_query($query))
                              {
                                 echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                                   echo'<h4>'.$name.' request approved </h4>';
                                  echo'</div>';

                              }
                          }
                          else
                           { echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                           echo'Incorrect details';
                           echo'</div>'; }

                        }


                      }
                             else
                              { echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                              echo'Please fill all details';
                              echo'</div>'; }

                    }

 }
 else
 {
    echo'please login to continue';
 }
 echo'</div>';
 
 include 'footer.php';
?>



