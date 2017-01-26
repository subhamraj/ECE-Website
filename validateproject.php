<?php
	echo "Trying to Validate the form Values"
	$ProjectName = $_POST['ProjectName'];
	$Application =$_POST['Application'];
	$MentorName = $_POST['MentorName'];
	$Member1 =$_POST['Member1'];
	$Member2 =$_POST['Member2'];
	$Member3 =$_POST['Member3'];
	$Member4 =$_POST['Member4'];
	$Member5 =$_POST['Member5'];
	$Semester = $_POST['Semester'];
	$Description = $_POST['Description'];
	$Year =$_POST['Year'];
	$Link = $_POST['Link'];
	$Semester =$_POST['Semester'];

	if(empty($_POST['ProjectName'])){
		$ProjectNameErr = "*ProjectName is Mandatory";
		$err++;
	}		

	if(empty($_POST['Member1'])){
		$Member1Err = "*Member1 is Mandatory";
		$err++;
	}

	if(empty($_POST['Year'])){
		$YearErr = "*Year is Mandatory";
		$err++;
	}

	if(empty($_POST['Description'])){
		$DescriptionErr = "*Description is Mandatory";
		$err++;
	}

	if(empty($_POST['Semester'])){
		$SemesterErr = "*Semester is Mandatory";
		$err++;
	}

	echo "Text Validated. Going For Image Validation";

	include("imagevalidation.php");
	
	echo "Image Validated. Going For Query";

	if($err == 0)
	{
		$query = "INSERT INTO project (projectname,description,application,mentor,member1,member2,member3,member4,member5,semester,year,link) VALUES
		('$ProjectName', '$Description', '$Application', '$MentorName','$Member1','$Member2', '$Member3','$Member4','$Member5','$Semester','$Year','$Link')";
		
		mysql_query($query);
		$Lastid = mysql_insert_id();
		$ImageName = $Lastid . "." . $file_ext;
		$queryImage = "UPDATE project SET image = '$ImageName' WHERE id = '$Lastid'";

		if(!mysql_query($queryImage))
		{								
			die('Error : ' . mysql_error());				
		}

		//File Upload by the Name of the "RecordId". "Extension" 

		move_uploaded_file($file_tmp,"images/project/" . $ImageName);		//Upload the file to the Destination		
		
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=CurrentProjects.php"';
	}	
	
?>