<?php
	
	if($_POST['name'] !== '')
	{
		echo "Name: ".$_POST['name'];
	
	}
	else
	{
		echo "Enter a name";
	}
?>