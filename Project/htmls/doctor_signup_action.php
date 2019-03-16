
<?php
include "../configuration.php";
// include 'session.php';
$errors = array();
$image="";
$image_name ="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){

// $check = "SELECT id FROM users WHERE email_hashed = '$email'";
if (isset($_POST["email"])){
		$email = $_POST["email"];
      		// echo $gender;

	// $email = 'ex@example.com';
   $check = mysqli_query($con,"SELECT D_Id FROM registerdoctor WHERE Email = '$email'");
   $row_check = mysqli_fetch_array($check,MYSQLI_ASSOC);
   if ($row_check != NULL){
   	echo "<script>alert('Email is already in use, Try another Email! Thanks ');
   	window.location.href='doctor_signup.php';
   	</script>";

   }else{

if (isset($_POST["gender"])){
		$gender = $_POST["gender"];
      		// echo $gender;
}else{
	$errors['gender'] = "Only letters and white space allowed";
	}
	if (isset($_POST["first_name"])){
		$first_name = $_POST["first_name"];
      		// echo $first_name;

		if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
      		$errors['first_name'] = "Only letters and white space allowed";
      		// $first_nameErr = "Only letters and white space allowed";
      		// echo $first_nameErr;
   		}
	}else{
  		$errors['first_name'] = "Only letters and white space allowed";

	}
	if (isset($_POST["last_name"])){
		$last_name = $_POST["last_name"];
		// echo $last_name;
		if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
      		$errors['last_name'] = "Only letters and white space allowed";
   		}
	}else{
      		$errors['last_name'] = "Only letters and white space allowed";

	}
	if (isset($_POST["email"])){
		$email = $_POST["email"];
		// echo $email;
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      		$errors['email'] = "Only letters and white space allowed";
   		}
	}else{
      		$errors['email'] = "Only letters and white space allowed";

	}
	if (isset($_POST["address"])){
		$address = $_POST["address"];
		// echo $address;
	}else{
      		$errors['address'] = "Only letters and white space allowed";

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
	if (isset($_POST["specialization"])){
		$specialization = $_POST["specialization"];
		// echo $specialization;
	}else{
      		$errors['specialization'] = "Only letters and white space allowed";

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
	if (isset($_POST["endingTime"])){
		$endingTime = $_POST["endingTime"];
		// echo $endingTime;
	}else{
      		$errors['endingTime'] = "Only letters and white space allowed";

	}

	if (isset($_POST["password"])){
		$password = ($_POST["password"]);
		// echo $password;		
		$password=password_hash($password, PASSWORD_DEFAULT);
		// echo $password;

	}else{
      		$errors['password'] = "Only letters and white space allowed";

	}
		if (!empty($_FILES) && isset($_FILES['image'])) {
		    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
   		if (isset($_FILES['image']['name'])) {
		   // echo "hiadis	husdabasdu";
			    // echo "Whut is : <br>". $image;
    		// echo "Nooooooooo : <br>" . $image_name;

			$image_name = addslashes($_FILES['image']['name']);
		}else{

		}
	}else{

	}
	// var_dump($errors);
	if (!$errors){
		// echo"asds";
   			// $sql1 = "INSERT INTO profile_pics (image, image_name) VALUES ('".$image."','".$image_name."')";
			// $result1 = mysqli_query($con, $sql1);
		$sql = "INSERT INTO registerdoctor (D_Fname , D_Lname, D_Gender, Specialization, StartingHours, EndingHours, PhoneNumber, Address, Email, D_Password, Image, ImageName )
			VALUES ('".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["gender"]."', '".$_POST["specialization"]."', '".$_POST["startingTime"]."', '".$_POST["endingTime"]."', '".$tel."', '".$_POST["address"]."', '".$_POST["email"]."', '".$password."','".$image."','".$image_name."')";
			$result = mysqli_query($con, $sql);
			// include "welcome.php";
			header("location:doctor_login.php");

		
		}else{
			echo "<script>alert('Enter Valid data! ');
   	window.location.href='doctor_signup.php';
   	</script>";
		}
		
		
		

   		
 
   }
}  
}
?>
