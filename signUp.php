<?php
		$servername = "localhost";
                $username = "ubuntu";
                $password = "password";
		$connname = "Recipe";
		$conn = new mysqli($servername,$username,$password,$connname);
		
		if($conn->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}
		echo "Connection was succesful\n";

		if(isset($_COOKIE['Signup']))setcookie("Signup","fail",time()-365);
		function createUser($conn)
		{	
			$new_user = $_POST["new_username"];
			$new_pass = $_POST["new_password"];
			$confirm_pass = $_POST["confirm_pass"];
			if($confirm_pass != $new_pass){
				setcookie("Signup","fail");
				header("Location: index.php");
				return;
			}
			$email = $_POST["new_email"];
			$sql = "insert into User values ('$new_user','$new_pass','$email')";
			if($conn->query($sql) == TRUE)
			{
				echo "Values added";
				header("Location: index.php");
				return;		
			}
			echo "Fail";
		}

	
		createUser($conn);
?>
