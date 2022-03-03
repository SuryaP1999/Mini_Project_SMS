<?php
	include "../connection.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
	//$sql='delete from events where Event_id="$id"';
	//$results=mysqli_query($sql);



	$sql = "DELETE FROM events WHERE Event_id='$id'";

if ($con->query($sql) === TRUE) {
  echo "<script>alert('Record deleted successfully');</script>";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();
    }

?>