<html>
<body>
<?php
include "../configuration.php";
$errors = array();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (isset($_POST["email"])){
		$email = $_POST["email"];
      		// echo $gender;

	// $email = 'ex@example.com';
   $check = mysqli_query($con,"SELECT Phar_Id FROM pharmacy WHERE Email = '$email'");
   $row_check = mysqli_fetch_array($check,MYSQLI_ASSOC);
   if ($row_check != NULL){
   	echo "<script>alert('Email is already in use, Try another Email! Thanks');
   	window.location.href='pharmacy_signup.php';
   	</script>";

   }else{
	


	if (isset($_POST["name"])){
		$name = $_POST["name"];
      		echo $name;
	}else{
  		$errors['name'] = "Only letters and white space allowed";
	}

	if (isset($_POST["email"])){
		$email = $_POST["email"];
		echo $email;
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      		$errors['email'] = "Only letters and white space allowed";
   		}
	}else{
      		$errors['email'] = "Only letters and white space allowed";
	}

	if (isset($_POST["address"])){
		$address = $_POST["address"];
		echo $address;
	}else{
      		$errors['address'] = "Only letters and white space allowed";
	}

	if (isset($_POST["tel"])){
		$tel = $_POST["tel"];
		echo $tel;
		$tel = str_replace("+92", "0", $tel);
		echo $tel;
		if (!preg_match("/^[0-9][0-9]*$/",$tel)){
      		$errors['tel'] = "Only letters and white space allowed";
   		}
	}else{
      		$errors['tel'] = "Only letters and white space allowed";
	}
	
	if (isset($_POST["startingTime"])){
		$startingTime = $_POST["startingTime"];
		echo $startingTime;
	}else{
      		$errors['startingTime'] = "Only letters and white space allowed";
	}

	if (isset($_POST["endingTime"])){
		$endingTime = $_POST["endingTime"];
		echo $endingTime;
	}else{
      		$errors['endingTime'] = "Only letters and white space allowed";
	}

	if (isset($_POST["endingTime"])){
		$endingTime = $_POST["endingTime"];
		echo $endingTime;
	}else{
      		$errors['endingTime'] = "Only letters and white space allowed";
	}

	if (isset($_POST["password"])){
		$password = ($_POST["password"]);
		$password = password_hash($password,PASSWORD_DEFAULT);
		echo $password;
	}else{
      		$errors['password'] = "Only letters and white space allowed";
	}

	if (!$errors){
		$sql = "INSERT INTO pharmacy (Phar_Name,Phar_Location,StartingHours,EndingHours,PhoneNumber,Email,Password)
			VALUES ('".$_POST["name"]."', '".$_POST["address"]."', '".$_POST["startingTime"]."', '".$_POST["endingTime"]."', '".$tel."', '".$_POST["email"]."', '".$password."')";
			$result = mysqli_query($con, $sql);
			header('location:pharmacy_login.php');
	}
		else{
			echo "<script>alert('Enter Valid data! ');
   	window.location.href='pharmacy_signup.php';
   	</script>";
		}
}
}
}
?>

	
</body>
</html>