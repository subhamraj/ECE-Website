<?php
	include("php/baseup.php");
	include("php/connectece.php")
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/project.css" />
</head>
<title>Students project</title>
<body>
	<div id = "section_project">
		<p>
			<h3 class = "project_heading"> PROJECTS </h3>
		
			Projects are a result of the culmination of ideas and efforts. At IIIT Allahabad, it is our ultimate goal to inculcate into our students the capability to follow their own dreams, and fabricate them in the realm of possiblity. The primary objective of our mentors is to give the student only the necessary pieces of the puzzle, and the motivation to not give up against all odds... <br><br>

			<a href = "projectaward.php">Project Awards </a><br><br>

			Here are a list of a few of the projects Done by the students of IIIT Allahabad in the field of Electronics and Communication and related areas.
		</p>

		<?php 	
			$i = 0;
			$queryStudents = mysql_query("SELECT * FROM project"); 
			while($data = mysql_fetch_assoc($queryStudents)) { 
				$i = $i + 1;
				$imagename = $data['image'];
				$Description =$data['description'];
				$ProjectName = $data['projectname'];
				$Mentor = $data['mentor'];
				$Member1 = $data['member1'];
				$Member2 = $data['member2'];
				$Member3 = $data['member3'];
				$Member4 = $data['member4'];
				$Member5 = $data['member5'];
				$Link = $data['link'];
				$Year = $data['year'];
				$Semester = $data['semester'];
		?>
					
		<div class="expand">
			<input class = "toggle-box" id = "header<?php echo $i; ?>" type = "checkbox" >
			<label for = "header<?php echo $i; ?>"><?php echo "<strong>".$i.". ".$ProjectName."</strong>"; ?></label>
			<div class="panel-body">
				<div class = "image_project">
					<img src = "<?php echo "images/project/".$imagename; ?>" style = "width: 300px; height: 300px; float: left;"/> 
				</div>
				<div class = "block" style = "float: left; width: 650px; margin-left: 10px;">
					<?php				
						echo "	<strong>Description:<br></strong>".$Description."<br><br>";
						echo "	<strong>Mentor</strong> :".$Mentor."<br>";
						echo "	<strong>Year</strong> :" .$Year."<br>";				
						echo " <strong>$Semester :</strong><br>";
						echo "	<strong>Members</strong><br>";							
						
						
						if ($Member1 != NULL) echo "$Member1	";
						if ($Member2 != NULL) echo "$Member2	";
						if ($Member3 != NULL) echo "$Member3	";
						if ($Member4 != NULL) echo "$Member4	";
						if ($Member5 != NULL) echo "$Member5	";
											  		
					?>
				</div>
			</div>
		</div>
		
		<?php
			}
		?>
	</div>
</body>
<br><br>
<?php
	include("php/basedown.php");
?>