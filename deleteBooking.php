<?php
session_start();
if (!isset($_SESSION['account_id'])) {
	header("Location: Log In.php");
    exit();
}

$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) { die('Could not connect to MySQL: ' . mysqli_error()); 
} 


echo "<br>";

$id = $_POST['count'];

$sql = "DELETE FROM bookings WHERE bookingID = '$id'";
		
if ($link->query($sql) === TRUE) {
	header('Location: bookingCheck.php');
}
else {
	echo "Error";
}

$link->close();	
?>