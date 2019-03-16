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
   $check = mysqli_query($con,"SELECT P_Id FROM registerpatient WHERE Email = '$email'");
   $row_check = mysqli_fetch_array($check,MYSQLI_ASSOC);
   if ($row_check != NULL){
   	echo "<script>alert('Email is already in use, Try another Email! Thanks');
   	window.location.href='patient_signup.php';
   	</script>";

   }else{


	
	if (isset($_POST["name"])){
		$name = $_POST["name"];
      		echo $name;

		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      		$errors['name'] = "Only letters and white space allowed";
   		}
	}else{
  		$errors['name'] = "Only letters and white space allowed";

	}
		if (isset($_POST["password"])){
		$password = ($_POST["password"]);
		$password = password_hash($password,PASSWORD_DEFAULT);
		echo $password;

	}else{
      		$errors['password'] = "Only letters and white space allowed";

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
	if (isset($_POST["telephone"])){
		$telephone = $_POST["telephone"];
		$telephone = str_replace("+92", "0", $telephone);
		echo $telephone;
		if (!preg_match("/^[0-9][0-9]*$/",$telephone)){
      		$errors['telephone'] = "Only letters and white space allowed";
   		}
	}else{
      		$errors['telephone'] = "Only letters and white space allowed";

	}
	if (isset($_POST["address"])){
		$address = $_POST["address"];
		echo $address;
	}else{
      		$errors['address'] = "Only letters and white space allowed";

	}
	if (isset($_POST["dob"])){
		$dob = $_POST["dob"];
		echo $dob;
	}else{
      		$errors['dob'] = "Only letters and white space allowed";

	}
	if (isset($_POST["gender"])){
		$gender = $_POST["gender"];
		echo $gender;
	}else{
      		$errors['gender'] = "Only letters and white space allowed";

	}


	if (!$errors){
		$sql = "INSERT INTO registerpatient (P_Name , Password, Email, Telephone, Address, DOB, Gender)
			VALUES ('".$_POST["name"]."', '".$password."', '".$_POST["email"]."', '".$telephone."', '".$_POST["address"]."', '".$_POST["dob"]."','".$_POST["gender"]."')";
			$result = mysqli_query($con, $sql);
			header("location:patient_login.php");
			}else{
			echo "<script>alert('Enter Valid data! ');
   	window.location.href='patient_signup.php';
   	</script>";
		}
}
}
}
?>

	
</body>
</html>