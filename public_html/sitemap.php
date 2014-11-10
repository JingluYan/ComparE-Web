<?php
require_once("header.php");
require_once("form.php");
require_once("footer.php");

session_start();

header_style("ComparE-sitemap");

if(isset($_SESSION['login_type']))
{
   aHeader($_SESSION['login_type']);
} else {
  aHeader('');
}

echo "
   <tr>
    <td width=\"223\" height=\"484\" valign=\"top\" bordercolor=\"0\"></td>
    <td width=\"790\" valign=\"top\"><table width=\"790\" border=\"0\">
      <tr>
        <td height=\"56\" colspan=\"2\" valign=\"top\" class=\"FIRST_HEADING\">Site Map </td>
        </tr>
      <tr>
        <td width=\"357\" height=\"214\" valign=\"top\"><p class=\"NOTICE\"><a href=\"homepage.php\">Home</a></p>
          <p class=\"NOTICE\">Today's Deal</p>
          <ul>
            <li class=\"LOG\">Computer</li>
            <li class=\"LOG\">Mobile</li>
            </ul>
          <p class=\"NOTICE\"><a href=\"aboutUs.php\">About Us</a></p>
          <p class=\"NOTICE\"><a href=\"ourService.php\">Our Service</a></p>
          <p class=\"NOTICE\"><a href=\"contactUs.php\">Contact Us</a></p>
          <p class=\"NOTICE\"><a href=\"help.php\">Need Help</a></p>
          <p class=\"NOTICE\"><a href=\"register.php\">Register</a></p>
          <p class=\"NOTICE\"><a href=\"login.php\">Login     </a></p></td>
        <td width=\"423\" valign=\"top\"><p class=\"NOTICE\">Computer</p>
          <ul>
            <li class=\"LOG\">DeskTop</li>
            <li class=\"LOG\">Laptop</li>
            <li class=\"LOG\">All-in-one Desktop</li>
            </ul>
          <p class=\"NOTICE\">Mobile</p>
          <ul>
            <li class=\"LOG\">Windows</li>
            <li class=\"LOG\">IOS</li>
            <li class=\"LOG\">Android</li>
            <li class=\"LOG\">Blackberry RIM</li>
            <li class=\"LOG\">Symbian</li>
            <li class=\"LOG\">Others </li>
          </ul></td>
      </tr>
    </table></td>
  </tr>

	";
html_footer();
?>
