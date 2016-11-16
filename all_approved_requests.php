<?php
include 'core.php';
include'header.php';
echo'<h3 style="font-family:Comic sans ms;font-size:30px;margin-left:70%;margin-top:0px;">Volunteer</h3>';
?>
<h2 style="color:#00cc00;font-family:Comic sans ms;font-size:30px;margin-left:10px;margin-top:0px;">Remove patient request after donation</h2></br>
<div style="font-size:20px; margin-left:10px">
<form action="all_approved_requests.php" method="POST">
Patient ID: <input type=text name="id" style="font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;"><br> <br>
Patient Name: <input type=text name="name" style="font-size:25px;
    background:#ffff99;
    border-radius:8px;
    color:brown;"><br><br>
<input type="submit" value="submit" name="submit" class="btn btn-success btn-lg" style="font-size:20px;margin-left:10px">
</form>
</div>
<?php
require 'connect.php';
echo '<div style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
$current_file=$_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
 {$http_referer=$_SERVER['HTTP_REFERER'];}

 if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
 {
 $query="select * from `request` where `allow`='yes'";
  if($query_run=mysql_query($query))
  {
    $query_num_rows=mysql_num_rows($query_run);
              if($query_num_rows==0 && isset($_POST['submit']))
              {
                echo'No blood requests/';
              }
              else
              {
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
					<th>Approved</th>
				</tr>
				</thead>
				<tbody>';
                while($query_row=mysql_fetch_assoc($query_run))
                {
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
					<td>'.$query_row['allow'].'</td>
				</tr>';
                }
				echo '</tbody>
				</table>
				</div>';
              }
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
                              $query="delete from `request`  where `id`='$id' && `name`='$name' ";
                              if($query_run=mysql_query($query))
                              {
                               echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                                   echo'<h4>'.$name.' request removed </h4>';
                                  echo'</div>';
                              }
                          }
                          else if(isset($_POST['submit']))
                           { echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                           echo'Incorrect details';
                           echo'</div>'; }
                        }


                      }
                             else if(isset($_POST['submit']))
                             { echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
                              echo'Please fill all details';
                              echo'</div>'; }
                    }





 }
 else
 {
   header('Location:index.php');
 }
 echo'</div>';
 
 include 'footer.php';
?>

