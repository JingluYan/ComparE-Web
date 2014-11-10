<?php
require_once("user_auth_fns.php");
require_once("failResponse.php");
require_once("successResponse.php");

// start session
//session_start();

// get variables
$email=$_POST['email'];
$passwd=$_POST['password'];
$captcha = $_POST['captcha'];
$role = $_POST['role'];

// not enter right captcha
if(strtolower($captcha)!=$_SESSION['vdcode'])
{
   echo"<script language=\"javascript\">alert('Please enter the same captcha as the picture shown');history.go(-1)</script>";
   //response("Please enter the same captcha as the picture shown");
   exit();
}

if ($email && $passwd) {
  
  // they have just tried logging in
  try  {
    login($email, $passwd, $role);
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $email;
	
  }
  catch(Exception $e)  {
    // unsuccessful login
	echo"<script language=\"javascript\">alert('Problem: You could not be logged in');history.go(-1)</script>";
	//response("Problem: You could not be logged in");
    exit();
  }
}
 $_SESSION['login_type'] = $role;
 succresponse("You have logged in as ".$_SESSION['valid_user'],"profile_".$_POST['role'].".php", "Go to My Profile");
?>
