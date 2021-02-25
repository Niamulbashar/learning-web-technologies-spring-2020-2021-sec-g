<?php
   
	if(isset($_POST['Submit']))
	{ 
        
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
         echo "  login successful !!";
              }
     if ($name_flag==TRUE) {
        echo " Name is invalid !!!";

              }
     if ($password_flag==TRUE) {
        echo " Password is invalid !!!";
             }

	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>Login</b></legend>
				<table>
				<tr>
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
			<input type="submit" name="Submit" value="Submit"> <a href=""> Forgot Password? </a>
		</fieldset>
	</form>
</body>
</html>