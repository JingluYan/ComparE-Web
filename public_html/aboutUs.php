<?php
require_once("header.php");
require_once("footer.php");
require_once("navigation.php");
require_once("content.php");
require_once("form.php");

session_start();

header_style("ComparE-about us");

if(isset($_SESSION['login_type']))
{
   aboutUsHeader($_SESSION['login_type']);
} else {
   aboutUsHeader('');
}
navigation();
aboutUs();
html_footer();
?>