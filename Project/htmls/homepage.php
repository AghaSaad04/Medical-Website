<?php
include "../configuration.php";
 if (isset($_GET["pharid"])) {
	$Pharid = $_GET["pharid"];
   	include('pharmacy_session.php');
   	# code...
   }
   else if(isset($_GET["Docid"])){
   	$Docid = $_GET["Docid"];
   include('doctor_session.php');

   }else if(isset($_GET["Patid"])){
	$Patid = $_GET["Patid"];
   
   include('patient_session.php');

   }else{

   }

?>
<?php
	$last_queries =  "SELECT * FROM remedies ORDER BY Rem_Id DESC LIMIT 2";
	$sub_desc_res = mysqli_query($con,$last_queries);	
?>

<?php 
	$d_countQ = "SELECT * FROM registerdoctor";
	$p_countQ = "SELECT * FROM registerpatient";
	$phar_countQ = "SELECT * FROM pharmacy";

	$d_res = mysqli_query($con,$d_countQ);
	$p_res = mysqli_query($con,$p_countQ);
	$phar_res = mysqli_query($con,$phar_countQ);

	$d_count = mysqli_num_rows($d_res);
	$p_count = mysqli_num_rows($p_res);
	$phar_count = mysqli_num_rows($phar_res);
	// echo "$d_count";
	// echo "$p_count";



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- bootstrapCDN -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<!-- font awesome-bootstrap -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<!-- my css-StyleSheet -->
	<link rel="stylesheet" type="text/css" href="..\css\homepage.css">

	<!-- jquery link-->
	<script src="https://code.jquery.com/jquery.min.js"></script>

	<!-- bootstrap-JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		.ocean {
        height: 5%;
        width: 100%;
    }
    .footer_top {
        /*margin: 0px;*/
        padding-top:25px;
    }
    .test-background-color {
        background-color: rgba(0, 0, 0, 0.6);
    }

    .card {
        /*border-radius: 40px;*/
        border: 0px;
        /*word-spacing: 10px;*/
        text-align: justify;
        line-height: 30px;
        font-size: 20px;
        color: black;
        background: none;

    }
    .active1{
    	color:white!important;
    	border-bottom: 2px solid #0cb8b6;
    }
    .navbar{
        border: 0px;
      }

    .card-borders {
        border-radius: 4%;
        background: #d3d2d0;
        opacity: 0.6;
    }
    .wave {
        background: url(../resources/wave.svg) repeat-x;
        width: 6400px;
        /*width: 100%;*/
        height: auto;
        overflow-x: hidden;
        overflow-y: hidden;
        animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
        transform: translate3d(0, 0, 0);
    }

    .wave:nth-of-type(2) {
        margin-top: -150px;
        /*BEST CASE SO FAR*/
        /*animation: wave 8.6s cubic-bezier( 0.46, 0.35, 0.43, 0.53) -.125s infinite, swell_2  7s ease -1.25s infinite;*/
        animation: wave 9s cubic-bezier(0.46, 0.60, 0.43, 0.53) -.125s infinite, swell_2 7s ease -1.25s infinite;
        opacity: 1;
        height: 140px;
    }

    .wave:nth-of-type(1) {
        z-index: 1;
        height: 180px;
        opacity: 0.7;
        animation: swell_1 5s ease -1.25s reverse infinite, wave 13s cubic-bezier(0.36, 0.45, 0.63, 0.53) -.125s infinite
    }

    @keyframes wave {
        0% {
            margin-left: 0;
        }

        100% {
            margin-left: -1600px;
        }
    }

    @keyframes swell_2 {

        0%,
        100% {
            transform: translate3d(0, 10px, 0);
        }

        50% {
            transform: translate3d(0, 20px, 0);
        }
    }

    @keyframes swell_1 {

        0%,
        100% {
            transform: translate3d(0px, 10px, 0);
        }

        50% {
            transform: translate3d(0px, 25px, 0);
        }

	</style>
	
</head>
<body>


	<div class="container-fluid">
    <!-- Second navbar for categories -->
	    <!-- Second navbar for sign in -->
	    <nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#"><img src="..\resources\logo.png" width="60px" height="50px"></a>

	        </div>
	    
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="navbar-collapse-2">
	        	
	        	
	        	
	        	<?php

 if(isset($_SESSION['login_user'])){
    echo "		
    <ul class='nav navbar-nav navbar-left'>
	            	<li><a class=' active1' href='homepage.php?Docid=".$Docid."'>Home</a></li>
	            	<li><a href='services.php?Docid=".$Docid."'>Services</a></li>
	            	<li><a href='Team.php?Docid=".$Docid."'>Our Team</a></li>
	            	<li><a href='Contact_Us.php?Docid=".$Docid."'>Contact Us</a></li>
	            	<li><a href='AboutUsPage.php?Docid=".$Docid."'>About US</a></li>
	        	</ul>
	        	<ul class='nav navbar-nav navbar-right'>
	        		<li><a href='DocDashboard.php'><span class='glyphicon glyphicon-user'></span> ".$login_session_name."  </a></li>
	        		<li><a href='signout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>

	        		</ul>";

    }
    else if(isset($_SESSION['login_pharmacy'])){
     echo "		
    <ul class='nav navbar-nav navbar-left'>
	            	<li><a class=' active1' href='homepage.php?pharid=".$Pharid."'>Home</a></li>
	            	<li><a href='services.php?pharid=".$Pharid."'>Services</a></li>
	            	<li><a href='Team.php?pharid=".$Pharid."'>Our Team</a></li>
	            	<li><a href='Contact_Us.php?pharid=".$Pharid."'>Contact Us</a></li>
	            	<li><a href='AboutUsPage.php?pharid=".$Pharid."'>About US</a></li>
	        	</ul>
	        	<ul class='nav navbar-nav navbar-right'>
	        		<li><a href='PharDashboard.php'><span class='glyphicon glyphicon-user'></span> ".$login_session_name."  </a></li>
	        		<li><a href='signout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>

	        		</ul>";

    }
    else if(isset($_SESSION['login_patient'])){
   echo "		
    <ul class='nav navbar-nav navbar-left'>
	            	<li><a class=' active1' href='homepage.php?Patid=".$Patid."'>Home</a></li>
	            	<li><a href='services.php?Patid=".$Patid."'>Services</a></li>
	            	<li><a href='Team.php?Patid=".$Patid."'>Our Team</a></li>
	            	<li><a href='Contact_Us.php?Patid=".$Patid."'>Contact Us</a></li>
	            	<li><a href='AboutUsPage.php?Patid=".$Patid."'>About US</a></li>
	        	</ul>
	        	<ul class='nav navbar-nav navbar-right'>
	        		<li><a href='PatDashboard.php'><span class='glyphicon glyphicon-user'></span> ".$login_session_name."  </a></li>
	        		<li><a href='signout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>

	        		</ul>";

    }
    else{

    echo '<ul class="nav navbar-nav navbar-left">
	            	<li><a class=" active1" href="homepage.php">Home</a></li>
	            	<li><a href="services.php">Services</a></li>
	            	<li><a href="Team.php">Our Team</a></li>
	            	<li><a href="Contact_Us.php">Contact Us</a></li>
	            	<li><a href="AboutUsPage.php">About US</a></li>
	        	</ul>
	        	<ul class="nav navbar-nav navbar-right">
	        		<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register </a></li>
	        		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      		</ul>';
}
   
?>

	        	

	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container -->
	    </nav><!-- /.navbar -->
	</div><!-- /.container-fluid -->
	
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
	  <!-- Overlay -->
	  <div class="overlay"></div>

	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
	    <li data-target="#bs-carousel" data-slide-to="1"></li>
	    <li data-target="#bs-carousel" data-slide-to="2"></li>
	  </ol>
	  
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item slides active">
	      <div class="slide-1"></div>
	      <div class="hero">
	        <hgroup>
	            <h1>The Greatest Evil Is Physical Pain. </h1>        
	            <!-- <h3>Get start your next awesome project</h3> -->
	        </hgroup>
	        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
	      </div>
	    </div>
	    <div class="item slides">
	      <div class="slide-2"></div>
	      <div class="hero">        
	        <hgroup>
	            <h1>Every Disease Is A Physician</h1>        
	            <!-- <h3>Get start your next awesome project</h3> -->
	        </hgroup>       
	        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
	      </div>
	    </div>
	    <div class="item slides">
	      <div class="slide-3"></div>
	      <div class="hero">        
	        <hgroup>
	            <h1>Treat The Patient, Not The XRAY</h1>        
	            <!-- <h3>Get start your next awesome project</h3> -->
	        </hgroup>
	        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
	      </div>
	    </div>
	  </div> 
	</div>


<div class="our_services">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="services_wrapper">
					
					<h2>
						Services: We Offer
					</h2>
<!-- Row#1 For Services Wrapper -->
					<div class="row">
						
						
						<div class="col-12 col-md-6">
							<div class="services_content">
								<header class="entry-header d-flex flex-wrap align-items-center __web-inspector-hide-shortcut__">
	                                <!-- <img src="images/cardiogram.png" alt=""> -->

	                                <h3>Find A Clinic</h3>
	                            </header>
	                            <div class="inner_content">
	                            	<p>
	                            		Want to know about your near-by clinics? Just a click away! All the available clinics can now be viewed in minimum time.
	                            	</p>
	                            </div>
                            </div>
						</div>
						
						<div class="col-12 col-md-6 ">
							<div class="services_content">
								<header class="entry-header d-flex flex-wrap align-items-center __web-inspector-hide-shortcut__">
	                                <!-- <img src="images/cardiogram.png" alt=""> -->
	                                <h3>Find A Disease</h3>
	                            </header>
	                            <div class="inner_content">
	                            	<p>
	                            		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.
	                            	</p>
	                            </div>
                            </div>
						</div>
					</div>

<!-- Row#2 for services wrapper -->
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="services_content">
							<header class="entry-header d-flex flex-wrap align-items-center __web-inspector-hide-shortcut__">
                                <!-- <img src="images/cardiogram.png" alt=""> -->

                                <h3>Pharmacy</h3>
                            </header>
                            <div class="inner_content">
                            	<p>
                            		Looking for some medicine? Click here! And get your medicines delivered at your doorsteps by contacting pharmacists.
                            	</p>
                            </div>


                            </div>
						</div>
						
						<div class="col-12 col-md-6">
							<div class="services_content">
								<header class="entry-header d-flex flex-wrap align-items-center __web-inspector-hide-shortcut__">
	                                <!-- <img src="images/cardiogram.png" alt=""> -->

	                                <h3>Hospital</h3>
	                            </header>
	                            <div class="inner_content">
	                            	<p>
	                            		Want to get information about your near-by hospital? Click here! And find the hospital according to your location.
	                            	</p>
	                            </div>
                            </div>
						</div>
						
						
					</div>
				</div>
			</div>			
		</div>
	</div>	
</div>




<!-- Paralllllaaaaaaaaaaaaaaaaaaaaaaaaaaax -->


<div class="parallax">
	<div class="emergency_cases">
		<div class="container">
			<div class="emergency_container_cases_top">
				<div class="col-md-6 emergency_cases_left">
					<h4>Opening Hours</h4>
					<h6>Monday - Fri&nbsp;<span class="floating">8.00 - 18.00</span></h6>
					<h6>Monday - Sat&nbsp;<span class="floating">9.00 - 17.00</span></h6>
					<h6>Monday - Sun&nbsp;<span class="floating">9.00 - 15.00</span></h6>
				</div>
				<div class="col-md-6 col-sm-12 emergency_cases_right">
					<h4>Emergency Cases</h4>
					<h5><i class="fa fa-phone" aria-hidden="true"></i>1230456789</h5>
					<p>In Case of Emergence Contact on above Phone#</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>



<div class="stats-counter">
	<div class="container">
		<div class="title-stats-counter">
			<h3 class="stats-title-styling white-text">
				<span class="black">O</span>ur
				<span class="black">S</span>tats
			</h3>
		
			<div class="stats-line">
				<span class="fa fa-wheelchair" style="font-size: 2em;" aria-hidden="true"></span>
			</div>
		</div>
	</div>
	<div>
		<div class="container">
			<div class="col-md-4 col-sm-4 stats-grid">
				<div class="stats-numscroller"><?php echo "$d_count"; ?></div>
				<div class="stat-info-w3ls">
					<h4 class="stats-grid">Doctors</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 col-sm-4 agileits w3layouts col-sm-6 stats-grid stats-grid-1">
				<div class="stats-numscroller"><?php echo "$p_count"; ?></div>
				<div class="stat-info-w3ls">
					<h4 class="stats-grid">Patients</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">
				<div class="stats-numscroller"><?php echo "$phar_count"; ?></div>
				<div class="stat-info-w3ls">
					<h4 class="stats-grid">Pharmacies</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			</div>

	</div>



</div>
<br>
<br>
<br>
<br>

<div class="container-fluid test-background-color">
<br>
        	<div style="font-size: 40px; color: #ff9900;">Remedies</div>
<br>
<br>
<br>
        <div class="container">
            <div class="row">
    <?php            while ( $row = mysqli_fetch_array($sub_desc_res)) {
		
	
echo
				"<div class='card-borders col-sm-5 box-shadow' style='color: black;'>
                    <h3><b>".$row["Subject"]."</b></h3>
                    <p class='card ' style='color: black;font-size: 20px;'>".$row['Description']."
                    </p>
                </div>
                <div class='col-sm-2'></div>";}?>
                <!-- <div class="card-borders col-sm-5 box-shadow" style="color: black;">
                    <h3><b>HOW WE DO IT?</b></h3>
                    <p class="card "style="color: black; font-size: 20px;">We understand that no journey is ever a straight path. It will be full of ups and downs, twists and turns, and times when you don’t know which direction to take.We go on that journey with our clients 
                    </p>
                </div>
            </div> -->
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
<br>
            <br>
            <br>
            <br>

</div>
<!-- FOOOTEEEEEEERRRRRRRRRRRRRRRRRRRRRRRRRRRR -->
<div class="container-fluid">
        <div class="row" style="overflow: hidden; margin: 0px; padding: 0px;">
            <div class="col">
                <div class="ocean top-padding">
                    <div class="wave"></div>
                    <div class="wave "></div>
                    <!-- <div style="background-color: blue"></div> -->
                </div>
            </div>
        </div>
        <div class="footer_top">
        <div class="container">
            <div class="row"> 
                
        
            <div class="col-md-3 footer_grid" style="text-align: left;">
                <h3>About Us</h3>
                <ul class="footer_grid_list footerList" >
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;" href="#" data-toggle="modal" data-target="#myModal">Non-profit</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Our Mission</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Leadership</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Vision & values</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Facts & Figures</a>
                    </li>
                    <li ><i class="fa fa-angle-right" aria-hidden="true"></i>
                    	<a  style="color: red;" href="sitemap.xml" >SiteMap </a>
                    </li>
                </ul>
                
            </div>
            <div class="col-md-3 footer_grid" style="text-align: left;">
                <h3>Latest News</h3>
                <ul class="footer_grid_list footerList">
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Depression affects health</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Weight predicts heart failure</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Diabetes kills cancer cells</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Meditation impacts learning</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a style="color: white;"  href="#" data-toggle="modal" data-target="#myModal">Brain cells controls anxiety</a>
                    </li>


                </ul>
            </div>
            <div class="col-md-3 footer_grid" style="text-align: left;">
                <h3 style="text-align: center;">Contact Info</h3>
                <ul class="address">
                    <li  style="color: white;"><i class="fa fa-map-marker" aria-hidden="true"></i>NUST, H12 <span style="color: white;">Islamabad.</span></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a style="color: white;" href="mailto:info@example.com">teammedics@gmail.com</a></li>
                    <li  style="color: white;"><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>

                </ul>
            </div>
            <div class="col-md-3 footer_grid "style="text-align: left;">
                <h3>Sign up for our Newsletter</h3>
                <p  style="color: white;">Get Started For Free</p>
                <div class="footer_grid_right">
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Email Address..." required="">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>

        </div>
                </div>
    </div>
	<div class="footer_copyrights">
	        <p>© 2018 New Startup. All rights reserved | <a href="homepage.php">Team Medics</a></p>
	</div>
    </div>
</body>
</html>
