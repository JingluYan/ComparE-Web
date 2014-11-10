<?php

function show_one_computer($result1) {

while($row1 = $result1->fetch_array())
{
	echo "<form action=\"product_computer.php\" method=\"post\" >
	      <tr>
            <td width=\"150\" align=\"left\" class=\"TABLE_WHITE\">&nbsp;</td>
             <td width=\"250\" align=\"center\" valign=\"top\" class=\"TABLE_WHITE\"><input name=\"computer_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" title=\"product\" width=\"90\" height=\"105\" align=\"middle\" /></td>
            <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\">&nbsp;</td>
            <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\">&nbsp;</td>
         </tr></form>";
		 
	echo "<tr class=\"TABLE_WHITE\">
           <th width=\"150\" align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Name</th>
           <td class=\"TABLE_WHITE\">".$row1["productid"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>"; 
		   
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Processor</th>
           <td class=\"TABLE_WHITE\">".$row1["processor"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Memory</th>
           <td class=\"TABLE_WHITE\">".$row1["memory"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
    
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Storage</th>
           <td class=\"TABLE_WHITE\">".$row1["storage"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Screen Size</th>
           <td class=\"TABLE_WHITE\">".$row1["screensize"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Type</th>
           <td class=\"TABLE_WHITE\">".$row1["type"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
        </tr>";
   
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Operating System</th>
           <td class=\"TABLE_WHITE\">".$row1["operatingsystem"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";

   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Display Card</th>
           <td class=\"TABLE_WHITE\">".$row1["displaycard"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
        </tr>";

   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Weight</th>
           <td class=\"TABLE_WHITE\">".$row1["weight"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
        </tr>";
              
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Other</th>
           <td class=\"TABLE_WHITE\">".$row1["other"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Rating</th>";
		   	$rating = $row1["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" title=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" title=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" title=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" title=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
   echo "<td class=\"TABLE_WHITE\">&nbsp;</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
        </tr>";                      
}

}

function show_two_computers($result1, $result2) {

while($row1 = $result1->fetch_array())
{
    $row2 = $result2->fetch_array();
	echo "<form action=\"product_computer.php\" method=\"post\" >
	      <tr>
            <td width=\"150\" align=\"left\" align=\"left\" class=\"TABLE_WHITE\">&nbsp;</td>
            <td width=\"250\" align=\"center\" valign=\"top\" class=\"TABLE_WHITE\"><input name=\"computer_product\" type=\"image\"  value=\"".$row1["productid"]."\" src=\"".$row1["picture"]."\" title=\"product\" width=\"100\" height=\"80\" align=\"middle\" /></td>
            <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\"><input name=\"computer_product\" type=\"image\"  value=\"".$row2["productid"]."\" src=\"".$row2["picture"]."\" title=\"product\" width=\"100\" height=\"80\" align=\"middle\" /></td>
            <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\">&nbsp;</td>
         </tr> </form>";
		 
	echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Name</th>
           <td class=\"TABLE_WHITE\">".$row1["productid"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["productid"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>"; 
		   
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Processor</th>
           <td class=\"TABLE_WHITE\">".$row1["processor"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["processor"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Memory</th>
           <td class=\"TABLE_WHITE\">".$row1["memory"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["memory"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
    
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Storage</th>
           <td class=\"TABLE_WHITE\">".$row1["storage"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["storage"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Screen Size</th>
           <td class=\"TABLE_WHITE\">".$row1["screensize"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["screensize"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Type</th>
           <td class=\"TABLE_WHITE\">".$row1["type"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["type"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
        </tr>";
   
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Operating System</th>
           <td class=\"TABLE_WHITE\">".$row1["operatingsystem"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["operatingsystem"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";

   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Display Card</th>
           <td class=\"TABLE_WHITE\">".$row1["displaycard"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["displaycard"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
        </tr>";

   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Weight</th>
           <td class=\"TABLE_WHITE\">".$row1["weight"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["weight"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
        </tr>";
              
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Other</th>
           <td class=\"TABLE_WHITE\">".$row1["other"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["other"]."</td>
           <td class=\"TABLE_WHITE\">&nbsp;</td>
         </tr>";
	
	echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Rating</th>";
		   	$rating = $row1["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" title=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" title=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" title=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" title=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
			$rating = $row2["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" title=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" title=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" title=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" title=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
   echo "<td class=\"TABLE_WHITE\">&nbsp;</td>
        </tr>";                                         
}

}

function show_three_computers($result1, $result2, $result3) {
 while($row1 = $result1->fetch_array())
{
    $row2 = $result2->fetch_array();
	$row3 = $result3->fetch_array();
	echo "<form action=\"product_computer.php\" method=\"post\" >
	      <tr>
            <td width=\"150\" align=\"left\" align=\"left\" class=\"TABLE_WHITE\">&nbsp;</td>
            <td width=\"250\" align=\"center\" valign=\"top\" class=\"TABLE_WHITE\"><input name=\"computer_product\" type=\"image\"  value=\"".$row1["productid"]."\" src=\"".$row1["picture"]."\" title=\"product\" width=\"100\" height=\"80\" align=\"middle\" /></td>
            <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\"><input name=\"computer_product\" type=\"image\"  value=\"".$row2["productid"]."\" src=\"".$row2["picture"]."\" title=\"product\" width=\"100\" height=\"80\" align=\"middle\" /></td>
            <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\"><input name=\"computer_product\" type=\"image\"  value=\"".$row3["productid"]."\" src=\"".$row3["picture"]."\" title=\"product\" width=\"100\" height=\"80\" align=\"middle\" /></td>
         </tr></form>";
		 
	echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Name</th>
           <td class=\"TABLE_WHITE\">".$row1["productid"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["productid"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["productid"]."</td>
         </tr>"; 
		   
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Processor</th>
           <td class=\"TABLE_WHITE\">".$row1["processor"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["processor"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["processor"]."</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Memory</th>
           <td class=\"TABLE_WHITE\">".$row1["memory"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["memory"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["memory"]."</td>
         </tr>";
    
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Storage</th>
           <td class=\"TABLE_WHITE\">".$row1["storage"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["storage"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["storage"]."</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Screen Size</th>
           <td class=\"TABLE_WHITE\">".$row1["screensize"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["screensize"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["screensize"]."</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Type</th>
           <td class=\"TABLE_WHITE\">".$row1["type"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["type"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["type"]."</td>
        </tr>";
   
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Operating System</th>
           <td class=\"TABLE_WHITE\">".$row1["operatingsystem"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["operatingsystem"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["operatingsystem"]."</td>
         </tr>";

   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Display Card</th>
           <td class=\"TABLE_WHITE\">".$row1["displaycard"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["displaycard"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["displaycard"]."</td>
        </tr>";

   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Weight</th>
           <td class=\"TABLE_WHITE\">".$row1["weight"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["weight"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["weight"]."</td>
        </tr>";
              
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Other</th>
           <td class=\"TABLE_WHITE\">".$row1["other"]."</td>
           <td class=\"TABLE_WHITE\">".$row2["other"]."</td>
           <td class=\"TABLE_WHITE\">".$row3["other"]."</td>
         </tr>";
		 
   echo "<tr class=\"TABLE_WHITE\">
           <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Rating</th>";
		   	$rating = $row1["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" title=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" title=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" title=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" title=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
			$rating = $row2["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" title=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" title=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" title=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" title=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
			$rating = $row3["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" title=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" title=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" title=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" title=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
   echo "</tr>";                                                
}
}

?>