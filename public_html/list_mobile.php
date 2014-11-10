<?php
require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");

session_start();

$perpagenum = 10;

header_style("ComparE-list mobile");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}

// connect to db
 $conn = db_connect();
 
 // check if username is unique
$result = $conn->query("select count(*) from mobile");
 if(!$result) {
	response("There is some error with this page");
	exit();
}
 
if($result->num_rows == 0) {
   response("No such item");
   exit();
}

$total = $result->fetch_array();

require_once("pages.php");
$result = $conn->query("select * from mobile limit $startnum, $perpagenum");
 if(!$result) {
	response("There is some error with this page");
	exit();
}
 
if($result->num_rows == 0) {
   response("No such item");
   exit();
}

$c = $result->num_rows;
$_SESSION['total2'] = $c;

$result2 = $conn->query("select * from mobile limit $startnum, $perpagenum");
$i = $perpagenum*($page-1)+1;
  
list_mobilePre();

while($row = $result->fetch_array()) {
		echo "
		<tr>
		 <form action=\"product_mobile.php\" method=\"post\" >
		<td width=\"150\" height=\"110\" align=\"center\" valign=\"middle\" class=\"TABLE_WHITE\">
		 <input name=\"mobile_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" width=\"90\" height=\"105\" alt=\"product picture\" /></td>
         </form>           
					<td height=\"110\" width=\"407\" class=\"TABLE_WHITE\"><p>".$row["productid"]."</p>
	  
		<table width=\"410\" border=\"0\">
                         <tr>
                          <td>Brand: " .$row["brand"]."</td>
                          <td>&nbsp</td>
                        </tr>
						<tr>
                          <td width=\"199\">Platform: " .$row["platform"]."</td>";
						  if($row["externalmemory"]==null) {
						   echo "<td width=\"198\">External Memory:-</td>";
						  } else {
                           echo "<td width=\"198\">External Memory: ".$row["externalmemory"]." GB</td>";
						  }
						 echo
                        "</tr>
                        <tr>
                          <td>Memory: " .$row["memory"]." MB</td>
                          <td>Screen Size: ".$row["screensize"]." inch</td>
                        </tr>
                      </table>
	</td>
      <td height=\"110\" width=\"128\" align=\"center\" class=\"TABLE_WHITE\">&pound".$row["minprice"]."</td>
     </tr>";
}

echo "</table>
		  </td>
		  <td valign=\"top\">
		  <form action=\"comparison_mobile.php\" method=\"post\">
		  <table width=\"70\" style=\"border-left:none\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#CCCCCC\">
		  <tr>
				<td style=\"border-left:none\" height=\"35\" align=\"center\" valign=\"middle\" class=\"TABLE_BLUE\"><input type=\"submit\" value=\"Compare\" /></td>
				</tr>";

$i = 1;	
while($row = $result2->fetch_array()) {
	echo "<tr>
				<td style=\"border-left:none\" height=\"110\" align=\"center\" valign=\"middle\" class=\"TABLE_WHITE\">
				<input input name=\"compareMobile".$i."\" type=\"checkbox\" id=\"checkbox8\" value=\"".$row["productid"]."\" onClick=\"doCheck(this);\" /></td>
				</tr>";	
$i++;
}
echo "</table></form>
		  </td>
		  </tr>";
echo $key;
list_mobileBack();
html_footer();

?>