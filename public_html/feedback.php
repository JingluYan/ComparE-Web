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

 // check login type
if($_SESSION['login_type']=="staff") {
  echo"<script language=\"javascript\">alert('Sorry, access deny, you do not have this privilege');history.go(-1)</script>";
   exit();
}
 
// get the total number of feedbacks
$result = $conn->query("select count(*) from feedback");
         
 if(!$result) {
    echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
	//response("There is some error with this page");
	exit();
}

// if the number of row is 0, report "No such item" message
if($result->num_rows == 0) {
   echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   //response("No such item");
   exit();
}

// divide results into many pages
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

// show the web page     
header_style("ComparE-feedback");
		 
if(isset($_SESSION['login_type']))
{
	feedbackHeader($_SESSION['login_type']);
} else {
	feedbackHeader('');
}

navigation();
feedback();
			
echo"<tr>
       <td width=\"304\" colspan=\"2\" valign=\"top\"><table width=\"771\" border=\"0\">
     <tr>
       <td height=\"52\" valign=\"top\"><span class=\"FIRST_HEADING\">Feedback About the Web </span></td>
     </tr> <table>";

// show the feedback part
while($row=$result->fetch_array()) {
    echo "<tr>
            <td><table width=\"760\" border=\"0\">
                 <tr>
                    <td class=\"LOG\">Title: ".$row["title"]." </td>
                 </tr>
                 <tr>
                    <td class=\"LOG\">".$row["content"]."</td>
                 </tr>
                 <tr>
                    <td align=\"right\" class=\"LOG\">Author: ".$row["memberid"]." ".$row["writetime"]." </td>
                 </tr>
                 <tr>
                    <td class=\"LOG\">Re:</td>
                 </tr>
                 <tr>
                    <td class=\"LOG\">".$row["response"]."</td>
                 </tr>
                 <tr>
                    <td align=\"right\" class=\"LOG\">Staff: ".$row["staffid"]." ".$row["responsetime"]." 
                 <hr /></td>
                 </tr>
				</table>";
	}
	
// show pages
echo $key;	
?>
</tr>   
  <tr>
    <td height="45" valign="top" class="FIRST_HEADING">New Feedback </td>
  </tr>
	<form action="add_feedback.php" method="post" onsubmit="return CheckPost(this);">
    <tr>
       <td height="113" valign="top">
	        <table width="623" border="0">
               <tr>
                  <td width="96" align="left" valign="top" class="LOG">Title</td>
                  <td width="517">
                    <label>
                      <input name="title" type="text" size="50">
                    </label>
                  </td>
               </tr>
               <tr>
                  <td valign="top" class="LOG">Content</td>
                  <td>
                    <label>
                      <textarea name="content" cols="80" rows="5"></textarea>
                    </label>
                  </td>
               </tr>
            </table>
		    <p>
				<input type="image" src="images/submit.png" alt="" name="Submit" width="80" height="25" border="0" align="left" id="Home2" onClick="MM_nbGroup('down','group1','Submit','',1)" onMouseOver="MM_nbGroup('over','Submit','images/submit-clicked.png','',1)" onMouseOut="MM_nbGroup('out')" /></p></td>
    </tr></form>
 </table>
 </td>
</tr>
</table></td></tr>
  
<?php
// web footer
html_footer();
?>