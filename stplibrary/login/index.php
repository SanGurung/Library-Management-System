<?php
session_start(); 
//This code is a work of Santosh K. Gurung
//key is '756f880c793fb40b5d00d71b46e95fd6'
$application_key='756f880c793fb40b5d00d71b46e95fd6';
$uname=$_POST['uname'];
$pwdword=md5(base64_encode($_POST['password']));

if(($_GET['request']=="login") && $_POST['key']="5c32dbc028feb879ce2902fcb6d38ef3")
{
  if($uname=="" || $pwdword=="")
  {
	 $_SESSION["loginerr"]="err";
	 header ("Location:".$_SERVER['HTTP_REFERER']);
  }
}

if(($_GET['request']=="login") && $uname!="" && $pwdword!="" && $_POST['key']="5c32dbc028feb879ce2902fcb6d38ef3")
{	
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
	if(login($uname,$pwdword,"member_details",$conn)==1)
	{	
		membersinfo($uname,"member_details",$conn);
		$_SESSION["status"]="loggedin";
		$_SESSION["username"]=$uname;
		$_SESSION["formerror"]="";
		$_SESSION["fullname"]=$cs_title . $cs_firstname . " " . $cs_familyname;
		$_SESSION["familyname"]=$cs_familyname;
		$_SESSION["membername"]=$cs_title . $cs_firstname;
		$_SESSION["email"]=$cs_email;
		$_SESSION["userlevel"]=$cs_userlevel;
		$_SESSION["loginstatus"]="success";
	header ("Location:".$_SERVER['HTTP_REFERER']);
	
	}
	else
	{
		$_SESSION["loginerr"]="err";
		header ("Location:".$_SERVER['HTTP_REFERER']);
	}
}

?> 