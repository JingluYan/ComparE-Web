<?php

require_once("header.php");
require_once("form.php");
require_once("footer.php");

session_start();

header_style("ComparE-forget answer");

if(isset($_SESSION['login_type']))
{
   aHeader($_SESSION['login_type']);
} else {
   aHeader('');
}

forgetAnswer_form();
html_footer();
?>