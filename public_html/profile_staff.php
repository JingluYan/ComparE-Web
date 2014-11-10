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
  
 $email = $_SESSION['valid_user'];
 
 // code to get value for variables like memory

         $result1 = $conn->query( "select fname from staff where e_mail='".$email."'");
         $result = $conn->query( "select fname, lname, gender, e_mail, position, address from staff where e_mail='".$email."'");
         
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
header_style("ComparE-profile staff");

if(isset($_SESSION['login_type']))
{
   aHeader($_SESSION['login_type']);
} else {
   aHeader('');
} 
		 $row1=$result1->fetch_array();
		 
		 navigation();
		 profilePre();
		 
		 echo"<p><span class=\"BLACK_HEADING\">Welcome, <em>" .$row1["fname"] ."</em></span></p>";
		 
		 echo"<table width=\"400\" border=\"0\" align=\"center\">";
		 
		 echo "<tr bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">";
		  
		  echo "
              <td width=\"394\" align=\"left\"><table width=\"400\" border=\"0\" align=\"center\" cellspacing=\"5\">";
		 
		 while($row=$result->fetch_array()) {
  
		  echo "<tr bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">
                <td width=\"130\" height=\"33\" align=\"left\" class=\"TABLE_LEFT\"><strong>First name </strong></td>
                <td width=\"245\" bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">" .
				$row["fname"] .
				"</td>
                </tr>";
				
		  echo "<tr bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">
                <td height=\"29\" align=\"left\" class=\"TABLE_LEFT\"><strong>Last name </strong></td>
                <td bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">" .
				$row["lname"] .
				"</td>
                </tr>";
				
		  echo "<tr bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">
                <td height=\"30\" align=\"left\" class=\"TABLE_LEFT\"><strong>Gender</strong></td>
                <td bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">" .
				$row["gender"] .
				"</td>
                </tr>";
				
		  echo "<tr bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">
               <td height=\"32\" align=\"left\" class=\"TABLE_LEFT\"><strong>E-mail</strong></td>
               <td bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">" .
			   $row["e_mail"] .
			   "</td>
                </tr>";
				
          echo "<tr bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">
                <td height=\"33\" align=\"left\" class=\"TABLE_LEFT\"><strong>Address</strong></td>
                <td bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">" .
				$row["address"] .
				"</td>
                </tr>";
				
		  echo "<tr bordercolor=\"#FFFFFF\" bgcolor=\"#FFFFFF\">
                <td height=\"32\" align=\"left\" class=\"TABLE_LEFT\"><strong>Position</strong></td>
                <td align=\"left\">" .
				$row["position"] .
				"</td>
                </tr>
              
			  ";
		}
		echo "</table>
			   </td>
            </tr>
          </table>
          </td>
      </tr>
	  </table></td>
  </tr>";
html_footer();
?>