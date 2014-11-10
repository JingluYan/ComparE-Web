<?php
require_once("db_fns.php");

session_start();
// connect to db
$conn = db_connect();



if(!isset($_SESSION['valid_user'])) {
	echo"<script language=\"javascript\">alert('To leave comment, please login');history.go(-1)</script>";
	exit();	
}

$date = date('Y-m-d H:i:s');
$email= $_SESSION['valid_user'];
$productid = $_SESSION['productid'];

  $result1 = $conn->query("select * from member where e_mail = '".$email."'");
  $row = $result1->fetch_array();
  $result = $conn->query("insert into comment(productid, memberid,content,time) values ('".$productid."', ".$row["memberid"].", '".$_POST['content']."', '".$date."')");


 if(!$result) {
    echo mysql_error();
	echo"<script language=\"javascript\">alert('Error with adding feedback, try again');history.go(-1)</script>";
	exit();
}

echo"<script language=\"javascript\">alert('Successfully add your feedback, thank you');history.go(-1)</script>";
?>