<?php
  session_start();
  if(!isset($_SESSION['adno'])){
	  header("location:apply.php");
  }
?>

<html>
<head></head>
<body>
<?php
		include "../connection.php";
		$adno = $_SESSION['adno'];
		$query="select * from application WHERE Admission_No='$adno'";
		$val=mysqli_query($con,$query);
		if(mysqli_num_rows($val)>0)
		{
			
			echo '<link rel="stylesheet" style="text/css"><center><table border="1" style="color:black;font-size:20px;background-color:white;"><h1 style="color:white;">REGISTERED EVENTS</h1>';
			echo '<tr><th>Admission_No</th><th>Name</th><th>Department</th><th>Event_id</th><th>Event_name</th></tr>';
			while($row=mysqli_fetch_assoc($val))
			{
				
				echo '<tr><td>'.$row["Admission_no"].'</td>';

				echo '<td>'.$row["Name"].'</td>';
		
				echo '<td>'.$row["Department"].'</td>';

				echo '<td>'.$row["Event_id"].'</td>';

				echo '<td>'.$row["Event_name"].'</td></tr>';
				
			}
			echo '</table></center>';
		}
		else
		{
			echo '<script>alert("You are not registered any events");</script>';
		}
	
		
?>
</body>
</html>