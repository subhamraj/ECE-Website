<?php
	
	function custom_echo_news($x, $length)
	{
	  if(strlen($x)<=$length)
	  {
	    echo $x;
	  }
	  else
	  {
	    $y=substr($x,0,$length) . '...<a target="_blank" href="news.php" class="small">Continue Reading</a>';
	    echo $y;
	  }
	}

	include("connectece.php");
	
	$sql_query = "SELECT * FROM news WHERE isActive = 1 ORDER BY datetime DESC";
	$news = mysql_query($sql_query);

	while($row = mysql_fetch_assoc($news)) 
	{ 
	?>

		<li>
			<div class="panel panel-info">
  			 <div class="panel-body">
  			 	<?php
  			 		custom_echo_news($row['content'], 120);
				?>
  			 </div>
			</div>
		</li>
	<?php
	} 
	?>
