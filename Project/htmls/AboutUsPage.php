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

   }else{

   }
   ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Pompiere" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/AboutUsPage.css">

    <link rel="stylesheet" type="text/css" href="../css/wave.css">
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">


	<!-- bootstrap-JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
	
<style type="text/css">
	.footer_top {
        /*margin: 0px;*/
        padding-top:25px;
    }
    .navbar-fixed-top{
      position: fixed;
      width: 100%;
      z-index: 1030;
    }
    .active1{
      color:white!important;
      border-bottom: 2px solid #0cb8b6;
    }
    .navbar-light .navbar-nav .nav-link{
  color: #ff9900;
}
    
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="../resources/logo.png" width="60px" height="50px"></a>
                <!-- <a class="navbar-brand" href="#"></a> -->
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php

 if(isset($_SESSION['login_user'])){
    echo "
    <ul class='navbar-nav mr-auto'>
        <li class='nav-item active'>
          <a class='nav-link' href='homepage.php?Docid=".$Docid."'>Home <span class='sr-only'>(current)</span></a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='services.php?Docid=".$Docid."'>Services</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Team.php?Docid=".$Docid."'>Our Team</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Contact_Us.php?Docid=".$Docid."'>Contact Us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link active1' href='AboutUsPage.php?Docid=".$Docid."'>About Us</a>
        </li>

      </ul>
               <ul style='list-style-type:none;'>
        <li class='nav-item' style='float: right;'>
          <a class='nav-link' href='signout.php'><i class='fa fa-fw fa-sign-in'></i> Logout</a>
        </li>
        <li style='float: right;'>
          <a class='nav-link'  href='DocDashboard.php'><i class='fa fa-fw fa-user'></i> ".$login_session_name."</a>
        </li>
        
      </ul>";

    }
    else if(isset($_SESSION['login_pharmacy'])){
    echo "
    <ul class='navbar-nav mr-auto'>
        <li class='nav-item active'>
          <a class='nav-link' href='homepage.php?pharid=".$Pharid."'>Home <span class='sr-only'>(current)</span></a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='services.php?pharid=".$Pharid."'>Services</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Team.php?pharid=".$Pharid."'>Our Team</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Contact_Us.php?pharid=".$Pharid."'>Contact Us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link active1' href='AboutUsPage.php?pharid=".$Pharid."'>About Us</a>
        </li>

      </ul>
                <ul style='list-style-type:none;'>
        
        
        <li class='nav-item' style='float: right;'>
          <a class='nav-link' href='pharmacy_signout.php'><i class='fa fa-fw fa-sign-in'></i> Logout</a>
        </li>
        <li style='float: right;'>
          <a class='nav-link'  href='PharDashboard.php'><i class='fa fa-fw fa-user'></i> ".$login_session_name."</a>
        </li>
      </ul>";

    }
     else if(isset($_SESSION['login_patient'])){
    echo "
    <ul class='navbar-nav mr-auto'>
        <li class='nav-item active'>
          <a class='nav-link' href='homepage.php?Patid=".$Patid."'>Home <span class='sr-only'>(current)</span></a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='services.php?Patid=".$Patid."'>Services</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Team.php?Patid=".$Patid."'>Our Team</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Contact_Us.php?Patid=".$Patid."'>Contact Us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link active1' href='AboutUsPage.php?Patid=".$Patid."'>About Us</a>
        </li>

      </ul>
                <ul style='list-style-type:none;'>
        
        
        <li class='nav-item' style='float: right;'>
          <a class='nav-link' href='patient_signout.php'><i class='fa fa-fw fa-sign-in'></i> Logout</a>
        </li>
        <li style='float: right;'>
          <a class='nav-link'  href='PatDashboard.php'><i class='fa fa-fw fa-user'></i> ".$login_session_name."</a>
        </li>
      </ul>";

    }
    else{
    echo "
    <ul class='navbar-nav mr-auto'>
        <li class='nav-item '>
          <a class='nav-link' href='homepage.php'>Home <span class='sr-only'>(current)</span></a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='services.php'>Services</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Team.php'>Our Team</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Contact_Us.php'>Contact Us</a>
        </li>
        <li class='nav-item '>
          <a class='nav-link active1' href='AboutUsPage.php'>About Us</a>
        </li>

      </ul>
    <ul style='list-style-type:none;'>
       
        <li class='nav-item' style='float: right;'>
          <a class='nav-link' href='login.php'><i class='fa fa-fw fa-sign-in'></i> Login</a>
        </li>

        <li style='float: right;'>
          <a class='nav-link'  href='register.php'><i class='fa fa-fw fa-user'></i> Register</a>
        </li>
      </ul>";
}
   
