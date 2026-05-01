<?php
session_start();
if (!isset($_SESSION['account_id'])) {
	header("Location: Log In.php");
    exit();
}

$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysqli_error()); 
}

$id = $_SESSION['account_id'];
$feedback = mysqli_real_escape_string($link, $_POST['feedback']);

$sql = "INSERT into feedback (userID, feedback)
		VALUES ('$id', '$feedback')";

															
if ($link->query($sql) === TRUE) {
	header('Location: Welcome.php');
}

else {
	echo "Error";
}


$link->close();
?>