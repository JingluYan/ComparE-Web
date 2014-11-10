<?php

require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("failResponse.php");

session_start();

if(!isset($_SESSION['valid_user'])) {
   //echo"<script language=\"javascript\">alert('Please login first');history.go(-1)</script>";
   response("Please login first");	
   exit();
}

header_style("ComparE-change personal info");

if(isset($_SESSION['login_type']))
{
   aHeader($_SESSION['login_type']);
} else {
   aHeader('');
}

changePersonalInfo_form();
html_footer();
?>
