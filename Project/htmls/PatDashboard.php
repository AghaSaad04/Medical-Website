<?php
include "patient_session.php";
include "../configuration.php";
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Patient Dashboard</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

		<link href="../css/patient_dashboard.css" rel='stylesheet' type='text/css'/>
		<link href="../css/welcome_patient.css" rel='stylesheet' type='text/css'/>
		<!-- <link href="../css/star.css" rel='stylesheet' type='text/css'/> -->
		<link href="../css/homepage_footer.css" rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">
<style>

.black:hover {
 color: black!important;
}
body {
    background-image: url("../resources/Doctor-signup.jpg");
    /*height: 100%;*/
    /*background-position: center;*/
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1;
  /*left: 10px;*/
  /*padding-left: 10%;*/
  /*margin-left: 10px;*/
  font-size:18px;
}
.fa-user{
    font-size: 150px;
}
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
                        <a class="nav-link" href="./homepage.php?Patid=<?php echo $login_session_Id; ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./services.php?Patid=<?php echo $login_session_Id; ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Team.php?Patid=<?php echo $login_session_Id; ?>">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact_Us.php?Patid=<?php echo $login_session_Id; ?>">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./AboutUsPage.php?Patid=<?php echo $login_session_Id; ?>">About Us</a>
                    </li>
                </ul>
                <ul>
                    <li class="nav-item" style="float: right;">
                        <a class="nav-link" href="patient_signout.php"><i class="fa fa-fw fa-sign-in"></i> Logout</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>




<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <div class="fa fa-user"></div>
                            
                        </div>
                    </div>
                    <?php
          $sql = "SELECT * FROM registerpatient";
          
          $result = mysqli_query($con, $sql); 


          	?>
              <div class="col-md-6">
                        <div class="profile-head">
                                 <?php  
                                 echo "<h5>".$row_name["P_Name"]."</h5>" ;
                                 	?>
                                 </br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active black" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link black" id="profile-tab" data-toggle="tab" href="#feedback" role="tab" aria-controls="profile" aria-selected="false">Feedback Form</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-4">
                    	.

                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>

                                            </div>
                                            <div class="col-md-6">
                                 <?php echo "<p>".$row_name["P_Name"]."</p>";?> 
                                 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                 <?php 
                                 	echo "<p>".$row_Email["Email"]."</p>" ;
                                 
                                 	?>                                              
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telephone</label>
                                            </div>
                                            <div class="col-md-6">
                                 <?php 
                                 
                                 	echo "<p>".$row_PhoneNumber["Telephone"]."</p>" ;
                                 	?>  
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                    <?php 
                                 	echo "<p>".$row_Address["Address"]."</p>" ;
                                 	?> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birth Date</label>
                                            </div>
                                            <div class="col-md-6">
                                    <?php 
                                 	echo "<p>".$row_Dob["DOB"]."</p>" ;
                                 	?> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                    <?php 
                                 	echo "<p>".$row_gender["Gender"]."</p>" ;
                                 	?> 
                                            </div>
                                        </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>

									<div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
									    <div class="row">
									        <div class="main-w3layouts-form " style="background:white; width:90% ; margin-top: -50px; padding-right: 15vw;">
									            <br>
									            <div class="d-flex justify-content-center"  >
									            	
									           
									                <h2 style="color: black; font-size: 1.5vw; text-align:left; padding-right: 130px;">Your Experience..</h2>
									                </form>
									            </div>
									            <?php 
									            // print_r($_SESSION['login_patient']);
									            $r=$_SESSION['login_patient'];
									            
									            echo '<form method="GET" action="patient_feedbackform.php" >'?>
									                <div class="fields-w3-agileits" style="background: white;">
									                    <span class="fa fa-user" aria-hidden="true"></span>
									                    <input  type="text" required="" placeholder="Experience..." name="experience" />
									                </div>

									                    <div class="d-flex justify-content-center" >
									            	
									           
									                <h2 style="color: black; font-size: 1.5vw; margin-left:50px ; padding:30px 30px 0px 0px;">Do You recommend to Others?</h2>
									                
									            </div>
									            <!-- <form action="" method="POST"> -->
									                <div class="fields-w3-agileits" style="background: rgba(0,0,0,0.7); margin:10px 6px 10px 43px; border-radius: 10px 12px;">
									                    <!-- <span class="fa fa-user" aria-hidden="true"></span> -->

									                     <!-- <span class="fa fa-male" aria-hidden="true"></span> -->
										                        
										                <div class="container " style="margin-top: 10px;">
										                  <div class="row" style="margin-left:20px; width: 60px">
										                    <div style="color:white;" class="col-6">
										                      <input type="radio" name="recommend" value="Yes">
										                    </div>
										                    <div class="col-6"><p style="color:white;">Yes</p>
										                    </div>
										                  </div>
										              </div><br>
										              <div class="container" style="margin-top: 10px;">
										                  <div class="row" style="width: 60px">
										                    <div class="col-6">
										                      <input type="radio" name="recommend" value="No">
										                    </div>
										                    <div class="col-6"> <p style="color:white;">No</p>
										                    </div>
										                  </div>
										              </div><br>
										            </div>
									                    




									                <!-- </div> -->
									    
									            <br>
									                <div class="d-flex justify-content-center">
									                    <input type="submit" name="submit" value="Post" >
									                
									                </div>
									            </form>
									        </div>
									    </div>
									</div>

</div>
</div>
</div>

 </div>

</div>

<!-- </form>
</div>
 -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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



<div class="footer_top" style="background-color: #252527;" style="margin:0; padding:0;">
		<div class="container">
		<div class="row" >
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


