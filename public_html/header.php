<?php

function script() {
?>
<script type="text/JavaScript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

</script>

<script type="text/javascript">
var maxSel=3;
var num=0;
function doCheck(node){	
if(node.checked){		
if(num>=maxSel){				
node.checked=false;			
alert("Sorry, you can only choose at most 3 options here");
}else{		
num++;		
}	
}else{	
num--;	}}
</script>

<script language="javascript" type="text/JavaScript">
function reloadcode(){
var verify=document.getElementById('safecode');
verify.setAttribute('src','captcha.php?'+Math.random());
}
</script>

<script type="text/JavaScript">
function InputCheck(regForm) {
 
  if(regForm.email.value=="")
  {
    alert("E-mail cannot be empty");
	regForm.email.focus();
	return false;
  } 
  
  if(regForm.password.value=="")
  {
    alert("Please set password");
	regForm.password.focus();
	return false;
  }
  
  if(regForm.password2.value=="")
  {
    alert("Please confirm password");
	regForm.password2.focus();
	return false;
  }
  
  if(regForm.password2.value != regForm.password.value)
  {
    alert("Your confirm password should be same as password");
	regForm.password2.focus();
	return false;
   }
   
   if(regForm.fname.value =="")
  {
    alert("Please enter your first name");
	regForm.fname.focus();
	return false;
   }
   
   if(regForm.lname.value =="")
  {
    alert("Please enter your last name");
	regForm.lname.focus();
	return false;
   }
   
   if(regForm.zipcode.value == "")
  {
    alert("Please enter zipcode");
	regForm.zipcode.focus();
	return false;
   }
   if(regForm.room.value =="")
  {
    alert("Please enter room number");
	regForm.room.focus();
	return false;
   }
   
    if(regForm.select_question.value =="--")
  {
    alert("Please select your security question");
	regForm.select_question.focus();
	return false;
   }
   
   if(regForm.answer.value =="")
  {
    alert("Please enter answer for security question");
	regForm.answer.focus();
	return false;
   }
   
    if(regForm.captcha.value =="")
  {
    alert("Please enter captcha");
	regForm.captcha.focus();
	return false;
   } 
   
   if(regForm.accept.checked == true && regForm.accept.value="I don't accept")
   {
     alert("Pleas tick accept");
	 regForm.accept.focus();
	 return false;
    }
	return true;
}
</script>

<script type="text/JavaScript">
function LoginCheck(loginForm) {
  
  if(loginForm.email.value=="")
  {
    alert("E-mail cannot be empty");
	loginForm.email.focus();
	return false;
  }
  
  if(loginForm.password.value=="")
  {
    alert("Please enter password");
	loginForm.password.focus();
	return false;
  }
  
    if(loginForm.captcha.value =="")
  {
    alert("Please enter captcha");
	loginForm.captcha.focus();
	return false;
   } 
 }
</script>

<script type="text/JavaScript">
 function ChangePasswordCheck(loginForm) {
  
  if(loginForm.original_password.value=="")
  {
    alert(" Please enter your original password");
	loginForm.original_password.focus();
	return false;
  }
  
  if(loginForm.new_password.value=="")
  {
    alert("Please set your new password");
	loginForm.new_password.focus();
	return false;
  }
  
  if(loginForm.new_password2.value=="")
  {
    alert("Please confirm new password");
	loginForm.new_password2.focus();
	return false;
  }
  
  if(loginForm.new_password2.value != loginForm.new_password.value)
  {
    alert("Your confirm password should be same as new password");
	loginForm.new_password2.focus();
	return false;
   }
   
    if(loginForm.captcha.value =="")
  {
    alert("Please enter captcha");
	loginForm.captcha.focus();
	return false;
   } 
 }
 </script>
 
 <script type="text/JavaScript">
 function changePersonalInfoCheck(form) {
 if((form.e_mail.value!="") && (form.e_mail2.value==""))
  {
    alert("Please confirm email");
	form.e_mail2.focus();
	return false;
  }
  
  if(form.e_mail2.value != form.e_mail.value)
  {
    alert("Your confirm email should be same as email");
	form.e_mail2.focus();
	return false;
   } 
  
 
  if(form.captcha.value =="")
  {
    alert("Please enter captcha");
	form.captcha.focus();
	return false;
   } 
 }
 </script>
 
 <script type="text/JavaScript">
 function ForgetAnswerCheck(form) {
   if(form.email.value=="")
  {
    alert("E-mail cannot be empty");
	form.email.focus();
	return false;
  }
   if(form.code.value =="")
  {
    alert("Please enter security code sent to your e-mail");
	form.code.focus();
	return false;
   }
  
  if(form.question.value =="--")
  {
    alert("Please select your security question");
	form.question.focus();
	return false;
   }
   
   if(form.answer.value =="")
  {
    alert("Please enter answer for security question");
	form.answer.focus();
	return false;
   }
   
   if(form.answer2.value =="")
  {
    alert("Please confirm your answer");
	form.answer2.focus();
	return false;
   }
   
    if(form.answer2.value != form.answer.value)
  {
    alert("Your confirm answer is different");
	form.answer2.focus();
	return false;
   }
 }
 </script>
 
 <script type="text/JavaScript">
 function ForgetPasswordCheck(form) {
   if(form.email.value=="")
  {
    alert("E-mail cannot be empty");
	form.email.focus();
	return false;
  }
  
  if(form.question.value =="--")
  {
    alert("Please select your security question");
	form.question.focus();
	return false;
   }
   
   if(form.answer.value =="")
  {
    alert("Please enter answer for security question");
	form.answer.focus();
	return false;
   }
   
   if(form.answer2.value =="")
  {
    alert("Please confirm your answer");
	form.answer2.focus();
	return false;
   }
   
    if(form.answer2.value != form.answer.value)
  {
    alert("Your confirm answer is different");
	form.answer2.focus();
	return false;
   }
 }
</script>

<script type="text/JavaScript">
 function CheckPost(form) {
   if(form.title.value=="")
  {
    alert("Title cannot be empty");
	form.title.focus();
	return false;
  }
  
  if(form.content.value =="")
  {
    alert("Content cannot be empty");
	form.content.focus();
	return false;
   }
 }
 
</script>

<script type="text/JavaScript">
function ProductCheck(loginForm) {
  
  if(loginForm.rate.value=="--")
  {
    alert("Please enter score");
	loginForm.rate.focus();
	return false;
  }
  
  if(loginForm.comment.value=="")
  {
    alert("Please enter password");
	loginForm.comment.focus();
	return false;
  }
 
 }
</script>

<?php
}

