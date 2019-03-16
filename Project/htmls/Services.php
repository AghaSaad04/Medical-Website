<?php

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

   }

 if(isset($_SESSION['login_user'])){
	echo '<script type="text/javascript">
	
	function findhospital(){
		window.location.href = "findhospital.php?Docid='.$Docid.'";
	}
	function findclinic(){
		window.location.href = "findclinic.php?Docid='.$Docid.'";
	}
	function findmedicine(){
		window.location.href = "findmedicines.php?Docid='.$Docid.'";
	}

</script>';
}else if(isset($_SESSION['login_pharmacy'])) {
	echo '<script type="text/javascript">
	
	function findhospital(){
		window.location.href = "findhospital.php?pharid='.$Pharid.'";
	}
	function findclinic(){
		window.location.href = "findclinic.php?pharid='.$Pharid.'";
	}
	function findmedicine(){
		window.location.href = "findmedicines.php?pharid='.$Pharid.'";
	}
</script>';
}else if(isset($_SESSION['login_patient'])) {
	echo '<script type="text/javascript">
	
	function findhospital(){
		window.location.href = "findhospital.php?Patid='.$Patid.'";
	}
	function findclinic(){
		window.location.href = "findclinic.php?Patid='.$Patid.'";
	}
	function findmedicine(){
		window.location.href = "findmedicines.php?Patid='.$Patid.'";
	}
</script>';
}else{
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrapCDN -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<!-- font awesome-bootstrap -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- my css-StyleSheet -->
	<link rel="stylesheet" type="text/css" href="..\css\style.css">
	<link rel="stylesheet" type="text/css" href="..\css\homepage.css">
	<link rel="stylesheet" type="text/css" href="..\css\services.css">
	<link rel="stylesheet" type="text/css" href="..\css\newWave.css">
	<link rel="stylesheet" type="text/css" href="..\css\footer.css">


	<!-- jquery link-->
	<script src="https://code.jquery.com/jquery.min.js"></script>

	<!-- bootstrap-JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<style type="text/css">
	.active1{
    	color:white!important;
    	border-bottom: 2px solid #0cb8b6;
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
	            	<li><a href='homepage.php?Docid=".$Docid."'>Home</a></li>
	            	<li><a class='active1' href='services.php?Docid=".$Docid."'>Services</a></li>
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
	            	<li><a href='homepage.php?pharid=".$Pharid."'>Home</a></li>
	            	<li><a class='active1' href='services.php?pharid=".$Pharid."'>Services</a></li>
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
	            	<li><a href='homepage.php?Patid=".$Patid."'>Home</a></li>
	            	<li><a class='active1' href='services.php?Patid=".$Patid."'>Services</a></li>
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
	            	<li><a class="tablink" href="homepage.php">Home</a></li>
	            	<li><a class="tablink active1" href="services.php">Services</a></li>
	            	<li><a class="tablink" href="Team.php">Our Team</a></li>
	            	<li><a class="tablink" href="Contact_Us.php">Contact Us</a></li>
	            	<li><a class="tablink" href="AboutUsPage.php">About US</a></li>
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



<div class="services">
<div class="container">
		<h3 class="heading_services">Our Services<span>We offer extensive medical procedures to outbound and inbound patients.</span></h3>

		<div class="services_upper_grid">
			
			<div class="col-md-6">
				<div class="services_grid" onclick="findclinic()">
					<i class="fa fa-stethoscope" aria-hidden="true"></i>
					<h4>Find A Clinic</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="services_grid">
					<i class="fa fa-heartbeat" aria-hidden="true"></i>
					<h4>Find A Disease</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
			<div class="col-md-6">
				<div class="services_grid" onclick="findmedicine()">
					<i class="fa fa-medkit" aria-hidden="true"></i>
					<h4>Pharmacy</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="services_grid" onclick="findhospital()">
					<i class="fa fa-hospital-o" aria-hidden="true"></i>
					<h4>Find a Hospital</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>


<!-- FOOOTEEEEEEERRRRRRRRRRRRRRRRRRRRRRRRRRRR -->
<div class="">
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


            <div class="col-md-3 footer_grid">
                <h3>About Us</h3>
                <p>Lorem Ipsum</p>

            </div>
            <div class="col-md-3 footer_grid">
                <h3>Latest News</h3>
                <ul class="footer_grid_list footerList">
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque vulputate </a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                        <a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 footer_grid">
                <h3>Contact Info</h3>
                <ul class="address">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>NUST, H12 <span>Islamabad.</span></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
                </ul>
            </div>
            <div class="col-md-3 footer_grid ">
                <h3>Sign up for our Newsletter</h3>
                <p>Get Started For Free</p>
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
        <p>© 2018 New Startup. All rights reserved | <a href="#">Team Medics</a></p>
</div>
    </div>
</body>
</html>
