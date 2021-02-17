<?php
	
	if($_POST['email'] !== '')
	{
		echo "Email : ";
		$email = $_POST['email'];
		echo "$email";
	}
	else
	{
		echo "Enter a email";
	}
?>