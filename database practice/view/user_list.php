<?php
	$title = "User List ";
	include('header.php');
?>


	
	

	

	<table >
		<tr><td >

		<h1>User list</h1>
		</td></tr>

        <tr>
		<?php

			$connection = mysqli_connect('localhost','root','','mgt');
			$sql = "select * from registration";
			$result = mysqli_query($connection, $sql);

			echo "<table border = '5' >
				<tr>
					<td>Username</td>
					<td>Password</td>
					<td>Email</td>
				</tr>";

			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>
						 <td>{$row['name']}</td>
						 <td>{$row['password']}</td>
						 <td>{$row['email']}</td>
					</tr>";
			}

			echo "</table>";
		?>
        </tr>
     <tr>
			<td> <a href="home.php"> Back</a> |
			  </td>
			  <td>
		<a href="../controller/logout.php"> logout</a>	</td>

	 </tr>
	</table>



<?php
	include('footer.php');
?>