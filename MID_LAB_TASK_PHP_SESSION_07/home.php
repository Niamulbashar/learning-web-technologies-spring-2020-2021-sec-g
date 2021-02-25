  
<?php
	session_start();
	if(isset($_SESSION['flag']))
	{}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<table border="5" height="500px" width="100%" >
		<tr height = "100px">
			<td align="right" rowspan="2">
				<a href="home.html"> <img src="p.png" align="left"> </a>
				<a href="home.html"> Home </a> 
				
				<a href="login.php"> Login </a>
				
				<a href="registration.php"> Registration </a>
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr height = "500px">
			<td  colspan="1">
			<h1>WELCOME TO X COMPANY </h1>	
		</tr>
		<tr height = "100px">
			<td colspan="2">
				<center> Copyright &copy 2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>