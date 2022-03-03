<html>
<head><title >Login page</title>
<link rel="stylesheet" type="text/css" href="library/css/logincss.css">
<body  style="background-image: url('home.jpg');"">
<h1 style="color:white;">SPORTS MANAGEMENT SYSTEM</h1>
<div class="loginbox">
<img class="username">
<h1>Student Login here..</h1>
<form action="" method="POST">
<p>User name
</p>
<input type="text" name="Admission_No" placeholder="Enter user name:"><br><br>
<p>Password</p>
<input type="password" name="Password" placeholder="Enter Password">
<input type="submit" name="submit" value="Login">
<pre>       <a href="signUp.php">Student Registration</a></pre>
<pre>          <a href="Admin_login.php">Admin login</a></pre>
</form>
</div>
</body>
</head>
</html>

<?php
		session_start();
		include "connection.php";
		if(isset($_POST["submit"]))
		{
			$Admission_No=$_POST["Admission_No"];
			$Password=$_POST["Password"];
			$sql="select * from student where Admission_No='$Admission_No' and Password='$Password'";
			$res=mysqli_query($con,$sql);
			$login_rows = mysqli_fetch_row($res);
			if(!$res){
				echo "login error";
			}
			if(mysqli_num_rows($res)>0){
				$_SESSION["adno"] = $login_rows[0];
				header("location:student/index.html");
			}else{
				echo "<script> alert('Invalid Credentials!');</script>";
			}
		}
	
?>