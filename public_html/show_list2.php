<?php
require_once("header.php");
require_once("form.php");
require_once("footer.php");

session_start();

function show_computerlist($result, $result2) {
		
$c = $result->num_rows;
$_SESSION['total'] = $c;

header_style("ComparE-list computer");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}
 

list_computerPre();

while($row = $result->fetch_array()) {
		echo "<tr height=\"150\">
	  <form action=\"product_computer.php\" method=\"post\" >
      <td width=\"150\" align=\"center\" valign=\"middle\" class=\"TABLE_WHITE\">
	       <input name=\"computer_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" width=\"120\" height=\"90\" title=\"".$row["productid"]."\" /></td>
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
list_computerBack();
html_footer();

}

function show_mobilelist($result, $result2) {
  
$c = $result->num_rows;
$_SESSION['total2'] = $c;

header_style("ComparE-list mobile");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}
  list_mobilePre();

while($row = $result->fetch_array()) {
		echo "
		<tr>
		 <form action=\"product_mobile.php\" method=\"post\" >
		<td width=\"150\" height=\"110\" align=\"center\" valign=\"middle\" class=\"TABLE_WHITE\">
		 <input name=\"mobile_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" width=\"90\" height=\"105\" title=\"".$row["productid"]."\" /></td>
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
list_mobileBack();
html_footer();	  
}
?>