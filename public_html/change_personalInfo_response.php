<?php
require_once("user_auth_fns.php");
require_once("failResponse.php");
require_once("successResponse.php");

// start session
session_start();

$captcha = $_POST['captcha'];

// not enter right captcha
if(strtolower($captcha)!=$_SESSION['vdcode'])
{
   echo"<script language=\"javascript\">alert('Please enter the same captcha as the picture shown');history.go(-1)</script>";
   //response("Please enter the same captcha as the picture shown");
	exit();

}

// test
$email = $_SESSION['valid_user'];

$info = array("fname", "lname", "gender", "day", "month", "year", "e_mail", "telno", "phoneno", "zipcode", "roomORhouseno");

$count = 0;

for($i=0; $i<11; $i++) {

  if(isset($_POST[$info[$i]]) && $_POST[$info[$i]] != '' && $_POST[$info[$i]] != "--") {
  
   try {
	
	 if($info[$i] == "day"||$info[$i] == "month"||$info[$i] == "year") {
	    $count++;
		//echo $count;
	 } else {
	   change_personalInfo($email, $info[$i], $_POST[$info[$i]]);
	   if($info[$i] == "e_mail") {
	      $_SESSION['valid_user'] = $_POST[$info[$i]];
	   }
	 }
	 
	 if($count == 3) {
		$birthday = $_POST[$info[$i]]."-".$_POST[$info[$i-1]]."-".$_POST[$info[$i-2]];
		$count = 0;
		change_personalInfo($email, "dateofbirth", $birthday);
	 }
	 
  } catch (Exception $e) {
       echo"<script language=\"javascript\">alert('Sorry, your personal information could not be changed');history.go(-1)</script>";
	  //response("Sorry, your personal information could not be changed");
      exit();
  }
  }
  
}
// test
$_SESSION['login_type'] = "member";

succresponse("You have changed your personal information successfully","profile_member.php", "Go to My Profile");
?>