<?php
require_once("db_fns.php");
require_once("form.php");
require_once("show_link.php");

//session_start();

$productid = $_SESSION['productid'];
$type = $_SESSION['type'];


if($_POST['price']) {
  $price = $_POST['price'];
}

$conn = db_connect();

if($type == 1) {
$result1 = $conn->query("select * from computer where productid ='".$productid."'");
} else {
$result1 = $conn->query("select * from mobile where productid ='".$productid."'");
}

if($price) {
 switch($price) {
   case "high" : 
    $result2 = $conn->query("select logo, price, stock, link, suppliername, rating from purchaselink p, supplier s 
                            where p.productid = '".$productid."' and p.supplierid = s.supplierid order by price DESC"); break;
   case "low": 
    $result2 = $conn->query("select logo, price, stock, link, suppliername, rating from purchaselink p, supplier s 
                            where p.productid = '".$productid."' and p.supplierid = s.supplierid order by price"); break;
   case "no": $result2 = $conn->query("select logo, price, stock, link, suppliername, rating from purchaselink p, supplier s 
                            where p.productid = '".$productid."' and p.supplierid = s.supplierid"); break;
   default: break;
  }
  
  if($_SESSION['type'] == 1) {
    computer_link($result1, $result2);
  } else{
    mobile_link($result1, $result2);
  }
 }

?>