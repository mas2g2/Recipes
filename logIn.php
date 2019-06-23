<?php
	function authenticate(){
		$servername = "localhost";
		$username = "ubuntu";
		$password = "password";
		$dbname = "Recipe";
		$fav ="";
		$conn = new mysqli($servername,$username,$password,$dbname);

		if($conn->connect_error){
			die("Connection failed: ".$conn->connect_error);
			return;
		}
		echo "Connected successfully";
		$login = false;
		$username = $_POST["username"];
		$password = $_POST["password"];
		$sql = "select * from User where Username = '$username' and Password='$password'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$login = true;
			header('Location: ../home.php?login=true');
			echo "Access granted";
			$sql = "select Favorite from Favorite where Username = '$username'";
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc()){
					$fav = $fav . $row["Favorite"]. "</br>";		
				}
			}
			else{
				$fav = "No favorites";
			}
			setcookie("Favorites",$fav);
			setcookie("LogIn","success");
			setcookie("Username",$username);
			return;
		}
		header('Location: ../index.php?login=false');
		echo "Failed login";
	}
	authenticate();
?>
