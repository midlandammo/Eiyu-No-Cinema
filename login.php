<?php
session_start();
$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) { die('Could not connect to MySQL: ' . mysqli_error()); 
}

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Error: Username and Password not Entered');
}


if ($stmt = $link->prepare('SELECT id, password FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    
		if ($stmt->num_rows > 0) {
			$stmt->bind_result($id, $password);
			$stmt->fetch();
		if (password_verify($_POST['password'], $password)) {
			session_regenerate_id();
			$_SESSION['account_loggedin'] = TRUE;
			$_SESSION['account_name'] = $_POST['username'];
			$_SESSION['account_id'] = $id;
			header('Location: User.php');
			} 
			
		else {
			echo 'Incorrect username and/or password!';
			}
	} 
	else {
		echo 'Incorrect username and/or password!';
	}
    $stmt->close();
}
$link->close();
?>
