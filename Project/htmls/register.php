<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
		<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- bootstrapCDN -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<!-- font awesome-bootstrap -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<!-- my css-StyleSheet -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/services.css">
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
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
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="Team.php">Our Team</a></li>
                    <li><a href="Contact_Us.php">Contact Us</a></li>
                    <li><a href="AboutUsPage.php">About US</a></li>
                </ul>
	        	<ul class="nav navbar-nav navbar-right">
	        		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      		</ul>

	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container -->
	    </nav><!-- /.navbar -->
	</div><!-- /.container-fluid -->



<div class="services">
<div class="container">
		<h3 class="heading_services">Register</h3>
	
		<div class="services_upper_grid">
        <a href="doctor_signup.php">
			<div class="col-md-4">
				<div class="services_grid">
					<i class="fa fa-user-md" aria-hidden="true"></i>
					<h4>Register As Doctor</h4>
				</div>
			</div>
        </a>
        <a href="PatientSignUpForm.php">
			<div class="col-md-4">
				<div class="services_grid">
					<i class="fa fa-wheelchair" aria-hidden="true"></i>
					<h4>Register As Patient</h4>
				</div>
			</div>
        </a>
        <a href="pharmacy_signup.php">
            <div class="col-md-4">
                <div class="services_grid">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                    <h4>Register Pharmacy</h4>
                </div>
            </div>
        </a>
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