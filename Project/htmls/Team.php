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
    <title>Our Team</title>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Pompiere" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
    <style type="text/css">
    body {
        /*width: 100%;*/
        margin: 0px;
        padding: 0px;
        border: 0px;
        overflow-x: hidden;
        background-image: url(../resources/stethoscope_coffee.jpg);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /*overflow-x: hidden;*/
    }

    body {
        color: white;
    }

    .navbar-fixed-top{
      position: fixed;
      width: 100%;
      z-index: 1030;
    }


    * {
        box-sizing: border-box;
    }.active1{
        color:white!important;
        border-bottom: 2px solid #0cb8b6;
    }


.navbar-light .navbar-nav .nav-link{
    color: #ff9900;
}






.navbar{
    padding: .2rem 1rem;
}
  .dropdown-menu{
    background-color: #343a40;
  }


.navbar-light .navbar-nav .nav-link:hover {
    color: white;
    border-bottom: 2px solid #0cb8b6;
}
  .dropdown-item {
    color: #ff9900;
  }

  .navbar-light .navbar-nav .active>.nav-link {
      color: #ff9900;
  }  
  .navbar-light .navbar-nav .active>.nav-link:hover {
      color: white;
  }
  .nav-link {
      color: #ff9900;
  }
  .nav-link:hover {
    color: white;
    border-bottom: 2px solid #0cb8b6;
}

