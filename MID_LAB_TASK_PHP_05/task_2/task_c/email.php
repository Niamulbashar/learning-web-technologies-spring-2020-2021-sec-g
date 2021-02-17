

<!DOCTYPE html>
<html>
<head>
	<title>email</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend><b>email</b></legend>
			
						<input type="email" name="email" value=" <?php echo  $_POST['email']; ?> ">
						
						<input type="submit" name="Submit" value="Submit">
					
		</fieldset>
	</form>
</body>
</html>