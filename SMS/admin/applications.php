<html>
<head></head>
<body>
<?php
		include "../connection.php";
		$query="select * from application";
		$val=mysqli_query($con,$query);
		if(mysqli_num_rows($val)>0)
		{
			
			echo '<link rel="stylesheet" style="text/css"><center><table border="1" cellspacing="10px" style="color:white;font-size:20px;background-color:black;"><h2 style="color:white;">REGISTERED STUDENTS</h2>';
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
			echo "<script>alert('No applications');</script>";
		}
	
		
?>
</body>
</html>