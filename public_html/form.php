<?php
function homepage(){
?>

            </table></td>
          </tr>
        </table>        </td>
      </tr>
    </table></td>

	
  </tr>
  <tr bordercolor="0">
    <td width="1010" align="center" bgcolor="#FFFFFF" class="FOOTER_STYLE">
	  <table width="900" >
		<tr>
		<td colspan="5" align="center" valign="middle"><hr /></td>
		</tr>
		<tr>
		<td align="center" valign="middle"><a target="_blank" href="http://www.argos.co.uk">Argos</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.amazon.co.uk">Amazon</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.play.com">Play</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.johnlewis.com">John Lewis</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.currys.co.uk">Currys</a></td>
		</tr>
		<tr>
		<td align="center" valign="middle"><a target="_blank" href="http://www.pcworld.co.uk">Pcworld</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.comet.co.uk">Comet</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.dixons.co.uk">Dixons</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.viking-direct.co.uk">Viking</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://compare.ebay.co.uk">e-Bay</a></td>
		</tr>
		<tr>
		<td align="center" valign="middle"><a target="_blank" href="http://www.laskys.com">Laskys</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.shop.bt.com">BTShop</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.saverstore.com">Saverstore</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.ebuyer.com">Ebuyer</a></td>
		<td align="center" valign="middle"><a target="_blank" href="http://www.lambda-tek.com">Lambda-tek</a></td>
		</tr>
		<tr>
		<td align="center" valign="middle"><a target="_blank" href="http://shop.lenovo.com">lenovo</a></td>
		<td colspan="4" align="center" valign="middle">&nbsp;</td>
		</tr>
		<tr>
		<td colspan="5" align="center" valign="middle"><hr /></td>
		</tr>
	</table>
	</td>
  </tr>

<?php
}

function todayDealPre(){
?>
 <tr>
    <td height="379" valign="top" bordercolor="0"><table width="1010" height="378" border="0">
      <tr>
        <td height="374" valign="top"><table width="1010" height="96" border="0">
		<form action = "searchResponse.php" method = "post">
          <tr>
            <td height="64" colspan="2" align="center" valign="top"><span class="html_heading"><span class="SELECTOR"><strong>SEARCH&nbsp;</strong></span>
                <select name="searchtype" id="catalog">
                    <option value="computer_brand">Brands for Computer</option>
                    <option value="mobile_brand">Brands for Mobile</option>
                    <option value="computer">Computer Identification Number</option>
                    <option value="mobile">Mobile Identification Number</option>
                  </select>
                <input type="text" name="searchterm" size="50" maxlength="255" />
                  <a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group2','go','',1)" onMouseOver="MM_nbGroup('over','go','images/go-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
				  <input type="image" src="images/go.png" title="" name="go" width="44" height="26" border="0" align="absmiddle" id="go" onload="" /></a></span>
              <hr /></td></tr></form>
          <tr>
<?php
}

function feedback() {
?>
    <td width="777" valign="top"><table width="772" height="722" border="0" cellpadding="0" cellspacing="0">
         <form action = "searchResponse.php" method = "post">
          <tr>
            <td height="40" colspan="2" align="center"><span class="html_heading"><span class="SELECTOR"><strong>SEARCH&nbsp;</strong></span>
                <select name="searchtype" id="catalog">
                    <option value="computer_brand">Brands for Computer</option>
                    <option value="mobile_brand">Brands for Mobile</option>
                    <option value="computer">Computer Identification Number</option>
                    <option value="mobile">Mobile Identification Number</option>
                  </select>
                  <input type="text" name="searchterm" size="50" maxlength="255" />
                  <a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group2','go','',1)" onMouseOver="MM_nbGroup('over','go','images/go-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
				  <input type="image" src="images/go.png" title="" name="go" width="44" height="26" border="0" align="absmiddle" id="go" onload="" /></a></span>
              <hr /></td></tr></form>
<?php
}

function profilePre(){
?>
	
 <td width="777" valign="top"><table width="772" height="460" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td height="460" colspan="3" align="left" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><p>&nbsp;</p>

<?php
}

function product_mobilePre(){
?>
		<tr>
		  <td valign="top"><table width="1010" height="75" border="0">
            <tr>
              <td width="1004" valign="top"><table width="1004" border="0">
<?php
}                  
function product_mobileMid(){		  
?>
				<table width="264" border="0">
                      <tr>
                        <td>
						<input type="image" src="images/purchase.png" title="Go to purchase link" name="Purchase" width="100" height="30" border="0" align="left" id="Purchase" onClick="MM_nbGroup('down','group1','Purchase','',1)" 
						onMouseOver="MM_nbGroup('over','Purchase','images/purchase-clicked.png','',1)" onMouseOut="MM_nbGroup('out')" /></td>
                        <td><a href="product_mobile.php#leaveComment" target="_top" onClick="MM_nbGroup('down','group1','Comment','',1)" 
						onMouseOver="MM_nbGroup('over','Comment','images/comment-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
						<img src="images/comment.png" title="Leave comment" name="Comment" width="100" height="30" border="0" align="left" id="Comment" onload="" /></a></td>
                      </tr>
                </table>
			</td></form> 
                  <td width="150" valign="top"><p>To compare this computer with others</p>
                    <table width="142" border="0">
                      <tr>
                        <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group1','AB','',1)" 
						onMouseOver="MM_nbGroup('over','AB','images/addbasket-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
						<img src="images/addbasket.png" title="" name="AB" width="128" height="35" border="0" align="left" id="Add" onload="" /></a></td>
                      </tr>
                      <tr>
                        <td><a href="Comparison_mobile.php" target="_top" onClick="MM_nbGroup('down','group1','SB','',1)" 
						onMouseOver="MM_nbGroup('over','SB','images/gobasket-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
						<img src="images/gobasket.png" title="" name="SB" width="125" height="35" border="0" align="left" id="See" onload="" /></a></td>
                      </tr>
                    </table>
					</td>
                </tr>
                <tr>
                  <td colspan="3"><hr /></td>
                </tr>
                <tr>
                  <td colspan="3" class="html_heading"><span class="FIRST_HEADING">Specification</span></td>
                </tr>				
<?php
}

