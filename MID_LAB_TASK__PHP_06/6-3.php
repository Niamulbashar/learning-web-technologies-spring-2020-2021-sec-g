<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture</title>
</head>
<body>
	<form method="POST" action="picture_file_check.php" enctype="multipart/form-data">
		<fieldset>
			<legend> <b>Profile Picture</b></legend>
				<table>
				<tr>
					<td> <input type="file" name="Picfile"/> 
					<br/> </td>
				</tr>
			</table>
			<hr>
			<br> <br>
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>