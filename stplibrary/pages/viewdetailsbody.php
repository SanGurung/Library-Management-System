<div align="center">
<?php
if(($_SESSION["status"]=="loggedin") && ($_SESSION["username"]!=""))
{
	if(isset($_POST['selecteduser']))
	{
		$gid=$_POST['selecteduser'];
	}
	else
	{
		$gid=$_SESSION["username"];
	}
	$corekey="userverification";
	include("core/dbmainsettings.php");
	include("core/connect_database.php");
	include("core/userfunctions.php");
	$xs_sql="SELECT * FROM `member_details` WHERE `username`='" . $gid. "'";
    if($xs_result=mysql_query($xs_sql,$conn))
	{   
		if($xs_showdata=mysql_fetch_array($xs_result))
		{
				$ds_id=$xs_showdata['id'];
				$ds_title=$xs_showdata['title'];
				$ds_firstname=$xs_showdata['firstname'];
				$ds_familyname=$xs_showdata['familyname'];
				$ds_dob=$xs_showdata['dob'];
				$ds_gender=$xs_showdata['gender'];
				$ds_houseno=$xs_showdata['houseno'];
				$ds_streetname=$xs_showdata['streetname'];
				$ds_country=$xs_showdata['country'];
				$ds_postcode=$xs_showdata['postcode'];
				$ds_mobileno=$xs_showdata['mobileno'];
				$ds_telephone=$xs_showdata['telephone'];
				$ds_email=$xs_showdata['email'];
 				$ds_username=$xs_showdata['username'];
 				$ds_doj=$xs_showdata['date_joined'];
 				$ds_ulevel=$xs_showdata['user_level_code'];
		}
		else
		{
		Echo "User not found or problme retrieving details.";
		}
	 }
?>
			<table border="0" id="table2" cellspacing="0" cellpadding="0" width="399" height="599">
				<!-- MSTableType="layout" -->
				<tr>
					<td colspan="2" height="39">
					<b><font face="Times new Roman" size="4"><br>
					</font><font face="Tahoma" size="3">1. Personal
					<font color="#676767">information's
					</font></font></b></td>
				</tr>
				<tr>
					<td colspan="2" height="20"><hr color="#d9d9d9" SIZE="1">
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Title:</font></td>
					<td height="26" valign="top">	<?php  echo $ds_title; ?></td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">First Name:</font></td>
					<td height="26" valign="top"><?php echo $ds_firstname; ?>
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Family Name:</font></td>
					<td height="26" valign="top"><?php echo $ds_familyname ;?>
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">DOB</font></td>
					<td height="28" valign="top"><?php echo $ds_dob; ?></td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Gender:</font></td>
					<td height="25" valign="top"><?php echo $ds_gender; ?></td>
				</tr>
				<tr>
					<td colspan="2" height="21"><hr color="#d9d9d9" SIZE="1">
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">House no.</font></td>
					<td height="27" valign="top"><?php echo $ds_houseno; ?>	</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Street Name.</font></td>
					<td height="27" valign="top"><?php echo $ds_streetname; ?>	</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">City/Country</font></td>
					<td height="27" valign="top"><?php echo $ds_country; ?>
	</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Post code:</font></td>
					<td height="27" valign="top"><?php echo $ds_postcode;?></td>
				</tr>
				<tr>
					<td colspan="2" height="21"><hr color="#d9d9d9" SIZE="1">
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Mobile no:</font></td>
					<td height="27" valign="top"><?php echo $ds_mobileno; ?>		</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Telephone no:</font></td>
					<td height="27" valign="top"><?php echo $ds_telephone; ?></td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Email:</font></td>
					<td height="27" valign="top"><?php echo $ds_email; ?></td>
				</tr>
				<tr>
					<td colspan="2" height="21"><hr color="#c0c0c0" SIZE="1">
					</td>
				</tr>
				<tr>
					<td colspan="2" height="24"><b><font face="Tahoma" size="3">
					2. Registration <font color="#676767">information's</font></font></b></td>
				</tr>
				<tr>
					<td colspan="2" height="21"><hr color="#c0c0c0" SIZE="1">
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Username:</font></td>
					<td height="27" valign="top"><?php echo $ds_username; ?>
					</td>
				</tr>
				<tr>
					<td valign="top">
					<font face="Tahoma" size="2">Account Type:</font></td>
					<td height="26" valign="top"><?php echo $ds_ulevel; ?></td>
				</tr>
				<tr>
					<td valign="top" width="133">
					<font face="Tahoma" size="2">Registered Date:</font></td>
					<td height="26" width="266" valign="top"><?php echo $ds_doj; ?></td>
				</tr>
				<tr>
					<td colspan="2" height="33" valign="top">
					</td>
				</tr>
			</table>
		</div>
<?php
}
else
{
	header ("Location:index.php");
}
?>