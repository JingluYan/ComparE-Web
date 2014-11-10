<?php
require_once("header.php");
require_once("footer.php");
require_once("navigation.php");
require_once("content.php");
require_once("form.php");

session_start();

header_style("ComparE-our service");

if(isset($_SESSION['login_type']))
{
   ourServiceHeader($_SESSION['login_type']);
} else {
   ourServiceHeader('');
}
navigation();
ourService();
html_footer();
?>