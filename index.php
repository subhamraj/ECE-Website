<html>
<head>
<title>ECE IIITA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/main.css">

<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>


  <style>
      body {
        background-color: #eee;
      }

      * {
        line-height: 1.5em;
      }

      .fl_right {
      	width: 300px;
      	height: 400px;
      }

      marquee {
      	height: 200px;
      }

      .section_2_grid {
      	line-height: 1.6em;
      	font-size: 1.1em;
      }
  </style>

</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>PORTALS</h2>
        <ul class="iob">
        <li><a href="studentform.php" style="color:red;">Register students !</a></li>
        <li><a href="alumniform.php" style="color:red;">Register Alumni !</a></li>
        <li><a href="projectform.php" style="color:red;">Register project !</a></li>
        <li><a href="http://iiita.ac.in">IIIT Allahabad</a></li>
        <li><a href="http://library.iiita.ac.in">Library</a></li>
        <li><a href="http://gymkhana.iiita.ac.in">Gymkhana</a></li>
      </ul>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="topbox">
        <h2>Teachers Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="teachername">Email ID
              <input type="text" name="teachername" id="teachername" value="" />
            </label>
            <label for="teacherpass">Password:
              <input type="password" name="teacherpass" id="teacherpass" value="" />
            </label>
            <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="teacherlogin" id="teacherlogin" value="Login" />
              &nbsp;
              <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <div class="topbox last">
        <h2>Students Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Students Login Form</legend>
            <label for="pupilname">Roll no:
              <input type="text" name="pupilname" id="pupilname" value="" />
            </label>
            <label for="pupilpass">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Click here to</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">LOGIN</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
              <div id="logo" style="height:124px; margin-top:-20px;">
      <img src="images/l1.jpg">
      <h1><a href="index.html">IIIT ALLAHABAD</a></h1>
      <h3><a href="index.html" style="font-size:11px;">Department of Electronics and Communication Engineering</a></h3>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="programs.php">Programs</a></li>
        <li><a href="project.php">Projects</a></li>
        <li><a href="research.php">Research</a></li>
        <li class="last"><a href="contactus.php">Contact Us</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box"><a href="#"><img src="images/i1.jpg" alt="" /></a>
      <div class="floater">
        <h2>WHY IIIT ALLAHABAD?</h2>
        <p>IIIT Allahabad offers one of the best course in ECE/IT in India.
With the passage of IIIT Bill 2014 by the Parliament of India, IIIT Allahabad, along with the other 4 MHRD funded IIITs, became an Institute of National Importance on December 1, 2014.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/i2.jpg" alt="" /></a>
      <div class="floater">
        <h2>LABARATORIES</h2>
        <p>The Institute boasts of the state-of-the-art Laboratories, which offer the students the opportunity to exploit the full potential within. Few institutes offer Labaratories at par with IIIT Allahabad. Also the students are granted 24 * 7 access to the Labs, in order to promote self paced learning. Each lab has experienced managers to...  </p>
        <p class="readmore"><a href="lab.php">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/i3.jpg" alt="" /></a>
      <div class="floater">
        <h2>RESEARCH</h2>
        <p>It is only through continuous research that humans learn to discover both about himself and his surroundings. It is this unquenchable thirst for knowledge that has brought us this far, and no doubt it will only be research that will guide us the 21st Century... </p>
        <p class="readmore"><a href="research.php">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="campuslife.php"><img src="images/i4.jpg" alt="" /></a>
      <div class="floater">
        <h2>CAMPUS LIFE</h2>
        <p>A parent always strives to give his child the best possible ambience to help him in the overall development of his character. While the surroundings of the home cannot be replicated, it can be made as good as possible. The world class facilities in diverse</p>
        <p class="readmore"><a href="campuslife.php">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <div class="featured_box"><a href="#"><img src="images/i5.jpg" alt="" /></a>
      <div class="floater">
        <h2>PROGRAMS</h2>
        <p>The department of ECE at IIITA has claimed itself as a unique talent pool of the institute with better ranks preferring this core branch. The unique blend of IT and ECE have made our students adroit to face the tough challenges of ECE branch like ...</p>
        <p class="readmore"><a href="programs.php">Continue Reading &raquo;</a></p>
      </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3" style = "width: 1100px; margin: 0px auto;">
  <div id="homecontent" style = "width: 1050px;">
    <div class="fl_left" style = "width: 650px;">
      <div class="column2">
        <ul>
          <li style = "width: 250px;">
            <h2 style="color:darkolivegreen;">Message from HOD</h2>
            <div class="imgholder"><img src="images/hod1.jpg" style="width:100%; height:173px; " alt="" /></div>
            <p style="margin-top:15px;">Welcome to the department of Electronics & Communication Engineering at Indian Institute of Information Technology, Allahabad</p>
            <p style="margin-top:8px;">The department was established in the year 2006 with the aims of providing leadership in the field of Electronics & Communication Engineering and</p>
            <p class="readmore"><a href="hodmssg.php">Continue Reading &raquo;</a></p>
          </li>
          <li class="last" style = "width: 250px;">
            <h2 style="color:darkolivegreen;">Faculty</h2>
            <div class="imgholder"><img src="images/f1.jpg" style="width:100%" alt="" /></div>
            <p style="margin-top:15px;">Indian Institute of Information Technology takes legitimate pride in its faculty, that is the juxtaposition of hardwork, dedication and modern knowledge.</p>
            <p>Each and every faculty is a pioneer in his / her own field and is more than well equipped with all the</p>
            <p class="readmore"><a href="faculty.php">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
      <div class="column2">
        <h2 style="color:darkolivegreen;">Programs</h2>
        <img class="imgl" src="images/p1.jpg" alt="" />
        <p>
