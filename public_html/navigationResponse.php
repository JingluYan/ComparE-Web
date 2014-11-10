<?php
require_once("header.php");
require_once("db_fns.php");
require_once("show_list2.php");
require_once("failResponse.php");

//session_start();

$navi = array("Desktop", "Laptop", "All-in-one");
$navi2 = array("Windows", "IOS", "Android","Blackberry", "Symbian", "Other");

$conn = db_connect();

for($i=0; $i<3; $i++) {

   if(isset($_POST[$navi[$i]])) {
      $computer = $_POST[$navi[$i]];
	  
	  //echo $computer;

	     $result = $conn -> query("select * from computer where type = '".$computer."'");
      
	   if(!$result) {
			echo"<script language=\"javascript\">alert('Error, try again');history.go(-1)</script>";
		   //response("There is some error with this page");
			exit();
		}

		if($result->num_rows == 0) {
			echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
			//response("No such item");
			exit();
		}
		$result2 = $conn -> query("select * from computer where type = '".$computer."'");
		show_computerlist($result, $result2 ); 
	
   }
}

for($j=0; $j<6; $j++) {
  if(isset($_POST[$navi2[$j]])) {
      $mobile = $_POST[$navi2[$j]];
	  
	  //echo $mobile;
	     if($mobile == "Other") {
		   $result = $conn -> query("select * from mobile where platform not in ('Windows','IOS','Android','Blackberry RIM','Symbian')"); 
		   $result2 = $conn -> query("select * from mobile where platform not in ('Windows','IOS','Android','Blackberry RIM','Symbian')"); 
		 }else {
	       $result = $conn -> query("select * from mobile where platform ='".$mobile."'"); 
		   $result2 = $conn -> query("select * from mobile where platform ='".$mobile."'"); 
		   }
		  
		 if(!$result) {
			echo"<script language=\"javascript\">alert('Error, try again');history.go(-1)</script>";
		   //response("There is some error with this page");
			exit();
		}

		if($result->num_rows == 0) {
			echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
			//response("No such item");
			exit();
		}
		 show_mobilelist($result, $result2);  
		
	  }
   }

?>