function product_computerPre(){
?>
		<tr>
		  <td valign="top"><table width="1010" border="0">
            <tr>
              <td width="1004" valign="top"><table width="1004" border="0">
<?php
}                  
function product_computerMid(){		  
?>
                  <td width="150" valign="top"><p>To compare this computer with others</p>
                    <table width="142" border="0">
                      <tr>
                        <td><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group1','AB','',1)" 
						onMouseOver="MM_nbGroup('over','AB','images/addbasket-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
						<img src="images/addbasket.png" title="" name="AB" width="128" height="35" border="0" align="left" id="Add" onload="" /></a></td>
                      </tr>
                      <tr>
                        <td><a href="comparison_computer.php" target="_top" onClick="MM_nbGroup('down','group1','SB','',1)" 
						onMouseOver="MM_nbGroup('over','SB','images/gobasket-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
						<img src="images/gobasket.png" title="" name="SB" width="125" height="35" border="0" align="left" id="See" onload="" /></a></td>
                      </tr>
                    </table>
					</td>
                </tr>
				
				
				
				
                <tr>
                  <td colspan="3"><hr /></td>
                </tr>
                <tr>
                  <td colspan="3" class="html_heading"><span class="FIRST_HEADING">Specification</span></td>
                </tr>				
<?php
}

function priceSearch() {
?>
   <tr>
    <td height="466" valign="top" bordercolor="0"><table width="1013" height="717" border="0">
      <tr>
        <td height="713" valign="top"><table width="1010" height="646" border="0">
		 <form action = "searchResponse.php" method = "post">
          <tr>
            <td width="1004" height="51" align="center" valign="top" class="html_heading"><span class="SELECTOR"><strong>SEARCH&nbsp;</strong></span>
                <select name="searchtype" id="catalog">
                    <option value="computer_brand">Brands for Computer</option>
                    <option value="mobile_brand">Brands for Mobile</option>
                    <option value="computer">Computer Identification Number</option>
                    <option value="mobile">Mobile Identification Number</option>
                  </select>
                  <input type="text" name="searchterm" size="50" maxlength="255" />
                  <a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group2','go','',1)" onMouseOver="MM_nbGroup('over','go','images/go-clicked.png','',1)" onMouseOut="MM_nbGroup('out')">
				  <input type="image" src="images/go.png" title="" name="go" width="44" height="26" border="0" align="absmiddle" id="go" onload="" /></a></span>
              <hr /></td></tr></form>
<?php
}

function pricePre() {
?>
 <tr>
            <td height="389" colspan="5" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><table width="964" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="964"><table width="1003" border="1" cellspacing="0" bordercolor="#CCCCCC">
				
				    
					<tr align="center">
                    <td width="149" class="TABLE_BLUE"><span class="TABLE_BLUE">Supplier</span></td>
                    <td width="220" class="TABLE_BLUE"><span class="TABLE_BLUE">Supplier &amp; Contact</span></td>
                    
				    <form action="sort_Price.php" method="post">
					<td width="200" class="TABLE_BLUE"> 
					<span class="TABLE_BLUE">Price
                        <?php if(isset($_REQUEST['price'])) { ?>
						<select name="price" value="<?=$_REQUEST['price']?>">
                          <option value="low" <?php if($_REQUEST['price']=="low"){?> selected<?php }?>>Low to High</option>
                          <option value="high" <?php if($_REQUEST['price']=="high"){?> selected<?php }?>>Hign to Low</option>
                          <option value="no" <?php if($_REQUEST['price']=="no"){?> selected<?php }?>>Not Care</option>
                        </select>
						 <?php } else { ?>
						 <select name="price">
                          <option value="low">Low to High</option>
                          <option value="high">Hign to Low</option>
                          <option value="no">Not Care</option>
                        </select>
						 <?php } ?>
                    </span><input type="submit" value="Sort"/></td></form>
					
				
                    <td width="200" class="TABLE_BLUE"><span class="TABLE_BLUE">Rating</span></td>
                    <td width="191" class="TABLE_BLUE"><span class="TABLE_BLUE">Availability</span></td>
                  </tr>
<?php
}
function priceBack() {
?>

                </table></td>
              </tr>
              </table></td>
          </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td></tr>
<?php
}

