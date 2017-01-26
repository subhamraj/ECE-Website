<?php
include("php/baseup.php");
	include("php/connectece.php");
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/current_projects.css" />
</head>
<title>Students project</title>
<body>
	<div class="main">
	<div>
	
		<div id = "content_current_projects">
			<h2>PROJECTS</h2><hr>
			
			<p>
				Projects are a result of the culmination of ideas and efforts. At IIIT Allahabad, it is our ultimate goal to inclucate into our students the capability to follow their own dreams, and fabricate them in the realm of possiblity. The primary objective of our mentors is to give the student only the necessary pieces of the puzzle, and the motivation to not give up against all odds...
			</p> <br><br>
			
			<p>
				Projects Registered in this Semester will be shown here : 
			</p>
		
			<?php 
				$queryStudents = mysql_query("SELECT * FROM project WHERE isActive = 1 ORDER BY year DESC"); 
				while($data = mysql_fetch_assoc($queryStudents)) { 
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

			<div class = "current_projects_article">
				<h2> <?php echo "<strong>$ProjectName</strong>" ?> </h2><hr>
				<div class = "image">
					<img src="images/project/<?php echo $imagename; ?>"  style = "width: 300px; height: 300px; float: left; margin-right: 10px;">
				</div>
				<div style = "width: 750px; float: left; color: gray; font-size: 16px;">
					<?php				
						echo "	<strong>Description</strong> :<br>".$Description."<br><br>";
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

				<div style = "clear: both;"></div>
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