<?php
require_once("header.php");
require_once("db_fns.php");
require_once("show_list2.php");
require_once("failResponse.php");


$conn = db_connect();
if(!($_POST['searchtype']) || !($_POST['searchterm']) ) {
    response("Please enter something for search");
	//echo"<script language=\"javascript\">alert('Please enter something for search');history.go(-1)</script>";	
	exit();
}
 $searchtype = $_POST['searchtype'];
 $searchterm = trim($_POST['searchterm']);
 
 if($searchtype && $searchterm) {
    if(!get_magic_quotes_gpc()) {
      $searchterm = addslashes($searchterm);
    }
    if($searchtype == "computer_brand") {
	   $result = $conn -> query("select * from computer where brand like '%".$searchterm."%'");
	    if(!$result) {
    //echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
	response("There is some error with this page");
	exit();
}
 
if($result->num_rows == 0) {
   echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   //response("No such item");
   exit();
} 
	   $result2 = $conn -> query("select * from computer where brand like '%".$searchterm."%'");
	   show_computerlist($result, $result2);
	} else if ($searchtype == "mobile_brand") {
	   $result = $conn -> query("select * from mobile where brand like '%".$searchterm."%'");
	    if(!$result) {
    //echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
	response("There is some error with this page");
	exit();
}
 
if($result->num_rows == 0) {
   echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   //response("No such item");
   exit();
} 
	    $result2 = $conn -> query("select * from mobile where brand like '%".$searchterm."%'");
	   show_mobilelist($result, $result2);
	} else if($searchtype == "computer") {
	   $result = $conn -> query("select * from computer where productid like '%".$searchterm."%'");
	    if(!$result) {
    //echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
	response("There is some error with this page");
	exit();
}
 
if($result->num_rows == 0) {
   echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   //response("No such item");
   exit();
} 
	    $result2 = $conn -> query("select * from computer where productid like '%".$searchterm."%'");
	    show_computerlist($result, $result2);
	} else {
	   $result = $conn -> query("select * from mobile where productid like '%".$searchterm."%'");
	    if(!$result) {
    //echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
	response("There is some error with this page");
	exit();
}
 
if($result->num_rows == 0) {
   //echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   response("No such item");
   exit();
} 
	    $result2 = $conn -> query("select * from mobile where productid like '%".$searchterm."%'");
	    show_mobilelist($result, $result2);
	}
 }
?>
