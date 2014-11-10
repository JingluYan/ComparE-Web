<?php

require_once("header.php");
require_once("footer.php");
require_once("navigation.php");
require_once("content.php");
require_once("form.php");

session_start();

header_style("ComparE-help");

if(isset($_SESSION['login_type']))
{
   helpHeader($_SESSION['login_type']);
} else {
   helpHeader('');
}
navigation();
help();
html_footer();
?>