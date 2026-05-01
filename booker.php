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

$sql = "SELECT * FROM cart WHERE username = '". $_SESSION['account_name'] . "'";

$result = $link->query($sql);

while($rows=$result->fetch_assoc())
									{

$username = $_SESSION['account_name'];
$movie =  $rows['movie'];
$date = $rows['bookingDate'];
$seats = $rows['seatCount'];
$hash_card = password_hash($_POST['bankCard'], PASSWORD_DEFAULT);
$price = $rows['price'];

$truePrice = $price * $seats;

$sql = "INSERT into bookings (username, movie, bookingDate, seatCount, bankCard, price)
		VALUES ('$username', '$movie','$date','$seats','$hash_card', '$truePrice')";

									}
									
if ($link->query($sql) === TRUE) {
	header('Location: emptyCart.php');
}

else {
	echo "Error";
}


$link->close();
?>