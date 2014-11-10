<?php

require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");

session_start();

$perpagenum = 8;

header_style("ComparE-list computer");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}

// connect to db
 $conn = db_connect();
  
$result = $conn->query("select count(*) from computer");

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
$result = $conn->query("select * from computer limit $startnum, $perpagenum");

 if(!$result) {
    echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
	//response("There is some error with this page");
	exit();
}
 
if($result->num_rows < 0) {
   echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   //response("No such item");
   exit();
}

$c = $result->num_rows;
$_SESSION['total'] = $c;

$result2 = $conn->query("select * from computer limit $startnum, $perpagenum");
$i = $perpagenum*($page-1)+1;

list_computerPre();

while($row = $result->fetch_array()) {
		echo "<tr height=\"150\">
	  <form action=\"product_computer.php\" method=\"post\" >
      <td width=\"150\" align=\"center\" valign=\"middle\" class=\"TABLE_WHITE\">
	       <input name=\"computer_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" width=\"120\" height=\"90\" alt=\"product picture\" /></td>
	  </form>
      <td width=\"407\" class=\"TABLE_WHITE\"><p>".$row["productid"]."</p>
	  
		<table width=\"485\" border=\"0\">
                        <tr>
                          <td width=\"220\">Processor: " .$row["processor"]."</td>
                          <td width=\"265\">Type: ".$row["type"]."</td>
                        </tr>
                        <tr>
                          <td>Memory: " .$row["memory"]." GB</td>
                          <td>Operating System: " .$row["operatingsystem"]."</td>
                        </tr>
                        <tr>
                          <td>Screen Size: ".$row["screensize"]." inch</td>
                          <td>Display Card: ".$row["displaycard"]."</td>
                        </tr>
						<tr>
                          <td>Storage: ".$row["storage"]." GB</td>
                           <td>Brand: ".$row["brand"]."</td>
                        </tr>
                      </table>
	</td>
      <td width=\"80\" align=\"center\" class=\"TABLE_WHITE\">&pound".$row["minprice"]."</td>
	 </tr>";
}
echo "      </table>
		  </td>
		  <td valign=\"top\">
         <form action=\"comparison_computer.php\" method=\"post\">
		  <table width=\"70\" style=\"border-left:none\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#CCCCCC\">
		  <tr>
				<td style=\"border-left:none\" height=\"35\" align=\"center\" valign=\"middle\" class=\"TABLE_BLUE\">
				<input type=\"submit\" value=\"Compare\" /></td>
				</tr>";
$i = 1;		  
while($row2 = $result2->fetch_array()) {

echo "<tr>
				<td style=\"border-left:none\" height=\"150\" align=\"center\" valign=\"middle\" class=\"TABLE_WHITE\">
				<input name=\"compareComputer".$i."\" type=\"checkbox\" id=\"checkbox\" value=\"".$row2["productid"]."\" onClick=\"doCheck(this);\" /></td>
				</tr>";
$i++;
}
echo "</table></form>
		  </td>
		  </tr>";

echo $key;
list_computerBack();
html_footer();

?>