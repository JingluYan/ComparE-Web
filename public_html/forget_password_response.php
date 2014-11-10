<?php
require_once("user_auth_fns.php");
require_once("failResponse.php");
require_once("successResponse.php");

// start session
session_start();

$email = $_POST['email'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$captcha = $_POST['captcha'];

// not enter right captcha
if($captcha!=$_SESSION['vdcode'])
{
    echo"<script language=\"javascript\">alert('Please enter the same captcha as the picture shown');history.go(-1)</script>";
   //response("Please enter the same captcha as the picture shown");
   exit();
}

try  {
    forget_password($email, $question, $answer);
	$password = reset_password($email);
    //notify_password($email, $password);
  }
  catch(Exception $e)  {
    // unsuccessful login
	echo"<script language=\"javascript\">alert('Error, try again');history.go(-1)</script>";
	//response("Sorry, some error happens");
    exit();
  }

succresponse("Your new password is ".$password,"login.php", "Login now");
  
?>