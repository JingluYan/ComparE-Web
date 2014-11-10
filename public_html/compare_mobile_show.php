<?php

function show_one_mobile($result1) {
    while($row=$result1->fetch_array()) {
	    
		echo "<form action=\"product_mobile.php\" method=\"post\" >
		     <tr>
              <td width=\"150\" align=\"left\" class=\"TABLE_WHITE\">&nbsp;</td>
               <td width=\"250\" align=\"center\" valign=\"top\" class=\"TABLE_WHITE\"><input name=\"mobile_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" alt=\"product\" width=\"90\" height=\"105\" align=\"middle\" /></td>
			   <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\">&nbsp;</td>
               <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\">&nbsp;</td>
             </tr></form>";
			  
        echo "<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Name</th>
                <td class=\"TABLE_WHITE\">".$row["productid"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Platform</th>
                <td class=\"TABLE_WHITE\">".$row["platform"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Connectivity</th>
                <td class=\"TABLE_WHITE\">".$row["connectivity"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
	
	    echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Physical Size </th>
                <td class=\"TABLE_WHITE\">".$row["physicalsize"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Weight</th>
                <td class=\"TABLE_WHITE\">".$row["weight"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
			  
	  
        echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Screen Size </th>
                <td class=\"TABLE_WHITE\">".$row["screensize"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
	
	    echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Pixel</th>
                <td class=\"TABLE_WHITE\">".$row["pixel"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Battery</th>
                <td class=\"TABLE_WHITE\">".$row["battery"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Software Application </th>
                <td class=\"TABLE_WHITE\">".$row["softwareapplication"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
	
        echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Memory</th>
                <td class=\"TABLE_WHITE\">".$row["memory"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">External Memory </th>";
		     
			 if($row["externalmemory"]==null) {
						   echo "<td class=\"TABLE_WHITE\">-</td>";
						  } else {
                           echo "<td class=\"TABLE_WHITE\">".$row["externalmemory"]."</td>";
						  }
               
        echo " <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Other</th>
                <td class=\"TABLE_WHITE\">".$row["other"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Rating</th>";
					$rating = $row["rating"];
					switch($rating) {
					   case 5: echo" <td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-5.png\" alt=\"5\" width=\"120\" height=\"25\" /></td>";break;
					   case 4.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.5.png\" alt=\"4.5\" width=\"120\" height=\"25\" /></td>"; break;
					   case 4: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-4.png\" alt=\"4\" width=\"120\" height=\"25\" /></td>";break;
					   case 3.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.5.png\" alt=\"3.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 3: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-3.png\" title=\"3\" width=\"120\" height=\"25\" /></td>";break;
					   case 2.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.5.png\" title=\"2.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 2: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-2.png\" title=\"2\" width=\"120\" height=\"25\" /></td>";break;
					   case 1.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.5.png\" title=\"1.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 1: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-1.png\" title=\"1\" width=\"120\" height=\"25\" /></td>";break;
					   case 0.5: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.5.png\" title=\"0.5\" width=\"120\" height=\"25\" /></td>";break;
					   case 0: echo"<td width=\"176\" class=\"TABLE_WHITE\"><img src=\"images/star-0.png\" title=\"0\" width=\"120\" height=\"25\" /></td>";break;
					}
					
               echo "
                <td class=\"TABLE_WHITE\">&nbsp;</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
			  
	}
}

function show_two_mobiles($result1, $result2){
    while($row=$result1->fetch_array()) {
	   $row2=$result2->fetch_array();
	   echo "<form action=\"product_mobile.php\" method=\"post\" >
	         <tr>
              <td width=\"150\" align=\"left\" class=\"TABLE_WHITE\">&nbsp;</td>
               <td width=\"250\" align=\"center\" valign=\"top\" class=\"TABLE_WHITE\"><input name=\"mobile_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" title=\"product\" width=\"90\" height=\"105\" align=\"middle\" /></td>
               <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\"><input name=\"mobile_product\" type=\"image\" value=\"".$row2["productid"]."\" src=\"".$row2["picture"]."\" title=\"product\" width=\"90\" height=\"105\" align=\"middle\" /></td>
               <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\">&nbsp;</td>
             </tr></form>";
			 
       echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Name</th>
                <td class=\"TABLE_WHITE\">".$row["productid"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["productid"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Platform</th>
                <td class=\"TABLE_WHITE\">".$row["platform"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["platform"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Connectivity</th>
                <td class=\"TABLE_WHITE\">".$row["connectivity"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["connectivity"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
	
	    echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Physical Size </th>
                <td class=\"TABLE_WHITE\">".$row["physicalsize"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["physicalsize"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Weight</th>
                <td class=\"TABLE_WHITE\">".$row["weight"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["weight"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
			  
	  
        echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Screen Size </th>
                <td class=\"TABLE_WHITE\">".$row["screensize"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["screensize"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
	
	    echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Pixel</th>
                <td class=\"TABLE_WHITE\">".$row["pixel"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["pixel"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Battery</th>
                <td class=\"TABLE_WHITE\">".$row["battery"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["battery"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Software Application </th>
                <td class=\"TABLE_WHITE\">".$row["softwareapplication"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["softwareapplication"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
	
        echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Memory</th>
                <td class=\"TABLE_WHITE\">".$row["memory"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["memory"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">External Memory </th>";
		
				if($row["externalmemory"]==null) {
						   echo "<td class=\"TABLE_WHITE\">-</td>";
						  } else {
                           echo "<td class=\"TABLE_WHITE\">".$row["externalmemory"]."</td>";
						  }
				if($row2["externalmemory"]==null) {
						   echo "<td class=\"TABLE_WHITE\">-</td>";
						  } else {
                           echo "<td class=\"TABLE_WHITE\">".$row2["externalmemory"]."</td>";
						  }
               
        echo" <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Other</th>
                <td class=\"TABLE_WHITE\">".$row["other"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["other"]."</td>
                <td class=\"TABLE_WHITE\">&nbsp;</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Rating</th>";
				
				$rating = $row["rating"];
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

function show_three_mobiles($result1, $result2, $result3){
    while($row=$result1->fetch_array()) {
	
	    $row2=$result2->fetch_array();
		$row3=$result3->fetch_array();
		
		echo "<form action=\"product_mobile.php\" method=\"post\" >
		      <tr>
              <td width=\"150\" align=\"left\" class=\"TABLE_WHITE\">&nbsp;</td>
               <td width=\"250\" align=\"center\" valign=\"top\" class=\"TABLE_WHITE\"><input name=\"mobile_product\" type=\"image\" value=\"".$row["productid"]."\" src=\"".$row["picture"]."\" title=\"product\" width=\"90\" height=\"105\" align=\"middle\" /></td>
               <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\"><input name=\"mobile_product\" type=\"image\" value=\"".$row2["productid"]."\" src=\"".$row2["picture"]."\" title=\"product\" width=\"90\" height=\"105\" align=\"middle\" /></td>
               <td width=\"250\" align=\"center\" class=\"TABLE_WHITE\"><input name=\"mobile_product\" type=\"image\" value=\"".$row3["productid"]."\" src=\"".$row3["picture"]."\" title=\"product\" width=\"90\" height=\"105\" align=\"middle\" /></td>
             </tr></form>";
			 
        echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Name</th>
                <td class=\"TABLE_WHITE\">".$row["productid"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["productid"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["productid"]."</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Platform</th>
                <td class=\"TABLE_WHITE\">".$row["platform"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["platform"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["platform"]."</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Connectivity</th>
                <td class=\"TABLE_WHITE\">".$row["connectivity"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["connectivity"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["connectivity"]."</td>
              </tr>";
	
	    echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Physical Size </th>
                <td class=\"TABLE_WHITE\">".$row["physicalsize"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["physicalsize"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["physicalsize"]."</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Weight</th>
                <td class=\"TABLE_WHITE\">".$row["weight"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["weight"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["weight"]."</td>
              </tr>";
			  
	  
        echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Screen Size </th>
                <td class=\"TABLE_WHITE\">".$row["screensize"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["screensize"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["screensize"]."</td>
              </tr>";
	
	    echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Pixel</th>
                <td class=\"TABLE_WHITE\">".$row["pixel"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["pixel"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["pixel"]."</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Battery</th>
                <td class=\"TABLE_WHITE\">".$row["battery"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["battery"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["battery"]."</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Software Application </th>
                <td class=\"TABLE_WHITE\">".$row["softwareapplication"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["softwareapplication"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["softwareapplication"]."</td>
              </tr>";
	
        echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Memory</th>
                <td class=\"TABLE_WHITE\">".$row["memory"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["memory"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["memory"]."</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">External Memory </th>";
				
                if($row["externalmemory"]==null) {
						   echo "<td class=\"TABLE_WHITE\">-</td>";
						  } else {
                           echo "<td class=\"TABLE_WHITE\">".$row["externalmemory"]."</td>";
						  }
				if($row2["externalmemory"]==null) {
						   echo "<td class=\"TABLE_WHITE\">-</td>";
						  } else {
                           echo "<td class=\"TABLE_WHITE\">".$row2["externalmemory"]."</td>";
						  }
				if($row3["externalmemory"]==null) {
						   echo "<td class=\"TABLE_WHITE\">-</td>";
						  } else {
                           echo "<td class=\"TABLE_WHITE\">".$row3["externalmemory"]."</td>";
						  }
           echo"   </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Other</th>
                <td class=\"TABLE_WHITE\">".$row["other"]."</td>
                <td class=\"TABLE_WHITE\">".$row2["other"]."</td>
                <td class=\"TABLE_WHITE\">".$row3["other"]."</td>
              </tr>";
		
		echo"<tr class=\"TABLE_WHITE\">
                <th align=\"left\" class=\"TABLE_WHITE\" scope=\"row\">Rating</th>";
				
				$rating = $row["rating"];
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

