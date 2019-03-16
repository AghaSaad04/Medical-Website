<!DOCTYPE HTML>
<html>

<head>
    <title>SignUp Form</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
	<!-- bootstrapCDN -->
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<!-- my css-StyleSheet -->
    <link href="../css/Style-patientform.css" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<!-- jquery link-->
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<!-- bootstrap-JavaScript -->
    <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">

	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
    <style type="text/css">
     

	
	
	.ocean {
        height: 5%;
        width: 100%;
    }

    .wave {
        background: url(../resources/wave.svg) repeat-x;

 
        width: 6400px;
      
        height: auto;
        overflow-x: hidden;
        overflow-y: hidden;
        animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
        transform: translate3d(0, 0, 0);
    }

    .wave:nth-of-type(2) {
        margin-top: -150px;
       
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
            transform: translate3d(0, 0px, 0);
        }

        50% {
            transform: translate3d(0, 5px, 0);
        }
    }

    @keyframes swell_1 {

        0%,
        100% {
            transform: translate3d(0px, 0px, 0);
        }

        50% {
            transform: translate3d(0px, 5px, 0);
        }
	

    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../resources/logo.png" width="60px" height="50px"></a>
            <!-- <a class="navbar-brand" href="#"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./homepage.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Team.php">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact_Us.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUsPage.php">About Us</a>
                    </li>
                </ul>
                <ul>
                    <li class="nav-item" style="float: right;">
                        <a class="nav-link" href="login.php"><i class="fa fa-fw fa-sign-in"></i> Login</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!--background-->
    <h1 style="color:black;">Patient SignUp Form</h1>
    <!-- Main-Content -->
    <div class="main-w3layouts-form">
        <h2 class="d-flex justify-content-center">SignUp to your account</h2>
        <form style="text-align:center;" action="PatientSignUpForm_action.php" method="post">
            <div class="fields-w3-agileits">
                <span class="fa fa-user" aria-hidden="true"></span>
                <input type="text" name="name" required="" placeholder="Name" />
            </div>
            <div class="fields-w3-agileits">
                <span class="fa fa-key" aria-hidden="true"></span>
                <input type="password" name="password" required="" placeholder="Password" />
            </div>
            <div class="fields-w3-agileits">
                <span class="fa fa-envelope" aria-hidden="true"></span>
                <input type="email" name="email" required="" placeholder="Email" />
            </div>
            <div class="fields-w3-agileits">
                <span class="fa fa-phone" aria-hidden="true"></span>
                <input type="tel" name="telephone" required="" placeholder="Telephone" />
            </div>
            <div class="fields-w3-agileits">
                <span class="fa fa-map-marker" aria-hidden="true"></span>
                <input type="text" name="address" required="" placeholder="Address" />
            </div>
            <div class="fields-w3-agileits">
                <span class="fa fa-table" aria-hidden="true"></span>
                <input type="date" name="dob" required="" placeholder="Date of Birth" />
            </div>
            <div class="fields-w3-agileits">
 
                <span class="fa fa-male" aria-hidden="true"></span>
                <div class="container " style="margin-top: 10px;">
                	<div class="row" style="margin-left:20px; width: 60px">
                
                		<div class="col-6">
                			<input type="radio" name="gender" value="male">
                		</div>
	                	<div class="col-6">Male
	                	</div>
            			</div>
            	</div><br>
            	<div class="container" style="margin-top: 10px;">
                	<div class="row" style="width: 60px">
                		<div class="col-6">
                			<input type="radio" name="gender" value="female">
                		</div>
	                	<div class="col-6">Female
	                	</div>
            			</div>
            	</div><br>
            </div>

            <div class="remember-section-wthree d-flex justify-content-center">
                <ul>
                    <li>
                        <label class="anim">
                            <input type="checkbox" class="checkbox">
                            <span> Remember me ?</span>
                        </label>
                    </li>
                    <li> <a href="#">Forgot password?</a> </li>
                </ul>
                <div class="clear"> </div>
            </div>
            <input class="justify-content-center" type="submit" value="Sign Up" />
        </form>
        
    </div>
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
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@teammedics.com">info@teammedics.com</a></li>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>

</html>