<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="sports_management_system"; 
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
  echo "Connection failed";
}
?>