<?php
$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) { die('Could not connect to MySQL: ' . mysqli_error()); 
} 


echo "<br>";

$title = mysqli_real_escape_string($link, $_POST['title']);
$poster_url = mysqli_real_escape_string($link, $_POST['poster_url']);
$trailer = mysqli_real_escape_string($link, $_POST['trailer']);
$description = mysqli_real_escape_string($link, $_POST['description']);
$year = mysqli_real_escape_string($link, $_POST['year']);
$category = mysqli_real_escape_string($link, $_POST['category']);
$showing = mysqli_real_escape_string($link, $_POST['showing']);
$price = mysqli_real_escape_string($link, $_POST['price']);

$sql = "INSERT into movies (title, poster_url, trailer, description, year, category, date, showing, price)
		VALUES ('$title', '$poster_url','$trailer','$description','$year','$category', '$showing', '$price')";
		
if ($link->query($sql) === TRUE) {
	header('Location: viewMovie.php');
}
else {
	echo "Error";
}

$link->close();	
?>