<?php
session_start();
$application_key='756f880c793fb40b5d00d71b46e95fd6';
$imagelocation="midbanner_images/lower_banner_library_services.jpg";

include('conhead.php');
include('conlowerbanner.php');

$success="false";
$particularBookid="?";
$bdt_isbn="?";
$bdt_title="?";
if($application_key=='756f880c793fb40b5d00d71b46e95fd6')
{
	if(isset($_GET['bid']) && isset($_POST['iday']) && isset($_POST['imonth']) && isset($_POST['iyear']) && isset($_POST['issuedto']) )
	{
		$bokID=$_GET['bid'];
		
			//now borrowing the book
			$corekey="userverification";
			include("core/dbmainsettings.php");
			include("core/connect_database.php");
			include("core/userfunctions.php");
	
			//checking if the book is available or not.
			$xls_sql="SELECT * FROM `lib_book` WHERE `Book_item_code`='$bokID' && `Allow_status`='Available';";
			$xlg_result=mysql_query($xls_sql);
			$row = mysql_fetch_array($xlg_result);
			$particularBookid=$row['Book_ID'];
	
			$tb_count=mysql_num_rows($xlg_result);

			if($tb_count>0)
			{
				$iufor=$_POST['issuedto'];
				$expdate=$_POST['iyear']."-".$_POST['imonth']."-".$_POST['iday'];
				$issue_sql="INSERT INTO `stp_online_libray_db`.`lib_issue` (`Book_ID`, `Issued_date`, `Issued_by`, `issued_for`, `Expiry_date`) VALUES ('$particularBookid', '".date("Y-m-d")."', '".$_SESSION["username"]."', '".$iufor."', '".$expdate."');";
				
				if(mysql_query($issue_sql))
				{
					$success="true";
				}
				else
				{
					$success="false";
				}
				$bdt_sql="SELECT * FROM `lib_book_details` WHERE `Book_item_code`=$bokID;";
				$bdt_result=mysql_query($bdt_sql);
				$bdt_showdata=mysql_fetch_array($bdt_result);
				$bdt_isbn=$bdt_showdata['ISBN'];
				$bdt_title=$bdt_showdata['Title'];
			}
			else
			{
				$success="false";
			}
			
			
?>


<div align="center">
	
<table border="0" cellspacing="0" cellpadding="0" width="514" height="164">
	<!-- MSTableType="layout" -->
	<tr>
		<td width="514" height="164" valign="top">
				<hr color="#669900" size="1">
				
		<br>
				<div align="center"><font size="4"><font color="#602778">
				<?php 
				if($success=="true")
				{
					echo "Your request for borrowing has been successful";
				}
				else
				{
					echo "Your request for issuing book was unsuccessful!<br> This may happen if the book is unavailable in library to issue.";
				}
				?>
				</font><font color="#602778">. </font> <font color="#333333">
				
				<?php
				if($success=="true")
				{
				?>
					<br>
					</font> </font> <font color="#333333"> <br>Issue Details: </font> <br>
					<font color="#333333">Book ID: <?php echo $particularBookid; ?><br> Book Title:: <?php echo $bdt_title; ?>. <br>ISBN::<?php echo $bdt_isbn; ?><br>
&nbsp;</font>
				<?php
				}
				?>
				<hr color="#669900" size="1">
				
				</div>
		
		</td>
	</tr>
</table>
<p>
	
</div>
<?php
	}
	else
	{
?>
		<div align="center">
	
<table border="0" cellspacing="0" cellpadding="0" width="516" height="139">
	<!-- MSTableType="layout" -->
	<tr>
		<td width="514" valign="top">
				<hr color="#669900" size="1">
				
		<br>
				<div align="center"><font size="4"><font color="#401B50">
					Something went wrong please retry!!</font><font color="#602778">. </font> <font color="#333333">
					<br>
					&nbsp;</font></font><hr color="#669900" size="1">
				
				</div>
		
		</td>
	<td height="139" width="2"></td>
	</tr>
</table>
<p>
	
</div>
<?php
	}
}
else
{
	echo "# Please reload the browser!<br># This page cannot be viewed directly, please retype the URL."; 
}

include('conlower.php');
?>