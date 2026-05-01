<?php 
session_start();
if (!isset($_SESSION['account_id'])) {
    ?><div class="container p-5 my-5 bg-danger text-white">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Log In to Book your seat!</strong>
</div>  <?php
}

$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) { die('Could not connect to MySQL: ' . mysqli_error()); 
}

$sql = "SELECT * FROM movies";


$result = $link->query($sql);

        $link->close();
		
?>


<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--title of the page-->
    <title>Eiyū no Cinema</title>
	
	<!--links to all the styling pages-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	
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
          <a class="nav-link active" aria-current="page" href="#">Welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="movies.php">Movies</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="BookingCheck.php">Bookings</a>
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
		<li class="nav-item">
          <a class="nav-link" href="viewCart.php">Cart</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	<!--greeting-->
	<div class="container">
        <div class="row">
            <div class="container p-5 my-5 bg-danger text-white">
			<h1>Kon'nichiwa!</h1>
			<h3>And Welcome!</h3>
			</div>
        </div>
    </div>
	
	<!--message to the users (to be filled in)-->
	<div class="container">
        <div class="row">
            <div class="container p-5 my-5 bg-danger text-white">
			<p> 
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim arcu nec mauris tempor elementum. Nullam eget arcu auctor, lobortis mauris nec, malesuada urna. Nunc laoreet odio vel dolor egestas, ut auctor lectus consequat. Donec urna nisi, interdum non blandit at, tempor vel massa. Proin purus est, scelerisque id nulla quis, porta aliquam mi. Mauris quis erat non est sodales scelerisque. Sed consectetur neque justo, vel auctor enim vulputate nec. Morbi eget mauris lorem.
			</p>
			</div>
        </div>
    </div>
	
	<!--Poster carousel-->
	<div class="container p-5 my-5 bg-danger text-white">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
				<div class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/placeholder.png" class='img-fluid' alt='...'> 
						</div>
						<?php while($rows=$result->fetch_assoc()) { ?>
						<div class="carousel-item">
							<img src= <?php echo $rows['poster_url']; ?> class='img-fluid' alt='...' style="Width:265px;height:376px;"> 
						</div>
						<?php } ?> 
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