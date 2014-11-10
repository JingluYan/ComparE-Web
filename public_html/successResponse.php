<?php
require_once("header.php");
require_once("form.php");
require_once("footer.php");

function succresponse($message, $url, $name) {
 // show response page
      header_style("ComparE-response");
	  if(isset($_SESSION['login_type']))
      {
         noSelectedHeader($_SESSION['login_type']);
      } else {
         noSelectedHeader('');
      }
?>
 <tr>
		  <td><table width="1015" border="0" cellpadding="0" cellspacing="0">
		    <tr>
              <td width="553" height="464" align="left" valign="middle"><label></label>
                <p><img src="images/loginv8.png" width="470" height="380"></p></td>
	          <td width="460" align="left" valign="top"><p>&nbsp;</p>
	            <p><span class="NOTICE"><?php echo $message?></span></p>
                <p>&nbsp;</p>
              <p><span class="NOTICE"><a href="<?php echo $url;?>"><?php echo $name;?></a></span></p><p>&nbsp;</p></td>
		    </tr>
		    <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
<?php
  html_footer();
}
?>