li.style-no{
  list-style-type: none;
}



    .centred {
        text-align: center;
    }

    .size-of-text {
        font-size: 50px;
    }

    .heading-font {
        font-family: "Poppine", sans-serif;
        /*font-family: 'Pompiere', cursive;*/
    }

    /*.heading-shadow {
        text-shadow: 4px 4px 10px #ff9900;
    }*/

    .margin {
        margin: 0px 60px 0px 60px;
    }

    .team-members-image-size {
        width: 200px;
        height: 200px;
    }

    .round {
        border-radius: 50%;
    }

    .top-padding {
        padding-top: 60px;
    }
    .footer_top {
        /*margin: 0px;*/
        padding-top:25px;
    }

    .top-bottom-padding {
        padding: 20px 0px;
    }

    .size-on-hover {
        transition: 0.6s;
    }

    .team-members-description {

        opacity: 0;
        transition: .8s;
    }

    .positioner {
        position: inherit;
        margin-top: -30%;
        margin-left: 0%;
        color: white;
        opacity: 0;
        transition: 1s;
        /*display: inline;*/
    }

    i {
        transition: .8s;
    }

    .fa-facebook-f:hover {
        color: #ff9900;
    }

    .fa-linkedin-in:hover {
        color: #ff9900;
    }

    .fa-google:hover {
        color: #ff9900;
    }

    .fa-coffee:hover {
        color: #ffab2d;
    }

    .fa-handshake:hover {
        color: blue;
    }

    .fa-cat:hover {
        color: #ff2db2;
    }

    .fa-coffee:hover+.coffee {
        color: #ffab2d;
    }

    .fa-handshake:hover+.friendship {
        color: blue;
    }

    .fa-cat:hover+.cat-fight {
        color: #ff2db2;
    }

    .height {
        height: 250px;
    }

    .test-background-color {
        background-color: rgba(0, 0, 0, 0.6);
    }

    .size-of-external-div {
        margin-left: 20%;
        width: 200px;
        height: 200px;
        transition: .8s;
        z-index: 1;
        position: relative;

    }

    .size-of-external-div:hover>img {
        opacity: .7;
        box-shadow: 2px 2px 10px #5A5A5A;
    }

    .size-of-external-div:hover~.team-members-description {
        opacity: 1;
    }

    .box-shadow {
        box-shadow: 2px 2px 10px #5A5A5A;
    }

    .size-of-external-div:hover>.positioner {
        opacity: 1;
        transform: scale(2.2, 1.8);
    }

    .size-of-external-div:hover {
        /*opacity: 0.5;*/
        background-color: black;
        transform: scale(1.2, 1.2);
    }


    .Designation {
        font-size: 20px;
        display: block;
        color: #ff9900;
    }

    .fun-facts-description {
        font-size: 20px;
        display: block;
        color: white;
    }

    .team-member-name-size {
        font-size: 40px;
    }

    .seperator {
        border: 1px solid #ff9900;
    }

    .top-margin {
        margin-top: 100px;
    }

    .fun-facts-icon {
        font-size: 100px;
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

    .card-borders {
        border-radius: 4%;
        background: #d3d2d0;
        opacity: 0.6;
    }

    body {
        /*background:radial-gradient(ellipse at center, rgba(255,254,234,1) 0%, rgba(255,254,234,1) 35%, #B7E8EB 100%);*/

    }



    .ocean {
        height: 5%;
        width: 100%;
    }

    .wave {
        background: url(../resources/wave.svg) repeat-x;

        /*position: absolute;
  top: -198px;
  */
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

    /*.footer-gradient{
      background: linear-gradient(to top, #0d637a 90%, #0d637a 10% );
       background-color: #252527;
       top:-25px;
       height:300PX;
    }*/

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
            transform: translate3d(0px, -25px, 0);
        }

        50% {
            transform: translate3d(0px, 5px, 0);
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
    
    <!-- Dynamic navbar depends on the session   -->
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
          <a class='nav-link active1' href='Team.php?Docid=".$Docid."'>Our Team</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Contact_Us.php?Docid=".$Docid."'>Contact Us</a>
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
          <a class='nav-link active1' href='Team.php?pharid=".$Pharid."'>Our Team</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Contact_Us.php?pharid=".$Pharid."'>Contact Us</a>
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
          <a class='nav-link active1' href='Team.php?Patid=".$Patid."'>Our Team</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Contact_Us.php?Patid=".$Patid."'>Contact Us</a>
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
        <li class='nav-item active'>
          <a class='nav-link' href='homepage.php'>Home <span class='sr-only'>(current)</span></a>
        </li>

        <li class='nav-item'>
          <a class='nav-link' href='services.php'>Services</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link active1' href='Team.php'>Our Team</a>
        </li>        
        <li class='nav-item'>
          <a class='nav-link' href='Contact_Us.php'>Contact Us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='AboutUsPage.php'>About Us</a>
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
<br>
<br>
<br>

  <!-- Team description -->
<div class="row">
    
<div class="col-12">
    <div class="heading-font centred size-of-text" style="color: #ff9900">
        MEET OUR TEAM
    </div>
    
</div>
</div>

    <div class="container-fluid test-background-color">
        <div class="container">
            <div class="row top-padding">
                <div class="col centred ">
                    <div class="round size-of-external-div">
                        <img class="team-members-image-size round  hover-color size-on-hover rgba-blue-strong"  src="https://scontent.fisb7-1.fna.fbcdn.net/v/t1.0-9/18033876_1085827528227823_7531230902992513084_n.jpg?_nc_cat=101&oh=a60d86ad18cf6a3dfbadd10704c6b526&oe=5C5BFE95"/>
                        <div class="positioner">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                    <div class="team-member-name-size">
                        Hamaad Latif
                    </div>
                    <p class="team-members-description">
                        <b class="Designation"> Web Developer</b>Hi! We are here to help you and always open to connect!
                    </p>
                </div>
                <div class="col order centred">
                    <div class="round size-of-external-div">
                        <img class="team-members-image-size round  hover-color size-on-hover rgba-blue-strong"  src="../resources/Areesha.jpg"/>
                        <div class="positioner">
                            <i class="fab fa-facebook-f size-on-hover"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                    <div class="team-member-name-size">
                        Areesha Tariq
                    </div>
                    <p class="team-members-description">
                        <b class="Designation"> Web Developer</b>Hi! We are here to help you and always open to connect!
                    </p>
                </div>
                <div class="col order-1 centred ">
                    <div class="round size-of-external-div">
                        <img class="team-members-image-size round  hover-color size-on-hover rgba-blue-strong"  src="https://scontent.fisb7-1.fna.fbcdn.net/v/t1.0-9/21272119_812699215569278_4414238097645953562_n.jpg?_nc_cat=110&oh=66df9aa46be88bd5725f1316e0fbedbf&oe=5C57A8DB"/>
                        <div class="positioner">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                    <div class="team-member-name-size">
                        Agha Saad
                    </div>
                    <p class="team-members-description">
                        <b class="Designation"> Web Developer</b>Hi! We are here to help you and always open to connect!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <hr class="seperator">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid test-background-color">
        <div class="container">
            <div class="row">
                <div class="card-borders col-sm-4 centred top-margin box-shadow margin" style="color: black;">
                    <h3><b>WHAT WE DO?</b></h3>
                    <p class="card ">The Team Medics of Web professionals, medical reviewers, subject matter experts and other content contributors collaborate to ensure accurate, relevant and actionable information to provide site visitors with access to the knowledge, experiences and services of doctors & clinics.
                    </p>
                </div>
                <div class="card-borders col-sm-4 top-margin centred box-shadow margin" style="color: black;">
                    <h3><b>WHO ARE WE?</b></h3>
                    <p class="card ">The development team consists of experts in content development and production, product management, and user experience and design. Because physicians, scientists and other medical experts dedicate a portion of their clinical time to this site, we are in the unique position to give you access to the knowledge and experience of Doctors.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <hr class="seperator">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid test-background-color ">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="centred team-member-name-size top-bottom-padding success-story-color">
                    Our success stories are not about technology They are about how our clients are growing their businesses and achieving their goals
                </div>
            </div>
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
    <!-- Fun Facts -->
    <br>
    <br>
    <div class="container-fluid test-background-color">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-sm-5">
                    <div class="centred size-of-text heading-font" style="color: #ff9900">Fun Facts about us</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid test-background-color">
        <div class="container">
            <div class="row">
                <div class="centred col-sm ">
                    <i class=" fun-facts-icon fas fa-coffee"></i>
                    <div class="fun-facts-description coffee top-padding"> 28934 Cups Of Coffee</div>
                </div>
                <div class="centred col-sm">
                    <i class="fun-facts-icon far fa-handshake"></i>
                    <div class="fun-facts-description friendship top-padding"> 12894 days of friendship</div>
                </div>
                <div class="centred col-sm">
                    <i class="fun-facts-icon fas fa-cat"></i>
                    <div class="fun-facts-description cat-fight top-padding"> 6324 Cat fights</div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>


    <!-- Wave Fo9o9te -->
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














<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>








</body>

</html>