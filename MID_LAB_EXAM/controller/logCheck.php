<?php

	session_start();

	if(isset($_POST['login'])){

		$name = $_POST['name'];
		$password = $_POST['password'];
		
		$user = ['name'=> $name, 'password'=> $password, 'id'=>$id];
		$formdata = array(
			'name'=> $_POST["name"],
			'password'=> $_POST["password"],
			'id'=> $_POST["id"]
			
		 );

		$userFile = fopen("../model/data.json", "r");
		$userData = fread($userFile, filesize('../model/data.json'));
		//$data = file_get_contents('../model/data.json');
		$existingdata[]= json_decode($userData, true);
      
		if($name == "" || $password == ""){
			echo "null input...";
		}else{

			foreach ($existingdata as $key => $value) {
				foreach ($value as $k => $v) {	
			 
			if($v['name'] == $_POST['name'] && $v['password'] == $_POST['password']){
				$_SESSION['flag'] = true;
				//print_r($value['name']);
								
				$_SESSION['current_user'] =$formdata;
				header('location: ../view/home.php');
			}else{
				echo "invalid user". "<br>";
				
			}
		  }
		 }	

		}
	}


?>