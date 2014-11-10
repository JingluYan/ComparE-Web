<?php
require_once("header.php");
require_once("footer.php");
require_once("navigation.php");
require_once("content.php");

session_start();

header_style("ComparE-contact us");

if(isset($_SESSION['login_type']))
{
   contactUsHeader($_SESSION['login_type']);
} else {
   contactUsHeader('');
}
navigation();
contactUs();
html_footer();
?>