function header_style($title) {
script();
?>
<link href="styles/mystyle.css" rel="stylesheet" type="text/css">
<title><?php echo $title;?></title>
<?php
}

function emptyHeader() {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
		
<table align="center" width="1015" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="730" height="160"><table id="__" align="center" width="1015" border="0" cellpadding="0" cellspacing="0">
        <tr style="color:#FFF">
          <td width="1015" height="30" colspan="4" align="right" background="images/topbar.png" class="LOG"></td>
        </tr>
		
  <tr bordercolor="0">
    <td width="1015" height="60" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a>
	</td>
  </tr>
  
  <tr bordercolor="0" valign="bottom" align="right">
    <td height="30" background="images/topbar.png">
	
	<table border="0" cellpadding="0" cellspacing="0" align="right">
          <tr>
            <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','home','',1)" onMouseOver="MM_nbGroup('over','home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="home" border="0" id="home" onload="" /></a></td>
            <td onMouseOver="MM_showHideLayers('apDiv1','','show','Home','','show','aboutus','','show')"><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
          </tr>
            </table></td>
  </tr>
		
<?php
}
  
function noSelectedHeader($login_type) {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
<table id="__01" align="center" width="960" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="730" height="160"><table id="__" align="center" width="1015" border="0" cellpadding="0" cellspacing="0">
        <tr style="color:#FFF">
          <td height="30" colspan="4" align="right" background="images/topbar.png" class="LOG">
		  <?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
		  </td>
        </tr>
    <tr bordercolor="0">
		<td width="1015" height="60" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a>
	</td>
  </tr>
  <tr bordercolor="0" valign="bottom" align="right">
    <td height="30" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
          <tr>
            <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','home','',1)" onMouseOver="MM_nbGroup('over','home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="home" border="0" id="home" onload="" /></a></td>
            <td onMouseOver="MM_showHideLayers('apDiv1','','show','Home','','show','aboutus','','show')"><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
          </tr>
            </table></td>
        </tr>
<?php
}
   
function homepageHeader($login_type) {
?>
<script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery.KinSlideshow-1.2.1.js"></script>
<script type="text/javascript" src="scripts/webtry_roll.js"></script>


<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
<table id="__01" align="center" width="960" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="730" height="160"><table id="__" align="center" width="1015" border="0" cellpadding="0" cellspacing="0">
        <tr style="color:#FFF">
          <td height="30" colspan="4" align="right" background="images/topbar.png" class="LOG">
		  <?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
		  </td>
        </tr>
    <tr bordercolor="0">
		<td width="1015" height="60" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a>
	</td>
  </tr>
  <tr bordercolor="0" valign="bottom" align="right">
    <td height="30" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
          <tr>
            <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','home','',1)" onMouseOver="MM_nbGroup('over','home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-clicked.png" alt="" name="home" border="0" id="home" onload="" /></a></td>
            <td onMouseOver="MM_showHideLayers('apDiv1','','show','Home','','show','aboutus','','show')"><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
          </tr>
            </table></td>
        </tr>
<?php
}

