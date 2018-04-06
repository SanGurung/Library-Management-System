<?php
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
$kword="";
$searchin="";
if(isset($_GET['keyword']))
{
  $kword=$_GET['keyword'];
}

if(isset($_GET['lookin']))
{
	$searchin=$_GET['lookin'];
}

if($kword!="")
{
$conn = mysql_connect($host, $username, $password) or die ('Error connecting to mysql');
mysql_select_db($dbname);

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

	
	
	//$squery ="SELECT $dbbooklib.*, $dbbookcategory.* FROM $dbbookcategory INNER JOIN $dbbooklib ON $dbbookcategory.Category_ID = $dbbooklib.Category_ID WHERE $k LIKE '%$kword%' ORDER BY $k asc;";
$res = mysql_query($squery);
$cnt_count=mysql_num_rows($res);
if($cnt_count>=10)
{
	$cnt_count=9;
}
elseif($cnt_count<=2)
{
	$cnt_count=2;
}
echo "<select size='$cnt_count'>";
while ($row = mysql_fetch_array($res))
{
?>
<option onclick="javascript:isuggest('<?php echo $row[$k]; ?>')">
	<font color="#454852">
		<?php echo $row[$k]; ?>
	</font>
	<br>
</option>
<?php
}
mysql_close($conn);
echo "</select>";
}

?>