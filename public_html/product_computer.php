<?php

require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");

session_start();

if(isset($_POST['computer_product'])) {
  $_SESSION['productid'] =$_POST['computer_product'];
}
 
$productid = $_SESSION['productid'];

// connect to db
 $conn = db_connect();
  
// check if username is unique
$re = $conn->query("select * from computer where productid ='".$productid."'");


 if(!$re) {
    echo"<script language=\"javascript\">alert('".$productid."');history.go(-1)</script>";
	//response("There is some error with this page");
	exit();
}


header_style("ComparE-product computer");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}

product_computerPre();

while($result = $re->fetch_array()) {
	echo "	
			<tr>  
                  <td width=\"265\" align=\"center\" valign=\"middle\"><img src=\"".$result["picture"]."\" width=\"200\" height=\"160\" align=\"middle\" /></td>
				  
				  <form action=\"price.php\" method=\"post\">
				  <td width=\"575\" align=\"left\" valign=\"top\">
					<p class=\"BLACK_HEADING\">".$result["productid"]."</p>
					<input name=\"link\" type=\"hidden\" value=\"".$result["productid"]."\" />
					<p class=\"NOTICE\">".$result["brand"]."</p>
                    <p><span class=\"comparison\">";
					  $rating = $result["rating"];
					switch($rating) {
					   case 5: echo" <img src=\"images/star-5.png\" alt=\"5\" width=\"120\" height=\"25\" />";break;
					   case 4.5: echo"<img src=\"images/star-4.5.png\" alt=\"4.5\" width=\"120\" height=\"25\" />"; break;
					   case 4: echo"<img src=\"images/star-4.png\" alt=\"4\" width=\"120\" height=\"25\" />";break;
					   case 3.5: echo"<img src=\"images/star-3.5.png\" alt=\"3.5\" width=\"120\" height=\"25\" />";break;
					   case 3: echo"<img src=\"images/star-3.png\" alt=\"3\" width=\"120\" height=\"25\" />";break;
					   case 2.5: echo"<img src=\"images/star-2.5.png\" alt=\"2.5\" width=\"120\" height=\"25\" />";break;
					   case 2: echo"<img src=\"images/star-2.png\" alt=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<img src=\"images/star-1.5.png\" alt=\"1.5\" width=\"120\" height=\"25\" />";break;
					   case 1: echo"<img src=\"images/star-1.png\" alt=\"1\" width=\"120\" height=\"25\" />";break;
					   case 0.5: echo"<img src=\"images/star-0.5.png\" alt=\"0.5\" width=\"120\" height=\"25\" />";break;
					   case 0: echo"<img src=\"images/star-0.png\" alt=\"0\" width=\"120\" height=\"25\" />";break;
					}
				 echo "</span>
					</p>
					<table width=\"264\" border=\"0\">
                      <tr>
                        <td><input type=\"image\" src=\"images/purchase.png\" alt=\"Go to purchase link\" name=\"Purchase\" width=\"100\" height=\"30\" border=\"0\" align=\"left\" id=\"Purchase\" onClick=\"MM_nbGroup('down','group1','Purchase','',1)\" 
						onMouseOver=\"MM_nbGroup('over','Purchase','images/purchase-clicked.png','',1)\" onMouseOut=\"MM_nbGroup('out')\" /></td>
                        <td><a href=\"product_computer.php#leaveComment\" target=\"_top\" onClick=\"MM_nbGroup('down','group1','Comment','',1)\" onMouseOver=\"MM_nbGroup('over','Comment','images/comment-clicked.png','',1)\" onMouseOut=\"MM_nbGroup('out')\"><img src=\"images/comment.png\" alt=\"Leave comment\" name=\"Comment\" width=\"100\" height=\"30\" border=\"0\" align=\"left\" id=\"Comment\"/></a></td>
                      </tr>
                    </table></td> <form>";
		
product_computerMid();

	echo "
				<tr>
                  <td colspan=\"3\" valign=\"top\"><table width=\"997\" border=\"0\" cellspacing=\"5\">
                    <tr>
                      <td width=\"133\" valign=\"top\" class=\"TABLE_BLUE\">Processor</td>
                      <td width=\"334\" class=\"TABLE_YEL\">".$result["processor"]."</td>
                      <td width=\"150\" valign=\"top\" class=\"TABLE_BLUE\">Memory</td>
                      <td width=\"347\" class=\"TABLE_YEL\">".$result["memory"]." GB</td>
                    </tr>
                    <tr>
                      <td valign=\"top\" class=\"TABLE_BLUE\">Storage</td>
                      <td class=\"TABLE_YEL\">".$result["storage"]." GB</td>
                      <td valign=\"top\" class=\"TABLE_BLUE\"><strong> </strong>Screen Size</td>
                      <td class=\"TABLE_YEL\">".$result["screensize"]." inch</td>
                    </tr>
                    <tr>
                      <td valign=\"top\" class=\"TABLE_BLUE\">Type</td>
                      <td class=\"TABLE_YEL\">".$result["type"]."</td>
                      <td valign=\"top\" class=\"TABLE_BLUE\">Operating System</td>
                      <td class=\"TABLE_YEL\">".$result["operatingsystem"]."</td>
                    </tr>
                    <tr>
                      <td valign=\"top\" class=\"TABLE_BLUE\">Display Card</td>
                      <td class=\"TABLE_YEL\">".$result["displaycard"]."</td>
                      <td valign=\"top\" class=\"TABLE_BLUE\">Weight</td>";
					  if($result["weight"] == null) {
						echo  "<td class=\"TABLE_YEL\">-</td>";
					  } else {
						echo "<td class=\"TABLE_YEL\">".$result["weight"]." kg</td>";
					  }
					 echo "
                    </tr>
                    <tr>
                      <td valign=\"top\" class=\"TABLE_BLUE\">Color</td>
                      <td class=\"TABLE_YEL\">".$result["color"]."</td>
                      <td valign=\"top\" class=\"TABLE_BLUE\">Other</td>
                      <td class=\"TABLE_YEL\">".$result["other"]."</td>
                    </tr>
                    <tr>
                      <td colspan=\"4\" valign=\"top\"><hr /></td>
                      </tr>
                  </table></td>
                </tr>  </table></td>
            </tr>
          </table></td>
        </tr>";
				
    //echo $result['viewtimes'];
	$viewtimes = $result['viewtimes']+1;
}	
//echo $viewtimes;
$res=$conn->query("update computer set viewtimes = '".$viewtimes."' where productid = '".$productid."'");

