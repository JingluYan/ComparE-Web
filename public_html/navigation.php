<?php
function navigation() {
?>
<tr>
    <td width="236" height="394" valign="top" border="0" cellpadding="0" cellspacing="0">
	<table width="230" height="125" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top" border="0">
		<table width="230" border="0" cellpadding="0" cellspacing="0">
			<form action = "navigationResponse.php" method = "post">
				<tr>
				<td><a href="list_computer.php" ><img src="images/menu_01.png" title="Computer" border="0"/></a></td>
                </tr>
                <tr>
                  <td><input name="Desktop" type = "image" value="Desktop" src="images/menu_02.png" title="Desktop" /></td>
                </tr>
                <tr>
                  <td><input name="Laptop" type="image" value="Laptop" src="images/menu_03.png" title="Laptop" /></td>
                </tr>
                <tr>
                  <td><input name="All-in-one" type="image" value="All-in-one Desktop" src="images/menu_04.png" title="All-in-one" /></td>
                </tr>
			</form>
			<form action = "navigationResponse.php" method = "post">
                <tr>
                  <td><a href="list_mobile.php" ><img src="images/menu_05.png" title="Mobile" border="0"/></a></td>
                </tr>
                <tr>
                  <td><input name="Windows" type="image" value="windows" src="images/menu_06.png" title="Windows" /></td>
                </tr>
                <tr>
                  <td><input name="IOS" type="image" value="IOS" src="images/menu_07.png" title="IOS" /></td>
                </tr>
                <tr>
                  <td><input name="Android" type="image" value="Android" src="images/menu_08.png" title="Android" /></td>
                </tr>
                <tr>
                  <td><input name="Blackberry" type="image" value="Blackberry RIM" src="images/menu_09.png" title="Blackberry" /></td>
                </tr>
                <tr>
                  <td><input name="Symbian" type="image" value="Symbian" src="images/menu_10.png" title="Symbian" /></td>
                </tr>
                <tr>
                  <td><input name="Other" type="image" value="Other" src="images/menu_11.png" title="Other" /></td>
				</tr>
			</form>
        </table>
		</td>
      </tr>
    </table></td>
<?php
}

