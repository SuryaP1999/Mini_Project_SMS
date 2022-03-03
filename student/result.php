
<html>
<head><title>Student request approval</title>
<style>
body {
 background-image: url("library.jpg");
  background-repeat: no-repeat; 
  background-size: cover;
 
}
th,td{
    color:white;
}

table {

background-color: rgba(0, 0, 0, 0.5);

}

</style>
</head>




<?php
		include "../connection.php";
		$query="select * from result";
		$val=mysqli_query($con,$query);
		if(mysqli_num_rows($val)>0)
		{
			
			echo '<link rel="stylesheet" style="text/css"><center><table border="1" style="color:black;background-color:black;"><h1 style="color:white;">RESULT</h1>';
			echo '<tr><th>Event_id</th><th>Event_name</th><th>Winner</th><th>Position</th></tr>';
			while($row=mysqli_fetch_assoc($val))
			{
				
				echo '<tr><td>'.$row["Event_id"].'</td>';

				
				echo '<td>'.$row["Event_name"].'</td>';

				
				echo '<td>'.$row["Winner"].'</td>';

				
				echo '<td>'.$row["Prize"].'</td></tr>';

			
			}
			echo '</table></center>';
		}
		else
		{
			echo "<script>alert('Not Published');</script>";
		}
	
		
?>
</body>
</html>