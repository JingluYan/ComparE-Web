<?php
require_once("user_auth_fns.php");
require_once("failResponse.php");
require_once("successResponse.php");

// start session
session_start();

$email = $_POST['email'];
$code = $_POST['code'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$captcha = $_POST['captcha'];

//test
if($code != $_SESSION['security_code']) {
  echo"<script language=\"javascript\">alert('Please check your security code');history.go(-1)</script>";
  //response("Please check your security code in your mailbox again");
  exit();
}

// not enter right captcha
if($captcha!=$_SESSION['vdcode'])
{
    echo"<script language=\"javascript\">alert('Please enter the same captcha as the picture shown');history.go(-1)</script>";
   //response("Please enter the same captcha as the picture shown");
   exit();
}

  try  {
    forget_answer($email, $question, $answer);
  }
  catch(Exception $e)  {
    // unsuccessful login
	echo"<script language=\"javascript\">alert('Sorry, you enter wrong personal information');history.go(-1)</script>";
	//response("Sorry, your password could not be changed");
    exit();
  }
  
  succresponse("Successfully reset your security question","login.php", "Login now");
?>