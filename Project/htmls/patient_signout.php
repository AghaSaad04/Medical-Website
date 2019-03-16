

<?php
session_start();
if($_SESSION['login_patient']){
unset($_SESSION['login_patient']); // destroys the specified session.

}

header('Location:login.php'); //redirect to preferred page after unset the session

?>

