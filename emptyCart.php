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

$name = $_SESSION['account_name'];

$sql = "DELETE FROM cart WHERE username = '$name'";
		
if ($link->query($sql) === TRUE) {
	header('Location: BookingCheck.php');
}
else {
	echo "Error";
}

$link->close();	
?>