<?php
require_once("db_fns.php");
require_once("gmail.php");

session_start();

function login($username, $password, $table) {
// check username and password with db
// if yes, return true
// else throw exception

  // connect to db
  $conn = db_connect();

  // check if username is unique
  $result = $conn->query("select * from ".$table." where e_mail='".$username."' and password = sha1('".$password."')");
  
  
  if (!$result) {
    throw new Exception('Could not log you in.');
  }
  
  if ($result->num_rows > 0) {
     return true;
  } else {
    throw new Exception('Could not log you in.');
  }
  
  $row = $result ->fetch_array();
 
}

function check_valid_user() {
// see if somebody is logged in and notify them if not
  if (isset($_SESSION['valid_user']))  {
      echo "Logged in as ".$_SESSION['valid_user'].".<br />";
  } else {
    throw new Exception('Could not log you in.');
  }
}

function change_password($username, $old_password, $new_password) {
// change password for username/old_password to new_password
// return true or false

  // if the old password is right
  // change their password to new_password and return true
  // else throw an exception
  $conn = db_connect();
  $result = $conn->query("update member
                          set password = sha1('".$new_password."')
                          where e_mail = '".$username."'");
  if (!$result) {
    throw new Exception('Password could not be changed.');
  } else {
    return true;  // changed successfully
  }
}

function change_personalInfo($email, $field, $new) {
		
// change personal information
// return true or false

  // if the old password is right
  // change their password to new_password and return true
  // else throw an exception
  $conn = db_connect();
  
  if($field == "e_mail") {
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
  }
  
  $result = $conn->query("update member
                          set ".$field." = '".$new."' where e_mail = '".$email."'");
  if (!$result) {
    //echo $field;
	//echo $new;
    throw new Exception('Personal information could not be changed.');
  } else {
    //echo $field;
	//echo $new;
    return true;  // changed successfully
  }
}

function forget_answer($email, $question, $answer) {
  $conn = db_connect();
  $result = $conn->query("update member
                          set securityquestion = '".$question."', securityquestionanswer ='".$answer."' where e_mail = '".$email."'");
  if (!$result) {
    throw new Exception();
  } else {
    return true;  // changed successfully
  }

}

function forget_password($email, $question, $answer) {
  $conn = db_connect();
  $result = $conn->query("select * from member where securityquestion = '".$question."' and securityquestionanswer ='".$answer."' and e_mail = '".$email."'");
  
  if ($result->num_rows > 0) {
    //echo 1;
    return true;
  } else {
    throw new Exception();
  }
 
}

function reset_password($email) {
    $str = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";    
    $code = array();    
    for ($i=0; $i<12; $i++) {    
        $code[] = $str[mt_rand(0,strlen($str)-1)];    
    }  
    $password = implode('',$code);
  // set user's password to this in database or return false
  $conn = db_connect();
  $result = $conn->query("update member set password = sha1('".$password."') where e_mail = '".$email."'");
  
  if (!$result) {
    throw new Exception('Could not change password.');  // not changed
  } else {
    //echo "code is".$password;
    return $password;  // changed successfully
  }
}

function notify_password($email, $password) {
// notify the user that their password has been changed
    //$from = "From: compare@localhost \r\n";
    $subject = 'ComparE login information';
    $message = "Your password has been changed to ".$password."\r\n"
              ."Please change it next time you log in.\r\n";
  
     if (smtp_mail($email, $subject, $message)) {
       return true;
     } else {
       throw new Exception();
     }
}

?>
