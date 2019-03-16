
<?php 
    include '../configuration.php';
 ?>
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
    <link rel="stylesheet" type="text/css" href="../css/findmedicine.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/wave.css">
        <link rel="stylesheet" type="text/css" href="../css/DoctorSignUp.css">
        <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">
            <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <style type="text/css">
                body{
                    background-attachment: fixed;
                }
                .color-med{
                    color: white;
                    /*font-size: 2.0em;*/
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
          <a class='nav-link' href='Team.php?Patid=".$Patid."'>Our Team</a>
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
          <a class='nav-link' href='Team.php'>Our Team</a>
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





    <!-- <div class="bg"></div> -->
    <div class="col outer-background-div"></div>
    <div class="row">
        <div class="col"></div>
        <div class="col h1">
            MEDICINES FORM
        </div>
        <div class="container top-margin">
            <!-- Sign up form -->
            <form method="POST">
                <!-- Sign up card -->
                <div class="card person-card">
                    <div class="card-body">
                        <!-- Sex image -->
                        <div class="d-flex justify-content-center">

                        <i id="img_sex" class="person-img fas fa-capsules"></i>
                        </div>

                         <h2 id="who_message" class="card-title" style="padding-top: 2px;">Find Medicines  </h2>
                        <!-- First row (on medium screen) -->
                        <div class="row">
                            <div class="form-group col-md-2">
                                <select id="input_sex" name="medicineValue" class="form-control" style="width: 250px;">
                                    <option class="" selected="true">Select A Pharmacy</option>

                                    <?php
                                        // include "dbConnection.php";
                                        $getPharQ = "SELECT * FROM pharmacy";

                                        $resultPhar = mysqli_query($con,$getPharQ);

                                        while ($row=mysqli_fetch_array($resultPhar,MYSQLI_ASSOC)) {
                                            # code...
                                            echo '<option class="option-background-color" value="'.$row["Phar_Id"].'">'.$row["Phar_Name"].'</option>';
                                        }


                                    ?>

                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-5">
                            <button id="medButton" type="submit" name="getMedicines" class="z-index-button btn btn-primary btn-lg btn-block">Find Medicines</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>




<div class="row">
<div class="clear"></div>
<div class="container">
<section class="search_results" id="search">
    <div class="bus_body col-md padleft padleft1">

<?php 
    if (isset($_POST['getMedicines'])) {
        # code...

        $value = $_POST["medicineValue"];
        $getMedicinesQuery = "SELECT * FROM medicine WHERE Phar_Id='$value'";
        $medics = mysqli_query($con,$getMedicinesQuery);
        while ($row=mysqli_fetch_array($medics,MYSQLI_ASSOC)) {
        # code...
            echo '<div class="bus_body col-md padleft padleft1">';
            echo '<div class="card col-md-8" style="margin-bottom:-4%;">';
            echo '<div class="card-body color-med">';
            echo '<div class="clear"></div>';
            echo '<h5 style="text-align: center;"><i class="fas fa-capsules"></i>'.$row["Medic_Name"]."</h5>";
            echo '<p>Expiry Date: <span>'.$row["ExpiryDate"].'</span></p>';
            echo '<div class="clear"></div>';
            echo '<p>Price: <span>'.$row["Price"].'</span></p>';
            echo '<p>Potency: <span>'.$row["Potency"].'</span></p>';
            echo '<p>Description: <span>'.$row["Description"].'</span></p';
            echo '<div class="clear"></div>';
            echo '</div>';
            echo '</div>';
            // echo '</div>';



        }
        // header("Location:doctor_signup.php");
    }



 ?>

    </div>
 </section>
</div>

<div class="clear"></div>
    


</div>


<div class="row" style="margin-bottom: 3%"></div>



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



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>

</html>
