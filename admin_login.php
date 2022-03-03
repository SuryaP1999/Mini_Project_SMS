<html>
<head><title >Login page</title>
<h1 style="text-align:center;color:white;">SPORTS MANAGEMENT SYSTEM</h1>
<link rel="stylesheet" type="text/css" href="library/css/logincss.css">
<body style="background-image: url('home.jpg');"> 
<div class="loginbox">
<img src="library/images/username.jfif" class="username">
<h1>Admin Login here..</h1>
<form method="POST">
<p>Username:</p><br>
<input type="text" name="username" placeholder="Enter username:"><br><br>
<p>Password</p>
<input type="password" name="Password" placeholder="Enter Password">
<input type="submit" name="submit" value="Login">
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
			$user=$_POST["username"];
			$Password=$_POST["Password"];
			$sql="select * from admin_login where User_name='$user' and Password='$Password'";
			$res=mysqli_query($con,$sql);
			$login_rows = mysqli_fetch_row($res);
			if(!$res){
				echo "login error";
			}
			if(mysqli_num_rows($res)>0){
				$_SESSION["user"] = $login_rows[0];
				header("location:admin/index.html");
			}else{
				echo "<script> alert('Invalid Credentials!');</script>";
			}
		}
	
?>