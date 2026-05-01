<?php 
/*session_start();
if (!isset($_SESSION['admin_id'])) {
	header("Location: adminLogIn.php");
    exit();
}*/


$link = mysqli_connect('localhost','root','','cf_db'); 
if (!$link) {  
	die('Could not connect to MySQL: ' . mysqli_error()); 
} 


$sql = "SELECT * FROM movies";

$result = $link->query($sql);

?> 

<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--title of the page-->
    <title>Eiyū no Admin View</title>
	
	<!--links to all the styling pages-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
	
	<!--in document styling-->
	<style>
		h1 {text-align: center;}
		h3 {text-align: center;}
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
          <a class="nav-link" href="booking.php">Bookings</a>
        </li>
		<li class="nav-item">
			<?php
			if(isset($_SESSION['admin_loggedin'])) {
				echo'<a class="nav-link" href="Admin.php">Admin</a>';
			}
			else {
				echo'<a class="nav-link" href="adminLogIn.php">adminLogIn.php</a>';
			}
			?>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	
	<!--admin movie view-->
	<div class="container p-5 my-5 bg-danger text-white">
	<h1 class="text-center">View Movies</h1>
      <div class="card">
			<div class="card-body">
				<div class="row">
					<div class="form-group col-md-12">	
							
								<table>
									<tr>
										<th>id</th>
										<th>Title</th>
										<th>Poster URL</th>
										<th>Trailer</th>
										<th>Year</th>
										<th>Date</th>
									</tr>
									<?php 
										while($rows=$result->fetch_assoc())
									{
									?>
									<tr>
										<td><?php echo $rows['id'];?></td>
										<td><?php echo $rows['title'];?></td>
										<td><?php echo $rows['poster_url'];?></td>
										<td><?php echo $rows['trailer'];?></td>
										<td><?php echo $rows['year'];?></td>
										<td><?php echo $rows['date'];?></td>
									</tr>
									<?php
									}
									?>
								</table>	
						</div>
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