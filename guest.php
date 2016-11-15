<?php
  require'connect.php';
  include'header.php';
  echo'<h3 style="color:black;font-family:Comic sans ms;font-size:30px;margin-left:80%;margin-top:0px;">Guest Login</h3>';
  echo '<a href="index.php" class="btn btn-primary" style="margin-left:80%;">Go Back</a> ';
  echo '<div style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
  echo'<h1>Available Donor List</h1>';
  $query="select `firstname`,`lastname`,`mob_no` from `donor` where `bloodgroup`='".mysql_real_escape_string(@$_POST['bloodgroup'])."'";
  $query_run=mysql_query($query);
  $query_num_rows=mysql_num_rows($query_run);
  if($query_num_rows>0)
  {
	  echo '<div class="col-sm-12">
			<table class="table table-hover">
			<thead>
			<tr>
				<th>Name</th>
				<th>Mobile</th>
			</tr>
			</thead>
			<tbody>';
  while($query_row=mysql_fetch_assoc($query_run))
  {
	  echo '<tr>
					<td>'.$query_row['firstname'].'&nbsp'.$query_row['lastname'].'</td>
					<td>'.$query_row['mob_no'].'</td>
				</tr>';
  }
  	   echo '</tbody>
			</table>
		</div>';
  }
  else if(isset($_POST['submit']) && $query_num_rows==0)
  {echo '<div class="alert-danger" style="font-size:20px;text-transform:capitalize;padding-left:20px;border-radius:10px;">';
  echo'No results found!';
  echo'</div>';}
  echo'</div>';

?>

<form action="guest.php" method="POST">
</br></br>
<div style="font-size:20px;text-transform:capitalize;margin-left:20px;"><label>Select Bloodgroup:</label>
<select name="bloodgroup" style="font-size:25px;background:#ffff99;border-radius:8px;color:brown;">
<option value="A+">A+</option><option value="A-">A-</option><option value="B+">B+</option><option value="B-">B-</option>
<option value="O+">O+</option><option value="O-">O-</option><option value="AB+">AB+</option><option value="AB-">AB-</option>
<option value="A1+">A1+</option><option value="A1-">A1-</option><option value="A2+">A2+</option><option value="A2-">A2-</option>
<option value="A1B+">A1B+</option><option value="A1B-">A1B-</option><option value="A2B+">A2B+</option><option value="A2B-">A2B-</option><option value="BOMBAY BLOOD GROUP">BOMBAY BLOOD GROUP</option>
</select><br></br>
<input type="submit" value="Search" name="submit" class="btn btn-success btn-lg">
</form>
</div>

<?php
include 'footer.php';
?>