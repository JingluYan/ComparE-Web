<?php
// import necessary files
require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");
require_once("compare_mobile_show.php");

// start session
session_start();

// connect database
$conn = db_connect();

// get the value from session
$total = $_SESSION['total2'];

// record the number of products for comprison
$count = 0;
$mobile = array(); // add to array for comparison

// get the productID to execute SQL query
for($i=1; $i<=$total; $i++) {
    if(isset($_POST['compareMobile'.$i])) {
	   $count++;
	   array_push($mobile, $_POST['compareMobile'.$i]);
	}
}

header_style("ComparE-compare mobile");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}

compareMobile();

// case 1, compare 1 mobile
if($count == 1) {
 //------------------------get mobile information through query--------------------------------------------------
 $result1 = $conn->query( "select picture, productid, platform, connectivity, physicalsize, screensize, pixel, battery, softwareapplication, memory, externalmemory, weight, other, rating
                          from mobile where productid='".$mobile[0]."'");
 if (!$result1) {
    throw new Exception('Could not execute query');
  }
  
  // show the web page
 show_one_mobile($result1);
} 

// case 2, compare 2 mobiles
else if($count == 2) {
 //-------------------------get mobile information through query--------------------------------------------
 
 // first mobile
 $result1 = $conn->query( "select picture, productid, platform, connectivity, physicalsize, screensize, pixel, battery, softwareapplication, memory, externalmemory, weight, other, rating
                          from mobile where productid='".$mobile[0]."'");
 if (!$result1) {
    throw new Exception('Could not execute query');
  }
  
  // second mobile
 $result2 = $conn->query( "select picture, productid, platform, connectivity, physicalsize, screensize, pixel, battery, softwareapplication, memory, externalmemory, weight, other, rating
                          from mobile where productid='".$mobile[1]."'");
						 
 if (!$result2) {
    throw new Exception('Could not execute query');
  }
  
  // show the web page
  show_two_mobiles($result1, $result2);  
} 

//case 3, compare 3 mobiles
else if($count == 3) {
  //-------------------------get mobile information through query-----------------------------------------------------
  
  // first mobile
  $result1 = $conn->query( "select picture, productid, platform, connectivity, physicalsize, screensize, pixel, battery, softwareapplication, memory, externalmemory, weight, other, rating
                          from mobile where productid='".$mobile[0]."'");
 if (!$result1) {
    throw new Exception('Could not execute query');
  }
  
  // second mobile
 $result2 = $conn->query( "select picture, productid, platform, connectivity, physicalsize, screensize, pixel, battery, softwareapplication, memory, externalmemory, weight, other, rating
                          from mobile where productid='".$mobile[1]."'");
 if (!$result2) {
    throw new Exception('Could not execute query');
  }
  
  // third mobile
 $result3 = $conn->query( "select picture, productid, platform, connectivity, physicalsize, screensize, pixel, battery, softwareapplication, memory, externalmemory, weight, other, rating
                          from mobile where productid='".$mobile[2]."'");
 if (!$result3) {
		throw new Exception('Could not execute query');
   }
 
 // show web page
 show_three_mobiles($result1, $result2, $result3);
}

compareMobileBack(); 

// footer of web page
html_footer();

// release session variable
unset($_SESSION['total2']);
?>