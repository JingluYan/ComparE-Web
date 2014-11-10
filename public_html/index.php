<?php
require_once("navigation.php");
require_once("user_auth_fns.php");
require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("failResponse.php");

// connect to db
 $conn = db_connect();

 $result1 = $conn->query("select picture, productid from computer order by viewtimes DESC limit 4 ");
 $result2 = $conn->query("select picture, productid from mobile order by viewtimes DESC limit 4 ");
 
if(!$result1) {
	response("There is some error with this page (computer)");
	exit();
}
if(!$result2) {
	response("There is some error with this page (mobile)");
	exit();
}

header_style("ComparE-homepage");
		 
if(isset($_SESSION['login_type']))
{
	homepageHeader($_SESSION['login_type']);
} else {
	homepageHeader('');
}

	homepageNavigation();
	
	echo "
	<script type=\"text/javascript\" src=\"scripts/jquery-1.4.2.min.js\"></script>
	<script type=\"text/javascript\" src=\"scripts/jquery.KinSlideshow-1.2.1.js\"></script>
	<script type=\"text/javascript\" src=\"scripts/webtry_roll.js\"></script>
	";
	
	echo"
			  <tr>
                <td width=\"763\" valign=\"top\" class=\"FIRST_HEADING\">Hot Items </td>
              </tr>
              <tr>
                <td width=\"763\" align=\"center\" valign=\"top\" bgcolor=\"#FFFFFF\">
<script language=\"javascript\">
window.onload=function showtable(){
var tablename=document.getElementById(\"mytable\");
var li=tablename.getElementsByTagName(\"tr\");
var ab=tablename.getElementsByTagName(\"td\");
for (var i=0;i<=li.length;i++){
	for(var n=0;n<=ab.length;n++){
		ab[n].style.borderColor=\"#FFFFFF\";
	ab[n].onmouseover=function(){
	this.style.borderColor=\"#357ec7\";
	}
	ab[n].onmouseout=function(){
	this.style.borderColor=\"#FFFFFF\"
	}
	}
	}
}
</script>

				
				<table id=\"mytable\" width=\"763\" border=\"1\" bordercolor=\"#FFFFFF\" cellpadding=\"0\" cellspacing=\"10\">
					<tr>";

		while($row1=$result1->fetch_array()) {
		   echo "
		   <td align=\"center\">
			<table border=\"0\">
			   <form action=\"product_computer.php\" method=\"post\">
				<tr>
					<td ><input name=\"computer_product\" type=\"image\" value=\"".$row1["productid"]."\" src=\"".$row1["picture"]."\" title=\"".$row1["productid"]."\" width=\"140\" height=\"120\" border=\"0\"/></td>
				</tr></form>
				<tr>
					<td align=\"center\">".$row1["productid"]."</td>
				</tr>
			</table>
		   </ td>";
		}
		echo "</ tr>
			<tr>";
		while($row2=$result2->fetch_array()) {
			echo "
		   <td align=\"center\">
			<table border=\"0\">
			   <form action=\"product_mobile.php\" method=\"post\">
				<tr>
					<td ><input name=\"mobile_product\" type=\"image\" value=\"".$row2["productid"]."\" src=\"".$row2["picture"]."\" title=\"".$row2["productid"]."\" width=\"120\" height=\"140\" border=\"0\"/></td>
				</tr></form>
				<tr>
					<td align=\"center\">".$row2["productid"]."</td>
				</tr>
			</table>
		   </ td>";
        }
		echo"</ tr>";
		
	echo "
					</td></tr>
					</table>
				</td>
              </tr>";
	
homepage();

html_footer();
?>