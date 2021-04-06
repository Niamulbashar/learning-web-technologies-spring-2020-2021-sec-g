<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form>
		<fieldset>
			<legend> <h1> Tour Buddy</h1> </legend>
			<table align='center' height='400px' >
				<tr>
					<td>
					<h2>Sign up  </h2>	
					</td>
				</tr>
				<tr>

					<td>Username</td>
					<td>	Name<br> <input type="text" id="name" name="name" onkeyup="NameValidation()"> 
						
				
						</td>

				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="repass" value=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>

				<tr>
					
					    <td>Gender</td>
						<td> <input type='radio' name='gender' value='Male'>Male
            			<input type='radio' name='gender' value='Female'>Female
            			<input type='radio' name='gender' value='Others'>Others
					</td>
						
				</tr>		
				
				<tr>
					<td>DOB</td>
						<td>	<input type="number" name="date" size="5"> /
							<input type="number" name="month" size="5"> /
							<input type="number" name="year" size="5"> <i> (dd/mm/yyyy) </i>
						</td>
				</tr>
				<tr>
					<td>Upload File</td>
						<br>
						<td><input type="file" name="uploadFile"> 
						<input type="submit" name="submit" value="Upload">
						</td> 
				</tr>



				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Submit"  onclick="NameValidation()"> 
						<a href="login.html">Login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>

