<title> Latest News</title>
<?php 
	include("php/baseup.php");
	include("php/connectece.php");

	$sql_query = "SELECT * FROM news WHERE isActive = 1 ORDER BY datetime DESC";
	$news = mysql_query($sql_query);
?>

<head>
	<link href="css/background.css" rel="stylesheet">
</head>

<body>
	
	<div class="main">

		<h1>News</h1>
		<br>

		<p>In todays world of Information Technology, Information is Everything. The world has become so fast that
		the terms Power and being Informed are almost synonyms. And perhaps more important than knowledge itself is getting 
		the Information at the earliest, or to say faster than the 'other person'. In keeping with the above spirit, we 
		have the news portal where the latest in the field of Electronics will be posted.</p>

		<br>

		<table class="table table-hover">
		    <tbody>

		    	<?php
					while($data = mysql_fetch_assoc($news)) { ?>

						<?php
							if($data['id'] % 3 == 0) { ?>
						      <tr class="danger">
						        <td><?php echo $data['content'] ?></td>					        
						      </tr>

						 <?php
							}else if($data['id'] % 2 == 0) { ?>
								<tr class="info">
							        <td><?php echo $data['content'] ?></td>							        
							    </tr>

						<?php
							}else if($data['id'] % 4 == 0) { ?>
								<tr class="active">
							        <td><?php echo $data['content'] ?></td>							        
							    </tr>

						<?php
							}else { ?>
								<tr class="success">
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