<?php
require_once("db_fns.php");
require_once("show_list.php");
require_once("failResponse.php");

// start session

if(isset($_POST['Processor'])) {
$_SESSION['Processor'] = $_POST['Processor'];
}

if(isset($_POST['Memory'])) {
$_SESSION['Memory'] = $_POST['Memory'];
}

if(isset($_POST['Type'])) {
$_SESSION['Type'] = $_POST['Type'];
}

if(isset($_POST['OperatingSystem'])) {
$_SESSION['OperatingSystem'] = $_POST['OperatingSystem'];
}

if(isset($_POST['DisplayCard'])) {
$_SESSION['DisplayCard'] = $_POST['DisplayCard'];
}

if(isset($_POST['ScreenSize'])) {
$_SESSION['ScreenSize'] = $_POST['ScreenSize'];
}

if(isset($_POST['Storage'])) {
$_SESSION['Storage'] = $_POST['Storage'];
}

// get variables
$processor=$_SESSION['Processor'];
$memory = $_SESSION['Memory'];
$type = $_SESSION['Type'];
$operating_system = $_SESSION['OperatingSystem'];
$display_card = $_SESSION['DisplayCard'];
$screen_size = $_SESSION['ScreenSize'];
$storage = $_SESSION['Storage'];

$perpagenum = 8;

// connect to db
$conn = db_connect();
$db = "computer";

$computer = array($processor, $memory, $type, $operating_system, $display_card, $screen_size, $storage);

$computer_name  = array("processor", "memory", "type", "operatingsystem", "displaycard", "screensize", "storage");

$count = 0;
$j = 1;
for($i = 0; $i<7; $i++){
	if($computer[$i] !="All") {
	$temp_name = "temp".$j;
	if($computer_name[$i]=='screensize'){
	$result1 = $conn->query("create table ".$temp_name." as select * from ".$db." where ".$computer_name[$i]."=".$computer[$i]);
	}
	else if($computer_name[$i]=='storage'){
	$constrain = $computer[$i]+500;
	$result1 = $conn->query("create table ".$temp_name." as select * from ".$db." where ".$computer_name[$i]." between ".$computer[$i]." and ".$constrain);
	}
	else{
	$result1 = $conn->query("create table ".$temp_name." as select * from ".$db." where ".$computer_name[$i]."='".$computer[$i]."'");
	}
	$db = $temp_name;
	$temp_name = "temp".$j;
	$j++;
	} else {
	  $count++;
	}
}

if($count==7) {
 $result = $conn->query("select count(*) from computer");

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
$result = $conn->query("select * from computer limit $startnum, $perpagenum");
$result2 = $conn->query("select * from computer limit $startnum, $perpagenum");

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
$result = $conn->query("select * from ".$temp_name." limit $startnum, $perpagenum");
$result2 = $conn->query("select * from ".$temp_name." limit $startnum, $perpagenum");
}
 
 if(!$result) {
    //echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
	response("There is some error with this page");
	exit();
}
 
if($result->num_rows < 0) {
   //echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
   response("No such item");
   exit();
} 


$c = $result->num_rows;
$_SESSION['total'] = $c;

show_computerlist($result, $result2);
echo $key;
list_computerBack();
html_footer();

$table = "temp1";
for($k=2; $k<=$j;$k++) {
	$result = $conn->query("drop table ".$table);
	$table = "temp".$k;
}
?>