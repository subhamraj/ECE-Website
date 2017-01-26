<title> Students Form</title>
<?php
include("php/baseup.php");
include("php/connectece.php");
$EnRollNoErr = "";
$ProgramErr = "";
$EnrollmentyearErr = "";
$NameErr = "";
$EmailErr = "";
$PhoneErr = "";
$AddressErr = "";
$GenderErr = "";
$ImageErr = "";
$InterestErr="";
$AchievementErr ="";
$HigherStudiesErr ="";
$HobbiesErr ="";
$FeedbackErr ="";
$err = 0;

$Name = "";
$EnRollNo ="";
$Enrollmentyear ="Select Year of Enrollment in institute";
$Email ="";
$Phone ="";
$Address ="";
$Link ="";
$Aboutyourself ="";
$Interest = "";
$Achievement ="";
$HigherStudies ="";
$Hobbies ="";
$Feedback ="";
$Program = "Select Program";


if($_SERVER["REQUEST_METHOD"] == "POST"){
	include("washinput.php");
	include("validatestudentform.php");	
}
?>
<title>Student Registration From</title>
<head>
	<link href="css/background.css" rel="stylesheet">	
</head>
<body>
	<div class="main">
	<h1>Student Registration Form</h1>
	<br><br>
	<font size = "4" color="red">* Field Are Mandatory</font>
	<br>
	<form class="form-horizontal" role="form" enctype="multipart/form-data" method = "POST" action  = "studentform.php">
	
	 <div class="form-group">
		<label class="control-label col-sm-2" for="EnRollNo">ENROLLMENT NO <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="EnRollNo" name ="EnRollNo" 
		  value = "<?php echo $EnRollNo ?>" placeholder="Enter Enrollment No">
		  </div>
		  <div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $EnRollNoErr  ?></span>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="Program">PROGRAM <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		<select class = "form-control" id = "Program" name="Program" value = "<?php echo $Program ?>">
			<option><?php echo $Program ?></option>
			<option>B.Tech(ECE)</option>
			<option>M.Tech(ECE)</option>  
			<option>Dual Degree B.Tech and M.Tech Biomedical</option>  	
			<option>Dual Degree B.Tech and MI</option>
			<option>Dual Degree B.Tech and MBA</option>
			<option>Integrated M.Tech and Ph.D</option>
		</select>
		</div>
		<div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $ProgramErr ?></span>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="Enrollmentyear">Enrollment year<font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		 <select class = "form-control" id = "Enrollmentyear" name="Enrollmentyear" >
		 <option><?php echo $Enrollmentyear ?></option>
		 <option>2012</option>
		 <option>2013</option>
		 <option>2014</option>
		 <option>2015</option>
		 </select>
	  </div>
	  </div>

	   <div class="form-group">
		<label class="control-label col-sm-2" for="Name">NAME <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Name" name = "Name"
		  value = "<?php echo $Name?>" placeholder="Enter Name">
		</div>
		<div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $NameErr ?></span>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="email">EMAIL <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Email" name="Email"
		  value = "<?php echo $Email?>" placeholder="Enter Email id other than institute">
		</div>
		<div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $EmailErr  ?></span>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="Phone">PHONE <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Phone" name="Phone" maxlength = "10"
		  value = "<?php echo $Phone ?>" placeholder="Enter Phone">
		</div>
		<div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $PhoneErr  ?></span>
		</div>
	  </div>

	   <div class="form-group">
		<label class="control-label col-sm-2" for="Image">Photo <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="file" class="form-control" id="Image" name="Image">
		  <span class="pull-left alert-danger"><?php echo $ImageErr  ?></span>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="Address">ADDRESS <font size = "4" color="red">*</font>:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Address" name="Address"
		  value = "<?php echo $Address ?>" placeholder="Enter Home Address">
		</div>
		<div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $AddressErr  ?></span>
		</div>
	  </div>

	   <div class="form-group">
		<label class="control-label col-sm-2" for="Interest">Interest :</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Interest" name = "Interest" value = "<?php echo $Interest?>" placeholder="Enter Interest"	maxlength = "200">
		</div>
		<div class="col-sm-2">
		<span class="pull-left alert-danger"><?php echo $InterestErr ?></span>
		</div>
	  </div>

		<div class="form-group">
				<label class="control-label col-sm-2" for="Achievement">Achievement :</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Achievement" name = "Achievement"
				  value = "<?php echo $Achievement?>" placeholder="Enter Achievement"	maxlength = "200">
				</div>
				<div class="col-sm-2">
				  <span class="pull-left alert-danger"><?php echo $AchievementErr ?></span>
				</div>
			  </div>

	 <div class="form-group">
		<label class="control-label col-sm-2" for="Hobbies ">Hobbies :</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Hobbies" name = "Hobbies"
		  value = "<?php echo $Hobbies ?>" placeholder="Enter Hobbies ">
		</div>
		<div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $HobbiesErr ?></span>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="Feedback">Feedback :</label>
		<div class="col-sm-8">
		  <textarea class = "from-control" rows = "4" cols = "100" class="form-control" id = "Feedback" 
		  name = "Feedback"  maxlength = "300" placeholder="Feedback/suggestion about ece department"><?php if(isset($Feedback)) { echo htmlentities ($Feedback);}?></textarea>
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="Link">LINK</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="Link" name = "Link"
		  value = "<?php echo $Link ?>" placeholder="Enter Profile Link">
		</div>
	  </div>

	  <div class="form-group">
		<label class="control-label col-sm-2" for="Aboutyourself">AboutYourSelf:</label>
		<div class="col-sm-8">
		  <textarea class = "from-control" rows = "5" cols = "100" class="form-control" id = "Aboutyourself" 
		  name = "Aboutyourself"  placeholder="Aboutyourself"><?php if(isset($Aboutyourself)) { echo htmlentities ($Aboutyourself);}?></textarea>
		</div>
	  </div>

	  <div class="form-group"> 
	  <label class="control-label col-sm-2" for="gender">GENDER <font size = "4" color="red">*</font>:</label>
	  <div class="col-sm-8">
		  <div class="radio-inline">
			<label><input type="radio" name = "Gender" id = "Gender" value = "Male"> Male</label>
		  </div>
		  <div class="radio-inline">
			<label><input type="radio" name = "Gender" id = "Gender" value = "Female"> Female</label>
		  </div>
		 </div>
		  <div class="col-sm-2">
		  <span class="pull-left alert-danger"><?php echo $GenderErr  ?></span>
		</div>
	  </div>
	  
	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-success btn-lg">Submit</button>
		</div>
	  
	  </div>
	</form>
	</div>
</body>
<br><br>

<?php
include("php/basedown.php")
?>