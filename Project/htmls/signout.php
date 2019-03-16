

<?php
session_start();
if($_SESSION['login_user']){
unset($_SESSION['login_user']); // destroys the specified session.

}

header('Location:login.php'); //redirect to preferred page after unset the session

?>

