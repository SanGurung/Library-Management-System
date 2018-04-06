<?php 
	$corekey="userverification";
	include("core/dbmainsettings.php");
	include("core/connect_database.php");
	include("core/userfunctions.php");
?>

<html lang="en">
<head>
<script type="text/javascript" src="ajaxrequestsuggest.js"></script>
<script language="javascript" type="text/javascript">
function hidesuggest()
{
document.getElementById("flyword").style.visibility="hidden";
}

function showsuggest()
{
document.getElementById("flyword").style.visibility="visible";
}

function check()
{
str=document.searchform.keyword.value;	
if(str.length==0)
{
  document.getElementById("searchtitle").innerHTML="";
  document.getElementById("searchtitle2").innerHTML="";
}
function linkn(str)
{
	document.searchform.keyword.value=str;
}
function isuggest(strx)
{
	document.searchform.keyword.value=strx;
}


}
</script>

<style>
<!--
.buttonspic  { padding: 0px; background-color: #CCCCFF; }
.buttonspic a:hover,
.buttonspic a:active
{
	color: #ffffff;
	background-color: #F3C4FF;
}
-->
</style>
</head>
<body>
<div align="center" onMouseOver="javascript:hidesuggest();">
	<form action="consearchresult.php" method="get" name="searchform">
	    <Table border="0" width="406" height="243">
		<!-- MSTableType="layout" -->
		<tr>
		  <td colspan="4" height="48"><b>
			<font face="Times new Roman" size="6" color="#335577">Keyword</font></b><font face="Times new Roman" size="6"><b>
			<font color="#8C97A2">Search</font></b></font></td>
		</tr>
		<tr>
		  <td colspan="4" height="23"><hr color="#8C97A2" size="1"></td>
		</tr>
		<tr>
			<td valign="top">
			<p align="right"><font color="#444444">Search for:</font></td>
		  	<td valign="top" rowspan="4" width="9">&nbsp;</td>
		  	<td valign="top"><font color="#444444">
			<input type="text" name="keyword" autocomplete="off" size="20" onChange="check();" onKeyDown="showsuggest();showsuggestion(this.value);check();" onBlur="hidesuggest();"><br>
		  	<font color="#FFFFFF">
		  	<div style="border:1px solid #808080; position: absolute; background-color: #B3CBFF; visibility:hidden" id="flyword" onMouseOver="showsuggest();check();">
<span id="searchtitle"></span>
</div>
</font>
            </font>
            </td>
		  	<td height="43" valign="top">&nbsp;
		  	
		  	
		  	
		  	
		  	
		  	
		  	
		  	</td>
		</tr>
		<tr>
			<td valign="top">
			<p align="right"><font color="#444444">Search in:</font></td>
			<td valign="top">
			<font color="#444444" size="-1" face="arial,helvetica,sans-serif" minmax_bound="true">
			<select name="searchin" minmax_bound="true" size="1" id="searchin">
			<option value="title" minmax_bound="true">Title</option>
			<option value="author" minmax_bound="true">Author</option>
			<option value="category" minmax_bound="true">Category</option>
			<option value="issn" minmax_bound="true">ISSN</option>
			<option value="isbn" minmax_bound="true">ISBN</option>
			</select></font></td>
			<td valign="top" height="28">&nbsp;
			</td>
		</tr>
		<tr>
			<td valign="top">&nbsp;</td>
 		  <td><a href="conadvsearch.php"><font color="#335577">
			Advance Search</font></a></td>
 		  <td height="27" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" width="87">&nbsp;</td>
 		  <td width="155"><font color="#444444"><input type="submit" value="Send"> <input type="reset" value="Clear"></font></td>
 		  <td height="34" width="137" valign="top">&nbsp;</td>
		</tr>
		<tr>
		  <td colspan="4" height="24"><hr color="#8C97A2" size="1"></td>
		</tr>
		<tr>
			<td valign="top" colspan="4" height="21">
			<div style="z-index: 1; left: 738px; top: 93px; background-color:#EBEBEB" id="layer1">
				<font color="#444444">Suggestions:  
				 <div id="searchtitle2"></div></font>			</div>			</td>
		</tr>
		
	    </Table>	
</style>
<?php
$kword="";
$searchin=""; 
if(isset($_GET['keyword']))
{
	$kword=$_GET['keyword'];
}
if(isset($_GET['searchin']))
{
	$searchin=$_GET['searchin'];
}
//Now creating an query based upon users selection of search
$squery="SELECT * from $dbbooklib;";
$k="Title";
if($searchin=="title")
{
 
	$k="Title";
	$squery = "SELECT $k FROM $dbbooklib WHERE $k LIKE '%$kword%' ORDER BY $k asc;";
}
elseif($searchin=="author")
{
	$k="Authors";
	$squery = "SELECT $k FROM $dbbooklib WHERE $k LIKE '%$kword%' ORDER BY $k asc;";
}
elseif($searchin=="category")
{
	$k="Category_name";
	$squery = "SELECT $k FROM $dbbookcategory WHERE $k LIKE '%$kword%' ORDER BY $k asc;";
}
elseif($searchin=="issn")
{
	$k="ISSN";
	$squery = "SELECT $k FROM $dbbooklib WHERE $k LIKE '%$kword%' ORDER BY $k asc;";
}
elseif($searchin=="isbn")
{
	$k="ISBN";
	$squery = "SELECT $k FROM $dbbooklib WHERE $k LIKE '%$kword%' ORDER BY $k asc;";
}
else
{
	$k="Title";
	$squery = "SELECT $k FROM $dbbooklib WHERE $k LIKE '%$kword%' ORDER BY $k asc;";
}
$squery ="SELECT $dbbooklib.*, $dbbookcategory.* FROM $dbbookcategory INNER JOIN $dbbooklib ON $dbbookcategory.Category_ID = $dbbooklib.Category_ID WHERE $k LIKE '%$kword%' ORDER BY $k asc;";

$conn = mysql_connect($host, $username, $password) or die ('<b>Error connecting to mysql<b>');
mysql_select_db($dbname);

$res = mysql_query($squery);

?>


	<table height="65" style="border-style:solid; border-width:1px; padding:0px; " rules=all FRAME=BOX cellspacing="0" cellpadding="0" width="772">
		<!-- MSTableType="layout" -->

		<tr>
	<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">Code</font></td>
			<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">Title</font></td>
		<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">Authors</font></td>
	<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">Publisher</font></td>
	<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">Published Year</font></td>
	<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">ISBN/ISSN</font></td>
	<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">Price</font></td>
	<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">Contains CD</font></td>
	<td nowrap valign="top" bgcolor="#666699"><font color="#EBEBEB">
	Category</font></td>
		<td nowrap valign="top" height="21" bgcolor="#666699"><font color="#FFFFFF">
		Library Services</font></td>
		</tr>
<?php
$color="#FFFFFF";

while ($row = mysql_fetch_array($res))
{
?>
		<tr>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['Book_item_code'];?></td>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['Title'];?></td>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['Authors']; ?></td>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['Publisher'];?></td>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['Published_year'];?></td>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['ISBN']; echo $row['ISSN'];?></td>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['Price'];?></td>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['ContainsCD'];?></td>
			<td nowrap valign="top" bgcolor="<?php echo $color; ?>"><?php echo $row['Category_name'];?></td>
			<td nowrap height="21" valign="top" bgcolor="#FFFFFF" class="buttonspic">
<?php

	if(isset($_SESSION["username"]) && isset($_SESSION["loginstatus"]))
	{
		if($_SESSION["loginstatus"]=="done")
		{
			if($_SESSION["userlevel"]=="superadmin")
			{
?>

			<a href="conlibservicesresult.php?servicecode=<?php echo md5(base64_encode("borrow")); ?>&bid=<?php echo $row['Book_item_code'];?>" style="text-decoration: none">
			<font color="#333333" face="Arial Narrow">Borrow</font></a>&nbsp;|
<?php
			}
?>
			<a href="conlibservicesresult.php?servicecode=<?php echo md5(base64_encode("reserve")); ?>&bid=<?php echo $row['Book_item_code'];?>" style="text-decoration: none">
			<font color="#333333" face="Arial Narrow">Reserve</font></a>&nbsp;|
			<a href="conlibservicesresult.php?servicecode=<?php echo md5(base64_encode("order")); ?>&bid=<?php echo $row['Book_item_code'];?>" style="text-decoration: none">
			<font color="#333333" face="Arial Narrow">Order</font></a>		
<?php
		}
		else
		{
			echo "Please Login!";
		}
	}
	else
	{
		echo "Please Login!";
	}
?>			
	
			 </td>
			</tr>
<?php
	if($color=="#EFEFEF")
	{
		$color="#FFFFFF";
	}
	else
	{
		$color="#EFEFEF";
	}
}
?>
		<tr>
			<td valign="top" bgcolor="#EFEFEF" width="35">&nbsp;</td>
			<td valign="top" width="49" bgcolor="#EFEFEF">&nbsp;</td>
			<td valign="top" bgcolor="#EFEFEF" width="54">&nbsp;</td>
			<td valign="top" bgcolor="#EFEFEF" width="57">&nbsp;</td>
			<td valign="top" bgcolor="#EFEFEF" width="104">&nbsp;</td>
			<td valign="top" bgcolor="#EFEFEF" width="77">&nbsp;</td>
			<td valign="top" bgcolor="#EFEFEF" width="42">&nbsp;</td>
			<td valign="top" bgcolor="#EFEFEF" width="95">&nbsp;</td>
			<td valign="top" bgcolor="#EFEFEF" width="80">&nbsp;</td>
			<td height="21" width="177" valign="top" bgcolor="#EFEFEF">&nbsp;</td>
		</tr>

		</table>

	<table width="716" height="169">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" height="21">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" height="21"><font color="#444444">
			Search Tips:-</font></td>
		</tr>
		<tr>
			<td valign="top" height="119" width="710">
			<ul>
				<li style="color: #808080">
				<font color="#444444">If you know exact 
				title, author name, ISSN, ISBN please use the appropriate search 
				in option.</font></li>
				<li style="color: #808080">
				<font color="#444444">If you not sure about 
				title, author name, ISSN, ISBN, please use less keywords and 
				choose 'All words' option.</font></li>
				<li style="color: #808080">
				<font color="#444444">e.g If the book title 
				is 'A complete java reference' then use less keywords like 
				'java' and search in title. </font></li>
				<li style="color: #808080">
				<font color="#444444">Enter the keyword 
				separately with spaces.</font></li>
				<li style="color: #808080">
				<font color="#444444">Click </font>
				<a href="conadvsearch.php"><font color="#335577">Advance Search</font></a><font color="#444444"> 
				for an advance option to search.</font></li>
			</ul>
			</td>
		</tr>
		</table>
		</form>
</div>
	
</body>
</html>