function list_mobilePre(){
?>
<tr>
    <td height="466" valign="top" bordercolor="0"><table width="1015" height="893" border="0">
      <tr>
        <td width="230" height="889" valign="top" bgcolor="#EAEAEA">
		<form method="post" action="listResponseMobile.php">
		<table width="230" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="LIST_BLUE">Platform</td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                    <label>
                        <input name="Platform" type="radio" id="Platform_4" value="All" checked>
                        All</label><br>
                      <label>
                        <input type="radio" name="Platform" value="Windows" id="Platform_0">
                        Windows</label>
                      <br>
                      <label>
                        <input type="radio" name="Platform" value="IOS" id="Platform_1">
                        IOS</label>
                      <br>
                      <label>
                        <input type="radio" name="Platform" value="Android" id="Platform_2">
                        Android</label>
                      <br>
                      <label>
                        <input type="radio" name="Platform" value="Blackberry RIM" id="Platform_3">
                        Blackberry RIM</label>
                     <br>
                      <label>
                        <input type="radio" name="Platform" value="Symbian" id="Platform_4">
                        Symbian</label><br>
                       <label>
                        <input type="radio" name="Platform" value="Other" id="Platform_4">
                        Other</label>
                    </p>
                    </td>
                </tr>
                <tr>
                  <td class="LIST_BLUE"><p></p>
                    <p><br />Memory</p></td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                    <label>
                        <input name="Memory" type="radio" id="Memory_0" value="All" checked>
                        All</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="0" id="Memory_0">
                        0 - 100 MB</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="100" id="Memory_1">
                        100 - 200 MB</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="200" id="Memory_2">
                        200 - 300 MB</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="300" id="Memory_3">
                        300 - 400 MB</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="400" id="Memory_4">
                        400 - 500 MB</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="500" id="Memory_5">
                        > 500 MB</label>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="LIST_BLUE"><p></p>
                    <p><br />External Memory</p></td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                      <label>
                        <input name="ExternalMemory" type="radio" id="Ecternal_Memory_0" value="All" checked>
                        All</label>
                      <br>
                      <label>
                        <input type="radio" name="ExternalMemory" value="2" id="Ecternal_Memory_2">
                        2 GB</label>
                      <br>
                      <label>
                        <input type="radio" name="ExternalMemory" value="8" id="Ecternal_Memory_3">
                        8 GB</label>
                      <br>
                      <label>
                        <input type="radio" name="ExternalMemory" value="16" id="Ecternal_Memory_4">
                        16 GB</label>
                      <br>
                      <label>
                        <input type="radio" name="ExternalMemory" value="32" id="Ecternal_Memory_5">
                        32 GB</label>
                    </p>
                  </td>
                </tr>
                <tr >
                  <td class="LIST_BLUE">
                    <p><br />Screen Size</p></td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                      <label>
                        <input name="ScreenSize" type="radio" id="Screen_Size_0" value="All" checked>
                        All</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="0" id="Screen_Size_1">
                        0 - 2 inch</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="2" id="Screen_Size_2">
                        2 - 4 inch</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="4" id="Screen_Size_3">
                        4 - 6 inch</label>
                    </p>
                    <table width="225" border="0">
                      <tr>
                        <td align="right"><label>
                          <input name="Submit" type="submit" value="Submit">
                        </label></td>
                      </tr>
                    </table>
                    <p class="LIST_BLACK">&nbsp;</p>
                  </td>
                </tr>
                <tr class="LIST_BLUE">
          </tr>
          </table></form></td>
		  
		  <td width="771" valign="top">
		  <table width="771" height="1231" border="0" cellpadding="0" cellspacing="0">
		
               <form action = "searchResponse.php" method = "post">
		  <tr>
            <td width="769" height="40" align="center" valign="middle"><span class="html_heading"><span class="html_heading"><span class="SELECTOR"><strong>SEARCH&nbsp;</strong></span>
                  <select name="searchtype" id="catalog">
                    <option value="computer_brand">Brands for Computer</option>
                    <option value="mobile_brand">Brands for Mobile</option>
                    <option value="computer">Computer Identification Number</option>
                    <option value="mobile">Mobile Identification Number</option>
                  </select>
                  <input type="text" name="searchterm" size="50" maxlength="255" />
                  <a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group2','go','',1)" onMouseOver="MM_nbGroup('over','go','images/go-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><input type="image" src="images/go.png" title="" name="go" width="44" height="26" border="0" align="absmiddle" id="go" onload="" /></a></span>
              <hr /></td></tr></form>
		  
		  
		  <td valign="top">
		  <table width="770" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		  <td valign="top">
		  <table width="700" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                <form  name="sort" action = "sortListResponse.php" method = "post">
				  <tr bgcolor="#cee9ee">
                    <td colspan="3" valign="middle" height="35" bgcolor="#cee9ee"><span class="NOTICE">Sorted by</span>                      
                      <?php if(isset($_REQUEST['sortProduct'])) { ?>
					  <select name="sortProduct" value="<?=$_REQUEST['sortProduct']?>" >
                        <option value="ratingM" <?php if($_REQUEST['sortProduct']=="ratingM"){?> selected<?php }?>> Rating</option>
                        <option value="viewtimesM" <?php if($_REQUEST['sortProduct']=="viewtimesM"){?> selected<?php }?>>Popularity</option>
                        <option value="lowM" <?php if($_REQUEST['sortProduct']=="lowM"){?> selected<?php }?>>Price: Low to High</option>
                        <option value="highM"<?php if($_REQUEST['sortProduct']=="highM"){?> selected<?php }?>>Price: High to Low</option>
                      </select>
					  <?php } else { ?>
					  <select name="sortProduct" >
                        <option value="ratingM" > Rating</option>
                        <option value="viewtimesM">Popularity</option>
                        <option value="lowM" >Price: Low to High</option>
                        <option value="highM">Price: High to Low</option>
                      </select>
					  <?php } ?>
	
					  <input type="submit" value="Sort"/>
					  </td>
                  </tr></form>

<?php
}

function list_mobileBack() {
?>
 </table></td>
 </tr>
        </table>         <p>&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
<?php
}
?>

