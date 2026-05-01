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

$username = $_SESSION['account_name'];
$movie = mysqli_real_escape_string($link, $_POST['bookTitle']);
$date = mysqli_real_escape_string($link, $_POST['bookTime']);
$seats = mysqli_real_escape_string($link, $_POST['bookSeat']);

$sql = "SELECT * FROM movies WHERE title = '$movie'";

$result = $link->query($sql);

while($rows=$result->fetch_assoc())
									{
$price = $rows['price']; 


$sql = "INSERT into cart (username, movie, bookingDate, seatCount, price)
		VALUES ('$username', '$movie','$date','$seats', '$price')";
		
									}
									
if ($link->query($sql) === TRUE) {
	header('Location: viewCart.php');
}

else {
	echo "Error";
}

									
$link->close();
?>