function dealHeader($login_type) {
?>

<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
<table id="__01" align="center" width="960" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="730" height="160"><table id="__" align="center" width="1015" border="0" cellpadding="0" cellspacing="0">
        <tr style="color:#FFF">
          <td height="30" colspan="4" align="right" background="images/topbar.png" class="LOG">
		  <?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
		  </td>
        </tr>
    <tr bordercolor="0">
		<td width="1015" height="60" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a>
	</td>
  </tr>
  <tr bordercolor="0" valign="bottom" align="right">
    <td height="30" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
          <tr>
            <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','home','',1)" onMouseOver="MM_nbGroup('over','home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="home" border="0" id="home" onload="" /></a></td>
            <td onMouseOver="MM_showHideLayers('apDiv1','','show','Home','','show','aboutus','','show')"><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-clicked.png" border="0"/></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
          </tr>
            </table></td>
        </tr>

<?php
}

function aboutUsHeader($login_type) {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
		
 <table width="1013" height="606" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bordercolor="0" style="color:#FFF">
    <td height="30" colspan="2" align="right" background="images/topbar.png" class="LOG">
	  <?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
	</td>
  </tr>
  
  <tr bordercolor="0">
    <td height="60" colspan="2" valign="bottom" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a></td>
  </tr>
  <tr bordercolor="0">
    <td height="30" colspan="2" align="right" valign="top" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
      <tr>
        <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Home','',1)" onMouseOver="MM_nbGroup('over','Home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="Home" border="0" id="Home" onload="" /></a></td>
            <td onMouseOver="MM_showHideLayers('apDiv1','','show','Home','','show','aboutus','','show')"><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-clicked.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
      </tr>
    </table></td>
  </tr>
<?php
}

function ourServiceHeader($login_type) {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
		
<table width="1015" height="667" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bordercolor="0" style="color:#FFF">
    <td height="30" colspan="2" align="right" background="images/topbar.png" class="LOG">
	  <?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
	</td>
  </tr>
  <tr bordercolor="0">
    <td height="60" colspan="2" valign="bottom" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a></td>
  </tr>
  <tr bordercolor="0">
    <td height="30" colspan="2" align="right" valign="top" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
      <tr>
            <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Home','',1)" onMouseOver="MM_nbGroup('over','Home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="Home" border="0" id="Home" onload="" /></a></td>
            <td><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-clicked.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
      </tr>
    </table></td>
  </tr>
<?php
}

function contactUsHeader($login_type) {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">
 
<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
<table width="1015" height="796" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bordercolor="0" style="color:#FFF">
    <td height="30" colspan="2" align="right" background="images/topbar.png" class="LOG">
	 <?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
	</td>
  </tr>
  
  <tr bordercolor="0">
    <td height="60" colspan="2" valign="bottom" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a></td>
  </tr>
  <tr bordercolor="0">
    <td height="30" colspan="2" align="right" valign="top" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
      <tr>
        
            <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Home','',1)" onMouseOver="MM_nbGroup('over','Home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="Home" border="0" id="Home" onload="" /></a></td>
            <td><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-clicked.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
      </tr>
    </table></td>
  </tr>
<?php
}

function helpHeader($login_type) {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
<table width="1013" height="606" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bordercolor="0" style="color:#FFF">
    <td height="30" colspan="2" align="right" background="images/topbar.png" class="LOG">
	 <?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
	</td>
  </tr>
  
  <tr bordercolor="0">
    <td height="60" colspan="2" valign="bottom" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a></td>
  </tr>
  <tr bordercolor="0">
    <td height="30" colspan="2" align="right" valign="top" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
      <tr>
       <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Home','',1)" onMouseOver="MM_nbGroup('over','Home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="Home" border="0" id="Home" onload="" /></a></td>
            <td><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-clicked.png" border="0" alt="" onload="" /></a></td>
      </tr>
    </table></td>
  </tr>
<?php
}

 function do_html_URL($url, $name) {
  // output URL as link and br
?>
  <a href="<?php echo $url;?>"><?php echo $name;?></a>
<?php
}


