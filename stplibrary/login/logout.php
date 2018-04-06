<?php
session_start(); 
//This code is a work of Santosh K. Gurung
	
		$_SESSION["status"]="";
		$_SESSION["username"]="";
		$_SESSION["formerror"]="";
		$_SESSION["fullname"]="";
		$_SESSION["familyname"]="";
		$_SESSION["membername"]="";
		$_SESSION["email"]="";
		$_SESSION["loginstatus"]="";
		$_SESSION["userlevel"]="";
		
header ("Location:".$_SERVER['HTTP_REFERER']);
?>