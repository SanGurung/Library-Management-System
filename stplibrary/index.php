<?php
session_start();
$application_key='756f880c793fb40b5d00d71b46e95fd6';
$imagelocation="midbanner_images/lower_banner_home.jpg";

include('conhead.php');
include('conlowerbanner.php');
?>
<div align="center">
	<table border="0" cellspacing="0" cellpadding="0" width="390" height="113">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" height="35" colspan="2"><b>
			<font face="Times new Roman" size="4" color="#288B07">Administration 
			functions</font></b><font color="#288B07"> </font>
				<hr color="#669900" size="1">
			</td>
		</tr>
<?php
	$corekey="userverification";
	include("core/dbmainsettings.php");
	include("core/connect_database.php");
	include("core/userfunctions.php");
	if(isset($_SESSION["username"]) && isset($_SESSION["loginstatus"]))
	{
		if($_SESSION["loginstatus"]=="done")
		{
			if($_SESSION["userlevel"]=="superadmin")
			{
?>		
		<tr>
			<td valign="top" width="153"><font color="#333333">View member details:</font></td>
			<td height="46" width="237">
<form action="viewdetails.php" method="post">
<select size="1" name="selecteduser">
<?php
				$mb_sql="SELECT * FROM `member_details` order by firstname,familyname;";

				$mb_result=mysql_query($mb_sql,$conn);
				while($mb_showdata=mysql_fetch_array($mb_result))
				{
?>
		<option value="<?php echo $mb_showdata['username']; ?>"><?php echo $mb_showdata['firstname']." ". $mb_showdata['familyname']; ?></option>
<?php
				}
?>
		</select>


<input type="submit" value="Show"></form>		
			</td>
		</tr>
<?php
			}
		}
	}
?>
		<tr>
			<td valign="top" height="32" colspan="2">
				<hr color="#669900" size="1">
			</td>
		</tr>
	</table>
</div>

<?php
include('libraryservicesbody.php');
include('conlower.php');
?>