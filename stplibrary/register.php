<?php
session_start();
$application_key='756f880c793fb40b5d00d71b46e95fd6';
$imagelocation="midbanner_images/lower_banner_registration.jpg";

include('conhead.php');
include('conlowerbanner.php');

if(isset($_SESSION["regstatus"]))
{
	if($_SESSION["regstatus"]=="success")
	{
		$_SESSION["regstatus"]="done";
?>
<div align="center">
<table border="0" cellpadding="0" cellspacing="0" width="788" height="203">
 <!-- MSTableType="layout" -->
	<tr>
		<td valign="top" colspan="3">&nbsp;</td>
	<td height="19"></td>
	</tr>
	<tr>
		<td valign="top" width="130">&nbsp;</td>
		<td width="504">
<hr color="#669900" size="1">
        <p align="center">
        <font face="Tahoma"><b><font size="4">Successfully</font></b><font size="4"> Registered!,</font><br>&nbsp;&nbsp;&nbsp;<font size="2">&nbsp;Please 
remind to keep the username and password safe and use it for own purpose.</font></font></p>
<hr color="#669900" size="1">
</td>
		<td valign="top" width="152">&nbsp;</td>
		<td height="109"></td>
	</tr>
	<tr>
		<td valign="top" colspan="3">&nbsp;</td>
		<td height="75" width="2"></td>
	</tr>
</table>
</div>
 <?php 
	}
	else
	{
		if(isset($_SESSION["userlevel"]))
		{
				if($_SESSION["userlevel"]=="superadmin")
				{
				include('pages/registrationbody.php');
				}
		}
		else
		{
			echo "<br>Please login through admin account.";
		}
	}
}
else
{
	include('pages/registrationbody.php');
}
include('conlower.php');
?>
