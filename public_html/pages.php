<?php   
   
$Total = $total[0]; 
 
$init = 1;
$page_len = 7;

if(empty($_GET['page'])||$_GET['page']<0) {
   $page = 1;
} else {
   $page = $_GET['page'];
}

$page_len = ceil($Total/$perpagenum);


$startnum = ($page-1)*$perpagenum; 
if($page>1)   
$per=$page-1;   
else  
$per=1;  
 
if($Total%$perpagenum==0)   
$Totalpage=$Total/$perpagenum;   
else  
$Totalpage=(integer)($Total/$perpagenum)+1; 
  
$next=$page+1;   

if($next>=$Totalpage)   
 $next=$Totalpage;   
?>   
  
<?php   
$key="<tr><td colspan=\"4\" align=\"right\" valign=\"top\" class=\"PAGE_NUM\"><a class=n href='".$_SERVER['PHP_SELF']."'>First Page</a> | "."<a class=n href='".$_SERVER['PHP_SELF'].'?page='.$per."'> << Prev</a>";

for($i=$init;$i<=$page_len;$i++){ 
    if($i==$page){ 
       $key.=' <span>'.$i.'</span>'; 
    } else { 
	/*
	   if($i> 3) {
	       $key.="...";
		   break;
	   }*/
       $key.=" <a class=n href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>"; 
    } 
} 

$key.="<a class=n href='".$_SERVER['PHP_SELF'].'?page='.$next."'> Next >> </a> | ".    
"<a class=n href='".$_SERVER['PHP_SELF'].'?page='.$Totalpage."'> Last Page</a> "."</td></tr>";   
?>  
