<?php
require_once("user_auth_fns.php");
require_once("failResponse.php");
require_once("successResponse.php");

// start session
session_start();

// get variables
$original_password=$_POST['original_password'];
$new_passwd=$_POST['new_password'];
$new_passwd2=$_POST['new_password2'];
$captcha = $_POST['captcha'];

$email = $_SESSION['valid_user'];

// not enter right captcha
if(strtolower($captcha)!=$_SESSION['vdcode'])
{
   echo"<script language=\"javascript\">alert('Please enter the same captcha as the picture shown');history.go(-1)</script>";
   //response("Please enter the same captcha as the picture shown");
	exit();

}

  // they have just tried logging in
  try  {
    change_password($email, $original_password, $new_passwd2);
  }
  catch(Exception $e)  {
    // unsuccessful login
	echo"<script language=\"javascript\">alert('Sorry, your password could not be changed');history.go(-1)</script>";
	//response("Sorry, your password could not be changed");
    exit();
  }

 succresponse("You have changed your password successfully","login.php", "Login now");
?>