The department of ECE at IIITA has claimed itself as a unique talent pool of the institute with better ranks preferring this core branch. The unique blend of IT and ECE have made our students adroit to face the tough challenges of ECE branch like VLSI, Communication Engineering, Robotics coupled with coding and other IT perspectives. The department of ECE is competent and apt enough, aided by world class infrastructure and facilities to bring practical knowledge at par with the global standard level.<br>

Details of subjects running in various programs can be found using following links <br><br><a href="programs.php">Continue reading &raquo;</a></p>
      </div>
    </div>
    <div class="fl_right">
		<h3 class="heading"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>	Achievements</h3>
		<hr>
				
		<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="3.5">
			<ul>
				<?php include("php/achievement.php"); ?>
			</ul>
		</marquee>

		<div class = "section_2_grid">
			<h3> CAMPUS LIFE </h3> <hr>
			<p>
				A parent always strives to give his child the best possible ambience to help him in the overall development of his character. While the surroundings of the home cannot be replicated, it can be made as good as possible. The world class facilities in diverse ...
			</p>
			<p class="readmore"><a href="campuslife.php">Continue Reading &raquo;</a></p>
		</div>

		<div class = "section_2_grid">
			<h3> LABORATORIES </h3> <hr>
			<p>
				The Institute boasts of the state-of-the-art Laboratories, which offer the students the opportunity to exploit the full potential within. Few institutes offer Labaratories at par with IIIT Allahabad. Also the students are granted 24 * 7 access to the Labs, in order to promote self paced learning. Each lab has experienced managers to... 
			</p>
			<p class="readmore"><a href="lab.php">Continue Reading &raquo;</a></p>
		</div>
	</div>
	<br>

<!--     <div class="fl_right">
      <h2 style="color:darkolivegreen;">News and Achievements</h2>
      <ul>
        <li>
          div class="imgholder"><a href="#"><img src="images/n1.jpg" alt="" /></a></div>
          <p><strong><a href="https://ece.iiita.ac.in/ece/projectaward.php">Best project Award</a></strong></p>
          <p>Best project award for 5th Semester and 7th semester have been announced.</p>
        </li>
        <li>
          <p>Dr. Somak Bhattacharyya, ECE has been selected for the prestigious Young Scientist Award by the International Union of R...... <a href="#">continue reading</a></p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/n2.jpg" alt="" /></a></div>
          <p><strong><a href="#">Dr. Sitangshu Bhattacharya</a></strong></p>
          <p>Dr. Sitangshu Bhattacharya has been enlisted in the IEEE Electron Device Society Golden list of Reviewer-2014. http:...<a href="#">Continue Reading</a></p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/n3.jpg" alt="" /></a></div>
          <p><strong><a href="#">IEEE</a></strong></p>
          <p>Dr. Rekha Verma has been selected as Vice-chair of IEEE Electron Devices Society-Uttar Pradesh chapter. The chapter ...<a href="#">Continue Reading</a></p>
        </li>
        <li class="last">
          <div class="imgholder"><a href="#"><img src="images/n4.jpg" alt="" /></a></div>
          <p><strong><a href="#">United nations</a></strong></p>
          <p>Yugratna Srivastava, a second year BTech students in the department of ECE-IIIT Allahabad, became the youngest person to...<a href="#">Continue Reading</a></p>
        </li>
                <li class="last">
          <div class="imgholder"><a href="#"><img src="images/n5.jpg" alt="" /></a></div>
          <p><strong><a href="#">Talk</a></strong></p>
          <p>Surendra Tadi from Freescale Semiconductor, (INDIA) visited the department and delivered lectures on Test and Verificati...<a href="#">Continue Reading</a></p>
        </li>
      </ul>
    </div>
 -->    <br class="clear" />
  </div>
</div>


<!-- ####################################################################################################### -->
<div class="footer" style="margin-top:50px;">
      <div class="wrap">
      <div class="footer-grids">
        <div class="footer-grid">
        <img src="images/l1.jpg" style="width:200px;">
        </div>
        <div class="footer-grid" >
          <h1 style="color:white; margin-bottom:15px; font-size:13px;">DEPARTMENT OF ELECTRONICS AND COMMUNICATION ENGINEERING</h1>
          <h1 style="color:white; font-size:13px;">INDIAN INSTITUTE OF INFORMATION TECHNOLOGY ALLAHABAD</h1>
        </div>
        <div class="footer-grid">
          <h1 style="color:white; font-size:21px; margin-bottom:20px;"><a href="Developers page/index.html" style="color:white;">DEVELOPERS</a></h1>
          <ul>
            <li><p>SUBHAM CHOUDHURY</p></li>
            <li><p>SATYARTH AGRAHARI</p></li>
            <li><p>NEHA KANDPAL</p></li>
            <li><p>RAHUL AGARWAL</p></li>
          </ul>
        </div>
        <div class="footer-grid footer-lastgrid">
          <h3 style="font-size:17px;">CONTACT US</h3>
          <p>Devghat, Jhalwa, Allahabad-211012, U. P. INDIA</p>
          <div class="footer-grid-address">
            <p>Phone : 91-532-2922000</p>
            <p>Fax: 91-532-2922125</p>
            <p>Email:<a class="email-link" href="#">hod.ec@iiita.ac.in </a></p>
              <p>Twitter:<a href="https://twitter.com/ECE_IIITA" class="email-link">https://twitter.com/ECE_IIITA</a></p>

          </div>
        </div>
        <div class="clear"> </div>
      </div>
    </div>
  </div>
</body>
</html>