<?php
function list_computerPre() {
?>
<tr>
    <td height="466" valign="top" bordercolor="0"><table width="1011" height="893" border="0">
      <tr>
        <td width="230" height="889" valign="top" bgcolor="#EAEAEA">
		
		<form method="post" action = "listResponseComputer.php">
		<table width="230" border="0" cellpadding="0" cellspacing="0">
                <tr class="LIST_BLUE">
                  <td>Processor</td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                    <label>
                        <input name="Processor" type="radio" id="Processor_0" value="All" checked>
                        All</label>
                      <br>
                      <label>
                        <input type="radio" name="Processor" value="Intel Xeon Quad Core" id="Processor_0">
                        Intel Xeon Quad Core</label>
                      <br>
                      <label>
                        <input type="radio" name="Processor" value="Intel Xeon Dual Core" id="Processor_1">
                        Intel Xeon Dual Core</label>
                      <br>
                      <label>
                        <input type="radio" name="Processor" value="Intel Core i7" id="Processor_2">
                        Intel Core i7</label>
                      <br>
                      <label>
                        <input type="radio" name="Processor" value="Intel Core i5" id="Processor_3">
                        Intel Core i5</label>
                      <br>
                      <label>
                        <input type="radio" name="Processor" value="Intel Core i3" id="Processor_4">
                        Intel Core i3</label>
                      <br>
                      <label>
                        <input type="radio" name="Processor" value="Intel Pentium Dual-Core" id="Processor_5">
                        Intel Pentium Dual-Core</label>
                      <br>
                      <label>
                        <input type="radio" name="Processor" value="Intel Celeron" id="Processor_6">
                        Intel Celeron</label>
                        <br>
                         <label>
                        <input type="radio" name="Processor" value="Other" id="Processor_7">
                        Other</label>
                    </p>
                  </td>
                </tr>
                <tr class="LIST_BLUE">
                  <td><br />Memory</td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                    <label>
                        <input name="Memory" type="radio" id="Memory_0" value="All" checked>
                        All</label>
                      <br><label>
                        <input type="radio" name="Memory" value="2" id="Memory_0">
                        2 GB</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="4" id="Memory_0">
                        4 GB</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="6" id="Memory_1">
                        6 GB</label>
                      <br>
                      <label>
                        <input type="radio" name="Memory" value="8" id="Memory_2">
                        8 GB</label>
                    </p>
                  </td>
                </tr>
                <tr class="LIST_BLUE">
                  <td><br />Type</td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                      <label>
                        <input name="Type" type="radio" id="Type_0" value="All" checked>
                        All</label>
                      <br>
                      <label>
                        <input type="radio" name="Type" value="Desktop" id="Type_1">
                        Desktop</label>
                      <br>
                      <label>
                        <input type="radio" name="Type" value="Laptop" id="Type_2">
                        Laptop</label>
                      <br>
                      <label>
                        <input type="radio" name="Type" value="All-in-one Desktop" id="Type_3">
                        All-in-one Desktop
                      </label>
                    </p>
                  </td>
                </tr>
                <tr class="LIST_BLUE">
                  <td><br />Operating System</td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                      <label>
                        <input name="OperatingSystem" type="radio" id="OperatingSystem_0" value="All" checked>
                        All</label>
                      <br>
                      <label>
                        <input type="radio" name="OperatingSystem" value="Windows 7" id="OperatingSystem_1">
                        Windows 7</label>
                      <br>
                      <label>
                        <input type="radio" name="OperatingSystem" value="Mac" id="OperatingSystem_2">
                        Mac </label>
                    </p>
                  </td>
                </tr>
                <tr class="LIST_BLUE">
                  <td><br />Display Card</td>
          </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                    <label>
                        <input name="DisplayCard" type="radio" id="Display_Card_0" value="All" checked>
                        All
                      </label>
                      <br>
                      <label>
                        <input type="radio" name="DisplayCard" value="Intel HD Graphics" id="Display_Card_1">
                        Intel HD Graphics
                      </label>
                      <br>
                      <label>
                        <input type="radio" name="DisplayCard" value="Nvidia GeForce GT" id="Display_Card_2">
                      Nvidia GeForce GT
                      </label>
                      <br>
                      <label>
                        <input type="radio" name="DisplayCard" value="AMD Radeon HD" id="Display_Card_4">
                      AMD Radeon HD
                      </label>
                      <br>
                      <label>
                        <input type="radio" name="DisplayCard" value="ATI Radeon" id="Display_Card_1">
                      ATI Radeon
                      </label>
                    </p>
                 </td>
                </tr>
                <tr class="LIST_BLUE">
                  <td><br />Screen Size</td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                      <label>
                        <input name="ScreenSize" type="radio" id="Screen_Size_0" value="All" checked>
                        All</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="10.1" id="Screen_Size_1">
                        10.1 inch</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="11.6" id="Screen_Size_2">
                        11.6 inch</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="14.0" id="Screen_Size_3">
                        14.0 inch</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="15.6" id="Screen_Size_4">
                        15.6 inch</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="17.3" id="Screen_Size_5">
                        17.3 inch</label>
                      <br>
                      <label>
                        <input type="radio" name="ScreenSize" value="23.0" id="Screen_Size_6">
                        23.0 inch</label>
						<br>
					<label>
                        <input type="radio" name="ScreenSize" value="27.0" id="Screen_Size_6">
                        27.0 inch</label>
                    </p>
					<tr class="LIST_BLUE">
                  <td><p></p>
                    <p><br />Storage</p></td>
                </tr>
                <tr>
                  <td>
                    <p class="LIST_BLACK">
                     <label>
                        <input name="Storage" type="radio" id="Storage_0" value="All" checked>
                        All</label>
                      <br>
                      <label>
                        <input type="radio" name="Storage" value="1000" id="Storage_0">
                        > 1 TB</label>
                      <br>
                      <label>
                        <input type="radio" name="Storage" value="500" id="Storage_1">
                        500 GB - 1 TB </label>
                      <br>
                      <label>
                        <input type="radio" name="Storage" value="0" id="Storage_2">
                        < 500 GB</label>
                    </p>
                    <table width="227" border="0">
                      <tr>
                        <td align="right"><label>
                          <input type="submit" name="Submit" value="Submit">
                        </label></td>
                      </tr>
                    </table>
                    
                  </td>
                </tr>
          </table>
		  </form>
		  </td>
		  
         <td width="771" valign="top"><table width="771" height="410" border="0">
          <form method="post" action="searchResponse.php">
		  <tr>
            <td width="772" height="40" align="center"><span class="html_heading"><span class="SELECTOR"><strong>SEARCH&nbsp;</strong></span>
                <select name="searchtype" id="catalog">
                    <option value="computer_brand">Brands for Computer</option>
                    <option value="mobile_brand">Brands for Mobile</option>
                    <option value="computer">Computer Identification Number</option>
                    <option value="mobile">Mobile Identification Number</option>
                  </select>
                <input type="text" name="searchterm" size="50" maxlength="255" value="" />
                <a href="javascript:;" target="_top" onClick="MM_nbGroup('down','group2','go','',1)" onMouseOver="MM_nbGroup('over','go','images/go-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><input type="image" src="images/go.png" title="" name="go" width="44" height="26" border="0" align="absmiddle" id="go" onload="" /></a>
              <hr />
            </span></td>
          </tr></form>
		  
		  
		  <td valign="top">
		  <table width="750" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		  
		  <td valign="top">
		  <table width="680" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                  <form action = "sortListResponse.php" method = "post">
				  <tr bgcolor="#cee9ee">
                    <td colspan="3" valign="middle" height="35" bgcolor="#cee9ee"><span class="NOTICE">Sorted by</span>                      
                       <?php if(isset($_REQUEST['sortProduct'])) { ?>
					  <select name="sortProduct" value="<?=$_REQUEST['sortProduct']?>" >
                        <option value="ratingC" <?php if($_REQUEST['sortProduct']=="ratingC"){?> selected<?php }?>> Rating</option>
                        <option value="viewtimesC" <?php if($_REQUEST['sortProduct']=="viewtimesC"){?> selected<?php }?>>Popularity</option>
                        <option value="lowC" <?php if($_REQUEST['sortProduct']=="lowC"){?> selected<?php }?>>Price: Low to High</option>
                        <option value="highC"<?php if($_REQUEST['sortProduct']=="highC"){?> selected<?php }?>>Price: High to Low</option>
                      </select>
					  <?php } else { ?>
					  <select name="sortProduct" >
                        <option value="ratingC" > Rating</option>
                        <option value="viewtimesC">Popularity</option>
                        <option value="lowC" >Price: Low to High</option>
                        <option value="highC">Price: High to Low</option>
                      </select>
					  <?php } ?>
					  
					  <input type="submit" name="sort" value="Sort"/>
					  </td>
                  </tr></form>
				  
<?php
}

