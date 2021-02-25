<?php
	
	if(isset($_POST['Submit']))
	{
		

		if( $_POST['current'] == $_POST['new_pass'])
        {

            echo " The new password is the same as current password !!  <br>" ; 
         }
        if($_POST['new_pass']!==  $_POST['re_type'])
		{
			echo " Re-typing mistake !!!";
		  }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>Change Password</b></legend>
				<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="password" name="current"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> new password: </td>
					<td> <input type="password" name="new_pass"/> <br/></td>
				</tr>

				<tr>
					<td>Re-type password: </td>
					<td> <input type="password" name="re_type"/> <br/></td>
				</tr>
			</table>
			
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>