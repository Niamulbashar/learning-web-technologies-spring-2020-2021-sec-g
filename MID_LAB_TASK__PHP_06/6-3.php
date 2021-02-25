<?php
	
	if(isset($_POST['Submit']))
	{
		
		$extension  = strtolower(pathinfo($_POST['P'], PATHINFO_EXTENSION));
        
		if ( $extension =='jpg' || $extension =='jpeg'  || $extension =='png' )
	    {
			
		}
        else {
            echo " The picture format is invalid !!";
        }
	   
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>Profile Picture</b></legend>
				<table>
				<tr>
					<td> <input type="file" name="P"/> 
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