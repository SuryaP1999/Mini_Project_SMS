<?php
  session_start();
  if(!isset($_SESSION['adno'])){
	  header("location:../login.php");
  }
?>

<html>
<head></head>
<body>
<?php
		include "../connection.php";
		$adno = $_SESSION['adno'];
		$query="select * from student WHERE Admission_No='$adno'";
		$val=mysqli_query($con,$query);
		if(mysqli_num_rows($val)>0)
		{
			
			echo '<link rel="stylesheet" style="text/css"><center><table cellspacing="10px" style="color:white;font-size:20px;background-color:black;"><h1 style="color:white;">PROFILE</h1>';
			while($row=mysqli_fetch_assoc($val))
			{
				echo '<tr><th>Admission_No</th>';
				echo '<td>'.$row["Admission_No"].'</td></tr>';

				echo '<tr><th>Name</th>';
				echo '<td>'.$row["Name"].'</td></tr>';

				echo '<tr><th>Department</th>';
				echo '<td>'.$row["Department"].'</td></tr>';

				echo '<tr><th>Mobile</th>';
				echo '<td>'.$row["Mobile"].'</td></tr>';

				echo '<tr><th>Email</th>';
				echo '<td>'.$row["Email"].'</td></tr>';

				echo '<tr><th>DOB</th>';
				echo '<td>'.$row["DOB"].'</td></tr>';

				echo '<tr><th>Gender</th>';
				echo '<td>'.$row["Gender"].'</td></tr>';
	
				echo '<tr><th>Achievements</th>';
				echo '<td>'.$row["Achievements"].'</td></tr>';
			}
			echo '</table></center>';
		}
		else
		{
			echo "no rows";
		}
	
		
?>
</body>
</html>