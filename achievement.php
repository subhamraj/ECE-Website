<title> Achievements </title>
<?php 
	include("php/baseup.php");
	include("php/connectece.php");

	$sql = "SELECT * FROM achievement WHERE isActive = 1 ORDER BY date DESC";
	$achievement = mysql_query($sql); 
?>

<head>
	<style>
		.main {
			line-height: 1.8em;
			width: 1000px;
			margin: 30px auto;
			color: darkslategray;
			font-size: 16px;
		}

		table {
			color: darkslategray;
		}

		td {
			padding-top: 25px;
			padding-bottom: 10px;
			border-bottom: dashed grey 1px;
		}

		hr {
			border: dashed 1px grey;
		}
	</style>
</head>

<body>
	<div class="main">

		<h1>ACHIEVEMENTS</h1>
		<br>

		<p>"The Students as well as the faculty members of the department have made us proud by receiving various awards and recognitions at national and international level. 
		Very hearty congratulations to all the students and faculty members who have striven towards excellence and we are confident that they continue to do so in the future."</p>

		<br>

		<p>Here is a list of some of the latest achievements made by the ECE family:</p><hr>

		<table cellspacing="5">
		    <tbody>
		    	<?php
					while($data = mysql_fetch_assoc($achievement)) { ?>
						<?php
							if($data['id'] % 3 == 0) { ?>
						      <tr class="success">
						        <td><?php echo $data['content'] ?></td>				        
						      </tr>
						 <?php
							}else if($data['id'] % 2 == 0) { ?>
								<tr class="info">
							        <td><?php echo $data['content'] ?></td>							        
							    </tr>
						<?php
							}else { ?>
								<tr class="danger">
							        <td><?php echo $data['content'] ?></td>							        
							    </tr>
					<?php
							}
						} 
					?>
		    </tbody>
  </table>

		
	</div>
	
</body>


<?php 
include("php/basedown.php");
?>