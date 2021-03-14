<?php
	session_start();

	if(isset($_POST['signup'])){

		$name = $_POST['name'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$id = $_POST['id'];

		if($name == "" || $password == "" || $id == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['name'=> $name, 'password'=> $password, 'id'=>$id];
				$formdata = array(
					'name'=> $_POST["name"],
					'password'=> $_POST["password"],
					'id'=> $_POST["id"]
					
				 );
				
				$existingdata = file_get_contents('../model/data.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/data.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/data.json");
				$mydata = json_decode($data);
				
				
				
				
				
						$_SESSION['name'] = '';
						$_SESSION['password'] = "";
				
						echo "User Id is: " . $_SESSION['name'];
						echo "<br>";
						echo "Password is: " . $_SESSION['password'];

			
				$_SESSION['current_user'] = $user;

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>