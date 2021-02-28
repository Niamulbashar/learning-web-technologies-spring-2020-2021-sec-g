<?php
	
	 $file_info = $_FILES['Picfile'];
	 $file_path = 'Picfile/'.$file_info['name'];

	

	if(move_uploaded_file($file_info['tmp_name'], $file_path))
	{
		echo " successfully Uploaded";
	}
	else
	{
		echo "Error";
	}

?>