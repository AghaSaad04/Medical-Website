<?php
   include('doctor_session.php');
   include ('../configuration.php');
        // $image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/DocDashboard.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/wave.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">


<style type="text/css">
    .nav-link:hover{
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
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <div class="upload-image">
        <div class="upload-image-preview">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $login_session_Image ).'"/>' ;?>
        </div>
      </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5 style="line-height: 2em;">Dr. <?php echo $login_session_name; ?></h5> 
                                    <h6 style="line-height: 2.5em;">
                                       <?php echo $login_session_spec; ?>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="tabsColor nav-item">
                                    <a class="nav-link hover active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="tabsColor nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                                <li class="tabsColor nav-item">
                                    <a class="nav-link" id="feedback-tab" data-toggle="tab" href="#feedback" role="tab" aria-controls="feedback" aria-selected="false">Feedback Form</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="register_clinic.php"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Add Clinic"/></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-start">
                        <div class="profile-work">
                            <p>ADDRESS</p>
                            <p><?php echo $login_session_Address ?></p>
                            <p>QUOTE</p>
                            <p>Whatever you do, do with determination! </p>
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
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $login_session_spec; ?></p>
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
                                                <label>Starting Hours</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $login_session_Starting; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ending Hours</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $login_session_Ending; ?></p>
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
                                        
                                
                            </div>
                        <div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
                                        <div class="row">
                                            <div class="main-w3layouts-form " style="margin-top: -50px;">
            <br>
            <div class="d-flex justify-content-center" >
        <h2 style="color: black; ">Post your Stories or Remedies</h2>
                
            </div>
        <form action="DocDashboard.php" method="POST">
            <div class="fields-w3-agileits">
                <span class="fa fa-user" aria-hidden="true"></span>
                <input type="text" placeholder="Subject" name="subject" />
            </div>
            <div class="fields-w3-agileits">
                <span class="fa fa-key" aria-hidden="true"></span>
                <textarea type="text"  placeholder="Description" rows="5" name="description"> </textarea>
            </div>
            <br>
            <div class="d-flex justify-content-center">
            <input type="submit" value="Post" name="Story" />
                
            </div>
        </form>
    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>          
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


// echo "hi";
$errors = array();
if (isset($_POST['Story'])) {
    # code...
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
if (isset($_POST["subject"])){
        $subject = $_POST["subject"];
            echo $subject;

}else{
        $errors['subject'] = "Only letters and white space allowed";

    }
    if (isset($_POST["description"])){
        $description = $_POST["description"];
            echo $description;
        }
else{
        $errors['description'] = "Only letters and white space allowed";

    }

    if (!$errors){

        $sql = "INSERT INTO remedies ( Subject , Description, D_Id )
            VALUES ('".$subject."', '".$description."', '".$login_session_Id."')";
            $result = mysqli_query($con, $sql);
            // include "welcome.php";
            // <!-- header("location:homepage.html"); -->

        
        }

}
}

?>
