<html>
<head></head>
<body>
<?php
		include "../connection.php";
		$query="select * from events";
		$val=mysqli_query($con,$query);
		if(mysqli_num_rows($val)>0)
		{
			
			echo '<link rel="stylesheet" style="text/css"><center><table border="1" style="color:black;font-size:20px;background-color:white;text-align:center;"><h1 style="color:white;">Events</h1>';
			echo '<tr><th>Event id</th><th>Event Name</th><th>Venue</th><th>Date</th><th>Time</th><th>Gender</th><th>Action</th></tr>';
			while($row=mysqli_fetch_assoc($val))
			{
				
				echo '<tr><td>'.$row["Event_id"].'</td>';

				echo '<td>'.$row["Event_name"].'</td>';

				echo '<td>'.$row["Venue"].'</td>';

				echo '<td>'.$row["Date"].'</td>';

				echo '<td>'.$row["Time"].'</td>';

				echo '<td>'.$row["Gender"].'</td>';
				echo '<td>';
					echo "<a href='event_delete.php?id=".$row["Event_id"]."'>Delete</a>";
				echo '</td></tr>';
			}
			echo '</table></center>';
		}
		else
		{
			echo "<script>alert('There is no Events');</script>";
		}
	
		
?>
</body>
</html>