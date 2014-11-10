<?php
require_once("db_fns.php");

session_start();
// connect to db
$conn = db_connect();

$date = date('Y-m-d H:i:s');

$email= $_SESSION['valid_user'];

  $result1 = $conn->query("select * from member where e_mail = '".$email."'");
  $row = $result1->fetch_array();
  $result = $conn->query("insert into feedback(memberid,title,content,writetime) values (".$row["memberid"].", '".$_POST['title']."', '".$_POST['content']."', '".$date."')");


 if(!$result) {
    echo mysql_error();
	echo"<script language=\"javascript\">alert('Error with adding feedback, try again');history.go(-1)</script>";
	exit();
}

echo"<script language=\"javascript\">alert('Successfully add your feedback, thank you');history.go(-1)</script>";
?>