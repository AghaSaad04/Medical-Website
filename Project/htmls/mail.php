<?php

include("../configuration.php");
// echo "	jahhahaha";
if(isset($_POST['forget'])){

// $pname=$_POST['user'];
// $honame=$_POST['honame'];

$u_email = $_POST['email1'];
// echo "$u_email";

$u_pass = rand(1000,10000);
// echo "Password is: "."$u_pass<br>";
// $subject = $_POST['subject'];
$password = password_hash($u_pass,PASSWORD_DEFAULT);

$sqlq = "UPDATE registerdoctor SET D_Password='$password' WHERE Email='$u_email'";
mysqli_query($con,$sqlq);

		$temp=mailtoemail($u_email,$u_pass,'Your New Credentials');
	
}
 #mail function defenition 

// $temp=mailtoemail("saadcarnot@gmail.com","Hello","Test");

function mailtoemail($to,$message,$subject){

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
$mail->FromName = "Team Medics";

$mail->AddAddress($to);


$mail->IsHTML(true);
global $userEmail;
// global $howebsite;
// global $honame;

$mail->Subject = $subject;
$mail->Body = '<h1 align="center">TEAM MEDICS</h1><br>Your new credentials are:<br><b>Your email: </b>'.$to.'<br><b>Your new Password is: </b>'.$message.'<br>THANKS for using our services!!!';
$mail->SMTPDebug = 4;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
//$mail->Send();
if ($mail->Send() == false)
    {
        die($mail->ErrInfo);
    }
    else
    {
        // echo "It worked!\n";
    }

	header('Location: doctor_login.php');
}

?>