

<?php

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				
				$connection = mysqli_connect('localhost','root','','mgt');
				$sql = "insert into registration (name,password,confirmpass,email) values('$username','$password','$repass','$email')";
				$result = mysqli_query($connection,$sql);
				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>