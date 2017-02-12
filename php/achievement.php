<?php
	
	function custom_echo_achievement($x, $length)
	{
	  if(strlen($x)<=$length)
	  {
	    echo $x;
	  }
	  else
	  {
	    $y=substr($x,0,$length) . '...<a target="_blank" href="achievement.php" class="small">Continue Reading</a>';
	    echo $y;
	  }
	}

	include("connectece.php");
	
	$sql_query = "SELECT * FROM achievement WHERE isActive = 1 ORDER BY date DESC";
	$achievement = mysql_query($sql_query);

	while($row = mysql_fetch_assoc($achievement)) 
	{ 
	?>

		<li>
			<div class="panel panel-info">
  			 <div class="panel-body">
  			 	<?php
  			 		custom_echo_achievement($row['content'], 120);
				?>
  			 </div>
			</div>
		</li>
	<?php
	} 
	?>
