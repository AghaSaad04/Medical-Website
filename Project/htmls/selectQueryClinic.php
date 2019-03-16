<?php
include("../configuration.php");
  $cityN = $_POST['name'];
  // $cityN = "Islamabad";
  // $cName="";
  // echo "$cityN";
  $clinicArray = array();
  $sqlq = "SELECT * FROM clinic WHERE city = '".$cityN."'";
  $res = mysqli_query($con,$sqlq);
  while($row = mysqli_fetch_assoc($res)) {
      $arr1 = array(); 
  		$cName = $row["Clinic_Name"];
      $cLat = $row["c_lat"];
      $cLong = $row["c_long"];

      array_push($arr1, $cName, $cLat, $cLong);
  		array_push($clinicArray,$arr1);
  }
  $sourceJSON = json_encode(array('Clinics' => $clinicArray));
  echo "$sourceJSON";
?>