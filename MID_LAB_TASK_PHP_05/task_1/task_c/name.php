

<!DOCTYPE html>
<html>
<head>
	<title>name</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend><b>Name</b></legend>
			
						<input type="text" name="name" value=" <?php echo  $_POST['name']; ?> ">
						
						<input type="submit" name="Submit" value="Submit">
					
		</fieldset>
	</form>
</body>
</html>