<title> Labs Description</title>
<?php 
	include("php/baseup.php");
	?>					


<head>
	<link href="css/background.css" rel="stylesheet">
</head>


<body id = "top">
	<div class="main">

		<h1>LABS</h1>
						
						<p>The Institute boasts of the state-of-the-art Laboratories, which offer the
						students the opportunity to exploit the full potential within. Few institutes 
						offer Laboratories at par with IIIT Allahabad. Also the students are granted 
						24 * 7 access to the Labs, in order to promote self paced learning.
						Each lab has experienced managers to assist the students in their overall
						growth and development.</p>

		<br>
		<br>
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
<?php	while($data['id'] <= 14) { 
	if ($data['id'] == 1) {?>
	<li class = "active" ><a class = "hvr-grow" data-toggle = "tab" href="#<?php echo $data['id']?>"><?php echo $data['name'];}?></a></li>
	<?php if($data['id'] > 1) {?>
   <li><a class = "hvr-grow" data-toggle = "tab" href="#<?php echo $data['id']?>"><?php echo $data['name'];}?></a></li> 
 <?php
 
 $id++;
$sql = "SELECT * FROM labs WHERE Id = $id";
	$query = mysql_query($sql); 
	$data = mysql_fetch_array($query);
}  ?>	
  </ul>
  </div>
<?php

$id = 1;
	$sql = "SELECT * FROM labs WHERE Id = $id";
	$query = mysql_query($sql); 
	$data = mysql_fetch_array($query);
?>
<div class ="col-sm-7">
  <div class = "tab-content">
	<?php while($data['id'] <=14) { 
	if ($data['id'] == 1) {?>
	<div id="<?php echo $data['id']?>" class ="tab-pane fade in active">
      <h3><?php echo $data['name']?></h3>
	    <div class="image" style="background-image:url('<?php echo $data['image'] ?>');"></div>
		<br><br>
      <p class ="text-justify" > <?php echo $data['detail'] ?></p>
    </div>
	<?php }
	if ($data['id'] > 1) { ?>
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
<a href = "lab1.php">more labs</a>
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
    box-shadow: 0 0 1px rgba(0, 0, 0, 1);
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