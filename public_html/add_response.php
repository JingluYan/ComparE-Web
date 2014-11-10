<?php
require_once("db_fns.php");

session_start();

$feedbackid = $_POST['feedback'];

// connect to db
$conn = db_connect();

$date = date('Y-m-d H:i:s');

$email= $_SESSION['valid_user'];
//$email = 'K.Atkinson@liv.ac.uk';
 $result1 = $conn->query("select * from staff where e_mail = '".$email."'");
 $row = $result1->fetch_array();
  $result = $conn->query("update feedback set staffid='".$row["staffid"]."', response='".$_POST['content']."',responsetime='".$date."' where feedbackid = '".$feedbackid."'");


 if(!$result) {
    echo mysql_error();
	echo"<script language=\"javascript\">alert('Error with replying feedback, try again');history.go(-1)</script>";
	exit();
}

echo"<script language=\"javascript\">alert('Successfully reply this feedback');history.go(-1)</script>";
?>