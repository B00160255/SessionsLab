<?php session_start();
if($_SESSION['Active'] == false){
  header("location:login.php");
  exit;
}
?>

<?php
require_once ('config.php');
/* Define username and password */
$Username = "Steve";
$Password = "pass";

if( ($_POST['Username'] == $Username) && ($_POST['Password'] == $Password)  )
{
    echo 'success';
}
else
    echo 'Incorrect Username or Password';
?>