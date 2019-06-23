<?php
	if($_COOKIE["LogIn"] == "success"){
		setcookie("LogIn","",time()-365);
	}
?>
<!doctype html>
<html>
	<head>
		<title></title>
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
	<body>
		<div class=" jumbotron container bg-dark">
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                          	<ul class="navbar-nav">
                              		<li id="LogIn" class="nav-item">
                                        	    <a class="nav-link" href="#">Login</a>
                              		</li>
                              		<li id="SignUp"class="nav-item">
                                        	  <a class="nav-link" href="#">Sign up</a>
                              		</li>
                        	</ul>
			</nav>	
			<div class="login">
				<form action="logIn.php" method="POST" class="animate">
					<div class="container">
						<label for="username" style="color : grey"><b>Username</b></label>
						<input type="text" placeholder="Enter username" name="username" required></br>
						<label for="password" style="color : grey"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required></br>
						<input type="submit" value="Login">
					</div>				
				</form>
			</div>
			<div class="signup">
				<form action="signUp.php" method="POST">
					<div class="container">
						<label for="new_username" style="color : grey"><b>Username</b></label></br>
                                        	<input type="text" placeholder="Enter username" name="new_username" required></br>
                                        	<label for="new_password" style="color : grey"><b>Password</b></label></br>
						<input id="pass" type="password" placeholder="Enter Password" name="new_password" required></br>
						<label for="confirm_pass" style="color : grey"><b>Confirm Password</b></label>
						<input id="confirm" type="password" placeholder="Confirm password" name="confirm_pass" required></br>
						<label for="new_email" style="color : grey"><b>Email</b></label></br>
						<input type="text" placeholder="Enter Email" name="new_email" required>
						<p id="no_match">Password Must Match</p>
						<input type="Submit" id="btn" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
