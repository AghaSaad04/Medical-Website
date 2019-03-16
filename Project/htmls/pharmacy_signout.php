

<?php
session_start();
if($_SESSION['login_pharmacy']){
unset($_SESSION['login_pharmacy']); // destroys the specified session.

}

header('Location:login.php'); //redirect to preferred page after unset the session

?>