function list_computerBack() {
?>
 </table></td>
 </tr>
        </table>         <p>&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>

<?php
}

function register_form() {
?>
<tr>
		  <td>
		 
		  <form name="regForm" method="post" action="registerResponse.php" onSubmit="return InputCheck(this);">
		  <table width="1015" border="0">
		  
		    <tr>
              <td width="467" height="484" align="left" valign="middle">
                <p><img src="images/loginv8.png" width="470" height="380"></p></td>
	          <td width="538" align="left"><label><span class="BLACK_HEADING">Register Your Information </span><br>
	            <br />
                  <br />
              </label>
                
                <label><span class="FOOTER_STYLE">The information with * is required. </span>
                <table width="527" border="0" cellspacing="5">
                  <tr>
                    <td width="159" class="TABLE_LEFT"><strong>E-mail * </strong></td>
                    <td width="298"><strong>
                      <input type="text" name="email" />
                    </strong></td>
                  </tr>
                  <tr>
                    <td class="TABLE_LEFT"><strong>Password * </strong></td>
                    <td>
                      <input type="password" name="password"/><span>(length is between 8-16)</span>
                   </td>
                  </tr>
				  <tr>
                    <td class="TABLE_LEFT"><strong>Confirm Password * </strong></td>
                    <td><strong>
                      <input type="password" name="password2" />
                    </strong></td>
                  </tr>
                  <tr>
                    <td class="TABLE_LEFT"><strong>First Name * </strong></td>
                    <td><strong>
                      <input type="text" name="fname" />
                    </strong></td>
                  </tr>
                  <tr>
                    <td class="TABLE_LEFT"><strong>
                      <label>Last Name *</label>
                    </strong></td>
                    <td><strong>
                      <input type="text" name="lname" />
                    </strong></td>
                  </tr>
                  <tr>
                    <td class="TABLE_LEFT"><strong>Gender</strong></td>
                    <td><label>
                      <input type="radio" name="gender" value="male" />
                      Male</label>
                      <label>
                        <input type="radio" name="gender" value="female" />
                    Female</label></td>
                  </tr>
                  <tr>
                    <td class="TABLE_LEFT"><strong>Birthday</strong></td>
                    <td>
                      
                      <select name="day" > 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option selected>--</option>
                      </select>
                
					  
                      <select name="month">
                       <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option selected>--</option>
                      </select>
					  
                      <select name="year" >
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option selected>--</option>
                      </select>
                     (dd/mm/yyyy)</td>
                  </tr>
                  <tr>
                    <td class="TABLE_LEFT">Telephone</td>
                    <td><strong>
                      <input type="text" name="telephone" />
                    </strong></td>
                  </tr>
				  <tr>
                    <td class="TABLE_LEFT">Mobile</td>
                    <td><strong>
                      <input type="text" name="mobile" />
                    </strong></td>
                  </tr>
				  <tr>
                    <td class="TABLE_LEFT">Zip Code * </td>
                    <td><strong>
                      <input type="text" name="zipcode" />
                    </strong></td>
                  </tr>
				  <tr>
                    <td class="TABLE_LEFT">Room/House No. * </td>
                    <td><strong>
                      <input type="text" name="room" />
                    </strong></td>
                  </tr>
                  <tr>
                    <td class="TABLE_LEFT"><strong>
                      <label>Sequrity Question</label>
                    *</strong></td>
                    <td>
                      <select name="select_question">
					    <option value="--" selected>--</option>
                        <option value="My pet's name?">My pet's name?</option>
                        <option value="My favorite movie?">My favorite movie?</option>
                        <option value="My favorite book?">My favorite book?</option>
                        <option value="My favorite song?">My favorite song?</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="TABLE_LEFT"><strong>Answer * </strong></td>
                    <td><input type="text" name="answer" /></td>
                  </tr>
                  <tr>
                    <td valign="top" class="TABLE_LEFT"><strong>Captcha * </strong></td>
                    <td><input type="text" name="captcha" id="captcha"/><div id="d_chk" onClick="reloadcode();"><img src="captcha.php" title="Click to change one" name="safecode" width="70" height="25" border="0" id="safecode" style="cursor:hand;padding:2px 6px 0pt 3px;" onClick="reloadcode()" />
</div></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <label>
                      <textarea name="textarea" cols="60" rows="10" readonly>You must follow any policies made available to you within the Services.

Do not misuse our Services, for example, do not interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.

Using our Services does not give you ownership of any intellectual property rights in our Services or the content that you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Do not remove, obscure or alter any legal notices displayed in or along with our Services.

Our Services display some content that is not Google¡¯s. This content is the sole responsibility of the entity that makes it available. We may review content to determine whether it is illegal or violates our policies, and we may remove or refuse to display content that we reasonably believe violates our policies or the law. But that does not necessarily mean that we review content, so please do not assume that we do.

In connection with your use of the Services, we may send you service announcements, administrative messages and other information. You may opt out of some of those communications.</textarea>
                      </label>
                      <table width="367">
                        <tr>
                          <td width="359"><label>
                            <input type="radio" name="accept" value="I accept">
                            <span class="NOTICE">                            I accept</span></label>
                            <input name="accept" type="radio" value="I don't accept" checked>
                            <span class="NOTICE">
I don't accept
<label></label>
                            </span>                            <label></label></td>
                          </tr>
                      </table>
                   
                          </td>
                  </tr>
                </table>
                <label><br />
                </label>
<p><input  type ="image" src="images/submit.png" name="submit" width="80" height="25" border="0" align="absmiddle" id="Home" onClick="doCheckAccept(accept)" onMouseOver="MM_nbGroup('over','Submit','images/submit-clicked.png','',1)" onMouseOut="MM_nbGroup('out')" /></p></td>
		    </tr>
		    <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            
          </table></form></td>
        </tr>
<?php
}

