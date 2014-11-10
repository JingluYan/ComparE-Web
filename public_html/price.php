<?php
require_once("show_link.php");
require_once("db_fns.php");
require_once("failResponse.php");

if(!isset($_POST['link'])) {
  echo"<script language=\"javascript\">alert('You do not have privilege to view this page');history.go(-1)</script>";
  exit();

}

$productid = $_POST['link'];

// connect to db
 $conn = db_connect();
  
$result = $conn->query("select producttype from product where productid ='".$productid."'");

$a = $result->fetch_array();

$type = $a["producttype"];

//echo $type;

if($type == 1) {
$result1 = $conn->query("select * from computer where productid ='".$productid."'");
} else {
$result1 = $conn->query("select * from mobile where productid ='".$productid."'");
}

  if(!$result1) {
            echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
		    //response("There is some error with this page");
			exit();
		 }
		 if($result1->num_rows < 0) {
		    echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
            //response("No such item");
			exit();
		}
		
$result2 = $conn->query("select logo, price, stock, link, suppliername, rating from purchaselink p, supplier s 
                         where p.productid = '".$productid."' and p.supplierid = s.supplierid");
 if(!$result2) {
         echo"<script language=\"javascript\">alert('Error with database, try again');history.go(-1)</script>";
		    //response("There is some error with this page");
			exit();
		 }
		 if($result2->num_rows < 0) {
		    echo"<script language=\"javascript\">alert('No such item');history.go(-1)</script>";
            //response("No such item");
			exit();
		}

if($type == 1) {		
computer_link($result1, $result2);
} else {
mobile_link($result1, $result2);
}

$_SESSION['type'] = $type;
$_SESSION['productid'] = $productid;
?>