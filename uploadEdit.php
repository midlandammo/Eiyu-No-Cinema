<?php
$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) { die('Could not connect to MySQL: ' . mysqli_error()); 
}


if (!isset($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['CheckPassword'])) {
	exit('Error: Form was not filled.');
}


if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
	exit('Error: Form was not filled.');
}


if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}


if ($_POST['password'] != $_POST['CheckPassword']) {		
	echo 'Unable to Update';
	header("Location: Log In.php");	
} 

else {
		$hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		if ($stmt = $link->prepare("UPDATE users SET firstname ='?', lastname = '?', username ='?', email ='?', password = '?' WHERE ID = '?'`")) {
			$stmt->bind_param('sssss', $_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $hash_password);
			$stmt->execute();
			echo 'Detailes Editted Successfully';
			header("Location: Log In.php");
		} else {
			echo 'Unable to Update';
			header("Location: Log In.php");
				}
	}
	

	$stmt->close();

$link->close();
?>	
