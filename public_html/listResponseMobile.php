<?php
require_once("db_fns.php");
require_once("show_list.php");
require_once("failResponse.php");

if(isset($_POST['Platform'])) {
$_SESSION['Platform'] = $_POST['Platform'];
}

if(isset($_POST['Memory'])) {
$_SESSION['Memory'] = $_POST['Memory'];
}

if(isset($_POST['ExternalMemory'])) {
$_SESSION['ExternalMemory'] = $_POST['ExternalMemory'];
}

if(isset($_POST['ScreenSize'])) {
$_SESSION['ScreenSize'] = $_POST['ScreenSize'];
}

// get variables
$platform=$_SESSION['Platform'];
$memory = $_SESSION['Memory'];
$externalmemory = $_SESSION['ExternalMemory'];
$screen_size = $_SESSION['ScreenSize'];

$perpagenum = 10;

// connect to db
$conn = db_connect();
$db = "mobile";

$mobile = array($platform, $memory, $externalmemory, $screen_size);

$mobile_name  = array("platform", "memory", "externalmemory", "screensize");

$count=0;
$j = 1;
for($i = 0; $i<4; $i++){
	if($mobile[$i] !="All") {
		$temp_name = "temp".$j;
	if($mobile_name[$i] == "memory") {
	    $constrain = $mobile[$i]+100;
	    $result1 = $conn->query("create table ".$temp_name." as select * from ".$db." where ".$mobile_name[$i]." between ".$mobile[$i]." and ".$constrain);
	} else if($mobile_name[$i] == "screensize") {
	    $constrain = $mobile[$i]+2;
	    $result1 = $conn->query("create table ".$temp_name." as select * from ".$db." where ".$mobile_name[$i]." between ".$mobile[$i]." and ".$constrain);
	} else if($mobile_name[$i] == "externalmemory") {
	   $result1 = $conn->query("create table ".$temp_name." as select * from ".$db." where ".$mobile_name[$i]."=".$mobile[$i]);
	} else {
	    $result1 = $conn->query("create table ".$temp_name." as select * from ".$db." where ".$mobile_name[$i]."='".$mobile[$i]."'");
	}
	$db = $temp_name;
	$temp_name = "temp".$j;
	$j++;
	} else {
	   $count++;
	}
}

if($count==4) {  
	
	$result = $conn -> query("select count(*) from mobile");
	  if(!$result) {
		response("There is some error with this page");
		exit();
	}
 
	if($result->num_rows == 0) {
		response("No such item");
		exit();
	}
	$total = $result->fetch_array();

	require_once("pages.php");
	
 $result = $conn -> query("select * from mobile limit $startnum, $perpagenum");
  $result2 = $conn -> query("select * from mobile limit $startnum, $perpagenum");
} else {

$result = $conn -> query("select count(*) from ".$temp_name);
  if(!$result) {
		response("There is some error with this page");
		exit();
	}
 
	if($result->num_rows == 0) {
		response("No such item");
		exit();
	}
	$total = $result->fetch_array();

	require_once("pages.php");

 $result = $conn -> query("select * from ".$temp_name." limit $startnum, $perpagenum");
  $result2 = $conn -> query("select * from ".$temp_name." limit $startnum, $perpagenum");
 }
 
if(!$result) {
    //echo"<script language=\"javascript\">alert('Error, try again');history.go(-1)</script>";
	response("There is some error with this page");
	exit();
}

if($result->num_rows == 0) {
   //echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   response("No such item");
   exit();
}

$c = $result->num_rows;
$_SESSION['total2'] = $c;

show_mobilelist($result, $result2);
echo $key;
list_mobileBack();
html_footer();

$table = "temp1";
for($k=2; $k<=$j;$k++) {
	$result2 = $conn->query("drop table ".$table);
	$table = "temp".$k;
}

?>