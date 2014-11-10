<?php
require_once("header.php");
require_once("form.php");
require_once("footer.php");

session_start();

header_style("ComparE-register");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}

register_form();
html_footer();
?>