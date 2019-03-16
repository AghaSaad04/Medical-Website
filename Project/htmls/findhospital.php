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
<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/layout/grid/">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Pompiere" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../css/navbar_bs4.css">

  <!-- <link rel="stylesheet" type="text/css" href="navbar-style.css"> -->
  <!-- jquery link-->
  <script src="https://code.jquery.com/jquery.min.js"></script>

    <title>Find A Hospital</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      table {
        font-size: 12px;
      }
      #map {
        margin-top: 60px;
        margin-left: 170px;
        /*margin-right: 100px;*/
        width: 600px;
        height: 75%;
      }
      #listing {
        position: absolute;
        width: 400px;
        /*height: 600px;*/
        height: 75%;
        overflow: auto;
        left: 800px;
        top: 226px;
        cursor: pointer;
        overflow-x: hidden;
      }
      #findhospitals {
        position: relative;
        text-align: right;
        width: 100px;
        font-size: 14px;
        padding: 4px;
        z-index: 5;
        background-color: #fff;
      }
      #locationField {
        position: relative;
        width: 190px;
        height: 25px;
        left: 108px;
        top: 0px;
        /*z-index: 5;*/
        background-color: #fff;
      }
      #controls {
        position: relative;
        left: 320px;
        width: 190px;
        height: 25px;
        top: -20px;
        /*z-index: 5;*/
        background-color: #fff;
      }
      #autocomplete {
        width: 100%;
      }
      #country {
        width: 100%;
      }
      .placeIcon {
        width: 20px;
        height: 34px;
        margin: 4px;
      }
      .hotelIcon {
        width: 24px;
        height: 24px;
      }
      #resultsTable {
        border-collapse: collapse;
        width: 500px;
      }
      #rating {
        font-size: 13px;
        font-family: Arial Unicode MS;
      }
      .iw_table_row {
        height: 18px;
      }
      .iw_attribute_name {
        font-weight: bold;
        text-align: right;
      }
      .iw_table_icon {
        text-align: right;
      }
      .navbar-brand{
        padding: 0px;
      }
      .nav-link{
        display: initial;
      }
      






  .bg {
    background-image: url("../resources/AboutUs.jpg");
    height: 25vw;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  <!-- .about_us{ -->
    <!-- color:red;  -->
    <!-- padding-top:8vw; -->
    <!-- font-size:7vw; -->
  <!-- } -->

  .goal{
    float:left;
    margin-top:6%;
    margin-below:30%; 
  }
  .centered{
    text-align: center;
  }
  .goal_stat{
    line-height:2.8;
    font-size:1.6vw;
    padding-bottom: 10%
  }
  .seperator{
        border : 1px solid #ff9900;
    top-margin:40%;
    }
  
  .top-margin{
        margin-top:10%;
    padding-bottom:10%;
    }

    .margin{
        margin: 0px  60px 0px 60px; 
    }
  .text{
    font-size:1vw;
  }
  .heading{
    font-size:2vw;
    padding-top:4.5%;
  }
  .our_story{
    font-size:3vw;
    padding-top:3%;
  }
  .mission{
    height:25vw;
    margin-top:10.5%;
    padding-bottom:5%;
    padding:0 7% 0 7%;
  }
  
  .our-story2{
    height:50vw;
    margin-top:10.5%;
    padding-bottom:5%;
    padding:0;
  
  }
  .mission_stat2{
    background:url("../resources/dr-bg-blur.jpg");
    transition: background 1.5s;    
  }
  
  }
  
  .core_values_head{
    
    padding-bottom:7%;
  }
  .icon{
    font-size:10vw;
    color:black;
  }
  .icon:hover{
  color:#ff9900;
  transition:1s;
  }
  
  .icon-div{
    padding-bottom:4%;
  }
  .icon-description{
    font-size:1.5vw;
  }
  
  .bg2 {
    background-image: url("../resources/cover_aboutus.jpg");
    height: 30vw;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .bg3 {
    background-image: url("../resources/cover_aboutus.jpg");
    height: 30vw;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .ocean {
        height: 5%;
        width: 100%;
    }

    .wave {
        background: url(../resources/wave.svg) repeat-x;
        width: 6400px;
        height: auto;
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










    </style>
  </head>
<body>
<!-- 	<h1 style="text-align: center;">Find a Hospital</h1>
 -->


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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



<div class="row">
  <div class="container">
    	<h1 style="text-align: center;">Find Hospitals</h1>

        <div id="locationField" style="">
          <input id="autocomplete" placeholder="Enter a city" type="text" />
        </div>

        <div id="controls">
          <select id="country">
            <option value="all">All</option>
            <option value="pk">Pakistan</option>
          </select>
        </div>
    </div>
</div>


<div id="map"></div>
<div id="listing">
  <table id="resultsTable">
    <tbody id="results"></tbody>
  </table>
</div>



    <div style="display: none">
      <div id="info-content">
        <table>
          <tr id="iw-url-row" class="iw_table_row">
            <td id="iw-icon" class="iw_table_icon"></td>
            <td id="iw-url"></td>
          </tr>
          <tr id="iw-address-row" class="iw_table_row">
            <td class="iw_attribute_name">Address:</td>
            <td id="iw-address"></td>
          </tr>
          <tr id="iw-phone-row" class="iw_table_row">
            <td class="iw_attribute_name">Telephone:</td>
            <td id="iw-phone"></td>
          </tr>
          <tr id="iw-rating-row" class="iw_table_row">
            <td class="iw_attribute_name">Rating:</td>
            <td id="iw-rating"></td>
          </tr>
          <tr id="iw-website-row" class="iw_table_row">
            <td class="iw_attribute_name">Website:</td>
            <td id="iw-website"></td>
          </tr>
        </table>
      </div>
    </div>

       <script>
      // This example uses the autocomplete feature of the Google Places API.
      // It allows the user to find all hospitals in a given place, within a given
      // country. It then displays markers for all the hospitals returned,
      // with on-click details for each hotel.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map, places, infoWindow;
      var markers = [];
      var autocomplete;
      var countryRestrict = {'country': 'pk'};
      var MARKER_PATH = 'https://developers.google.com/maps/documentation/javascript/images/marker_green';
      var hostnameRegexp = new RegExp('^https?://.+?/');

      var countries = {
        'pk': {
          center: {lat: 33.73, lng: 73.08},
          zoom: 6
        }
      };

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: countries['pk'].zoom,
          center: countries['pk'].center,
          mapTypeControl: false,
          panControl: false,
          zoomControl: false,
          streetViewControl: false
        });

        infoWindow = new google.maps.InfoWindow({
          content: document.getElementById('info-content')
        });

        // Create the autocomplete object and associate it with the UI input control.
        // Restrict the search to the default country, and to place type "cities".
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */ (
                document.getElementById('autocomplete')), {
              types: ['(cities)'],
              componentRestrictions: countryRestrict
            });
        places = new google.maps.places.PlacesService(map);

        autocomplete.addListener('place_changed', onPlaceChanged);

        // Add a DOM event listener to react when the user selects a country.
        document.getElementById('country').addEventListener(
            'change', setAutocompleteCountry);
      }

      // When the user selects a city, get the place details for the city and
      // zoom the map in on the city.
      function onPlaceChanged() {
        var place = autocomplete.getPlace();
        if (place.geometry) {
          map.panTo(place.geometry.location);
          map.setZoom(15);
          search();
        } else {
          document.getElementById('autocomplete').placeholder = 'Enter a city';
        }
      }

      // Search for hospitals in the selected city, within the viewport of the map.
      function search() {
        var search = {
          bounds: map.getBounds(),
          types: ['hospital']
        };

        places.nearbySearch(search, function(results, status) {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            clearResults();
            clearMarkers();
            // Create a marker for each hotel found, and
            // assign a letter of the alphabetic to each marker icon.
            for (var i = 0; i < results.length; i++) {
              var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (i % 26));
              var markerIcon = MARKER_PATH + markerLetter + '.png';
              // Use marker animation to drop the icons incrementally on the map.
              markers[i] = new google.maps.Marker({
                position: results[i].geometry.location,
                animation: google.maps.Animation.DROP,
                icon: markerIcon
              });
              // If the user clicks a hotel marker, show the details of that hotel
              // in an info window.
              markers[i].placeResult = results[i];
              google.maps.event.addListener(markers[i], 'click', showInfoWindow);
              setTimeout(dropMarker(i), i * 100);
              addResult(results[i], i);
            }
          }
        });
      }

      function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
          if (markers[i]) {
            markers[i].setMap(null);
          }
        }
        markers = [];
      }

      // Set the country restriction based on user input.
      // Also center and zoom the map on the given country.
      function setAutocompleteCountry() {
        var country = document.getElementById('country').value;
        if (country == 'all') {
          autocomplete.setComponentRestrictions({'country': []});
          map.setCenter({lat: 15, lng: 0});
          map.setZoom(2);
        } else {
          autocomplete.setComponentRestrictions({'country': country});
          map.setCenter(countries[country].center);
          map.setZoom(countries[country].zoom);
        }
        clearResults();
        clearMarkers();
      }

      function dropMarker(i) {
        return function() {
          markers[i].setMap(map);
        };
      }

      function addResult(result, i) {
        var results = document.getElementById('results');
        var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (i % 26));
        var markerIcon = MARKER_PATH + markerLetter + '.png';

        var tr = document.createElement('tr');
        tr.style.backgroundColor = (i % 2 === 0 ? '#F0F0F0' : '#FFFFFF');
        tr.onclick = function() {
          google.maps.event.trigger(markers[i], 'click');
        };

        var iconTd = document.createElement('td');
        var nameTd = document.createElement('td');
        var icon = document.createElement('img');
        icon.src = markerIcon;
        icon.setAttribute('class', 'placeIcon');
        icon.setAttribute('className', 'placeIcon');
        var name = document.createTextNode(result.name);
        iconTd.appendChild(icon);
        nameTd.appendChild(name);
        tr.appendChild(iconTd);
        tr.appendChild(nameTd);
        results.appendChild(tr);
      }

      function clearResults() {
        var results = document.getElementById('results');
        while (results.childNodes[0]) {
          results.removeChild(results.childNodes[0]);
        }
      }

      // Get the place details for a hotel. Show the information in an info window,
      // anchored on the marker for the hotel that the user selected.
      function showInfoWindow() {
        var marker = this;
        places.getDetails({placeId: marker.placeResult.place_id},
            function(place, status) {
              if (status !== google.maps.places.PlacesServiceStatus.OK) {
                return;
              }
              infoWindow.open(map, marker);
              buildIWContent(place);
            });
      }

      // Load the place information into the HTML elements used by the info window.
      function buildIWContent(place) {
        document.getElementById('iw-icon').innerHTML = '<img class="hotelIcon" ' +
            'src="' + place.icon + '"/>';
        document.getElementById('iw-url').innerHTML = '<b><a href="' + place.url +
            '">' + place.name + '</a></b>';
        document.getElementById('iw-address').textContent = place.vicinity;

        if (place.formatted_phone_number) {
          document.getElementById('iw-phone-row').style.display = '';
          document.getElementById('iw-phone').textContent =
              place.formatted_phone_number;
        } else {
          document.getElementById('iw-phone-row').style.display = 'none';
        }

        // Assign a five-star rating to the hotel, using a black star ('&#10029;')
        // to indicate the rating the hotel has earned, and a white star ('&#10025;')
        // for the rating points not achieved.
        if (place.rating) {
          var ratingHtml = '';
          for (var i = 0; i < 5; i++) {
            if (place.rating < (i + 0.5)) {
              ratingHtml += '&#10025;';
            } else {
              ratingHtml += '&#10029;';
            }
          document.getElementById('iw-rating-row').style.display = '';
          document.getElementById('iw-rating').innerHTML = ratingHtml;
          }
        } else {
          document.getElementById('iw-rating-row').style.display = 'none';
        }

        // The regexp isolates the first part of the URL (domain plus subdomain)
        // to give a short URL for displaying in the info window.
        if (place.website) {
          var fullUrl = place.website;
          var website = hostnameRegexp.exec(place.website);
          if (website === null) {
            website = 'http://' + place.website + '/';
            fullUrl = website;
          }
          document.getElementById('iw-website-row').style.display = '';
          document.getElementById('iw-website').textContent = website;
        } else {
          document.getElementById('iw-website-row').style.display = 'none';
        }
      }
    </script>



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
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@teammedics.com">info@teammedics.com</a></li>
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





	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsgDni5JC1YO4Hlzbly-PqgFZlWFojam8&libraries=places&callback=initMap" async defer></script>

</body>
</html>