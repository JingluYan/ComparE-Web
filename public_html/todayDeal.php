<?php

require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");

session_start();



header_style("ComparE-todayDeal");

if(isset($_SESSION['login_type']))
{
   dealHeader($_SESSION['login_type']);
} else {
   dealHeader('');
}

// connect to db
 $conn = db_connect();
  
$result1 = $conn->query("select picture, productid, minprice from computer order by minprice limit 10");
$result2 = $conn->query("select picture, productid, minprice from mobile order by minprice limit 10");

todayDealPre();

echo " 
	<td width=\"499\" align=\"center\" valign=\"top\">
	<table width=\"450\" border=\"0\" cellspacing=\"0\">
           <tr>
              <td height=\"30\" colspan=\"3\" class=\"TABLE_BLUE\">Computers</td>
           </tr>
              <tr>
                <td colspan=\"3\" align=\"center\"><hr /></td>
                </tr>
	
";
			  
while($row1 = $result1->fetch_array()) {
echo "
              <tr>
			     <form action=\"product_computer.php\" method=\"post\" >
                <td width=\"120\" height=\"110\" align=\"center\"><span class=\"TABLE_WHITE\">
					<input name=\"computer_product\" type=\"image\" value=\"".$row1["productid"]."\" src=\"".$row1["picture"]."\" width=\"120\" height=\"90\"></span>
				</td></form>
                <td height=\"110\" align=\"left\">".$row1["productid"]."</td>
				<td>&pound".$row1["minprice"]."</td>
			  </tr>
			  <tr>
			  <td colspan=\"3\" ><hr /></td>
			  </tr>
			  ";
}

echo "
</table></td>
	<td width=\"501\" align=\"center\" valign=\"top\">
	<table width=\"450\" border=\"0\" cellspacing=\"0\">
              <tr>
                <td height=\"30\" colspan=\"3\" class=\"TABLE_BLUE\">Mobiles</td>
                </tr>
              <tr>
                <td colspan=\"3\" align=\"center\"><hr /></td>
              </tr>
		";
				
while($row2 = $result2->fetch_array()) {
echo "		 
              <tr>
			    <form action=\"product_mobile.php\" method=\"post\" >
                <td width=\"125\" height=\"110\" align=\"center\"><span class=\"TABLE_WHITE\">
					<input name=\"mobile_product\" type=\"image\" value=\"".$row2["productid"]."\" src=\"".$row2["picture"]."\" width=\"80\" height=\"100\"></span>
				</td></form>
                <td height=\"110\" align=\"left\">".$row2["productid"]."</td>
				<td>&pound".$row2["minprice"]."</td>
              </tr> 
			  <tr>
			  <td colspan=\"3\" ><hr /></td>
			  </tr>
			  ";

}
echo " </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    </tr>";

html_footer();
?>