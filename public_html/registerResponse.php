<?php
require_once('db_fns.php');
require_once("failResponse.php");
require_once("successResponse.php");

// start session
session_start();

// get variables
$email=$_POST['email'];
$passwd=$_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$zipcode = $_POST['zipcode'];
$room = $_POST['room'];
$question = $_POST['select_question'];
$answer = $_POST['answer'];
$captcha = $_POST['captcha'];

// not enter right captcha
if(strtolower($captcha)!=$_SESSION['vdcode'])
{
	  echo"<script language=\"javascript\">alert('Please enter the same captcha as the picture shown');history.go(-1)</script>";
	  //response("Please enter the same captcha as the picture shown");
	  exit();
}

// check the length password
 if ((strlen($passwd) < 8) || (strlen($passwd) > 16)) {
    
	  echo"<script language=\"javascript\">alert('Your password is not secure, please reset');history.go(-1)</script>";
	  //response("Your password is not secure, please reset");
	  exit();
 }

 // check email validation
if(!preg_match('/^[a-zA-Z0-9][a-zA-Z0-9._-]{2,16}[a-zA-Z0-9]@(([a-zA-Z0-9])|([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]))\.[a-zA-Z]{2,4}$/', $email))
    {
	  echo"<script language=\"javascript\">alert('Error, your email format is incorrect');history.go(-1)</script>";
	  //response("Error, your email format is incorrect");
	  exit();
 }
 
 // connect to db
  $conn = db_connect();

  // check if username is unique
  $result1 = $conn->query("select * from member where e_mail='".$email."'");
 
 // error 1
  if(!$result1) {
	echo"<script language=\"javascript\">alert('Error1 with database, try again');history.go(-1)</script>";
	exit();
}

  if ($result1->num_rows>0) {
	  echo"<script language=\"javascript\">alert('The email address has been registered');history.go(-1)</script>";
	  //response("The email address has been registered");
	  exit();
  }
  
  $regdate = date('Y-m-d');
  $latestLogDate = date('Y-m-d');

  // if ok, put in db
  $result = $conn->query("insert into member(password, fname, lname, zipcode, roomORhouseno, e_mail, registerdate, securityquestion, securityquestionanswer, dateoflatestlogin) values
                         (sha1('".$passwd."'), '".$fname."', '".$lname."', '".$zipcode."', '".$room."', '".$email."', '".$regdate."', '".$question."', '".$answer."', '".$latestLogDate."')");
 // error 2 
  if (!$result) {
      //echo"<script language=\"javascript\">alert('Error2 with database, try again');history.go(-1)</script>";
	  response("Error with connection, please try again");
	  exit();
  }

// error 3
  if(isset($_POST['gender'])) {
    $result = $conn->query("update member set gender='".$_POST['gender']."' where e_mail = '".$email."'");
	 if (!$result) {
	  echo"<script language=\"javascript\">alert('Error3 with database, try again');history.go(-1)</script>";
	  //response("Cannot do the action now, please try again");
	  exit();
   }
   //echo 3;
  }
  
  
// error 4
  if(($_POST['day'] != "--")&&($_POST['month']!="--")&&($_POST['year']!="--")) {
    $birthday = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
    $result = $conn->query("update member set dateofbirth = '".$birthday."' where e_mail = '".$email."'");
	 if (!$result) {
	   echo"<script language=\"javascript\">alert('Error4 with database, try again');history.go(-1)</script>";
	  //response("Cannot do the action now, please try again");
	  exit();
    }
	//echo 1;
  }
  
  // error 5
  if(isset($_POST['telephone'])) {
    $result = $conn->query("update member set telno = '".$_POST['telephone']."' where e_mail = '".$email."'");
	 if (!$result) {
	  echo"<script language=\"javascript\">alert('Error5 with database, try again');history.go(-1)</script>";
	  //response("Cannot do the action3 now, please try again");
	  exit();
  }
  }
  
  //error 6
  if(isset($_POST['mobile'])) {
    $result = $conn->query("update member set phoneno = '".$_POST['mobile']."' where e_mail = '".$email."'");
	 if (!$result) {
	  echo"<script language=\"javascript\">alert('Error6 with database, try again');history.go(-1)</script>";
	  //response("Cannot do the action4 now, please try again");
	  exit();
   }
   //echo 2;
   
  }
   //echo 1;
   $_SESSION['valid_user'] = $email;
   $_SESSION['login_type'] = "member";
  succresponse("Successful registration", "index.php", "Go to Homepage");
?>