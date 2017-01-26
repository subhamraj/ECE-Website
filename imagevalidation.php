<?php
	$expensions= array("jpeg","jpg","png");
	$file_name = $file_size = $file_tmp = $file_type = $file_ext = "";

	if(isset($_FILES['Image']))
	{
		$file_name = $_FILES['Image']['name'];
		$file_size = $_FILES['Image']['size'];
		$file_tmp = $_FILES['Image']['tmp_name'];
		$file_type = $_FILES['Image']['type'];
		$TmpExtn = explode('.',$file_name);
		$file_ext = strtolower(end($TmpExtn));

	 	if($file_size === 0)
	    {
			$ImageErr = "Please Select an Image";
			$err = 1;
	 	}
	 	if(in_array($file_ext,$expensions)=== false) 
	 	{
			$ImageErr = "Image Extension not allowed, Please choose a JPEG or PNG file.";
			$err = 1;
		}
		else if($file_size > 200000) 
		{
			 $ImageErr = "File size must be less than 200kb";
			 $err = 1;		 
	 	}
	}
	else
	{
		$ImageErr = "Please Choose a File";
		$err = 1;
	}

 ?>