function login_form() {
?>
<tr>
		  <td>
		  <form name="loginForm" method="post" action="loginResponse.php" onSubmit="return LoginCheck(this)">
		  <table width="1012" border="0">
            <tr>
              <td width="470" rowspan="8" align="left" valign="middle"><img src="images/loginv8.png" width="470" height="380"></td>
              <td width="462" valign="top"><p class="BLACK_HEADING">Welcome!</p>
                </td>
              <td width="66" rowspan="8">&nbsp;</td>
            </tr>
            
            <tr>
              <td width="462" height="34" align="left"><span class="BLACK_HEADING">Please choose your role here: </span></td>
            </tr>
            <tr>
              <td width="462" height="65" align="left" valign="top">
                <label>
                  <input name="role" type="radio" value="member" checked="checked" />
                  Member</label> 
                <label>
                <input type="radio" name="role" value="supplier" />
                Supplier 
                <input type="radio" name="role" value="staff" />
                Staff</label>
                <hr />     
			  </td>
            </tr>
            <tr>
              <td align="left">
			  <table width="426" border="0" cellpadding="0" cellspacing="5">
                <tr>
                  <td width="119" height="33" align="left" class="TABLE_LEFT">E-mail</td>
                  <td width="292">
                    <input type="text" name="email" />  
				  </td>
                </tr>
                <tr>
                  <td height="28" align="left" class="TABLE_LEFT">Password</td>
                  <td>
                    <input type="password" name="password" />
				  </td>
                </tr>
                <tr>
                  <td height="31" align="left" valign="top" class="TABLE_LEFT"><strong>Captcha</strong></td>
                  <td><input type="text" name="captcha" />
				   <div id="d_chk" onClick="reloadcode();">
				    <img src="captcha.php" title="Click to change one" name="safecode" width="70" height="25" border="0" id="safecode" style="cursor:hand;padding:2px 6px 0pt 3px;" onClick="reloadcode()" />
                   </div>
				   </td>
                </tr>
              </table>
			  </td>
            </tr>
            <tr>
              <td align="left">
              <input type="image" name ="login" src="images/login.png" title="Submit" width="80" height="25" border="0" onClick="MM_nbGroup('down','group1','Login','',1)" onMouseOver="MM_nbGroup('over','Login','images/login-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"/>
              <hr />
<p>&nbsp;</p></td>
            </tr>
			<tr>
              <td align="left"><span class="NOTICE">For member: </span></td>
            </tr>
            <tr>
              <td align="left"><span class="NOTICE">Don't have an account? <a href="register.php">Register</a></span></td>
            </tr>
            <tr>
              <td align="left"><span class="NOTICE">Forget your password? <a href="forget_password.php">Click here</a></span></td>
            </tr>
            <tr>
              <td height="62" align="right">&nbsp;</td>
            </tr>
          </table>
		  </form></td>
        </tr>
<?php
}
function changePersonalInfo_form() {
?>
  <tr>
    <td width="289" height="394" rowspan="3" bordercolor="0"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p> <strong>
        <label></label>
      </strong></p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="724" height="55" align="left" valign="middle"><label><span class="BLACK_HEADING">Change Your Information
          </span></label></td>
  </tr>
  
  <form name="changePersonalInfo" method="post" action="change_personalInfo_response.php" onSubmit="return changePersonalInfoCheck(this)" >
  <tr>
    <td height="264" align="left">

        <br />
     
      <table width="485" height="224" border="0" cellspacing="5">
        <tr>
          <td width="157" class="TABLE_LEFT"><strong>
            <label>First Name</label>
          </strong></td>
          <td width="309"><strong>
          <input type="text" name="fname" />
          </strong></td>
        </tr>
        <tr>
          <td class="TABLE_LEFT"><strong>
            <label>Last Name </label>
          </strong></td>
          <td><strong>
            <input type="text" name="lname" />
          </strong></td>
        </tr>
        <tr>
          <td class="TABLE_LEFT"><strong>Gender</strong></td>
          <td>
            <label>
              <input name="gender" type="radio" value="male" />
              Male</label>
            <label>
              <input type="radio" name="gender" value="female" />
              Female</label>
          </td>
        </tr>
        <tr>
          <td class="TABLE_LEFT"><strong>Birthday</strong></td>
          <td>
            <select name="day" > 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option selected>--</option>
                      </select>
                
					  
                      <select name="month">
                       <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option selected>--</option>
                      </select>
					  
                      <select name="year" >
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option selected>--</option>
                      </select>
(dd/mm/yyyy)</td>
        </tr>
        <tr>
          <td class="TABLE_LEFT">
            <label><strong>E-mail</strong></label>
          </td>
          <td>
            <input type="text" name="e_mail" />
          </td>
        </tr>
		<tr>
          <td class="TABLE_LEFT">
            <label><strong>Confirm E-mail</strong></label>
          </td>
          <td>
            <input type="text" name="e_mail2" />
          </td>
        </tr>
        <tr>
          <td class="TABLE_LEFT"><strong>
            <label >Telephone</label>
          </strong></td>
          <td>
            <input type="text" name="teleno" />
         </td>
        </tr>
		<tr>
          <td class="TABLE_LEFT"><strong>
            <label>Mobile</label>
          </strong></td>
          <td>
            <input type="text" name="phone" />
          </td>
        </tr>
		<tr>
          <td class="TABLE_LEFT"><strong>
            <label>Zip Code</label>
          </strong></td>
          <td>
            <input type="text" name="zipcode" />
          </td>
        </tr>
		<tr>
          <td class="TABLE_LEFT"><strong>
            <label>Room/House No.</label>
          </strong></td>
          <td>
            <input type="text" name="roomORhouseno" />
          </td>
        </tr>
        <tr>
          <td valign="top" class="TABLE_LEFT"><strong>Captcha</strong></td>
          <td valign="middle">
          <input type="text" name="captcha" /><div id="d_chk" onClick="reloadcode();"><img src="captcha.php" title="Click to change one" name="safecode" width="70" height="25" border="0" id="safecode" style="cursor:hand;padding:2px 6px 0pt 3px;" onClick="reloadcode()" />
</div></td>
        </tr>
      </table>
	  
    </td>
  </tr>
  
    <tr>
    <td height="95" align="left" valign="top">
	<table width="200" border="0">
      <tr>
        <td><input type="image" src="images/reset.png" onclick="javascript: document.forms['changePersonalInfo'].reset(); return false;" name="Reset" width="80" height="25" border="0" align="middle" id="Home" onClick="MM_nbGroup('down','group1','Reset','',1)" onMouseOver="MM_nbGroup('over','Reset','images/reset-clicked.png','',1)" onMouseOut="MM_nbGroup('out')" /></td>
	<td><input type="image" src="images/submit.png" name="Submit" width="80" height="25" border="0" align="absmiddle" id="Home" onClick="MM_nbGroup('down','group1','Submit','',1)" onMouseOver="MM_nbGroup('over','Submit','images/submit-clicked.png','',1)" onMouseOut="MM_nbGroup('out')" />
      </td>
      </tr>
    </table>
	<p class="LOG">Click <a href="change_password.php">here</a> to change your password.</p>
      </td>
  </tr>
 
  </form>

<?php
}

