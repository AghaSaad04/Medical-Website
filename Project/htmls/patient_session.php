<?php
include "../configuration.php";
   session_start();
   if (isset($_SESSION['login_patient'])){

   $patient_check = $_SESSION['login_patient'];
       // code...
   $ses_sql_name = mysqli_query($con,"select P_Name from registerpatient where Email = '$patient_check' ");
   $ses_sql_Address = mysqli_query($con,"select Address from registerpatient where Email = '$patient_check' ");
   $ses_sql_PhoneNumber = mysqli_query($con,"select Telephone from registerpatient where Email = '$patient_check' ");
   $ses_sql_Email = mysqli_query($con,"select Email from registerpatient where Email = '$patient_check' ");
   $ses_sql_Id = mysqli_query($con,"select P_Id from registerpatient where Email = '$patient_check' ");
   $ses_sql_Dob = mysqli_query($con,"select DOB from registerpatient where Email = '$patient_check' ");
   $ses_sql_gender = mysqli_query($con,"select Gender from registerpatient where Email = '$patient_check' ");



   $row_Dob = mysqli_fetch_array($ses_sql_Dob,MYSQLI_ASSOC);
   $row_gender = mysqli_fetch_array($ses_sql_gender,MYSQLI_ASSOC);
   $row_name = mysqli_fetch_array($ses_sql_name,MYSQLI_ASSOC);
   $row_PhoneNumber = mysqli_fetch_array($ses_sql_PhoneNumber,MYSQLI_ASSOC);
   $row_Address = mysqli_fetch_array($ses_sql_Address,MYSQLI_ASSOC);
   // $row_Image=mysqli_fetch_array($ses_sql_Image,MYSQLI_ASSOC);
   $row_Email=mysqli_fetch_array($ses_sql_Email,MYSQLI_ASSOC);
   // $row_Starting=mysqli_fetch_array($ses_sql_Starting,MYSQLI_ASSOC);
   // $row_Ending=mysqli_fetch_array($ses_sql_Ending,MYSQLI_ASSOC);
   $row_Id=mysqli_fetch_array($ses_sql_Id,MYSQLI_ASSOC);
   
   // $row_Image = mysqli_fetch_array($ses_sql_Image,MYSQLI_ASSOC);


   $login_session_Dob = $row_Dob['DOB'];
   // echo "$login_session_Dob";
   $login_session_gender = $row_gender['Gender'];
   $login_session_name = $row_name['P_Name'];
   $login_session_PhoneNumber = $row_PhoneNumber['Telephone'];
   $login_session_Address = $row_Address['Address'];
   // $login_session_Image = $row_Image['Image'];
   $login_session_Email = $row_Email['Email'];
   // $login_session_Starting = $row_Starting['StartingHours'];
   // $login_session_Ending = $row_Ending['EndingHours'];
   $login_session_Id = $row_Id['P_Id'];

   }else{
      header('location:login.php');
   }
   
   
?>