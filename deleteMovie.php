<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
	header("Location: adminLogIn.php");
    exit();
}

$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) { die('Could not connect to MySQL: ' . mysqli_error()); 
} 


echo "<br>";

$id = $_POST['count'];

$sql = "DELETE FROM movies WHERE id = '$id'";
		
if ($link->query($sql) === TRUE) {
	header('Location: viewMovie.php');
}
else {
	echo "Error";
}

$link->close();	
?>