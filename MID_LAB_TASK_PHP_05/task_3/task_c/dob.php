


<html>
<head>
	<title>DOB</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DATE OF BIRTH</legend>

				<input type="number" name="date" size="9" value="<?php echo $_POST['date']; ?>"> 
				<input type="number" name="month" size="9" value="<?php echo $_POST['month'];  ?>"> 
				<input type="number" name="year" size="9" value="<?php echo $_POST['year'];  ?>"> 
			
				<input type="submit" name = 'Submit' value="Submit">
		</fieldset>
	</form>
</body>
</html>