function homepageNavigation(){
?>
 <tr>
    <td height="466" valign="top" border="0">
	<table width="1014" height="893" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="230" height="889" align="center" valign="top">
		<table width="230" border="0" cellpadding="0" cellspacing="0">
			<form action = "navigationResponse.php" method = "post">
				<tr>
				<td><a href="list_computer.php" ><img src="images/menu_01.png" title="Computer" border="0"/></a></td>
                </tr>
                <tr>
                  <td><input name="Desktop" type = "image" value="Desktop" src="images/menu_02.png" title="Desktop" /></td>
                </tr>
                <tr>
                  <td><input name="Laptop" type="image" value="Laptop" src="images/menu_03.png" title="Laptop" /></td>
                </tr>
                <tr>
                  <td><input name="All-in-one" type="image" value="All-in-one Desktop" src="images/menu_04.png" title="All-in-one" /></td>
                </tr>
			</form>
			<form action = "navigationResponse.php" method = "post">
                <tr>
                  <td><a href="list_mobile.php" ><img src="images/menu_05.png" title="Mobile" border="0"/></a></td>
                </tr>
                <tr>
                  <td><input name="Windows" type="image" value="windows" src="images/menu_06.png" title="Windows" /></td>
                </tr>
                <tr>
                  <td><input name="IOS" type="image" value="IOS" src="images/menu_07.png" title="IOS" /></td>
                </tr>
                <tr>
                  <td><input name="Android" type="image" value="Android" src="images/menu_08.png" title="Android" /></td>
                </tr>
                <tr>
                  <td><input name="Blackberry" type="image" value="Blackberry RIM" src="images/menu_09.png" title="Blackberry" /></td>
                </tr>
                <tr>
                  <td><input name="Symbian" type="image" value="Symbian" src="images/menu_10.png" title="Symbian" /></td>
                </tr>
                <tr>
                  <td><input name="Other" type="image" value="Other" src="images/menu_11.png" title="Other" /></td>
				</tr>
			</form>
        </table>
          <p>&nbsp;</p>

		 <table width="200" height="349" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="349" align="center" valign="top" bgcolor="#FFFFFF"><span class="OFF"><em>50% OFF !!!</em></span>
                <p><a target="_blank" href="http://compare.ebay.co.uk"><img src="images/ebay.png" width="150" height="40" border="0"></p>
                <p><a target="_blank" href="http://www.amazon.co.uk"><img src="images/amazon.png" width="150" height="40" border="0"></a></p>
                <p><a target="_blank" href="http://www.ebuyer.com"><img src="images/ebuyer.png" width="150" height="40" border="0"></a></p>
                <p><a target="_blank" href="http://www.viking-direct.co.uk"><img src="images/viking.png" width="150" height="40" border="0"></a></p>
                <p><a target="_blank" href="http://www.saverstore.com"><img src="images/saverstore.png" width="150" height="40" border="0"></a></p>
                <p><a target="_blank" href="http://www.shop.bt.com"><img src="images/btshop.png" width="150" height="40" border="0"></a></p>
                <p><a target="_blank" href="http://www.johnlewis.com"><img src="images/johnlewis.png" width="150" height="40" border="0"></p></a></td>
            </tr>
          </table>
          <p>&nbsp;</p></td>
        <td width="774" valign="top"><table width="774" border="0">
          <tr>
            <td width="768" height="167" valign="top">
			<table width="768" height="297" border="0">
              <form action = "searchResponse.php" method = "post">
			  <tr>
                <td width="762" height="40" align="center" valign="top"><span class="SELECTOR"><strong>SEARCH&nbsp;</strong></span>
                    <select name="searchtype" id="catalog">
                    <option value="computer_brand">Brands for Computer</option>
                    <option value="mobile_brand">Brands for Mobile</option>
                    <option value="computer">Computer Identification Number</option>
                    <option value="mobile">Mobile Identification Number</option>
                  </select>
                    <input type="text" name="searchterm" size="50" maxlength="255" />
                  <a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group2','go','',1)" onMouseOver="MM_nbGroup('over','go','images/go-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
				  <input type="image" src="images/go.png" title="" name="go" width="44" height="26" border="0" align="absmiddle" id="go" onload="" /></a></span>
                  <hr /></td>
              </tr></form>
                <td height="226" align="left" valign="top">
				
<script type="text/javascript">
$(function(){
    $("#banner").KinSlideshow({
            moveStyle:"right",
            titleBar:{titleBar_height:30,titleBar_bgColor:"#CCCCCC",titleBar_alpha:0.7},
            titleFont:{TitleFont_size:16,TitleFont_color:"#0000CC",TitleFont_weight:"normal"},
            btn:{btn_bgColor:"#2d2d2d",btn_bgHoverColor:"#1072aa",btn_fontColor:"#FFF",btn_fontHoverColor:"#FFF",btn_borderColor:"#4a4a4a",btn_borderHoverColor:"#1188c0",btn_borderWidth:1}
    });
})
</script>
				 
            <div id="banner">
    <a href="aboutUs.php"><img src="images/ourcompany.jpg" title="Details can be seen in the specific introduction." width="760" height="270" border="0" /></a>
    <a href="aboutUs.php"><img src="images/twoHP.png" title="Details can be seen in the specific introduction." width="760" height="270" border="0" /></a>
    <a href="aboutUs.php"><img src="images/fiveHP.png" title="Details can be seen in the specific introduction." width="760" height="270" border="0" /></a>
	<a href="aboutUs.php"><img src="images/threeHP.png" title="Details can be seen in the specific introduction." width="760" height="270" border="0"/></a>
    <a href="aboutUs.php"><img src="images/fourHP.png" title="Details can be seen in the specific introduction." width="760" height="270" border="0" /></a>  </div>
         
		    <hr /></td></table>
			
			  <table width="763" border="0" cellspacing="0">    
              <tr>
                <td width="763" valign="top" class="html_heading"><span class="FIRST_HEADING">New Release </span></td>
              </tr>
              <tr>
                <td width="763" valign="top" >
				<table width="763" height="302" border="3" cellpadding="0" cellspacing="10" bordercolor="#EAEAEA"  background="images/back.png">
                      <tr>
                        <td height="151" colspan="2" align="left" valign="top" bgcolor="#F1F1F1" ><p class="LOG">1. New iOS5 for iPhone 4S </p>
                          <p class="FOOTER_STYLE">You know how to use iPhone from the first time you pick it up. That is because the revolutionary Multi-Touch interface in iOS was designed for your finger. And the simple, beautiful Home screen is the easiest place to start. From built-in apps to over 500,000 apps available from the App Store. From making a FaceTime call to editing a video with iMovie. Everything you touch is easy, intuitive, and fun.</p>                          </td>
                        <td width="140" align="center" valign="middle" bgcolor="#FFFFFF" ><p class="LOG"><img src="images/vs.png" width="100" height="100"></p>                          </td>
                        </tr>
                      <tr>
                        <td width="309" height="100" align="left" valign="top" bgcolor="#F1F1F1"  ><p class="FOOTER_STYLE">2. Dell Business Laptop Sale!</p>                          
                          <p class="FOOTER_STYLE">3. New Phones of Blackberry Release</p>
                          <p class="FOOTER_STYLE">4. All Desktops is now 20% Off</p>
                          </td>
						<td width="262" align="left" valign="top" bgcolor="#F1F1F1"  ><p class="FOOTER_STYLE">5. Windows Phones become fashion</p>
						  <p class="FOOTER_STYLE">6. Asus New Items Arrive</p></td>
						<td height="100" align="left" valign="top" bgcolor="#F1F1F1"  ><p class="NOTICE">Contact Us </p>
						  <p>Tel: 07721920734 </p>
						  <p><a href="mailto:compare@gmail.com" class="STYLE2">comparestaff@gmail.com</a></p></td>
                      </tr>
                    </table></td>
              </tr>
			  <tr>
			  	<td><p>&nbsp; </p></td>
			  </tr>
			  
			  
<?php
}
?>