$perpagenum = 5;
$result2 = $conn->query("select count(*) from comment");

if(!$result2) {
    echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
	//response("There is some error with this page");
	exit();
}
 
if($result2->num_rows < 0) {
   echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   //response("No such item");
   exit();
}
$total = $result2->fetch_array();

require_once("pages.php");

	echo "
	<tr>
                  <td colspan=\"3\" class=\"html_heading\"><span class=\"FIRST_HEADING\">Comments</span></td>
                </tr>
	<tr>
                  <td colspan=\"3\"><table width=\"999\" border=\"0\">
                    <tr>
                      <td width=\"1004\">
					  <table width=\"993\" border=\"0\">";


$result = $conn->query("select * from comment limit $startnum, $perpagenum");
$i = $perpagenum*($page-1)+1;

while($row = $result->fetch_array()) {
             echo "<tr>
                          <td width=\"998\" valign=\"top\" class=\"TABLE_LEFT\"><strong>By ".$row["memberid"]."    ".$row["time"]." </strong></td>
                        </tr>
                        <tr>
                          <td valign=\"top\">".$row["content"]." <hr /></td>
                        </tr>";
}	
echo $key;
		echo "
                      </table></td>
                    </tr>
                  </table></td>
                </tr>";
	

		 echo "
                <tr>
                  <td colspan=\"3\" valign=\"top\" class=\"FIRST_HEADING\"><a name=\"leaveComment\">Leave Your Own Comment  </a> </td>
                </tr>

				<form method=\"post\" action=\"add_comment.php\" onsubmit=\"return ProductCheck(this);\">
				<tr>
                  <td colspan=\"3\">
                    <label>
                      <textarea name=\"comment\" cols=\"80\" rows=\"5\"></textarea>
                    </label>
					<p class=\"NOTICE\">
                      <label>Please score for this computer
                      <select name=\"rate\">
					    <option value=\"--\">--</option>
                        <option value=\"0\">0</option>
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>
                        <option value=\"4\">4</option>
                        <option value=\"5\">5</option>
                      </select>
                      </label>
                    </p>
					<input type=\"image\" src=\"images/submit.png\" name=\"Submit\" width=\"80\" height=\"25\" border=\"0\" align=\"left\" id=\"Home\" onClick=\"MM_nbGroup('down','group1','Submit','',1)\"
					onMouseOver=\"MM_nbGroup('over','Submit','images/submit-clicked.png','',1)\" onMouseOut=\"MM_nbGroup('out')\"/>
				  </td>
                </tr></form> ";

html_footer();

?>