<?php

include("../configuration.php");
// echo "	jahhahaha";
if(isset($_POST['Contact'])){

// $pname=$_POST['user'];
// $honame=$_POST['honame'];

$name = $_POST['Name'];
$email = $_POST['Email'];
$query = $_POST['Query'];
$to = 'afraz.bese16seecs@seecs.edu.pk';
// echo "$u_email";

// $u_pass = rand(1000,10000);
// echo "Password is: "."$u_pass<br>";
// $subject = $_POST['subject'];
// $password = password_hash($u_pass,PASSWORD_DEFAULT);

// $sqlq = "UPDATE registerdoctor SET D_Password='$password' WHERE Email='$u_email'";
// mysqli_query($con,$sqlq);

		$temp=mailtoemail($to,$name,$email,$query);
	
}
 #mail function defenition 

// $temp=mailtoemail("saadcarnot@gmail.com","Hello","Test");

function mailtoemail($to,$name,$email,$query){

require("class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username = "mlatif.bese16seecs@seecs.edu.pk"; //email enter here
$mail->Password = "nshadi2k16"; //enter pass here                                   

$mail->From = "muhammadhamaadlatif@gmail.com";
$mail->FromName = "User Query";

$mail->AddAddress($to);


$mail->IsHTML(true);
global $userEmail;
// global $howebsite;
// global $honame;
$subject = 'User Query';
$mail->Subject = $subject;
$mail->Body = '<h1 align="center">TEAM MEDICS</h1><b>User Name: </b>'.$name.'<br><b>USER Email: </b>'.$email.'<br><b>USER QUERY: </b>'.$query.'';
$mail->SMTPDebug = 4;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
//$mail->Send();
if ($mail->Send() == false)
    {
        die($mail->ErrInfo);
    }
    else
    {
    	// echo "<script>window.location.href='Contact_Us.php';
    	// alert('Thanks for contacting us. We'll respond to your query in a while);</script>";
	// echo "<script>alert('Thanks for contacting us. We'll respond to your query in a while ');
 //    window.location.href='Contact_Us.php';
 //    </script>";
    header("location:Contact_Us.php");
    }
 echo "<script>alert('Thanks for contacting us. We'll respond to your query in a while ')</script>";

}

?>