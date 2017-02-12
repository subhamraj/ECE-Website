<?php
$queryStudent = mysql_query("SELECT * FROM students WHERE program = 'M.Tech(ECE)' AND enrollmentyear < '2012' ORDER BY inrollno"); 
?>
	<div id="Mtech" class ="tab-pane fade">	
	<h3>M.Tech(ECE)</h3>
		<?php 
			while($data = mysql_fetch_assoc($queryStudent)) { 
		?>
	  	<?php
		    $imagename = $data['image'];
			$InRollMent = $data['inrollno'];
			$Name = $data['name'];
			$Program = $data['program'];
			$Address = $data['address'];
			$Email = $data['email'];
			$Interest =$data['interest'];
			$hobbies =$data['hobbies'];
			$Achievement = $data['achievement'];
			$Link = $data['link'];
			?>
			<div class="panel panel-info">
				<div class="panel-heading">
				  	<a target="_blank" href="<?php echo $Link ?>"><?php echo $Name ?></a>
				</div>
		  	<div class="panel-body">
			  	<div class="image" style="background-image:url('images/students/<?php echo $imagename ?>');">
			  	</div>

			<div>
			  	<?php				
					echo "Enrollment No :".$InRollMent."<br>";
					echo "Program :".$Program."<br>";				
					echo "Address :".$Address."<br>";
					if (!empty($Interest)){
					echo "Interest :".$Interest."<br>";
					}
					if (!empty($Achievement)){
					echo "Achievement :".$Achievement."<br>";
					}
					if (!empty($hobbies)){
					echo "Hobbies :".$hobbies."<br>";
					}
					echo "Email :".$Email ."<br>"."<br>";							  		
				?>
		  	</div>
	  		</div>
			</div>
<?php
		}
?>
  </div>