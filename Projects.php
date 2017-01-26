<?php
include("php/baseup.php");
	include("php/connectece.php");
?>
<head>
	<link href="css/hover.css" rel="stylesheet">
	<link href="css/courses.css" rel="stylesheet">
	<link href="css/faculty.css" rel="stylesheet">
	<link href="css/background.css" rel="stylesheet">
</head>
<title>Students project</title>
<body>
	<div class="main">
	<div>
	
		<h1>PROJECTS</h1>

			Projects are a result of the culmination of ideas and efforts. At IIIT Allahabad, 
			it is our ultimate goal to inclucate into our students the capability to follow 
			their own dreams, and fabricate them in the realm of possiblity. The primary objective
			of our mentors is to give the student only the necessary pieces of the puzzle, and the 
			motivation to not give up against all odds...<br><br>

			<a href="projectaward.php"> Project Awards </a><br><br>
			
			Here are a list of a few of the projects Done by the students of IIIT Allahabad in the field of 
			Electronics and Communication and related areas. <br><br><br>
		<div id="Project">
				<?php 
			
				$queryStudents = mysql_query("SELECT * FROM project WHERE isActive = 0 ORDER BY year DESC"); 

				while($data = mysql_fetch_assoc($queryStudents)) { 
				?>
					
					<?php
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
					
					<div class="panel panel-info">
						<div class="panel-heading">
							<a target="_blank" href="<?php echo $Link ?>"><?php echo "<strong>$ProjectName</strong>" ?></a>
						</div>
						<div class="panel-body">
							<div class="image" style="background-image:url('images/project/<?php echo $imagename ?>');">
							</div>

							<div>
								<?php				
									echo "	<strong>Description</strong> :".$Description."<br>";
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
	</div>
	</div>
</body>
<br><br>
<?php
	include("php/basedown.php");
?>