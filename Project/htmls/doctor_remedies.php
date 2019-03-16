<?php
include "../configuration.php";
   include('doctor_session.php');

echo "hi";
$errors = array();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
if (isset($_POST["subject"])){
		$subject = $_POST["subject"];
      		echo $subject;

}else{
  		$errors['subject'] = "Only letters and white space allowed";

	}
	if (isset($_POST["description"])){
		$description = $_POST["description"];
      		echo $description;
      	}
else{
  		$errors['description'] = "Only letters and white space allowed";

	}

	if (!$errors){

   		$sql = "INSERT INTO remedies (Subject , Description )
			VALUES ('".$subject."', '".$description."')";
			$result = mysqli_query($con, $sql);
			// include "welcome.php";
			// <!-- header("location:homepage.html"); -->

		
		}

}
?>
