<?php
// import necessary files
require_once("navigation.php");
require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");
require_once("failResponse.php");

// number of items per page
$perpagenum = 5;

// start session
session_start();

// connect to db
$conn = db_connect();

// get total number of feedbacks
$result = $conn->query("select count(*) from feedback");

// evaluate results from database and offer corresponding message
if(!$result) {
	response("There is some error with this page");
	exit();
}
if($result->num_rows < 0) {
   response("No such item");
   exit();
}

// show web pages
$total = $result->fetch_array();
require_once("pages.php");

$result = $conn->query("select * from feedback limit $startnum, $perpagenum");

 if(!$result) {
    echo"<script language=\"javascript\">alert('Error, try again');history.go(-1)</script>";
	//response("There is some error with this page");
	exit();
}
 
if($result->num_rows == 0) {
   echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   //response("No such item");
   exit();
}

$i = $perpagenum*($page-1)+1;

header_style("ComparE-feedback");
		 
if(isset($_SESSION['login_type']))
{
	feedbackStaffHeader($_SESSION['login_type']);
} else {
	feedbackStaffHeader('');
}

navigation();
feedback();
			
echo"<tr>
        <td width=\"304\" height=\"525\" colspan=\"2\" valign=\"top\"><table width=\"771\" height=\"525\" border=\"0\">
          <tr>
            <td height=\"52\" valign=\"top\"><span class=\"FIRST_HEADING\">Feedback About the Web </span></td>
          </tr>
	      <tr>
            <td height=\"467\" valign=\"top\">
			  <table width=\"765\" border=\"0\">";

// show feedback part
while($row=$result->fetch_array()) {
echo "<tr>
        <td valign=\"top\"><table width=\"760\" border=\"0\">
          <tr>
            <td class=\"LOG\">Title: ".$row["title"]." </td>
          </tr>
          <tr>
            <td class=\"LOG\">".$row["content"]."</td>
          </tr>
          <tr>
            <td align=\"right\" class=\"LOG\">Author: ".$row["memberid"]." ".$row["writetime"]." </td>
          </tr>";
	
	// if there is response with the feedback, show following page
	if($row["response"]) {
	    echo "<tr>
                <td class=\"LOG\">Re:</td>
              </tr>
              <tr>
                <td class=\"LOG\">".$row["response"]."</td>
              </tr>
              <tr>
                <td align=\"right\" class=\"LOG\">Staff: ".$row["staffid"]." ".$row["responsetime"]." 
                <hr /></td>
              </tr></table>";
	}
	
	// if there is no response with the feedback, show following page
	else{
		echo "<tr>
                <td class=\"LOG\">Response:</td>
              </tr>
			  <form action=\"add_response.php\" method=\"post\" onsubmit=\"return CheckPost(this);\">
              <tr>
                <td class=\"LOG\" valign=\"top\">
                  <label>
                    <textarea name=\"content\" cols=\"80\" rows=\"5\"></textarea>
                  </label>
			      <input type=\"hidden\" name=\"feedback\" value=\"".$row["feedbackid"]."\" />
                  <input type=\"image\" src=\"images/submit.png\" name=\"Submit\" width=\"80\" height=\"25\" border=\"0\" align=\"left\" id=\"Home2\" 
				  onClick=\"MM_nbGroup('down','group1','Submit','',1)\" onMouseOver=\"MM_nbGroup('over','Submit','images/submit-clicked.png','',1)\" 
				  onMouseOut=\"MM_nbGroup('out')\" />
				  <p>&nbsp;</p>
                <hr /></td>
              </tr></form>
			</table></td>
          </tr>";
	}
}

echo "</table></td></tr></table>
		  </td>
         </tr> 
       </table>
		</td>
     </tr>";

// show page
echo $key;

// show web footer
html_footer();
?>
