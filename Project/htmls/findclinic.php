<?php
  include("../configuration.php");
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
<html>
  <head>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsgDni5JC1YO4Hlzbly-PqgFZlWFojam8&libraries=places"></script>
    <script type="text/javascript" src="../js/googleAPIs.js"></script>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Pompiere" rel="stylesheet">
    <title>Find A Clinic</title>
    <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">
    <link href="../css/homepage_footer.css" rel='stylesheet' type='text/css'/>

    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <style>
    input[type="submit"]{
      padding: 17px!important;
    }
    body{
      line-height: 0.5;
    }
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
        overflow: auto;
        /*height: 50px;*/
        -moz-overflow:auto;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 500px;
        float: left;
        width: 63%;
        /*height: 100%;*/
      }
      #right-panel {
        float: right;
        width: 34%;
        height: 100%;
      }
      .panel {
        height: 100%;
        overflow: auto;
      }

.ocean {
        width: 100%;
    }

    .wave {
        background: url(../resources/wave.svg) repeat-x;

 
        width: 6400px;
      
        /*height: auto;*/
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
      }



      div.card-body1{
          background-color: #343a40!important;
          color: #ff9900;
        }
        label.col-form-label {
          color: #ff9900;
        }

  </style>
  <script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body> <!--onload="ajax()" > -->

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








    <div class="col outer-background-div"></div>
    <div class="row">
        <div class="col"></div>
        <div class="container top-margin">
            <!-- Sign up form -->
            <form method='POST' id="loc">
                <!-- Sign up card -->
                <div class="card person-card">
                    <div class="card-body card-body1">
                        <!-- Sex image -->
                        <div class="d-flex justify-content-center">

                        <!-- <i id="img_sex" class="person-img fas fa-user-md"></i> -->
                        </div>

                         <h2 id="who_message" class="card-title" style="padding-top: 2px; text-align: center;">FIND A CLINIC</h2>
                        <!-- First row (on medium screen) -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="padding=0.5em;">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h2 class="card-title">How to contact you ?</h2> -->
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Enter Your Location</label>

                                    <input type="text" class="form-control" id="textautocomplete" placeholder="Enter Source Address" name = "userLoc" required>

                                    <div id="first_name_feedback" class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">

                                    <select class="form-control" id='select_city' name='select1' onchange='get_clinics()'>
                                      <option selected="true">Select City</option>
                                      <option name='isb' value="Islamabad">Islamabad</option>
                                    </select>


                                    <select class="form-control" id='selected_clinic' name='select2' onchange="getClinic()">
                                      <option selected="true">Select Clinic</option>
                                    </select>
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
                            <button type="submit" name="submitClinicData" class="z-index-button btn btn-primary btn-lg btn-block" onclick="ajax()">Find Clinic
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>

    <div class="container" style="height: 500px;">
      <div class="row">
      <div id="map"></div>
      <div id="right-panel">
        <p style="background-color: #343a40;color: #ff9900;">Total Distance: <span id="total"></span></p>
      </div>
      </div>
    </div>





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










  <script>
      var data0 , data1 ;

      //lol 
      $(document).ready(function(){
        $('#selected_clinic').change(function(){
            var lot = document.getElementById('latValue').value;
            //yehe nahi arahi
            var lngg = document.getElementById('longValue').value;
            console.log("Lat"+lot);
            console.log("Long"+lngg);


              data0 =  {'lat': parseFloat(lot),'lng': parseFloat(lngg)}; 
              console.log("after this"+parseFloat(lot));
              console.log(data0);       
              })
      });
      
        // data0 =  {'lat': 33.6844202,'lng': 73.04788480000002};   

        // data1= {'lat': 33.6426205, 'lng':72.99290500000006};  

        // data1 = {"lat":"33.6426205","lng":"72.99290500000006"}


    function get_clinics()
    {

       var selected_val = $("#select_city").val();
       console.log("Selected Value: "+selected_val);

       $.ajax({  //ajax call
        type: "POST",      //method == POST 
        url: "selectQueryClinic.php", //url to be called
        data: "name="+selected_val, //data to be send 
        success: function(data){
               // $('#street').val(JSON.parse(data)); // here we will set a value of text box
               var citiesData = JSON.parse(data);
               var allClinics = citiesData['Clinics'];
               console.log("Cities data is:  "+ allClinics);

              for (var i = 0; i < allClinics.length; i++) {
                  allClinics[i];
                  console.log(allClinics[i]);
                  $('#selected_clinic').append('<option value='+allClinics[i][1]+'^'+allClinics[i][2]+'>'+allClinics[i][0]+'</option>');
              } 

           }
        });
    }
    function getClinic(){
      var selected_clinic = $("#selected_clinic").val();
      console.log("Selected Clinic is: "+selected_clinic);
      lat_lng_array = selected_clinic.split("^");
      // console.log(lat_lng_array);
      var c_lat = lat_lng_array[0];
      var c_lng = lat_lng_array[1];
      data1 = {'lat': parseFloat(c_lat), 'lng': parseFloat(c_lng)};
      console.log(data1);
    }


