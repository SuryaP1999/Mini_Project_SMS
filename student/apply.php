<html><head><title>student registration</title>
<body>
<link rel="stylesheet" style="text/css" href="library/css/student_reg.css">
<center>
<div class="regbox">
<h1 style="color:white;">Apply Here..</h1>
<form name="apply_form" method="post">
<input type="number" name="uadno" placeholder="Enter admission no"><br><br>
<input type="text" name="uname" placeholder="Enter Name"><br><br>
<input type="text" name="udepartment" placeholder="Enter Department"><br><br>
<input type="text" name="eid" placeholder="Enter the eventid"><br><br>


<label for="events"><h3>Choose event:</h3></label>

<select name="events" id="event">
	
	<option value="select">select</option>
   <option value="High jump" style="color:black;">High jump</option>
  <option value="Long jump" style="color:black;">Long jump</option>
  <option value="Relay" style="color:black;">Relay</option>
  <option value="Javalin throw" style="color:black;">Javalin throw</option>
  <option value="Cricket" style="color:black;">Cricket</option>
</select><br><br>
<input type="submit" name="submit" value="Apply">


</form>
</div>
</center>
</body>
</head></html>


<?php
		include "connection.php";
		if(isset($_POST["submit"]))
		{
			$Admission_No=$_POST["uadno"];
			$Name=$_POST["uname"];
			$Department=$_POST["udepartment"];
			$Event_id=$_POST["eid"];
			$Event_name=$_POST["events"];

			$sql="insert into application values($Admission_No,'$Name','$Department','$Event_id','$Event_name')";
			if(mysqli_query($con,$sql)){
				echo '<script>alert("Successfully Applied");</script>';
			}
			else{
				echo "<script>alert('Registration error!');</script>";
			}
		}
	
?>