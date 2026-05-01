<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--title of the page-->
    <title>Eiyū no Sign Up</title>
	
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
          <a class="nav-link" href=""BookingCheck.php>Bookings</a>
        </li>
		<li class="nav-item">
			<?php
			if(isset($_SESSION['account_loggedin'])) {
				echo'<a class="nav-link" href="User.php">Account</a>';
			}
			else {
				echo'<a class="nav-link" href="Log In.php">Log In</a>';
			}
			?>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!--registration form-->              
<div class="container p-5 my-5 bg-danger text-white">
	<h1>Create New Account</h1>
	<div class="row">
		<div class="col-sm">
		  
		  <div class="card">
  <div class="card-header">
    Sign up
  </div>
  <div class="card-body">
		    <form name="registerForm" action="register.php" method="POST">
			  <div class="form-row">
				<div class="form-group col-md-12"> 
				  <input type="text" class="form-control" name="firstname" placeholder="Enter your Firstname" required>
				</div>
				<br>
				<br>
				<div class="form-group col-md-12"> 
				  <input type="text" class="form-control" name="surname" placeholder="Enter your Surname" required>
				</div>
				<br>
				<br>
				<div class="form-group col-md-12">
				  <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
				</div>
				<br>
				<br>
				<div class="form-group col-md-12"> 
				  <input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
				</div>
			  </div>
			<br>
			<br>
			<div class="form-row">
				<div class="form-group col-md-12">
				  <input type="password" class="form-control" placeholder="Create Password" name="password" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<div id="strengthText"></div>
					<div id="passwordError" class="error"></div>
				</div>
			</div>
			<br>
			<br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<button class="button" type="submit" class="btn btn-outline-danger">Sign Up</button>
			</div>
			</form>
			<p>Already have an account?</p>  <a href="Log In.html">Log In!</a> 
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
 




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
