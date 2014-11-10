<?php
require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("navigation.php");
require_once("content.php");

session_start();

header_style("ComparE-terms and condition");

if(isset($_SESSION['login_type']))
{
   aHeader($_SESSION['login_type']);
} else {
   aHeader('');
}
navigation();
terms();
html_footer();
?>