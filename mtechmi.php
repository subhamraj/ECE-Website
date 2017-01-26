<title>Integrated M.Tech</title>
<?php 
	include("php/baseup.php");
	include("php/connectece.php");

	$id = 1;
	$sql = "SELECT * FROM mtech_mi WHERE Id = $id";
	$query = mysql_query($sql); 
	$data = mysql_fetch_array($query);
?>

<head>
	<link href="css/hover.css" rel="stylesheet">
	<link href="css/courses.css" rel="stylesheet">
	<link href="css/faculty.css" rel="stylesheet">
	<link href="css/background.css" rel="stylesheet">
</head>
<body style = "background-image: url(images/programs_background.jpg); background-size: 100%;">

	<div class="main">

		<h1>M.Tech MI</h1>
		<br>

		<p>The Syllabus of the M.Tech branch has been divided into numerous Semesters, each of which has numerous Subjects, which are as follows ... </p>
<br>
			<div class = "container">
			<div class ="col-sm-2">
				 <ul class="nav nav-pills nav-stacked" role="tablist">
			<?php	while($data['Id'] != NULL) { 
				if ($data['Id'] == 1) {?>
				<li class = "active" ><a class = "hvr-shutter-out-horizontal"  data-toggle = "tab" href="#sem<?php echo $data['Id']?>">Semester :<?php echo $data['Semester'];}?></a></li>
				<?php if($data['Id'] > 1) {?>
			   <li><a class = "hvr-shutter-out-horizontal" data-toggle = "tab" href="#sem<?php echo $data['Id']?>">Semester :<?php echo $data['Semester'];}?></a></li> 
			 <?php
			 
			 $id++;
			$sql = "SELECT * FROM mtech_mi WHERE Id = $id";
				$query = mysql_query($sql); 
				$data = mysql_fetch_array($query);
			}  ?>	
			  </ul>
			  </div>
			  <?php

			$id = 1;
				$sql = "SELECT * FROM mtech_mi WHERE Id = $id";
				$query = mysql_query($sql); 
				$data = mysql_fetch_array($query);
			?>

			<div class ="col-sm-8">
			  <div class = "tab-content">
				
				
			<?php while($data['Id'] != NULL) { 
				if ($data['Id'] == 1) {?>
				<div id="sem<?php echo $data['Id']?>" class ="tab-pane fade in active">
			      <h3>Semester :<?php echo $data['Semester']?></h3>
				  <?php
				  $run = 1;
				  $Subno = "Sub".$run;
					while ($data[$Subno] != NULL && $run < 8) {
					$Subno = "Sub".$run++;
					$no = $data[$Subno];
					if ($no != NULL) {
					$sql ="SELECT * FROM courses where id = $no";
					$query = mysql_query($sql);
					$Subdata = mysql_fetch_array($query);
				?>	
			  <div class="panel-group">
			    <div class="panel panel-info">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a data-toggle="collapse" href="#<?php echo $data['Semester']."_".$data[$Subno] ?>"> <?php echo $Subdata['Name'] ?></a>
			        </h4>
			      </div>
			    </div>
			  </div>
				<?php
					}
					}
				  ?>
			    </div>


				<?php }
				if ($data['Id'] > 1) { ?>
				<div id="sem<?php echo $data['Id']?>" class ="tab-pane fade">
			      <h3>Semester :<?php echo $data['Semester']?></h3>
				  <?php
				 $run = 1;
				  $Subno = "Sub".$run;
					while ($data[$Subno] != NULL && $run < 8) {
					$Subno = "Sub".$run++;
					$no = $data[$Subno];
					if($no != NULL){
					$sql ="SELECT * FROM courses where id = $no";
					$query = mysql_query($sql);
					$Subdata = mysql_fetch_array($query);
			?>
			  <div class="panel-group">
			    <div class="panel panel-info">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a data-toggle="collapse" href="#<?php echo $data['Semester']."_".$data[$Subno] ?>"> <?php echo $Subdata['Name'] ?></a>
			        </h4>
			      </div>
			    </div>
			  </div>
				<?php	}
					}
				  ?>
			    </div>
						
				<?php }
				$id++;
			    $sql = "SELECT * FROM mtech_mi WHERE Id = $id";
				$query = mysql_query($sql); 
				$data = mysql_fetch_array($query);
				} ?>
				</div>
			    </div>
			</div>
			</div>
			<style>

				.image {
					background-size:100% 80px;
					height:80px;
				}

				.panel-collapse {
					padding : 1.5%;
				}
			</style>
</body>

<?php 
	include("php/basedown.php");
?>