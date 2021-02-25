<?php
	session_start();

	if(isset($_POST['Submit']))
	{
		$login_permission = FALSE;

		$new_name= trim($_POST["name"]," ");
        $new_pas= trim($_POST["Password"]," ");
         
        $name_flag=FALSE;
        $password_flag=FALSE;

		if(strlen($new_name)<2)
		{
			$name_flag=TRUE;
		}

        if (!(ctype_alnum($new_name))) {
            $name_flag=TRUE;
        
        }

        

      
        if(strlen($new_pas)<8)
		{
            $password_flag=TRUE;
		}

	    
		$special_cha = FALSE;
		for ($i=0; $i < strlen($_POST['Password']); $i++) { 
			if($_POST['Password'][$i] === '@' || $_POST['Password'][$i] === '#' || $_POST['Password'][$i] === '$' || $_POST['Password'][$i] === '$')
			{
				$special_cha=TRUE;
				break;
			}
		}

	 if($special_cha == FALSE)
		{ 
            $password_flag=TRUE;
		}
	if ($name_flag == FALSE || $password_flag == FALSE) {
			$login_permission=TRUE;
			
				 }	 	

	   
    if ($name_flag==TRUE) 
	    {
            echo " Name is invalid !!!";

        }
    if ($password_flag==TRUE)
	    {
          echo " Password is invalid !!!";
        }

	if ($login_permission == TRUE ) 
	    {
          $_SESSION['name']=$_POST['name'];
	      $_SESSION['password']= $_POST['Password'];
		    header('location: home.php');
			
	    }

	} 

		
	
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
		<tr height = "700px">
			<td  colspan="1" align="center">
				<form method="POST" action="">
					<fieldset style="width: 55%">
						<legend> <b>Login</b></legend>
							<table>
							<tr >
								<td>UserName: </td>
								<td> <input type="text" name="name"/> 
								<br/> </td>
							</tr>

							<tr>
								<td> Password: </td>
								<td> <input type="password" name="Password"/> <br/></td>
							</tr>
						</table>
						<hr>
						<input type="checkbox" name="checkbox"> Remember Me
						<br> <br>
						<input type="submit" name="Submit" value="Submit"> <a href="forgotPassword.php"> Forgot Password? </a>
					</fieldset>
				</form>
			</td>
		</tr>
		<tr height = "100px">
			<td colspan="2">
				<center> Copyright &copy 2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>