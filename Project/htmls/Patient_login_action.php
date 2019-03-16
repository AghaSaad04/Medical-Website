<?php
include "../configuration.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$email = mysqli_real_escape_string($con, $_POST['email1']);
	// echo "Name is ".$name;

	$password = mysqli_real_escape_string($con, $_POST['password1']);
	// echo "password is ". $password;

	$sql = "SELECT P_Id,Password FROM registerpatient WHERE Email = '$email'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$newHash  = $row['Password'];
	if (password_verify($password,$newHash)) {
		# code...
	if ($row) {
		$_SESSION["member_id"] = $row["P_Id"];
		if (!empty($_POST['remember'])) {
			setcookie('email1',$_POST['email1']);
			setcookie('password1',$_POST['password1']);
			
		}else{
			if (isset($_COOKIE['email1'])) {
				setcookie('email1',"");
			}

			if (isset($_COOKIE['password1'])) {
				setcookie('password1',"");
			}
		}
	}
	$active = $row['P_Id'];
	$count = mysqli_num_rows($result);
	 if($count == 1) {

         $_SESSION['login_patient'] = $email;
         
         header("location: PatDashboard.php");
      }
  }else {
         echo "<script>alert('Either your Email or Password is Invalid! ');
   	window.location.href='patient_login.php';
   	</script>";
      }
  }
?>		