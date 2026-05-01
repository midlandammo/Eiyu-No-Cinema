<?php
$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) { die('Could not connect to MySQL: ' . mysqli_error()); 
}


if (!isset($_POST['firstname'], $_POST['surname'], $_POST['username'], $_POST['email'], $_POST['password'])) {
	exit('Error: Form was not filled.');
}


if (empty($_POST['firstname']) || empty($_POST['surname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
	exit('Error: Form was not filled.');
}


if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}


if ($stmt = $link->prepare('SELECT id, password FROM users WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		echo 'Error: Username already exists.';
	} else {
		$hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		if ($stmt = $link->prepare('INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`) VALUES (?, ?, ?, ?, ?)')) {
			$stmt->bind_param('sssss', $_POST['firstname'], $_POST['surname'], $_POST['username'], $_POST['email'], $hash_password);
			$stmt->execute();
			echo 'Registration Successful';
			header("Location: Log In.php");
		} else {
			echo 'Unable to Register';
			header("Location: registration.php");
				}
	}
	

	$stmt->close();
} 
else {
	echo 'Unable to Register';
	header("Location: registration.php");
}

$link->close();
?>

