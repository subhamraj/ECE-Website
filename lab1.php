<?php 
	include("php/baseup.php");
	?>					

<head>
	<link href="css/background.css" rel="stylesheet">
</head>


<body id = "top">

	<div class="main">

		<h1>LABS</h1>
						
		<div  class="container">		
			<?php
				include("php/connectece.php");

				$id = 1;
				$sql = "SELECT * FROM labs WHERE Id = $id";
				$query = mysql_query($sql); 
				$data = mysql_fetch_array($query);
			?>
			
			<div class ="col-sm-3">
			 <ul class="nav nav-pills nav-stacked" role="tablist">
				<?php	while($data['id'] != NULL) { 
					if ($data['id'] == 15) {?>
					<li class = "active" ><a class = "hvr-grow" data-toggle = "tab" href="#<?php echo $data['id']?>"><?php echo $data['name'];}?></a></li>
					<?php if($data['id'] > 15) {?>
				   <li><a class = "hvr-grow" data-toggle = "tab" href="#<?php echo $data['id']?>"><?php echo $data['name'];}?></a></li> 
				 <?php
		 
					$id++;
					$sql = "SELECT * FROM labs WHERE Id = $id";
						$query = mysql_query($sql); 
						$data = mysql_fetch_array($query);
					}  
				?>	
					  </ul>
					  </div>
				<?php

					$id = 15;
					$sql = "SELECT * FROM labs WHERE Id = $id";
					$query = mysql_query($sql); 
					$data = mysql_fetch_array($query);
				?>
		<div class ="col-sm-7">
		  <div class = "tab-content">
			<?php while($data['id'] != NULL) { 
			if ($data['id'] == 15) {?>
			<div id="<?php echo $data['id']?>" class ="tab-pane fade in active" >
			  <h3><?php echo $data['name']?></h3>
				<div class="image" style="background-image:url('<?php echo $data['image'] ?>');"></div>
				<!--<img class="image" src = "<?php echo $data['image']?>">-->
				<br><br>
			  <p class ="text-justify" > <?php echo $data['detail'] ?></p>
			</div>
			<?php }
			if ($data['id'] > 15) { ?>
			<div id="<?php echo $data['id']?>" class ="tab-pane fade">
			  <h3><?php echo $data['name']?></h3>
			  <div class="image" style="background-image:url('<?php echo $data['image'] ?>');"></div>
			  <br><br>
			  <p class ="text-justify"> <?php echo $data['detail'] ?></p>
			</div>
				
					
			<?php }
			$id++;
			$sql = "SELECT * FROM labs WHERE Id = $id";
			$query = mysql_query($sql); 
			$data = mysql_fetch_array($query);
			} ?>
			</div>
			</div>
		</div>
<a href = "lab.php">go back</a>
</div>
<style>

	.message {
		padding: 2%;
		margin: 2%;
		border: 1px solid blue;
		border-radius: 25px;
		font-size: 1.2em;
	}
	
	.image {
		height:300px;
		width:100%;
		background-repeat:no-repeat;
		background-position:center center;
		background-size:100% 300px;
		border:2px inset black;
		padding: 1%;
	}
	.hvr-grow {
    display: inline-block;
    vertical-align: middle;
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(3, 1, 0, 9);
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    transition-duration: 0.3s;
    transition-property: transform;
	
}

.hvr-grow:hover,
.hvr-grow:focus,
.hvr-grow:active {
    transform: scale(1.1);
}

	
</style>
<br>
</body>


<?php 
	include("php/basedown.php");
?>