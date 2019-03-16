<!DOCTYPE HTML>
<html>

<head>
    <title>Login Form</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Groovy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <link href="font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
    <link href="../css/Doctor-login.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="../css/wave.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../resources/logo.png" width="60px" height="50px" ></a>
            <!-- <a class="navbar-brand" href="#"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
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
                    
                    <li style="float: right;">
                        <a class="nav-link" href="register.php"><i class="fa fa-fw fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--background-->
    <h1>Login Form</h1>
    <!-- Main-Content -->
    <div class="main-w3layouts-form ">
        <h2 class="d-flex justify-content-center">Login to your account</h2>
        <form action="doctor_login_action.php" method="post">
            <div class="fields-w3-agileits">
                <span class="fa fa-user" aria-hidden="true"></span>
                <input type="email" id="emailChange" name="email1" required="" placeholder="Email" value="<?php if(isset($_COOKIE["email1"])){ echo $_COOKIE["email1"];}?>"/>
            </div>
            <div class="fields-w3-agileits">
                <span class="fa fa-key" aria-hidden="true"></span>
                <input type="password" name="password1" required="" placeholder="Password" value="<?php if(isset($_COOKIE["password1"])){echo $_COOKIE["password1"];}?>" />
            </div>
            <div class="remember-section-wthree d-flex justify-content-center">
                <ul>
                    <li>
                        <label class="anim">
                            <input type="checkbox" class="checkbox" name="remember"/>
                            <span> Remember me ?</span>
                        </label>
                    </li>
                    <li> <button type="submit" name="forget" formaction='mail.php'>Forgot password? </button></li>
                </ul>
                <div class="clear"> </div>
            </div>
            <input type="submit" value="Login" />
        </form>
        <div class="footer_grid-w3ls">
            <h5 class="sub-hdg-w3l d-flex justify-content-center">or login with your social profile</h5>
            <ul class="social-icons-agileits-w3layouts d-flex justify-content-center">
                <li><a href="#" class="fab fa-facebook"></a></li>
                <li><a href="#" class="fab fa-twitter"></a></li>
                <li><a href="#" class="fab fa-google-plus"></a></li>
            </ul>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>