?>


  </div>
  </div>
</nav>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<div class="bg">
		<!-- <p class="h1 about_us centered">  -->
		<!-- ABOUT US -->
		<!-- </p> -->
	</div>
	
<div class="container-fluid">
  <div class="row">
    <div class="goal" style="color:white; width:25%;">
		.
    </div>
    <div class="goal" style="width:50%;">
      <p class="centered goal_stat text-justify" style="width:100%; ">
	  	<i style="font-size:48px;color:#ff9900" class="fa fa-quote-left"></i>
			The purpose of life is not to be happy. It is to be useful, to be honorable, to be compassionate, to have it make some difference that you have lived and lived well. No one has ever become poor by giving. No one is useless in this world who lightens the burdens of another.


		<i style="font-size:48px;color:#ff9900" class="fa fa-quote-right"></i>
	  </p>
    </div>
    <div class="goal" style="color:white; width:25%;">
		.
    </div>
  </div>
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <hr class="seperator">
            </div>
        </div>
    </div>
 
	
	<h2 class="centered our_story">OUR STORY</h2>	 
	<div class="row our-story2">
		<div class="col-12 mission_stat2">
			<div style="height:30%; opacity:0; background:white;">
				<h3 class="heading">
					They are about how our clients are growing
				</h3>
			</div>
			<div style="height:40%; opacity:0.4; background:white; padding: 0 3vw 0 3vw;">
				<h3 class="heading">
		On the street I saw a naked child, hungry and shivering in the cold. I became angry and said to God, "why do you permit this? Why don't you do something?" For a while God said nothing. That night he replied, quite suddenly, "I certainly did something. I made you.  
				</h3>
			</div>
		</div>
	</div>

		
<div class="container" style="margin-top:8vw; padding-bottom:6vw;">
	<h2 class="centered our_story core_values_head">CORE VALUES</h2>	
</div>

    <div class="row">
		<div class="col centered icon-div">
			<i class="fa fa-user-md icon" ></i>
			<p class="icon-description core-values-user-icon"><b>
				Put the Patient First
			</b></p>
		</div>
	
		<div class="col centered">
			<i class="fa fa-heartbeat icon "></i>
			<p class="icon-description core-values-heartbeat-icon"><b>
				Take Personal Ownership
			</b></p>
		</div>
		<div class="col centered">
			<i class="fa fa-ambulance icon "></i>
			<p class="icon-description core-values-ambulance-icon"><b>
				Be Fast but Don't Hurry
			</b></p>
		</div>
    </div>
    <div class="row">
		<div class="col centered">
			<i class="fa fa-medkit icon"></i>
			<p class="icon-description core-values-medkit-icon"><b>
				Celeberate the Art of Medicine
			</b></p>
		</div>
		<div class="col centered">
			<i class="fa fa-stethoscope icon"></i>
			<p class="icon-description core-values-stethoscope-icon"><b>
				Be Inquisitive & Discover
			</b></p>
		</div>	
		<div class="col centered">
			<i class="fa fa-briefcase icon"></i>
			<p class="icon-description core-values-briefcase-icon"><b>
				Always Work for Integrity
			</b></p>
		</div>
    </div>  


		<div class="">
        <div class="row" style="overflow: hidden; margin: 0px; padding: 0px;">
            <div class="col">
                <div class="ocean top-padding">
                    <div class="wave"></div>
                    <div class="wave "></div>
   
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
</body>
</html>