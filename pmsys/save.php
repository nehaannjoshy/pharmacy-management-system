<?php
	$servername = "localhost";
	$username = "root";
	$password = "GodDatabase5";
	$db="project";
	$conn = mysqli_connect($servername, $username, $password,$db);
	$med_id=$_POST['name1'];
	$quantity=$_POST['name2'];
	$price=$_POST['name3'];
	$sql = "INSERT INTO billing_hist VALUES ('$med_id','$quantity','$price')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
 