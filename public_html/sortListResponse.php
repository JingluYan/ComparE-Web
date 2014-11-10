<?php
require_once("header.php");
require_once("db_fns.php");
require_once("show_list.php");

$conn = db_connect();

 $sort = $_POST['sortProduct'];
 
 if($sort) {
    if($sort == "ratingM") {
	    $result = $conn -> query("select * from mobile order by rating DESC");
		$result2 = $conn -> query("select * from mobile order by rating DESC");
	    show_mobilelist($result, $result2);
	} else if($sort == "ratingC") {
	   $result = $conn -> query("select * from computer order by rating DESC");
	   $result2 = $conn -> query("select * from computer order by rating DESC");
	   show_computerlist($result, $result2);
	} else if($sort == "viewtimesM") {
	    $result = $conn -> query("select * from mobile order by viewtimes DESC");
		$result2 = $conn -> query("select * from mobile order by viewtimes DESC");
	    show_mobilelist($result,$result2 );
	} else if($sort == "viewtimesC") {
	    $result = $conn -> query("select * from computer order by viewtimes DESC");
		$result2 = $conn -> query("select * from computer order by viewtimes DESC");
	    show_computerlist($result, $result2);
	} else if($sort == "lowM") {
	   $result = $conn -> query("select * from mobile order by minprice ");
	   $result2 = $conn -> query("select * from mobile order by minprice ");
	   show_mobilelist($result,$result2);
	} else if($sort == "lowC") {
	   $result = $conn -> query("select * from computer order by minprice ");
	   $result2 = $conn -> query("select * from computer order by minprice ");
	   show_computerlist($result, $result2);
	} else if($sort == "highM") {
	   $result = $conn -> query("select * from mobile order by minprice DESC");
	   $result2 = $conn -> query("select * from mobile order by minprice DESC");
	   show_mobilelist($result, $result2);
	} else if($sort == "highC") {
	   $result = $conn -> query("select * from computer order by minprice DESC");
	   $result2 = $conn -> query("select * from computer order by minprice DESC");
	   show_computerlist($result, $result2);
	}
}
?>