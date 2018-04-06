<div align="center">
<?php
if(($_SESSION["status"]=="loggedin") && ($_SESSION["username"]!=""))
{
	$gid=$_SESSION["username"];
	$corekey="userverification";
	include("core/dbmainsettings.php");
	include("core/connect_database.php");
	include("core/userfunctions.php");
	$searchin=$_POST['searchin'];
	if($searchin==
	$xs_sql="SELECT * FROM `lib_book_details` WHERE `Title`='" . $gid. "'";
    if($xs_result=mysql_query($xs_sql,$conn))
	{   
		if($xs_showdata=mysql_fetch_array($xs_result))
		{
				$ds_id=$xs_showdata['Title'];

		}
		else
		{
		Echo "No records!";
		}
	 }
?>
			
<?php
}
else
{
	header ("Location:index.php");
}
?>