function aHeader($login_type) {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
		
 <table width="1013" height="606" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bordercolor="0" style="color:#FFF">
    <td height="30" colspan="2" align="right" background="images/topbar.png" class="LOG">
	  <?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
	</td>
  </tr>
  
  <tr bordercolor="0">
    <td height="60" colspan="2" valign="bottom" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a></td>
  </tr>
  <tr bordercolor="0">
    <td height="30" colspan="2" align="right" valign="top" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
      <tr>
        <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Home','',1)" onMouseOver="MM_nbGroup('over','Home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="Home" border="0" id="Home" onload="" /></a></td>
            <td onMouseOver="MM_showHideLayers('apDiv1','','show','Home','','show','aboutus','','show')"><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
      </tr>
    </table></td>
  </tr>
<?php
}

function feedbackHeader($login_type) {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png','images/submit-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td height="1017" valign="top"><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
		<table id="__01" align="center" width="960" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="730" height="160" valign="top">
<table width="1013" height="919" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bordercolor="0" style="color:#FFF">
    <td height="30" colspan="2" align="right" background="images/topbar.png" class="LOG">
	<?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
	
	</td>
  </tr>
  <tr bordercolor="0">
    <td height="60" colspan="2" valign="bottom" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a></td>
  </tr>
  <tr bordercolor="0">
    <td height="30" colspan="2" align="right" valign="top" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
      <tr>
        <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Home','',1)" onMouseOver="MM_nbGroup('over','Home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="Home" border="0" id="Home" onload="" /></a></td>
            <td onMouseOver="MM_showHideLayers('apDiv1','','show','Home','','show','aboutus','','show')"><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
      </tr>
      </table></td>
  </tr>
<?php
}

function feedbackStaffHeader($login_type) {
?>
<body onLoad="MM_preloadImages('navigation/home-clicked.png','navigation/news-clicked.png','navigation/tdel-clicked.png','navigation/service-clicked.png','navigation/contact-clicked.png','navigation/help-clicked.png','images/go-clicked.png','images/submit-clicked.png')">

<table width="1015" border="0" align="center">
  <tr>
    <td height="779" valign="top"><div class="PAGE_A">
	<div class="PAGE_B">
		<div class="PAGE_C">
		<table id="__01" align="center" width="960" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="730" height="160" valign="top">
<table width="1013" height="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bordercolor="0" style="color:#FFF">
    <td height="30" colspan="2" align="right" background="images/topbar.png" class="LOG">
	<?php
		  if($login_type) {
		  do_html_url('logout.php', 'Logout');
		  echo " / ";
		  switch($login_type) {
		   case 'staff': do_html_url('profile_staff.php', 'MyProfile');
		                 break;
		   case 'supplier': do_html_url('profile_supplier.php', 'MyProfile');
		                 break;
		   case 'member': do_html_url('profile_member.php', 'MyProfile');
		                 break;
		   default: break;
		   }
		  } else {
		  do_html_url('login.php', 'Login');
		  echo " / ";
		  do_html_url('register.php', 'Register');
		  }
		  ?>
	
	</td>
  </tr>
  <tr bordercolor="0">
    <td height="60" colspan="2" valign="bottom" background="images/topbar.png"><a href="index.php"><img src="images/logo.png" width="200" height="100" border="0" /></a></td>
  </tr>
  <tr bordercolor="0">
    <td height="30" colspan="2" align="right" valign="top" background="images/topbar.png"><table border="0" cellpadding="0" cellspacing="0" align="right">
      <tr>
        <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Home','',1)" onMouseOver="MM_nbGroup('over','Home','navigation/home-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/home-un.png" alt="" name="Home" border="0" id="Home" onload="" /></a></td>
            <td onMouseOver="MM_showHideLayers('apDiv1','','show','Home','','show','aboutus','','show')"><a href="todayDeal.php" target="_top" onClick="MM_nbGroup('down','group1','tdeal','',1)" onMouseOver="MM_nbGroup('over','tdeal','navigation/tdeal-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="tdeal" src="navigation/tdeal-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="aboutUs.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','',1)" onMouseOver="MM_nbGroup('over','aboutus','navigation/about-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img src="navigation/about-un.png" alt="" name="aboutus" width="100" height="30" border="0" id="aboutus" onload="" /></a></td>
            <td><a href="ourService.php" target="_top" onClick="MM_nbGroup('down','group1','ourservice','',1)" onMouseOver="MM_nbGroup('over','ourservice','navigation/service-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="ourservice" src="navigation/service-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="contactUs.php" target="_top" onClick="MM_nbGroup('down','group1','contactus','',1)" onMouseOver="MM_nbGroup('over','contactus','navigation/contact-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="contactus" src="navigation/contact-un.png" border="0" alt="" onload="" /></a></td>
            <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','help','',1)" onMouseOver="MM_nbGroup('over','help','navigation/help-clicked.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="help" src="navigation/help-un.png" border="0" alt="" onload="" /></a></td>
      </tr>
      </table></td>
  </tr>



<?php
}
?>


