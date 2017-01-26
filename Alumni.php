<title> Alumni</title>
<?php
	include("php/baseup.php");
	include("php/connectece.php");
?>

<head>
	<!--<link href="css/faculty.css" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="css/background.css">
	<style>
		.panel {
            width: 800px;
    		margin: 10px auto 0px;
    	}

    	.panel-body {
    		height: 200px;
    		width: 600px;
    	}

    	.panel-body .image {
    		background-size: 160px 160px;
    	}

    	.image {
    		width: 160px;
    		height: 160px;
    		float: left;
    		margin-right: 30px;
    	}

    	.main {
    		border: none;
    		box-shadow: none;
    	}
	</style>
</head>
<body>


		<div class = "container">
			<div class ="col-sm-3">
				 <ul class="nav nav-pills nav-stacked" role="tablist" style="margin-top: 25px; border: 2px solid black;">
					<li class = "active" ><a class = "hvr-sweep-to-right"  data-toggle = "tab" href="#Btech">B.Tech(ECE)</a></li>
					<li><a class = "hvr-sweep-to-right" data-toggle = "tab" href="#Mtech">M.tech(MI)</a></li>
					<li><a class = "hvr-sweep-to-right" data-toggle = "tab" href="#DualDegreeBtechandBioMedical">Dual Degree BTech and BioMedical</a></li>
					<li><a class = "hvr-sweep-to-right" data-toggle = "tab" href="#DualDegreeBtechandMtech">Dual Degree Btech and Mtech</a></li>
					<li><a class = "hvr-sweep-to-right" data-toggle = "tab" href="#DualDegreeBtechandMba">Dual Degree BTech and MBA</a></li>
					<li><a class = "hvr-sweep-to-right" data-toggle = "tab" href="#IntegratedMtechandPhD">Integrated MTech and PhD</a></li>
					</ul>
			</div>

			<div class ="col-sm-9">
			  <div class = "tab-content">

				<div id="Btech" class ="tab-pane fade in active">
				<h3> B.Tech(ECE)</h3>

											<div class="panel panel-info">
							<div class="panel-heading">
								<a target="_blank" href="#">Shivam Kaushal</a>
							</div>
						<div class="panel-body">
							<div class="image" style="background-image:url('images/students/92.png');">
							</div>

						<div>
							Enrollment No :iec201008<br>Program :B.Tech(ECE)<br>Mobile :<br>Address :Qualcomm India White Field Main Road,<br>Email :shivamkaushal24@gmail.com<br><br>					</div>
						</div>
						</div>

											<div class="panel panel-info">
							<div class="panel-heading">
								<a target="_blank" href="#">Arpita Dhanraj Muthiyan</a>
							</div>
						<div class="panel-body">
							<div class="image" style="background-image:url('images/students/119.jpg');">
							</div>

						<div>
							Enrollment No :IEC2010047<br>Program :B.Tech(ECE)<br>Mobile :<br>Address :Pune, Maharashtra<br>Email :arpitad20@iimklive.com<br><br>					</div>
						</div>
						</div>

			    </div>
						<div id="Mtech" class ="tab-pane fade">
		<h3>M.Tech(ECE)</h3>
			  </div>	<div id="DualDegreeBtechandBioMedical" class ="tab-pane fade">
		<h3>Dual Degree BTech and BioMedical</h3>
		</div>	<div id="DualDegreeBtechandMtech" class ="tab-pane fade">
		<h3>Dual Degree B.Tech and M.Tech</h3>
		</div>	<div id="DualDegreeBtechandMba" class ="tab-pane fade">
		<h3>Dual Degree B.Tech and Mba</h3>
		</div>	<div id="IntegratedMtechandPhD" class ="tab-pane fade">
		<h3>Integrated M.Tech and Ph.D</h3>
		</div>			</div>
			</div>
		</div>
	<br>
	<br>
	<style>
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
	.active{
		background-color: #fff;
		color:   #006600;
	}
	.hvr-grow{
		color:  #006600;
		background-color:  #b3ffff;
	}
	.hvr-grow:hover,
	.hvr-grow:focus,
	.hvr-grow:active {
	    transform: scale(1.1);
	}
	</style>

</body>
<?php
	include("php/basedown.php");
?>