function changePassword_form() {
?>
<tr>
    <td width="289" height="394" rowspan="3" bordercolor="0"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="724" height="55" align="left" valign="top"><label><br>
            <span class="BLACK_HEADING"><span class="BLACK_HEADING"><span class="FOOTER_STYLE"><span class="BLACK_HEADING"><span class="BLACK_HEADING">Change Your Password </span></span></span></span>
          <br>
            </span></label></td>
  </tr>
  
 <form name="changePasswordForm" method="post" action="change_password_response.php" onSubmit="return ChangePasswordCheck(this)" >
  <tr>
    <td height="148" align="left" valign="top"><label></label>
      <table width="430" border="0" cellspacing="5">
          <tr>
            <td width="154" height="32" class="TABLE_LEFT">Original Password</td>
            <td width="257">
              <input type="password" name="original_password" />
            </td>
          </tr>
          <tr>
            <td height="32" class="TABLE_LEFT">
              <label>New Password </label>
            </td>
            <td>
              <input type="password" name="new_password" />
            </td>
          </tr>
          <tr>
            <td height="33" class="TABLE_LEFT">
              <label>Confirm Password </label>
            </td>
            <td>
              <input type="password" name="new_password2" />
            </td>
          </tr>
          <tr>
            <td height="29" valign="top" class="TABLE_LEFT"><strong>Captcha</strong></td>
            <td><input type="text" name="captcha" /><div id="d_chk" onClick="reloadcode();"><img src="captcha.php" title="Click to change one" name="safecode" width="70" height="25" border="0" id="safecode" style="cursor:hand;padding:2px 6px 0pt 3px;" onClick="reloadcode()" />
</div></td>
          </tr>
      </table>
	  
      <p>      
    <p>&nbsp;</p></td>
  </tr>
 
  <tr>
    <td height="149" align="left" valign="top">
	<input type="image" src="images/submit.png" name="Submit" width="80" height="25" border="0" align="absmiddle" id="Home2" onClick="MM_nbGroup('down','group1','Submit','',1)" onMouseOver="MM_nbGroup('over','Submit','images/submit-clicked.png','',1)" onMouseOut="MM_nbGroup('out')" /></td>
  </tr>
  </form>
<?php
}

