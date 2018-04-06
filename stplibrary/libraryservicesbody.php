
<head>
<meta http-equiv="Content-Language" content="en-gb">
<style>
<!--
.buttonspic  { border: 1px solid #919191; padding: 1px; background-color: #FFF2FF; }
.buttonspic a:hover,
.buttonspic a:active
{
	color: #ffffff;
	background-color: #F3C4FF;
}
-->
</style>
</head>

<div align="center">

<table border="0" cellspacing="0" cellpadding="0" width="425" height="289">
	<!-- MSTableType="layout" -->
	<tr>
		<td valign="top" colspan="3"><b><font color="#444444" size="2">Please click on below services to use it..</font></b></td>
	<td height="50"></td>
	</tr>
	<tr>
		<td valign="top" rowspan="7">&nbsp;</td>
<?php

	if(isset($_SESSION["username"]) && isset($_SESSION["loginstatus"]))
	{
		if($_SESSION["loginstatus"]=="done")
		{
			if($_SESSION["userlevel"]=="superadmin")
			{
?>
		<td class="buttonspic">

		<p align="center"><font color="#444444" size="4">
		<img border="0" src="images/bttn_link_Borrow%20Book(s).png" width="39" height="34"><a href="conborrowbooks.php"><font color="#444444">Borrow 
		Book(s)</font></a></font>
	
		</td>
<?php
			}
			else
			{
				echo "<td>&nbsp;</ td>";
			}
		}
		else
		{
			echo "<td>&nbsp;</ td>";
		}
	}
	else
	{
		echo "<td>&nbsp;</ td>";
	}
?>	
		<td valign="top" rowspan="7">&nbsp;</td>
		<td height="40"></td>
	</tr>
	<tr>
		<td valign="top"><font size="1">&nbsp;</font></td>
		<td height="12"></td>
	</tr>
	<tr>
		<td class="buttonspic">
		<p align="center"><font color="#444444" size="4">
		<img border="0" src="images/bttn_link_Borrow%20Book(s).png" width="39" height="34"><a href="conreservebook.php"><font color="#444444">Reserve 
		Book(s)</font></a></font></td>
		<td height="40"></td>
	</tr>
	<tr>
		<td valign="top"><font size="1">&nbsp;</font></td>
		<td height="12"></td>
	</tr>
	<tr>
		<td class="buttonspic">
		<p align="center"><font color="#444444" size="4">
		<img border="0" src="images/bttn_link_Borrow%20Book(s).png" width="39" height="34"><a href="conorderbook.php"><font color="#444444">Order 
		Book(s)</font></a></font></td>
		<td height="40"></td>
	</tr>
	<tr>
		<td valign="top"><font size="1">&nbsp;</font></td>
		<td height="12"></td>
	</tr>
	<tr>
		<td class="buttonspic">
		<p align="center"><font color="#444444" size="4">
		<img border="0" src="images/bttn_link_Borrow%20Book(s).png" width="39" height="34"><a href="consearch.php"><font color="#444444">Online 
		Catalogue</font></a></font></td>
		<td height="40"></td>
	</tr>
	<tr>
		<td valign="top" colspan="3" class="nav">
		&nbsp;</td>
		<td height="42"></td>
	</tr>
	<tr>
		<td width="87"></td>
		<td width="257"></td>
		<td width="79"></td>
		<td height="1" width="2"></td>
	</tr>
</table>
<p>

</div>