<html><head><title>student registration</title>
<body style="background: url(home.jpg)">
<h1 style="color:white;text-align:center;">SPORTS MANAGEMENT SYSTEM</h1>
<link rel="stylesheet" style="text/css" href="library/css/student_reg.css">

<div class="regbox">
<h1>Student Registration</h1>
<form name="studentregform" method="post">
<input type="number" name="uadno" placeholder="Enter admission no">
<input type="text" name="uname" placeholder="Enter Name">
<input type="text" name="udepartment" placeholder="Enter Department">
<input type="number" name="umobile" placeholder="Enter mobile no ">
<input type="text" name="uemail" placeholder="Enter Email">
Date of Birth  <input type="date" name="dob">
<p>Gender:</p>
<input type="radio" name="gender" value="Male" id="male">
<label for="male">Male</label>
<input type="radio" name="gender" value="Female" id="female">
<label for="female">Female</label>
<input type="textbox" name="achieve" placeholder="If you have any Achievements type no if have no achievements">
<input type="password" name="upassword" placeholder="Enter password">
<input type="password" name="uconfirm" placeholder="Confirm password">
<input type="submit" name="submit" value="Register">
<a href="login.php"><input type="button" name="signin" value="Sign in"></a>
</form>
</div>
</body>
</head></html>


<?php
		include "connection.php";
		if(isset($_POST["submit"]))
		{
			$Admission_No=$_POST["uadno"];
			$Name=$_POST["uname"];
			$Department=$_POST["udepartment"];
			$Mobile=$_POST["umobile"];
			$Email=$_POST["uemail"];
			$DOB=$_POST["dob"];
			$Gender=$_POST["gender"];
			$Achievements=$_POST["achieve"];
			$Password=$_POST["upassword"];
			$ConfirmPassword=$_POST["uconfirm"];

			$sql="insert into student values($Admission_No,'$Name','$Department',$Mobile,'$Email','$DOB','$Gender','$Achievements','$Password')";
			if(mysqli_query($con,$sql)){
				session_start();
				$_SESSION["adno"] = $Admission_No;
				header("location:student/index.html");
			}
			else{
				echo "<script>alert('Registration error!');</script>";
			}
		}
	
?>