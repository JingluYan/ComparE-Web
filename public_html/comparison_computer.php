<?php
// import necessary files
require_once("header.php");
require_once("form.php");
require_once("footer.php");
require_once("db_fns.php");
require_once("compare_computer_show.php");

// start session
session_start();

// connect database
$conn = db_connect();

// get the value from session
$total = $_SESSION['total'];

// record the number of products for comprison
$count = 0;
$computer = array(); // add to array for comparison

// get the productID to execute SQL query
for($i=1; $i<=$total; $i++) {
    if(isset($_POST['compareComputer'.$i])) {
	   $count++;
	   array_push($computer, $_POST['compareComputer'.$i]);
	}
}

header_style("ComparE-compare computer");

if(isset($_SESSION['login_type']))
{
   noSelectedHeader($_SESSION['login_type']);
} else {
   noSelectedHeader('');
}

compareComputer();

// case 1, compare 1 computer
if($count == 1) {
 //------------------------get computer information through query--------------------------------------------------
 
 $result1 = $conn->query( "select picture, productid, processor, memory, storage, screensize, type, operatingsystem, displaycard, weight, other, rating
                          from computer where productid='".$computer[0]."'");
 if (!$result1) {
    throw new Exception('Could not execute query');
  }
  
  // show this web page
  show_one_computer($result1);
} 

// case 2, compare 2 computers
else if($count == 2) {
 //------------------------get computer information through query--------------------------------------------------
 
 // first computer
 $result1 = $conn->query( "select picture, productid, processor, memory, storage, screensize, type, operatingsystem, displaycard, weight, other, rating
                          from computer where productid='".$computer[0]."'");
 if (!$result1) {
    throw new Exception('Could not execute query');
  }
  
  // second computer
 $result2 = $conn->query( "select picture, productid, processor, memory, storage, screensize, type, operatingsystem, displaycard, weight, other, rating
                          from computer where productid='".$computer[1]."'");
						 
 if (!$result2) {
    throw new Exception('Could not execute query');
  }
  
   // show this web page
   show_two_computers($result1, $result2);
   
// case 3, compare 3 computers
} else if($count == 3) {
 //------------------------get computer information through query--------------------------------------------------
 
 // first computer
  $result1 = $conn->query( "select picture, productid, processor, memory, storage, screensize, type, operatingsystem, displaycard, weight, other, rating
                          from computer where productid='".$computer[0]."'");
 if (!$result1) {
    throw new Exception('Could not execute query');
  }
  
  // second computer
 $result2 = $conn->query( "select picture, productid, processor, memory, storage, screensize, type, operatingsystem, displaycard, weight, other, rating
                          from computer where productid='".$computer[1]."'");
 if (!$result2) {
    throw new Exception('Could not execute query');
  }
  
  // third computer
 $result3 = $conn->query( "select picture, productid, processor, memory, storage, screensize, type, operatingsystem, displaycard, weight, other, rating
                          from computer where productid='".$computer[2]."'");
	if (!$result3) {
		throw new Exception('Could not execute query');
    }
	
	// show this web page
	show_three_computers($result1, $result2, $result3);
}
  
compareComputerBack(); 

// footer of web page
html_footer();

// release session variable
unset($_SESSION['total']);
?>