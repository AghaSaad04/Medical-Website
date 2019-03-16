<?php

include 'pharmacy_session.php';
include ('../configuration.php');
?>
<html>
   
   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/DocDashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/wave.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">
    <link rel="stylesheet" type="text/css" href="../css/DoctorSignUp.css">

      <title>Welcome </title>
      <style type="text/css">
        .nav-link:hover{
        color: black!important;
    }
    .col-centered{
      margin: 0 auto;
      float: none;
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
             <?php 
   

             echo"  
                <ul class='navbar-nav mr-auto'>
                    <li class='nav-item active'>
                        <a class='nav-link' href='./homepage.php?pharid=".$login_session_phar_Id."'>Home <span class='sr-only'>(current)</span></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='./services.php?pharid=".$login_session_phar_Id."'>Services</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='./Team.php?pharid=".$login_session_phar_Id."'>Our Team</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='Contact_Us.php?pharid=".$login_session_phar_Id."'>Contact Us</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='AboutUsPage.php?pharid=".$login_session_phar_Id."'>About Us</a>
                    </li>
                </ul>
                <ul>"
                  ?>;
                    <li class="nav-item" style="float: right;">
                        <a class="nav-link" href="pharmacy_signout.php"><i class="fa fa-fw fa-sign-in"></i> Logout</a>
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
                            <div class="upload-image">
        <div class="upload-image-preview">
<!--             <?php// echo '<img src="data:image/jpeg;base64,'.base64_encode( $login_session_Image ).'"/>' ;?>
 -->        </div>
      </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 style="line-height: 2em;"> <?php echo $login_session_name; ?></h5> 
                                    <h6 style="line-height: 2.5em;">
                                       <?php echo $login_session_location; ?>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="tabsColor nav-item">
                                    <a class="nav-link hover active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="tabsColor nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Add Medicine</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>ADDRESS</p>
                            <p><?php echo $login_session_location ?></p>
                            <p>QUOTE</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $login_session_name; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $login_session_Email; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $login_session_PhoneNumber; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $login_session_location; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Opening Time</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $login_session_Starting; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Closing Time</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $login_session_Ending; ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <form method="POST" action="PharDashboard.php"  >
                <!-- Sign up card -->
                <div class="card person-card">
                    <div class="card-body" style="width:500px;">

                        <h2 id="who_message" class="card-title" style="padding-top: 2px;">Add Medicine Form</h2>
                        <!-- First row (on medium screen) -->
                        <div class="row">
                            
                            <div class="form-group col-md-5 d-flex" style="margin-left: 135px;">
                                <input id="last_name" type="text" class="form-control " placeholder="Medicine Name" name="medname" required="">
                                
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
                                    <label class="col-form-label">Description</label>
                                    <input type="text" class="form-control" id="email" placeholder="Description..." name="meddesc" required>
                                    <div class="email-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-form-label">Potency</label>
                                    <input type="text" class="form-control" id="address" placeholder="500mg" name="potency" required>
                                    <div class="address-feedback">
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
                                    <label class="col-form-label">Price</label>
                                    <input type="text" class="form-control" id="specialization" placeholder="Rs 200" name="price" value="" required>
                                    <div class="specialty-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Expiry Date</label>
                                    <br>
                                    <div style="display: inline-block;">
                                        <input type="date" class="form-control" id="time" placeholder="Starting time" name="meddate" required>
                                    </div>
                                    
                                    <!-- <input type="time" name=""> -->
                                    <div class="time-feedback">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-sm-5">
                            <input type="submit" class="z-index-button btn btn-primary btn-lg btn-block" value="Add Medicine">
                        </div>
                    </div>
                </div>
            </form>
                                                                            
                                
                            </div>


                        </div>
                    </div>
                </div>
            </form>          
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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<?php
   

   // include('pharmacy_session.php');
   if ($_SERVER["REQUEST_METHOD"] == "POST"){

  if (isset($_POST["medname"])){
    $medname = $_POST["medname"];
    echo $medname;
  }

  if (isset($_POST["meddesc"])){
    $meddesc = $_POST["meddesc"];
    echo $meddesc;
  }

  if (isset($_POST["price"])){
    $price = $_POST["price"];
    echo $price;
  }
  if (isset($_POST["potency"])){
    $potency = $_POST["potency"];
    echo $potency;
  }
  if (isset($_POST["meddate"])){
    $meddate = $_POST["meddate"];
    echo $meddate;
    echo $login_session_phar_Id;
  }
  $sql = "INSERT INTO medicine (Medic_Name , Description, Price, Potency, ExpiryDate,Phar_Id)
      VALUES ('".$medname."', '".$meddesc."', '".$price."', '".$potency."', '".$meddate."','".$login_session_phar_Id."')";
      $result = mysqli_query($con, $sql);
}
?>