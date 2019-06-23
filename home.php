<?php 
	if($_COOKIE["LogIn"] != "success"){
		header("Location: index.php");
	}

?>
<!doctype html>
<html>
	<head>
		<title>Recipes</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="static/style.css">	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
		<script src="scripts/script.js"></script>
	</head>
	<body onload="loadHome()">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			  <ul class="navbar-nav">
		              <li id="account" class="nav-item">
				          <a class="nav-link" href="#">Account</a>
			      </li>
			     <li id="home" class="nav-item active">
			                  <a class="nav-link" href="#">Home</a>
			     </li>
			     <li class="nav-item">
			     		  <a id="logout" class="nav-link" href="index.php">LogOut</a>
			     </li>
			</ul>
		</nav>
		<div class="home">
			<div class="container">
				<div class="title jumbotron text-center">
					<h1>Welcome to your Cookbook</h1>
				</div>
				<div class="jumbotron">
					<h2>Search For Recipes by Ingredient</h2>
					<div class="form">
						<form action="search.php" method="get">
							<div class="input">
								<textarea class="form-control" name="ingredients" placeholder="Enter coma-separated list of ingredients"></textarea>
							</div>
							
							<input type="submit" class="btn" value="Search">
						</form>
					</div>
				</div>
				<div class="jumbotron">
					<h2>Recipes</h2>
					<div class="info" id="recipes" style="width: 100%">
						Here you will see recipes that use the ingredients that you have entered
					</div>
				</div>
			</div>
		</div>
		<div class="account">
			<div class="container">
				<div class="title jumbotron text-center">
					<h1>Account</h1>
				</div>
				<div class="jumbotron">
					<h2>Your Favorites</h2>
					<div class="info">
						<?php
							$fav = $_COOKIE["Favorites"];
							echo $fav;
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
