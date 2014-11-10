<?php
 require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");
require_once("navigation.php");
 
 $perpagenum = 8;
 
 // start session
session_start();

 $email = $_SESSION['valid_user'];
 
// connect to db
 $conn = db_connect();
  
 // code to get value for variables like memory

         $result1 = $conn->query("select suppliername, supplierid from supplier where e_mail='".$email."'");
         $result = $conn->query("select suppliername, address, rating from supplier s, suppliertelephone t where s.supplierid=t.supplierid and s.e_mail='".$email."'");
         $result2 = $conn->query("select telno from supplier s, suppliertelephone t where s.supplierid=t.supplierid and s.e_mail='".$email."'");
			 // error 1
		if (!$result1) {
		     echo"<script language=\"javascript\">alert('Error1 with database, try again');history.go(-1)</script>";
             exit();
         }
		 
		 //error 2 
         if (!$result) {
		     echo"<script language=\"javascript\">alert('Error2 with database, try again');history.go(-1)</script>";
            exit();
         }
		 
 header_style("ComparE-profile supplier");

if(isset($_SESSION['login_type']))
{
   aHeader($_SESSION['login_type']);
} else {
   aHeader('');
}

		 navigation();
echo "<td width=\"777\" valign=\"top\"><table width=\"772\" height=\"900\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">
      <tr>
        <td height=\"293\" colspan=\"3\" align=\"left\" valign=\"top\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\"><p>&nbsp;</p>";
		 
		 $row1=$result1->fetch_array();

$supplierid = $row1['supplierid'];

		 echo"<p><span class=\"BLACK_HEADING\">Welcome, <em>" .$row1["suppliername"] ."</em></span></p>";
		 
		 echo"<table width=\"400\" border=\"0\" align=\"center\", cellspacing=\"5\">";

		 
$row = $result->fetch_array();

	echo "<tr>
              <td width=\"120\" height=\"10\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Supplier Name </strong></td>
              <td width=\"221\">" .
			  $row["suppliername"] .
			  "</td>
              </tr>";
			  
		echo "<tr>
              <td height=\"31\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Address</strong></td>
              <td>" .
			  $row["address"] .
			  "</td>
              </tr>";
		echo "<tr>
              <td height=\"31\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>E-mail</strong></td>
              <td>" .
			  $email.
			  "</td>
              </tr>";
		echo "<tr>
              <td height=\"31\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Telephone Number </strong></td>";
			  while($row2=$result2->fetch_array()) {
				echo "<td>" .
			  $row2["telno"] .
			  "</td>";
			  }
         echo" </tr>
		<tr>
              <td height=\"31\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Rating</strong></td>";
			  $rating = $row["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" alt=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" alt=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" alt=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" alt=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" alt=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" alt=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" alt=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" alt=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" alt=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" alt=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" alt=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
              echo "</tr> ";	
		 
  echo "</table>
		  <hr /></td>
      </tr>
      ";
	  
 // check if username is unique
$result = $conn->query("select count(*) from product p, purchaselink l where l.supplierid=".$supplierid." and l.productid = p.productid");
 if(!$result) {
	response("There is some error with this page");
	exit();
}
 
if($result->num_rows < 0) {
   response("No such item");
   exit();
}


$total = $result->fetch_array();

require_once("pages.php");

		echo "
	  <tr valign=\"top\">
        <td height=\"45\" colspan=\"3\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"html_heading1\">
			<p class=\"FIRST_HEADING\">Your Products </p>
        </td>
      </tr>";
	  
	  echo "
      <tr>
        <td height=\"46\" colspan=\"3\" valign=\"top\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"html_heading1\">
		<table valign=\"top\" align=\"center\" width=\"650\" border=\"1\ cellspacing=\"0\" bordercolor=\"#CCCCCC\">";
		

$result2 = $conn->query("select picture, producttype, p.productid, price from product p, purchaselink l where l.supplierid=".$supplierid." and l.productid = p.productid limit $startnum, $perpagenum");
$i = $perpagenum*($page-1)+1;

while($row = $result2->fetch_array()) {
	$type = $row["producttype"];
	echo "<tr>";
	       
	if($type == 1) {
		echo "<form action=\"product_computer.php\" method=\"post\" >
		      <td align=\"center\" valign=\"middle\" class=\"TABLE_WHITE\">
				<input name=\"computer_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" width=\"100\" height=\"90\" alt=\"product picture\" /></td></form>";
	} else {
		echo "<form action=\"product_mobile.php\" method=\"post\" >
		      <td align=\"center\" valign=\"middle\" class=\"TABLE_WHITE\">
				<input name=\"mobile_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" width=\"90\" height=\"100\" alt=\"product picture\" /></td></form>";
	}
	          
	echo "
            <td class=\"TABLE_WHITE\">
				<p>" .$row["productid"] ."</p>
			</td>
            <td align=\"center\" class=\"TABLE_WHITE\">&pound".$row["price"]."</td>
          </tr>";
}
		  
echo $key;
		  echo "
		  
        </table></td>
      </tr>
    </table></td>
  </tr>";
		  
 html_footer();
?>