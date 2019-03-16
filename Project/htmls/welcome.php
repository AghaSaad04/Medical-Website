<?php
   include('session.php');
   include ('../configuration.php');
   		// $image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
?>
<html>
   
   <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/wave.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">
    <link href="../css/welcome.css" rel='stylesheet' type='text/css' />

      <title>Welcome </title>
      <style type="text/css">
      	

.upload-image {
  display: table-cell;
  border: 1px soid green;
  width: 250px;
  height: 250px;
}

.upload-image-preview {
  width: 250px;
  height: 250px;
}
.upload-image-preview img{
  width: 100%;
  height:  100%;
}
.story-subject,.story-details{
	width: 100%;
	border:1px solid grey;
}
.container-fluid{
	padding: 0px;
}
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
        input["submit"]{
        	margin-bottom: 30px;
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
                        <a class="nav-link" href="./homepage.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Team.html">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact_Us.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.html">About Us</a>
                    </li>
                </ul>
                <ul>
                    <li class="nav-item" style="float: right;">
                        <a class="nav-link" href="./homepage.html"><i class="fa fa-fw fa-sign-in"></i> Sign Out</a>
                    </li>
                    <li style="float: right;">
                        <a class="nav-link" href=""><i class="fa fa-fw fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<br>
<br>


<div class="container">
  <div class="row">
    <div class="col">
      <div class="upload-image">
        <div class="upload-image-preview">
			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $login_session_Image ).'"/>' ;?>
		</div>
      </div>
      <h3>Dr. <?php echo $login_session_name; ?></h3> 

    </div>
    <div class="col">
     	<h3>Specialization:</h3>
     	<p><?php echo $login_session_spec; ?></p>
     	<br>
     	<h3> Address: </h3> 
     	<p><?php echo $login_session_Address; ?></p>
     	<br>
     	<h3> Phone Number: </h3> 
     	<p><?php echo $login_session_PhoneNumber; ?></p>
     	<br>
     	<h3> Timings: </h3> 
     	<p><?php echo $login_session_timings; ?></p>
     	<br>
    </div>
    <div class="col-sm-5">
     	<div class="main-w3layouts-form ">
     		<br>
        <h2 class="d-flex justify-content-center">Post your Stories or Remedies</h2>
        <form action="#" method="post">
            <div class="fields-w3-agileits">
                <span class="fa fa-user" aria-hidden="true"></span>
                <input type="text" name="subject" required="" placeholder="Subject"/>
            </div>
            <div class="fields-w3-agileits">
                <span class="fa fa-key" aria-hidden="true"></span>
                <textarea type="text" name="details" required="" placeholder="Description" rows="8"> </textarea>
            </div>
            <br>
            <input type="submit" value="Post" />
        </form>
    </div>
    </div>
  </div>
</div>
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
      <!-- <h2><a href = "logout.php">Sign Out</a></h2> -->
   

   </body>
   
</html>