function forgetAnswer_form() {
?>
<tr>
    <td width="286" height="394" rowspan="2" bordercolor="0"><p><strong>
        <label><br>
          <br>
        </label>
    </strong>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>      
    <p>&nbsp;</p></td>
    <td width="727" height="57" align="left" valign="top"><label><br>
        <span class="BLACK_HEADING">Reset Your Security Question</span></label></td>
  </tr>
  
  <form name="forgetAnswerForm" method="post" action="forget_answer_response.php" onSubmit="return ForgetAnswerCheck(this)" >
  <tr>
    <td align="left" valign="top">
        
      <table width="515" border="0" cellspacing="5">
	    <tr>
          <td height="24" class="TABLE_LEFT"> E-mail</td>
          <td>
            <input name="email" type="text" size="35" />
         </td>
        </tr>
        <tr>
          <td width="163" height="32" class="TABLE_LEFT">Security Code </td>
		  <?php
		  session_start();
		  
		  $str = "0123456789";    
		  $code = array();    
		for ($i=0; $i<6; $i++) {    
	   $code[] = $str[mt_rand(0,strlen($str)-1)];    
		  }  
		
		$security_code = implode('',$code);
		$_SESSION['security_code'] = $security_code;
		
		  echo "<td width=\"316\"><input type=\"text\" name=\"code\" /> <span class=\"FOOTER_STYLE\"><a href=\"javascript:alert('Security code is ".$security_code."');\">Get security code</a></span></td>";
		  
		  ?>
        </tr>
        <tr>
          <td height="24" class="TABLE_LEFT"><strong>
            <label>Security Question</label>
          </strong></td>
          <td>
               <select name="question">
					    <option value="--" selected>--</option>
                        <option value="My pet's name?">My pet's name?</option>
                        <option value="My favorite movie?">My favorite movie?</option>
                        <option value="My favorite book?">My favorite book?</option>
                        <option value="My favorite song?">My favorite song?</option>
                      </select>
     
          </td>
        </tr>
        <tr>
          <td height="23" class="TABLE_LEFT"><strong>Answer</strong></td>
          <td>
            <input type="text" name="answer" />
          </td>
        </tr>
		<tr>
          <td height="23" class="TABLE_LEFT"><strong>Confirm the Answer</strong></td>
          <td>
            <input type="text" name="answer2" />
          </td>
        </tr>
        <tr>
          <td height="34" valign="top" class="TABLE_LEFT"><strong>Captcha</strong></td>
          <td>
            <input type="text" name="captcha" /><div id="d_chk" onClick="reloadcode();"><img src="captcha.php" title="Click to change one" name="safecode" width="70" height="25" border="0" id="safecode" style="cursor:hand;padding:2px 6px 0pt 3px;" onClick="reloadcode()" />
</div></td>
        </tr>
        <tr>
          <td height="27" colspan="2" align="left"><input type="image" src="images/submit.png" name="Submit" width="80" height="25" border="0" align="absmiddle" id="Home2" onClick="MM_nbGroup('down','group1','Submit','',1)" onMouseOver="MM_nbGroup('over','Submit','images/submit-clicked.png','',1)" onMouseOut="MM_nbGroup('out')" /></td>
        </tr>
    </table></td>
  </tr>
  </form>
  
<?php
}

function forgetPassword_form() {
?>
<tr>
    <td width="285" height="394" rowspan="2" bordercolor="0"><p><strong>
        <label><br>
          <br>
        </label>
    </strong>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>      
    <p>&nbsp;</p></td>
    <td width="728" height="57" align="left" valign="top" class="BLACK_HEADING"><label><br>
    Here you can get your password back </label></td>
  </tr>
  <form name="forgetPasswordForm" method="post" action="forget_password_response.php" onSubmit="return ForgetPasswordCheck(this)">
  <tr>
    <td align="left" valign="top">
      <table width="683" border="0" cellspacing="5">
	  	<tr>
          <td height="24" class="TABLE_LEFT">E-mail</td>
          <td><input name="email" type="text" size="35" /></td>
        </tr>
        <tr>
          <td width="165" height="24" class="TABLE_LEFT">Security Question </td>
          <td width="499"><select name="question">
					    <option value="--" selected>--</option>
                        <option value="My pet's name?">My pet's name?</option>
                        <option value="My favorite movie?">My favorite movie?</option>
                        <option value="My favorite book?">My favorite book?</option>
                        <option value="My favorite song?">My favorite song?</option>
                      </select></td>
        </tr>
        <tr>
          <td height="24" class="TABLE_LEFT"> Answer</td>
          <td>
            <input name="answer" type="text" size="20" />
          <a href="forget_answer.php">Forget answer?</a></td>
        </tr>
		<tr>
          <td height="24" class="TABLE_LEFT"> Confirm the Answer</td>
          <td>
            <input name="answer2" type="text" size="20" />          </td>
        </tr>
        <tr>
          <td height="24" valign="top" class="TABLE_LEFT"><strong>Captcha</strong></td>
          <td><input type="text" name="captcha" /><div id="d_chk" onClick="reloadcode();"><img src="captcha.php" title="Click to change one" name="safecode" width="70" height="25" border="0" id="safecode" style="cursor:hand;padding:2px 6px 0pt 3px;" onClick="reloadcode()" />
</div></td>
        </tr>
        <tr>
          <td height="27" colspan="2" align="left"><input type="image" src="images/submit.png" title="" name="Submit" width="80" height="25" border="0" align="absmiddle" id="Home2" onClick="MM_nbGroup('down','group1','Submit','',1)" onMouseOver="MM_nbGroup('over','Submit','images/submit-clicked.png','',1)" onMouseOut="MM_nbGroup('out')" /></td>
        </tr>
    </table></td>
  </tr></form>

<?php
}

function compareComputer() {
?>
 <tr>
    <td height="466" valign="top" bordercolor="0"><table width="1013" height="445" border="0">
      <tr>
        <td valign="top"><table width="1010" height="392" border="0">
          <tr>
            <td width="1004" height="51" valign="top" class="html_heading"><span class="FIRST_HEADING">Comparison Basket</span></td>
          </tr>
          <tr>
            <td valign="top"><table width="918" border="1" align="center" cellpadding="1" cellspacing="0" bordercolor="#CCCCCC">
         
			  
<?php
}

function compareComputerBack() {
?>


            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
<?php
}

function compareMobile() {
?>
   <tr>
    <td height="466" valign="top" bordercolor="0"><table width="1013" height="555" border="0">
      <tr>
        <td height="551" valign="top"><table width="1010" height="549" border="0">
          <tr>
            <td width="1004" height="51" valign="top" class="html_heading"><span class="FIRST_HEADING"><span class="FIRST_HEADING">Comparison Basket</span></span></td>
          </tr>
          <tr>
            <td height="492" valign="top"><table width="918" border="1" align="center" cellspacing="0" bordercolor="#CCCCCC">
           
<?
}

function compareMobileBack() {
?>

            </table>
              </td>
          </tr>
        </table></td>
      </tr>
    </table></td>

<?php
}
?>