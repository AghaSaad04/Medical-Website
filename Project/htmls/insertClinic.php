<?php
include("../configuration.php");
// include 'session.php';
$errors = array();
$image="";
$image_name ="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (isset($_POST["c_name"])){
          $c_name = $_POST["c_name"];
                // echo $gender;
  }
  else {
      $errors['c_name'] = "Only letters and white space allowed";
  }

  if (isset($_POST["city"])){
          $city = $_POST["city"];
                // echo $gender;
  }
  else {
      $errors['city'] = "Only letters and white space allowed";
  }

  if (isset($_POST["hosAddr"])){
      $address = $_POST["hosAddr"];
      // echo "$address";
  }else{
    $errors['hosAddr'] = "Only letters and white space allowed";
  }


  if (isset($_POST["tel"])){
      $tel = $_POST["tel"];
      // echo $tel;
      $tel = str_replace("+92", "0", $tel);
      // echo $tel;
      if (!preg_match("/^[0-9][0-9]*$/",$tel)){
            $errors['tel'] = "Only letters and white space allowed";
         }
  }else{
            $errors['tel'] = "Only letters and white space allowed";
  }
  if (isset($_POST["hosLat"])){
      $hosLat = $_POST["hosLat"];
      // echo $specialization;
  }else{
    $errors['hosLat'] = "Only letters and white space allowed";

  }  
  if (isset($_POST["hosLong"])){
    $hosLong = $_POST["hosLong"];
      // echo $specialization;
  }else{
    $errors['hosLong'] = "Only letters and white space allowed";

  }
  if (isset($_POST["startingTime"])){
    $startingTime = $_POST["startingTime"];
      // echo $startingTime;
  }else{
    $errors['startingTime'] = "Only letters and white space allowed";

  }
  if (isset($_POST["endingTime"])){
    $endingTime = $_POST["endingTime"];
      // echo $endingTime;
  }else{
    $errors['endingTime'] = "Only letters and white space allowed";

  }

  if (!$errors){
      $sql = "INSERT INTO clinic (Clinic_Name , phone,Starting_Hours, Ending_Hours, Location, city, c_long, c_lat) VALUES ('".$_POST["c_name"]."', '".$_POST["tel"]."', '".$_POST["startingTime"]."', '".$_POST["endingTime"]."', '".$address."', '".$_POST["city"]."'  ,'".$_POST["hosLong"]."', '".$_POST["hosLat"]."')";
          $result = mysqli_query($con, $sql);
          // include "welcome.php";
          header("location:DocDashboard.php");

      }else{
        echo '<script>alert("Add Valid Data!");
        window.location.href="DocDashboard.php";
        </script>';
          
      }
}
?>