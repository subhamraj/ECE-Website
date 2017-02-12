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
	
	$i = 1;
	$sql_query = "SELECT * FROM news WHERE isActive = 1 AND id = $i";
	$news = mysql_query($sql_query);
	$data = mysql_fetch_array($news);

		while($data['id'] != NULL) { 
	?>

		<li>
			<div class="panel panel-info">
  			 <div class="panel-body">
  			 	<?php
  			 		custom_echo_news($data['content'], 100);
  			 		$i++;
  			 		$sql_query = "SELECT * FROM news WHERE isActive = 1 AND id = $i";
					$news = mysql_query($sql_query);
					$data = mysql_fetch_array($news);
				?>
  			 </div>
			</div>
		</li>
	<?php
	} 
	?>
