<?php
session_start();
$application_key='756f880c793fb40b5d00d71b46e95fd6';
$imagelocation="midbanner_images/lower_banner_contactus.jpg";

include('conhead.php');
include('conlowerbanner.php');
if(isset($_SESSION['comments'])&& $_SESSION['comments']=="Saved")
{
	if($_SESSION['comments']="Saved")
	{
		$_SESSION['comments']="done";
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
        <font face="Tahoma"><b><font size="4">Saved</font></b><font size="4"> Successfully!,</font><br>&nbsp;&nbsp;&nbsp;<font size="2">&nbsp;We will reply you back shortly, thank you.</font></font></p>
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
		//header ("Location:index.php");
	}
	else
	{
		include('pages/contactusbody.php');
	}
}
else
{
	include('pages/contactusbody.php');
}
include('conlower.php');
?>

        