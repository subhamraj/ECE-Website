<?php
$EnRollNo = $_POST['EnRollNo'];
$Program =  $_POST['Program'];
$Enrollmentyear =  $_POST['Enrollmentyear'];
$Name =  $_POST['Name'];
$Email =  $_POST['Email'];
$Phone = $_POST['Phone'];
$Job = $_POST['Job'];
$Address =  $_POST['Address'];
$Link = $_POST['Link'];
$Aboutyourself = $_POST['Aboutyourself'];
$Interest = $_POST['Interest'];
$Achievement =$_POST['Achievement'];
$HigherStudies =$_POST['HigherStudies'];
$Hobbies =$_POST['Hobbies'];
$Feedback =$_POST['Feedback'];

	if(empty($_POST['EnRollNo'])){
		$EnRollNoErr = "*Name is Mandatory";
		$err++;
	}
	else{
		$query = mysql_query("SELECT * FROM students WHERE inrollno = '$EnRollNo'");
			$row = mysql_fetch_array($query);

			if(!empty($row))
			{
				$EnRollNoErr = "EnRollNo Aleady Registered. Please use Another !";
		  		$err++ ;
		  	}
	}
	if(empty($_POST['Program'])){
		$ProgramErr = "*Program is Mandatory";
		$err++;
	}
	else{
	}
	if(empty($_POST['Enrollmentyear'])){
		$EnrollmentyearErr = "*Enrollmentyear is  Mandatory";
		$err++;
	}
	else{
	}
	if(empty($_POST['Name'])){
		$NameErr = "*Name is Mandatory";
		$err++;
	}
	else{
		$Name = wash_input($_POST['Name']);
		if (!preg_match("/^[a-zA-Z ]*$/",$Name)){
		  $NameErr = "Only letters and white space allowed";
		  $err++;
		}
	}
	if(empty($_POST['Email'])){
		$EmailErr = "*EMAIL is Mandatory";
		$err++;
	}
	else{
		$Email = wash_input($_POST['Email']);
	if (filter_var($Email, FILTER_VALIDATE_EMAIL) === false) {
		 $EmailErr = "Invalid email format";
		  $err++;
		}
	else{
		$query = mysql_query("SELECT * FROM students WHERE Email = '$Email'");
			$row = mysql_fetch_array($query);

			if(!empty($row))
			{
				$EmailErr = "Email Aleady Registered. Please use Another !";
		  		$err++ ;
		  	}
		}
	}
	
	if(empty($_POST['Phone'])){
		$PhoneErr = "*Phone is Mandatory";
		$err++;
	}
	else{
		$Mobile = wash_input($_POST['Phone']);
		if(!ctype_digit($Mobile)){
			$PhoneErr = "*Only Number Are Allowed";
			$err++;
		}
		else if (strlen($Mobile) != 10){
			$PhoneErr = "*Only 10 Digits Are Allowed";
			$err++;
		}
		else {
		$query = mysql_query("SELECT * FROM students WHERE phoneno = '$Mobile'");
			$row = mysql_fetch_array($query);

			if(!empty($row))
			{
				$PhoneErr = "Mobile Aleady Registered. Please use Another !";
		  		$err++;
		  	}
		}
	}

	if(empty($_POST['Address'])){
		$AddressErr = "*Address is Mandatory";
		$err++;
	}
	else{
	}
	if(empty($_POST['Gender'])){
		$GenderErr = "*Gender is Mandatory";
		$err++;
	}
	else{
		$Gender =  $_POST['Gender'];
	}
	include("imagevalidation.php");
		if($err == 0){
			$query = "INSERT INTO students (inrollno,program,Enrollmentyear,name,email,phoneno,higherstudies,address,interest,achievement,hobbies,feedback,gender) VALUES
			('$EnRollNo', '$Program', '$Enrollmentyear','$Name', '$Email', '$Phone','$HigherStudies','$Address','$Interest','$Achievement','$Hobbies','$Feedback','$Gender')";
			mysql_query($query);
			$Lastid = mysql_insert_id();
		if(!empty($Job)){
			$query = "UPDATE students SET job = '$Job' WHERE id = '$Lastid'";
			mysql_query($query);
		}
		if(!empty($Link)){
			$query = "UPDATE students SET link = '$Link' WHERE id = '$Lastid'";
			mysql_query($query);
		}
		if(!empty($Aboutyourself)){
			$query = "UPDATE students SET aboutyourself = '$Aboutyourself' WHERE id = '$Lastid'";
			mysql_query($query);
		}

		$ImageName = $Lastid . "." . $file_ext;
		$queryImage = "UPDATE students SET image = '$ImageName' WHERE id = '$Lastid'";

		if(!mysql_query($queryImage)) 
		{
			//$firephp->log(mysql_error());						
			die('Error : ' . mysql_error());				
		}

		//File Upload by the Name of the "RecordId". "Extension" 

		move_uploaded_file($file_tmp,"images/students/".$ImageName);		//Upload the file to the Destination
		
		header("location: students.php");
	}
?>