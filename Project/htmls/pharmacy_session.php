<?php
include "../configuration.php";
   session_start();
   
   if (isset($_SESSION['login_pharmacy'])) {
   $pharmacy_check = $_SESSION['login_pharmacy'];
      # code...
   $ses_sql_name = mysqli_query($con,"SELECT Phar_Name from pharmacy where Email = '$pharmacy_check' ");
   $ses_sql_location = mysqli_query($con,"SELECT Phar_Location from pharmacy where Email = '$pharmacy_check' ");
   // $ses_sql_timings = mysqli_query($con,"SELECT concat(StartingHours,'    -   ',EndingHours) as timings from registerpharmacy where Email = '$pharmacy_check' ");
   $ses_sql_Starting = mysqli_query($con,"SELECT StartingHours from pharmacy where Email = '$pharmacy_check' ");
   $ses_sql_Ending = mysqli_query($con,"SELECT EndingHours from pharmacy where Email = '$pharmacy_check' ");

   // $ses_sql_Address = mysqli_query($con,"select Address from registerpharmacy where Email = '$pharmacy_check' ");
   $ses_sql_PhoneNumber = mysqli_query($con,"SELECT PhoneNumber from pharmacy where Email = '$pharmacy_check' ");
   // $ses_sql_Image = mysqli_query($con,"select Image from registerpharmacy where Email = '$pharmacy_check' ");
   $ses_sql_Email = mysqli_query($con,"SELECT Email from pharmacy where Email = '$pharmacy_check' ");
   $ses_sql_Id = mysqli_query($con,"SELECT Phar_Id from pharmacy where Email = '$pharmacy_check' ");



   $row_location = mysqli_fetch_array($ses_sql_location,MYSQLI_ASSOC);
   // $row_timings = mysqli_fetch_array($ses_sql_timings,MYSQLI_ASSOC);
   $row_name = mysqli_fetch_array($ses_sql_name,MYSQLI_ASSOC);
   $row_PhoneNumber = mysqli_fetch_array($ses_sql_PhoneNumber,MYSQLI_ASSOC);
   // $row_Address = mysqli_fetch_array($ses_sql_Address,MYSQLI_ASSOC);
   // $row_Image=mysqli_fetch_array($ses_sql_Image,MYSQLI_ASSOC);
   $row_Email=mysqli_fetch_array($ses_sql_Email,MYSQLI_ASSOC);
   $row_Starting=mysqli_fetch_array($ses_sql_Starting,MYSQLI_ASSOC);
   $row_Ending=mysqli_fetch_array($ses_sql_Ending,MYSQLI_ASSOC);
   $row_Id=mysqli_fetch_array($ses_sql_Id,MYSQLI_ASSOC);
   
   // $row_Image = mysqli_fetch_array($ses_sql_Image,MYSQLI_ASSOC);


   $login_session_location = $row_location['Phar_Location'];
   // $login_session_timings = $row_timings['timings'];
   $login_session_name = $row_name['Phar_Name'];
   $login_session_PhoneNumber = $row_PhoneNumber['PhoneNumber'];
   // $login_session_Address = $row_Address['Address'];
   // $login_session_Image = $row_Image['Image'];
   $login_session_Email = $row_Email['Email'];
   $login_session_Starting = $row_Starting['StartingHours'];
   $login_session_Ending = $row_Ending['EndingHours'];
   $login_session_phar_Id = $row_Id['Phar_Id'];

   }else{
      header('location:login.php');
   }
   
?>