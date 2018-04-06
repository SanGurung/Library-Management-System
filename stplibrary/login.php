<?php
session_start();
$application_key='756f880c793fb40b5d00d71b46e95fd6';
$imagelocation="midbanner_images/lower_banner_login.jpg";

include('conhead.php');
include('conlowerbanner.php');
if(isset($_SESSION["loginstatus"]))
{
	if($_SESSION["loginstatus"]=="success")
	{
		$_SESSION["loginstatus"]="done";
		header ("Location:index.php");
	}
	else
	{
		include('pages/loginbody.php');
	}
}
else
{
	include('pages/loginbody.php');
}
include('conlower.php');
?>

        