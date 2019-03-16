<html>
<body>
<?php
include "../configuration.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$email = mysqli_real_escape_string($con, $_POST['email1']);
	$password = mysqli_real_escape_string($con, $_POST['password1']);

	echo "password is ". $password;
	$sql = "SELECT Phar_Id,Password FROM pharmacy WHERE Email = '$email'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$newHash = $row['Password'];
	if (password_verify($password,$newHash)) {
		# code...
	if ($row) {
		$_SESSION["member_id"] = $row["Phar_Id"];
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
	$active = $row['Phar_Id'];
	$count = mysqli_num_rows($result);
	 if($count == 1) {

         $_SESSION['login_pharmacy'] = $email;
         
         header("location:PharDashboard.php");
      }
	}
      else {
         echo "<script>alert('Either your Email or Password is Invalid! ');
   	window.location.href='pharmacy_login.php';
   	</script>";
      }
  }
?>		
</body>
</html>