<?php

require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");
require_once("navigation.php");

// start session
session_start();

// connect to db
 $conn = db_connect();
  
// check if username is unique

  $email = $_SESSION['valid_user'];
 // code to get value for variables like memory

         $result1 = $conn->query( "select fname from member where e_mail='".$email."'");
         $result = $conn->query( "select fname, lname, gender, dateofbirth, e_mail,zipcode,telno, phoneno,roomORhouseno from member where e_mail='".$email."'");
         
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
		 
header_style("ComparE-profile member");

if(isset($_SESSION['login_type']))
{
   aHeader($_SESSION['login_type']);
} else {
   aHeader('');
}
		 $row1=$result1->fetch_array();
		 
		 navigation();
		 profilePre();
		 
		 echo"
		 <p><span class=\"BLACK_HEADING\">Welcome, <em>" .$row1["fname"] ."</em></span></p>";
		 
		 echo"<table width=\"436\" border=\"0\" align=\"center\" cellspacing=\"5\">";
		 
		
		 while($row=$result->fetch_array()) {
		
		  echo "<tr>
				<td width=\"160\" height=\"31\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>First Name </strong></td>
				<td width=\"257\">" .
				$row["fname"]. "</td>
				</tr>";
				
		  echo "<tr>
              <td height=\"28\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Last Name </strong></td>
              <td>" .
			  $row["lname"]. "</td>
			  </tr>";
			  
		  echo "<tr>
				<td height=\"31\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Gender</strong></td>
				<td>" .
				$row["gender"] ."
				</td>
				</tr>";
				
		  echo "<tr>
				<td height=\"32\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Birthday</strong></td>
				<td>" .
				$row["dateofbirth"] ."
				</td>
				</tr>";
				
		  echo "<tr>
				<td height=\"30\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>E-mail</strong></td>
              <td>" .
			  $row["e_mail"] .
			  "</td>
			  </tr>";
			  
		  echo "<tr>
				<td height=\"29\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Telephone Number </strong></td>
				<td>" .
				$row["telno"] .
				"</td>
				</tr>";
				
		  echo "<tr>
				<td height=\"30\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Mobile Number </strong></td>
				<td>" .
				$row["phoneno"] .
				"</td>
				</tr>";
				
		 echo "<tr>
			   <td height=\"31\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Zipcode</strong></td>
				<td>" .
				$row["zipcode"].
				"</td>
				</tr>";
				
		 echo "<tr>
              <td height=\"36\" align=\"left\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\" class=\"TABLE_LEFT\"><strong>Room/House Number</strong></td>
              <td>" .
			  $row["roomORhouseno"] .
			  "</td>
			  </tr>
          </table>";
		 echo "<p class=\"LOG\">If you want to change your personal information, please <a href=\"change_personalInfo.php\">click here</a>. </p>
				<p class=\"LOG\">&nbsp;</p>
				<p class=\"LOG\">&nbsp;</p></td>
		</tr>
		</table></td>
  </tr>";
		  }
		  
html_footer();
?>
