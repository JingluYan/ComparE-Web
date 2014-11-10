<?php
require_once("header.php");
require_once("footer.php");
require_once("form.php");

session_start();

function computer_link($result1, $result2) {

header_style("ComparE-computer price");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}

priceSearch();

while($row=$result1->fetch_array()) {

echo "<tr>
      <td height=\"183\" align=\"left\" valign=\"top\"><table width=\"839\" border=\"0\">
              <tr>
                <td width=\"179\" height=\"169\" align=\"left\" valign=\"top\">
                  <table width=\"932\" border=\"0\" align=\"center\">
				  <form action=\"product_computer.php\" method=\"post\" >
                    <td width=\"218\" height=\"169\" align=\"center\"><input name=\"computer_product\" type=\"image\" value=\"".$row["productid"]."\"  src=\"".$row["picture"]."\" width=\"200\" height=\"160\" title=\"Product\" /></td>
				 </form>
                <td width=\"637\" bgcolor=\"#FFFFFF\"><p class=\"NOTICE\"><strong>".$row["productid"]."</strong></p>
				
				
		<table width=\"485\" border=\"0\">
                        <tr>
                          <td width=\"280\">Processor: " .$row["processor"]."</td>
                          <td width=\"280\">Type: ".$row["type"]."</td>
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
                          <td>&nbsp;</td>
                        </tr>
                      </table>
					  
                 </td>
                  </table></td>
                </tr>
                </table></td>
            </tr>";
}


pricePre();

while($row=$result2->fetch_array()) {
echo "<tr align=\"center\">
                    <td width=\"149\" class=\"TABLE_WHITE\" height=\"50\"><img src=\"".$row["logo"]."\" width=\"100\" height=\"30\" /></td>
                    <td width=\"220\" class=\"TABLE_WHITE\" height=\"50\">".$row["suppliername"]."</td>
                    <td width=\"200\" class=\"TABLE_WHITE\" height=\"50\">&pound;".$row["price"]."</td>";
					
					$rating = $row["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" title=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" title=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" title=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" title=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
					
					$stock = $row["stock"];
					if($stock=="Yes") {
					   echo"<td width=\"191\" class=\"TABLE_WHITE\" height=\"50\">In Stock<br />";
					} else {
					   echo"<td width=\"191\" class=\"TABLE_WHITE\" height=\"50\">Out of Stock<br />";
					}
					
                echo"<a href=\"".$row["link"]."\" target=\"_blank\" onClick=\"MM_nbGroup('down','group1','Purchase1','',1)\" onMouseOver=\"MM_nbGroup('over','Purchase1','images/purchase-clicked.png','',1)\" onMouseOut=\"MM_nbGroup('out')\">
					  <img src=\"images/purchase.png\" name=\"Purchase1\" width=\"80\" height=\"25\" border=\"0\" align=\"middle\" id=\"Purchase1\"/></a></td>
                  </tr>";
}

priceBack();
html_footer();
}

function mobile_link ($result1, $result2) {

header_style("ComparE-mobile price");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}

priceSearch();

while($row=$result1->fetch_array()) {

$picture = $row["picture"];

echo "<tr>
      <td height=\"183\" align=\"left\" valign=\"top\"><table width=\"839\" border=\"0\">
              <tr>
                <td width=\"179\" height=\"169\" align=\"left\" valign=\"top\">
                  <table width=\"932\" border=\"0\" align=\"center\">
				  <form action=\"product_mobile.php\" method=\"post\" >
                    <td width=\"218\" height=\"169\" align=\"center\"><input name=\"mobile_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" width=\"160\" height=\"200\" title=\"Product\" /></td>
				</form>
                <td width=\"637\" bgcolor=\"#FFFFFF\"><p class=\"NOTICE\"><strong>".$row["productid"]."</strong></p>
				
				
		<table width=\"485\" border=\"0\">
                        <tr>
                          <td width=\"280\">Platform: " .$row["platform"]."</td>
                          <td width=\"300\">Color: ".$row["color"]."</td>
                        </tr>
                        <tr>
                          <td>Memory: " .$row["memory"]." MB</td>
                          <td>Screen Size: " .$row["screensize"]."inch</td>
                        </tr>
                        <tr>
                          <td>Weight: ".$row["weight"]." kg</td>
                          <td>Pixel: ".$row["pixel"]."pix</td>
                        </tr>
                      </table>
					  
					  <table>
						<tr width = \"485\" border=\"0\">
                          <td>Physical Size: ".$row["physicalsize"]."</td>
                        </tr>
						</table>
                 </td>
                  </table></td>
                </tr>
                </table></td>
            </tr>";
}

pricePre();

while($row=$result2->fetch_array()) {
echo "<tr align=\"center\">
                    <td width=\"149\" class=\"TABLE_WHITE\" height=\"50\"><img src=\"".$row["logo"]."\" width=\"100\" height=\"30\" /></td>
                    <td width=\"220\" class=\"TABLE_WHITE\" height=\"50\">".$row["suppliername"]."</td>
                    <td width=\"200\" class=\"TABLE_WHITE\" height=\"50\">&pound;".$row["price"]."</td>";
					
					$rating = $row["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" title=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" title=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" title=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" title=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
					
					$stock = $row["stock"];
					if($stock=="Yes") {
					   echo"<td width=\"191\" class=\"TABLE_WHITE\" height=\"50\">In Stock<br />";
					} else {
					   echo"<td width=\"191\" class=\"TABLE_WHITE\" height=\"50\">Out of Stock<br />";
					}
					
                echo"<a href=\"".$row["link"]."\" target=\"_blank\" onClick=\"MM_nbGroup('down','group1','Purchase2','',1)\" onMouseOver=\"MM_nbGroup('over','Purchase2','images/purchase-clicked.png','',1)\" onMouseOut=\"MM_nbGroup('out')\">
					  <img src=\"images/purchase.png\" name=\"Purchase2\" width=\"80\" height=\"25\" border=\"0\" align=\"middle\" id=\"Purchase2\"/></a></td>
                  </tr>";
}

priceBack();
html_footer();

}

?>