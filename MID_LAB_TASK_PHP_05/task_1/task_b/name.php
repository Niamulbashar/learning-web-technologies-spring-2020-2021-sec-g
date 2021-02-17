<?php
	
	if(isset($_POST['Submit']))
	{
		 
		echo "Name :".$_POST['name'];
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>name</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend><b>Name</b></legend>
			
						<input type="text" name="name">
						
						<input type="submit" name="Submit" value="Submit">
					
		</fieldset>
	</form>
</body>
</html>