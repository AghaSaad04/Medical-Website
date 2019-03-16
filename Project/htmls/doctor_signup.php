<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/wave.css">
    <link rel="stylesheet" type="text/css" href="../css/DoctorSignUp.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">
    <script src='https://code.jquery.com/jquery-git.js'></script>

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <style type="text/css">
        
.upload-image {
  display: table-cell;
  border: 1px soid green;
  width: 100px;
  height: 100px;
}

.upload-image-preview {
  width: 100px;
  height: 100px;
  border: 3px solid #bdb7ab;
}
.upload-image-preview img{
  width: 100%;
  height:  100%;
}
    </style>
    <script type="text/javascript">
    $(document).ready(function() {              $("input[name=image]").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var img = $('<img>').attr('src', e.target.result);
                        $('.upload-image-preview').html(img);
                    };

                    reader.readAsDataURL(this.files[0]);
                }
            });
});


   </script>
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
                        <a class="nav-link" href="./AboutUsPage.php">About Us</a>
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
    <!-- <div class="bg"></div> -->
    <div class="col outer-background-div"></div>
    <div class="row">
        <div class="col"></div>
        <div class="col h1">
            DOCTOR SIGN UP FORM
        </div>
        <div class="container top-margin">
            <!-- Sign up form -->
            <form method="POST" action="doctor_signup_action.php"  enctype="multipart/form-data">
                <!-- Sign up card -->
                <div class="card person-card">
                    <div class="card-body">
                        <!-- Sex image -->
                        <div class="d-flex justify-content-center">
                            <!-- <i id="img_sex" class="person-img fas fa-user-md"></i> -->
                            <div class="upload-image" style="margin-bottom: 20px;">
                            <div class="upload-image-preview"></div>
                            <input type="file" name="image" value="Upload Image"  />
      </div>
                        </div>
                        <h2 id="who_message" class="card-title" style="padding-top: 2px;">Who are you ?</h2>
                        <!-- First row (on medium screen) -->
                        <div class="row">
                            <div class="form-group col-md-2">
                                <select id="input_sex" class="form-control" name="gender">
                                    <option class="option-background-color" value="Mr.">Mr.</option>
                                    <option class="option-background-color" value="Ms.">Ms.</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <input id="first_name" type="text" class="form-control" placeholder="First name" name="first_name" required="">
                                <div id="first_name_feedback" class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group col-md-5">
                                <input id="last_name" type="text" class="form-control" placeholder="Last name" name="last_name" required="">
                                <div id="last_name_feedback" class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="padding=0.5em;">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h2 class="card-title">How to contact you ?</h2> -->
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" required>
                                    <div class="email-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-form-label">Address</label>
                                    <input type="address" class="form-control" id="address" placeholder="Enter your address.." name="address" required>
                                    <div class="address-feedback">
                                    </div>
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
                                <!-- <h2 class="card-title">Securize your account !</h2> -->
                                <div class="form-group">
                                    <label for="specialty" class="col-form-label">Specialization</label>
                                    <input type="text" class="form-control" id="specialization" placeholder="Your Specialization ?" name="specialization" value="" required>
                                    <div class="specialty-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="time" class="col-form-label">Duty Hours</label>
                                    <br>
                                    <div style="display: inline-block;">
                                        <input type="time" class="form-control" id="time" placeholder="Starting time" name="startingTime" required>
                                    </div>
                                    <div style="display: inline-block; margin-left: 10px;">
                                        <input type="time" class="form-control" id="time" placeholder="Ending Time" name="endingTime" required>
                                    </div>
                                    <!-- <input type="time" name=""> -->
                                    <div class="time-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password_conf" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" id="password_conf" placeholder="Type your password" name="password" required>
                                    <div class="password_conf-feedback">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-sm-5">
                            <button type="submit" class="z-index-button btn btn-primary btn-lg btn-block"> Sign up !</button>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>