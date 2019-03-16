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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link href="../css/Contact-us.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/wave.css">
        <!-- <link rel="stylesheet" type="text/css" href=".css"> -->

<style type="text/css">
    .justify-content-center{
                    margin-right : 100px;
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
</style>
</head>

<body>




<nav class="navbar-fixed-top navbar navbar-expand-lg navbar-light bg-dark">
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
          <a class='nav-link active1' href='Contact_Us.php?Docid=".$Docid."'>Contact Us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='AboutUsPage.php?Docid=".$Docid."'>About Us</a>
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
          <a class='nav-link active1' href='Contact_Us.php?pharid=".$Pharid."'>Contact Us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='AboutUsPage.php?pharid=".$Pharid."'>About Us</a>
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
          <a class='nav-link active1' href='Contact_Us.php?Patid=".$Patid."'>Contact Us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='AboutUsPage.php?Patid=".$Patid."'>About Us</a>
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
          <a class='nav-link active1' href='Contact_Us.php'>Contact Us</a>
        </li>
        <li class='nav-item '>
          <a class='nav-link ' href='AboutUsPage.php'>About Us</a>
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










    <div class="container">
        
    <div class="row">
        <div class="col-sm-12 h1">
            CONTACT US
        </div>
        </div>
    </div>
<br>
<br>

<br>
<br>
<br>
<br>

    
    <div class="container-fluid test-background-color">
        <div class="row d-flex justify-content-center ">

            <div class="col-md-4 col-sm-8 contact-us-description ">
                <div style="color: black; font-size: 30px; margin-top: 1em; text-align: center;">
                    Message Us
                </div>
                <br>
                <br>
                <div class="contact-us-card-desc" style="color: black; line-height: 30px; font-size: 20px;">If you wish to be considered for employment at Weifield, please do not send a message, here – instead, please complete Weifield’s job application and our Human Resources department will contact you after their review of your submitted information.
                </div>
            </div>
            <div class="col-md-4 col-sm-8 contact-us-form ">
                <div class="main-w3layouts-form centered">
                    <h2>Contact Us Today</h2>
                    <form action="contact_email.php" method="post">
                        <div class="fields-w3-agileits">
                            <span class="fa fa-user" aria-hidden="true"></span>
                            <input type="text" name="Name" required="" placeholder="Name" />
                        </div>
                        <div class="fields-w3-agileits">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                            <input type="email" name="Email" required="" placeholder="Email" />
                        </div>
                        <div class="fields-w3-agileits">
                            <span><i class="fas fa-comments"></i></span>
                            <textarea class="text-area" type="text" name="Query" required="" placeholder="Query" cols="50" rows="6"></textarea>
                        </div>
                        <div class="remember-section-wthree">
                            <div class="clear"> </div>
                        </div>
                        <div class="d-flex justify-content-center">
            <input type="submit" name='Contact' value="Post" />
                
            </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-sm-1"></div> -->
        </div>
    </div>
    <br>
    <br>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <hr class="seperator">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid test-background-color ">
        <div class="row">
            <div class="col"></div>
            <div class="col get-in-touch centered">
                GET IN TOUCH
            </div>
            <div class="col"></div>
        </div>
        <div class="container ">
            <div class="row centered bottom-margin-getintouch">
                <div class="col-sm-4 top-margin">
                    <i class="fas fa-map-marker-alt get-in-touch-fonts"></i>
                    <div class="default-text-color">
                        <br>
                        <div class="address-desc" style="font-size: 25px"><b>ADDRESS</b></div>
                        <br>
                        <h2 class="address-desc" style="font-size: 20px">Rawalpindi</h2>
                        <h3 class="address-desc">House# X, Block Y, street#3, Room# 23, DHA</h3>
                        <br>
                        <h2 class="address-desc" style="font-size: 20px">Kharian</h2>
                        <h3 class="address-desc"> Block Y, street#3, Room# 23, Cantt</h3>
                        <br>
                        <h2 class="address-desc " style="font-size: 20px">Lahore</h2>
                        <h3 class="address-desc">House# X, street#3, Johar Town</h3>
                    </div>
                    <br>
                </div>
                <div class="centred col-sm-4 top-margin">
                    <i class="fas fa-phone get-in-touch-fonts phone-font-get-in-touch"></i>
                    <div class="default-text-color">
                        <br>
                        <div class="phone-desc" style="font-size: 25px"><b>PHONE</b></div>
                        <br>
                        <h2 class="phone-desc"style="font-size: 20px">Group Contracting</h2>
                        <h3 class="phone-desc">+92 342 8577868</h3>
                        <br>
                        <h2 class="phone-desc"style="font-size: 20px">24/7 Service Department</h2>
                        <h3 class="phone-desc">+030 28 090100</h3>
                        <br>
                        <h2 class="phone-desc" style="font-size: 20px">Customer Care</h2>
                        <h3 class="phone-desc">+920 12 123423</h3>
                    </div>
                </div>
                <div class="centred col-sm-4 top-margin">
                    <i class="default-text-color fas fa-envelope-open get-in-touch-fonts"></i>
                    <div class="">
                        <br>
                        <div class="default-text-color email-desc" style="font-size: 25px"><b>ADDRESS</b></div>
                        <br>
                        <h2  class="email-desc">Rawalpindi</h2>
                        <h3 class="email-desc">DHA</h3>
                        <br>
                        <h2 class="email-desc">Kharian</h2>
                        <h3 class="email-desc">Cantt</h3>
                        <br>
                        <h2 class="email-desc">Lahore</h2>
                        <h3 class="email-desc">Johar Town</h3>
                    </div>
                </div>
            </div>
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
                        <li class="footer-list">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque vulputate </a>
                        </li>
                        <li class="footer-list">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
                        </li>
                        <li class="footer-list">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
                        </li>
                        <li class="footer-list"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
                        </li>
                        <li class="footer-list">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 footer_grid">
                    <h3>Contact Info</h3>
                    <ul class="address">
                        <li class="footer-list">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>NUST, H12 <span>Islamabad.</span>
                        </li>
                        <li class="footer-list">
                            <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a>
                        </li>
                        <li class="footer-list">
                            <i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436
                        </li>
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

<script>
function openTab(evt) {
  var i, tablinks;
 
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active1", "");
  }
  evt.currentTarget.className += " active1";
}
</script>
</body>

</html>
