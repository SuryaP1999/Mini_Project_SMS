<html><head><title></title>
<body>
<link rel="stylesheet" style="text/css" href="library/css/student_reg.css">

<div class="regbox">
<center>
<h1 style="color:white;">ADD EVENTS</h1>
<form name="add_events" method="post" >
<input type="text" name="Event_id" placeholder="Enter Event Id" height="100px"><br><br>
<input type="text" name="Event_name" placeholder="Enter Event_name"><br><br>
<input type="text" name="Venue" placeholder="Enter venue"><br><br>
<h3 style="color:white;">Date <input type="date" name="Date" placeholder="Enter date"></h3><br>
<h3 style="color:white;">Time <input type="time" name="Time" placeholder="Enter Time"></h3>
<h3 style="color:white;"><p>Gender:</p>
<input type="checkbox" name="Gender" value="Male" id="male">
<label for="g1">Male</label>
<input type="checkbox" name="Gender" value="Female" id="female">
<label for="g1">Female</label><br><br>
<center>
<input type="submit" name="submit" value="ADD">
</center>
</form>
</center>
</div>

</body>
</head></html>


<?php
	include "connection.php";
	

		if(isset($_POST["submit"]))
		{
			$Event_id=$_POST["Event_id"];
			$Event_name=$_POST["Event_name"];
			$Venue=$_POST["Venue"];
			$Date=$_POST["Date"];
			$Time=$_POST["Time"];
			$Gender=$_POST["Gender"];


			$sql="insert into events values('$Event_id','$Event_name','$Venue','$Date','$Time','$Gender')";
			if(mysqli_query($con,$sql))
			{
				echo '<script>alert("successfully add events");</script>';
			}
			else
			{
				echo"error";
			}
		}
	
?>



