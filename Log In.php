<?php
session_start();
if (!isset($_SESSION['account_id'])) {

}
else {
	header('Location: User.php');
}
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--title of the page-->
    <title>Eiyū no Log-In</title>
	
	<!--links to all the styling pages-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
	
	<!--in document styling-->
	<style>
		h1 {text-align: center;}
h3 {text-align: center;}
p {text-align: center;}
h1 { font-family: "Libre Baskerville", serif;}
h3 { font-family: "Libre Baskerville", serif;}
p {font-family: "IBM Plex Sans Condensed", sans-serif;}

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }

	a {
  color: inherit;
  text-decoration: inherit;
}	
	</style>
</head>
  <body>
  <!--navbar and menu--> 
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
		<img src="images/EiyuNo.png" alt = "" width = "40" height = "40" class="d-inline-block align-text-top">
      Eiyū no Cinema
    </a>
	
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>	
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  
        <li class="nav-item">
          <a class="nav-link" href="Welcome.php">Welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="movies.php">Movies</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="BookingCheck.php">Bookings</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="viewCart.php">Cart</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	<!--user log in-->
	<div class="container p-5 my-5 bg-danger text-white">
	<h1 class="text-center">Account Log In</h1>
	<div class="row">
		<div class="col-sm">
		  
		  <div class="card">
  <div class="card-body">
		<form action="login.php" method="POST">
			<div class="row">
				<div class="form-group col-md-12">
					<label>Username:</label><br>
					<input type="username" class="form-control" name="username" placeholder="Username" required><br><br>
				</div>
				<div class="form-group col-md-12">
					<label>Password:</label><br>
					<input type="password" class="form-control" placeholder="Password" name="password" required><br><br>
				</div>
			</div>
			

			<div class="d-grid gap-2 col-6 mx-auto">
				<button class="button" type="submit" class="btn btn-outline-danger">Log In</button>
			</div>
			</form>
			
			<p>Don't have an account?</p><a href="registration.php">Sign Up!</a> <br><br>
			<a href="adminLogIn.php">Admin Log In</a> 	
			
</div>
</div>
</div>
</div>
</div>

<!--footer-->
<div class="container">
        <div class="row">
            <div class="container p-5 my-5 bg-danger text-white">
			<p> 
			<a href="privacyPolicy.php">Privacy Policy</a>
			</p>
			
			<p> 
			<a href="feedback.php">Contact Us</a>
			</p>
			</div>
        </div>
    </div>
 
</body>
</html>