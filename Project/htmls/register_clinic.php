<?php
   include('doctor_session.php');
   include ('../configuration.php');
        // $image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
?>
<!DOCTYPE html>
<html>

<head>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsgDni5JC1YO4Hlzbly-PqgFZlWFojam8&libraries=places"></script>
    <script type="text/javascript" src="../js/googleAPIs.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/wave.css">
        <link rel="stylesheet" type="text/css" href="../css/DoctorSignUp.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">

        <title>Register Clinic</title>
        <!-- <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css"> -->
            <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <style type="text/css">
.footer_grid_right input[type="submit"]{
    padding: 12px;
}    </style>
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
                        <a class="nav-link" href="./homepage.php?Docid=<?php echo $login_session_Id; ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./services.php?Docid=<?php echo $login_session_Id; ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Team.php?Docid=<?php echo $login_session_Id; ?>">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact_Us.php?Docid=<?php echo $login_session_Id; ?>">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./AboutUsPage.php?Docid=<?php echo $login_session_Id; ?>">About Us</a>
                    </li>
                </ul>
                <ul>
                    <li class='nav-item' style='float: right;'>
          <a class='nav-link' href='signout.php'><i class='fa fa-fw fa-sign-in'></i> Logout</a>
        </li>
                </ul>


  </div>
  </div>
</nav>





    <!-- <div class="bg"></div> -->
    <div class="col outer-background-div"></div>
    <div class="row">
        <div class="col"></div>
        <div class="container top-margin">
            <!-- Sign up form -->
            <form method='POST' action="insertClinic.php">
                <!-- Sign up card -->
                <div class="card person-card">
                    <div class="card-body">
                        <!-- Sex image -->
                        <div class="d-flex justify-content-center">

                        <!-- <i id="img_sex" class="person-img fas fa-user-md"></i> -->
                        </div>

                         <h2 id="who_message" class="card-title" style="padding-top: 2px;">REGISTER YOUR CLINIC</h2>
                        <!-- First row (on medium screen) -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="padding=0.5em;">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h2 class="card-title">How to contact you ?</h2> -->
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Clinic Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Clinic Name" name = "c_name" required>
                                    <div id="first_name_feedback" class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Enter City</label>
                                    <input type="text" class="form-control" id="city" placeholder="Enter City" name = "city" required>
                                </div>


                                <div class="form-group">
                                    <label for="tel" class="col-form-label">Phone number</label>
                                    <input type="text" class="form-control" id="tel" placeholder="+33 6 99 99 99 99" name="tel" required>
                                    <div class="phone-feedback">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="time" class="col-form-label">Duty Hours</label>
                                    <br>
                                    <div style="display: inline-block;">
                                    <input type="time" class="form-control" id="time" placeholder="Starting time" name="startingTime" required >

                                    </div>

                                    <div style="display: inline-block; margin-left: 10px;">
                                    <input type="time" class="form-control" id="time" placeholder="Ending Time" name="endingTime" required>

                                    </div>
                                    <!-- <input type="time" name=""> -->
                                    <div class="time-feedback">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="branch" class="col-form-label">Enter Clinic Branch</label>
                                    <input type="text" class="form-control" id="branch" placeholder="Enter Branch Name" name = "branc" required>
                                </div>





                                <div class="form-group">
                                    <label for="address" class="col-form-label">Address</label>
                                    <input type="address" class="form-control" id="textautocomplete" placeholder="Enter your address.." name="c_loc" required>
                                    
                                    <input type="hidden" id='hosAddress' name="hosAddr" />
                                    <input type="hidden" id='latValue' name="hosLat" />
                                    <input type="hidden" id='longValue' name="hosLong"/>
                                    <div class="address-feedback">
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-sm-5">
                            <button type="submit" name="submitClinicData" class="z-index-button btn btn-primary btn-lg btn-block">Register
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>


    <div class="row"></div>





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












<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->






</body>

</html>
