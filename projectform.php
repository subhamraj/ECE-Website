<?php
include("php/baseup.php");
include("php/connectece.php");
$ProjectNameErr ="";
$ProjectName = "";
$Description = "";
$DescriptionErr = "";
$Application ="";
$MentorNameErr ="";
$MentorName = "";
$ImageErr ="";
$Member1 ="";
$Member1Err =""; 
$Member2 ="";
$Member2Err ="";
$Member3 ="";
$Member3Err =""; 
$Member4 = "";
$Member4Err ="";
$Member5 = "";
$Member5Err ="";
$Year ="";
$YearErr ="";
$Link = "";
$LinkErr = "";
$Semester ="Select Semester in Which You Project Had made";
$SemesterErr ="";
$err = 0;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	include("washinput.php");
	echo "Input Recieved. Going for Validation";

	$ProjectName = $_POST['ProjectName'];
	$Application = $_POST['Application'];
	$MentorName = $_POST['MentorName'];
	$Member1 = $_POST['Member1'];
	$Member2 = $_POST['Member2'];
	$Member3 = $_POST['Member3'];
	$Member4 = $_POST['Member4'];
	$Member5 = $_POST['Member5'];
	$Semester = $_POST['Semester'];
	$Description = $_POST['Description'];
	$Year = $_POST['Year'];
	$Link = $_POST['Link'];
	$Semester = $_POST['Semester'];

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
		$query = "INSERT INTO project (projectname,description,application,mentor,member1,member2,member3,member4,member5,semester,year,link,isActive) VALUES
		('$ProjectName', '$Description', '$Application', '$MentorName','$Member1','$Member2', '$Member3','$Member4','$Member5','$Semester','$Year','$Link',1)";

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
	echo "Input Validated. Incorrect Values";
}
?>



<title> Project From</title>
<head>	
	<link href="css/background.css" rel="stylesheet">
</head>
<body>
	<div class="main">
	<h1>Electronics Project Registration Form</h1>
	<br><br>
	<font size = "4" color="red">* Field Are Mandatory</font>
	<br>
	<form class="form-horizontal" role="form" enctype="multipart/form-data" method = "POST" action  = "projectform.php">

	<div class="form-group">
		<label class="control-label col-sm-2" for="ProjectName">Project Title<font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="ProjectName" name ="ProjectName" 
		  value = "<?php echo $ProjectName ?>" placeholder="Enter Project Title">
		  </div>
		  <div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $ProjectNameErr  ?></span>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="Description">Description<font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <textarea class = "from-control" rows = "5" cols = "70" class="form-control" id = "Description" 
		  name = "Description" maxlength = "1000" placeholder="Short Description of your Project (not more than 1000 words)" maxlength = "999"><?php if(isset($Description)) { echo htmlentities ($Description);}?></textarea>
		</div>
		 <div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $DescriptionErr  ?></span>
		</div>
	  </div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="Application">Application :</label>
		<div class="col-sm-8">
		  <textarea class = "from-control" rows = "5" cols = "70" class="form-control" id = "Application" 
		  name = "Application" maxlength = "1000" placeholder="Potential Applications of your project"	maxlength = "500"><?php if(isset($Application)) { echo htmlentities ($Application);}?></textarea>
		</div>
	  </div>

	   <div class="form-group">
		<label class="control-label col-sm-2" for="MentorName">Mentor :</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="MentorName" name ="MentorName" 
		  value = "<?php echo $MentorName ?>" placeholder="Enter Mentor Name">
		  </div>
		  <div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $MentorNameErr  ?></span>
		</div>
	  </div> 

	   <div class="form-group">
		<label class="control-label col-sm-2" for="Image">Image/Poster <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="file" class="form-control" id="Image" name="Image"><br>
		  <span class="pull-left alert-danger"><?php echo $ImageErr  ?></span>
		</div>
	  </div>

	   <div class="form-group">
		<label class="control-label col-sm-2" for="Member1">Member 1<font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Member1" name ="Member1" 
		  value = "<?php echo $Member1 ?>" placeholder="Enter Enrollment Number of Institute Only !!">
		  </div>
		  <div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $Member1Err  ?></span>
		</div>
	  </div> 


	   <div class="form-group">
		<label class="control-label col-sm-2" for="Member2">Member 2:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Member2" name ="Member2" 
		  value = "<?php echo $Member2 ?>" placeholder="Enter Enrollment Number of Institute Only !!">
		  </div>
	  </div> 


	   <div class="form-group">
		<label class="control-label col-sm-2" for="Member3">Member 3:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Member3" name ="Member3" 
		  value = "<?php echo $Member3 ?>" placeholder="Enter Enrollment Number of Institute Only !!">
		  </div>
	  </div> 


	   <div class="form-group">
		<label class="control-label col-sm-2" for="Member4">Member 4:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Member4" name ="Member4" 
		  value = "<?php echo $Member4 ?>" placeholder="Enter Enrollment Number of Institute Only !!">
		  </div>
	  </div> 


	   <div class="form-group">
		<label class="control-label col-sm-2" for="Member5">Member 5:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Member5" name ="Member5" 
		  value = "<?php echo $Member5 ?>" placeholder="Enter Enrollment Number of Institute Only !!">
		  </div>
	  </div> 


	   <div class="form-group">
		<label class="control-label col-sm-2" for="Semester">Semester NO <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		 <select class = "form-control" id = "Semester" name="Semester" >
		 <option><?php echo $Semester; ?></option>
		 <option>Semester 3</option>
		 <option>Semester 4</option>
		 <option>Semester 5</option>
		 <option>Semester 6</option>
		 <option>Semester 7</option>
		 <option>Semester 8</option>
		 <option>Semester 9</option>
		 <option>Semester 10</option>
		 </select>
		  </div>
	  </div> 


	   <div class="form-group">
		<label class="control-label col-sm-2" for="Year">Year<font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Year" name ="Year" 
		  value = "<?php echo $Year?>" placeholder="Enter Year in which the project was made">
		  </div>
		  <div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $YearErr  ?></span>
		</div>
	  </div> 


	   <div class="form-group">
		<label class="control-label col-sm-2" for="Link ">Video Link:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Link " name ="Link" 
		  value = "<?php echo $Link  ?>" placeholder="Enter WebLink for a video of your project (if any)">
		  </div>
	  </div>

	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-success btn-lg">Submit</button>
		</div>
	  </div>
	</form>
	</div>
<br><br>
</body>

<?php
include("php/basedown.php")
?>