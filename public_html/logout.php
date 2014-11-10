<?php
require_once("header.php");
require_once("failResponse.php");
require_once("successResponse.php");
// include function files for this application

session_start();

if (isset($_SESSION['valid_user'])) {
  // store  to test if they *were* logged in
   unset($_SESSION['valid_user']);
   unset($_SESSION['login_type']);
   $result_dest = session_destroy();
  if ($result_dest)  {
    // if they were logged in and are now logged out
    succresponse("Logout successfully", "index.php", "Go to homepage");
    
  } else {
   // they were logged in and could not be logged out
    echo"<script language=\"javascript\">alert('Could not logout');history.go(-1)</script>";
  }
  
} else {
  // if they weren't logged in but came to this page somehow
  succresponse("You should login first.<br />", 'login.php', 'Login');
}

?>
