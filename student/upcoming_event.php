<html>
<head></head>
<body>
<?php
		include "../connection.php";
		$query="select * from upcoming_event";
		$val=mysqli_query($con,$query);
		if(mysqli_num_rows($val)>0)
		{
			
			echo '<link rel="stylesheet" style="text/css"><center><table border="1" style="color:black;font-size:20px;background-color:white;text-align:center;"><h1 style="color:white;">Upcoming Event Details</h1>';
			echo '<tr><th>Event_id</th><th>Event_name</th><th>Registration_start</th><th>Registration_End</th><th>Apply</tr>';
			while($row=mysqli_fetch_assoc($val))
			{
				
				echo '<tr><td>'.$row["Event_id"].'</td>';

				echo '<td>'.$row["Event_name"].'</td>';

				echo '<td>'.$row["Registraion_start"].'</td>';

				echo '<td>'.$row["Registraion_end"].'</td>';


				echo '<td>';
					echo "<a href='apply.php'>Apply</a>";
				echo '</td></tr>';
			}
			echo '</table></center>';
		}
		else
		{
			echo '<script>alert("No Upcoming events");</script>';
		}
	
		
?>
</body>
</html>