function ajax(){
  initMap();
}


  // function ajax(){
  //     var s="cit=is";
  //     $.ajax({
  //     url: "data.php",
  //     cache: false,
  //     method:'POST',
  //     data:{'city':'test'},
  //     success: function(data){
  //       var datat = JSON.parse(data);
  //       console.log(("hahaha"+datat));
  //       data1 = {'lat':parseFloat(datat['lat']), 'lng':parseFloat(datat['lng'])};    
  //         // data1 = datat['lng'];
  //         // data1= {'lat': 33.6426205, 'lng':72.99290500000006};
  //         console.log(data1);
  //         // var selected_val = $("#city").val()
  //         initMap();
  //     }
  //   });
  // }
      $( document ).ready(function() {
    // Handler for .ready() called.
        $('#loc').submit(function(e){
            e.preventDefault();
            // alert()
        });
    });
      //uninitialzed ha sahi hai
      function initMap() {
        console.log(data0);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: -24.345, lng: 134.46}  // Australia.
        });

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer({
          draggable: false,
          map: map,
          panel: document.getElementById('right-panel')
        });

        directionsDisplay.addListener('directions_changed', function() {
          computeTotalDistance(directionsDisplay.getDirections());
        });

        displayRoute(data0, data1, directionsService,
            directionsDisplay);
      }

      function displayRoute(origin, destination, service, display) {
        service.route({
          origin: origin,
          destination: destination,
        /*  waypoints: [{location: 'Adelaide, SA'}, {location: 'Broken Hill, NSW'}],*/
          travelMode: 'DRIVING',
          avoidTolls: true
        }, function(response, status) {
          if (status === 'OK') {
            display.setDirections(response);
          } else {
            alert('Could not display directions due to: ' + status);
          }
        });
      }

      function computeTotalDistance(result) {
        var total = 0;
        var myroute = result.routes[0];
        for (var i = 0; i < myroute.legs.length; i++) {
          total += myroute.legs[i].distance.value;
        }
        total = total / 1000;
        document.getElementById('total').innerHTML = total + ' km';
      }





    // function get_clinics()
    // {

    //    var selected_val = $("#select_city").val();
    //    console.log("Selected Value: "+selected_val);

    //    $.ajax({  //ajax call
    //     type: "POST",      //method == POST 
    //     url: "selectQueryClinic.php", //url to be called
    //     data: "name="+selected_val, //data to be send 
    //     success: function(data){
    //            // $('#street').val(JSON.parse(data)); // here we will set a value of text box
    //            var citiesData = JSON.parse(data);
    //            var allClinics = citiesData['Clinics'];
    //            console.log("Cities data is:  "+ allClinics);

    //           for (var i = 0; i < allClinics.length; i++) {
    //             allClinics[i];
    //             console.log(allClinics[i]);
    //             $('#cities').append('<option value='+allClinics[i][1]+'^'+allClinics[i][2]+'>'+allClinics[i][0]+'</option>');
    //           } 


    //        }
    //     });
    // } 











    </script>
<!--     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsgDni5JC1YO4Hlzbly-PqgFZlWFojam8">
    </script>
     -->
  </body>
</html>