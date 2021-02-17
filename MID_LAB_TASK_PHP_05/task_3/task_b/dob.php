<?php
	

	echo $_POST['date'];
	echo $_POST['month']."\r\n";
	echo $_POST['year']." \r\n";
?>

<html>
<head>
	<title>DOB</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DATE OF BIRTH</legend>

				<input type="number" name="date" size="9" > 
				<input type="number" name="month" size="9" > 
				<input type="number" name="year" size="9" > 
			
				<input type="submit" name = 'Submit' value="Submit">
		</fieldset>
	</form>
</body>
</html>