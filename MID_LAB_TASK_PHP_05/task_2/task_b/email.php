<?php
	
	if(isset($_POST['Submit']))
	{
		 
		echo "email :".$_POST['email'];
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>email</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend><b>email</b></legend>
			
						<input type="email" name="email">
						
						<input type="submit" name="Submit" value="Submit">
					
		</fieldset>
	</form>
</body>
</html>