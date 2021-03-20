<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}
		
		else{

			$user = $_SESSION['current_user'];

			
			$connection = mysqli_connect('localhost','root','','mgt');
			$sql = "select * from registration";
			$result = mysqli_query($connection, $sql);

			$flag = false;
			while($row = mysqli_fetch_assoc($result))
			{
				$username = $row['name'];
				$password = $row['password'];

		 $_SESSION['flag'] = true;
				
				header('location: ../view/home.php');
				
			}
		}
	}

  
?>