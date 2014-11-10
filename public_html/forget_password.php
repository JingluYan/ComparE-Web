<?php

require_once("header.php");
require_once("form.php");
require_once("footer.php");

session_start();

header_style("ComparE-forget password");

if(isset($_SESSION['login_type']))
{
   aHeader($_SESSION['login_type']);
} else {
   aHeader('');
}

forgetPassword_form();
html_footer();
?>