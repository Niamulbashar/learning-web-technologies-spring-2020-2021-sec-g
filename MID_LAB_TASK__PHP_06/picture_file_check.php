<?php
	
	 $file = $_FILES['Picfile'];
	 $file_path = 'Picfile/'.$file['name'];

	

	if(move_uploaded_file($file['tmp_name'], $file_path))
	{
		echo " successfully Uploaded";
	}
	else
	{
		echo "Error";
	}

?>