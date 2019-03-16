
<?php
session_start();
include "../configuration.php";


		$experience = $_GET["experience"];
	


		$recommend = $_GET["recommend"];
		
	
	$r=$_SESSION['login_patient'];
	$sql = "UPDATE registerpatient set Experience=\"$experience\",Recommend=\"$recommend\" WHERE P_Name=\"$r\"";
		
			$result = mysqli_query($con, $sql);
			header('location:PatDashboard.php');
		
		

?>

