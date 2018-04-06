<?php
$success="false";
$particularBookid="?";
if($application_key=='756f880c793fb40b5d00d71b46e95fd6')
{
	if(isset($_GET['servicecode']) && isset($_GET['bid']))
	{
		$service_code=$_GET['servicecode'];
		$bokID=$_GET['bid'];


	$corekey="userverification";
	include("core/dbmainsettings.php");
	include("core/connect_database.php");
	include("core/userfunctions.php");
	
$bdt_sql="SELECT * FROM `lib_book_details` WHERE `Book_item_code`=$bokID;";
$bdt_result=mysql_query($bdt_sql);
$bdt_showdata=mysql_fetch_array($bdt_result);
$bdt_isbn=$bdt_showdata['ISBN'];
$bdt_title=$bdt_showdata['Title'];

		if($service_code==md5(base64_encode("borrow")))
		{

?>
<div align="center">
<form name="isbook" action="issuebookservice.php?bid=<?php echo $bokID; ?>" method="post">	
<table border="0" cellspacing="0" cellpadding="0" width="514" height="247">
	<!-- MSTableType="layout" -->
	<tr>
	<td valign="top" colspan="3">
	<div align="left"><font size="5" color="#602778" face="Times New Roman">
	Issue Book</font><font color="#602778"><font size="5" face="Times New Roman">.</font><font size="4"> </font>
	</font></div>
				<hr color="#669900" size="1">
				
					</td>
	<td height="42"></td>
	</tr>
	<tr>
		<td valign="top" colspan="3">&nbsp;</td>
		<td height="22"></td>
	</tr>
	<tr>
		<td valign="top" rowspan="6" width="146">&nbsp;</td>
		<td valign="top"><font color="#303030">Book Title:</font></td>
		<td valign="top">
				<div align="left"> &nbsp;<font color="#1B1B1B">
				<?php echo $bdt_title;	?>
				</font></div>
		
		</td>
		<td height="19"></td>
	</tr>
	<tr>
	<td valign="top"><font color="#303030">ISBN:</font></td>
		<td valign="top"><font color="#1B1B1B"><?php echo $bdt_isbn; ?></font></td>
		<td height="21"></td>
	</tr>
	<tr>
		<td valign="top">Issued for:</td>
		<td valign="top"><select size="1" name="issuedto">
<?php
$mb_sql="SELECT * FROM `member_details` order by firstname,familyname;";

$mb_result=mysql_query($mb_sql);
while($mb_showdata=mysql_fetch_array($mb_result))
{
?>
		<option value="<?php echo $mb_showdata['id']; ?>"><?php echo $mb_showdata['firstname']." ". $mb_showdata['familyname']; ?></option>
<?php
}
?>
		</select></td>
		<td height="22"></td>
	</tr>
	<tr>
		<td valign="top"><font color="#303030">Expiry Date:</font></td>
		<td valign="top"> <font face="Verdana" color="#000099" size="2"> 
                <select size="1" name="iday" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                </font> 
		<select name="imonth" size="1" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option value="1" selected>January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select> 
		<select name="iyear" size="1" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option value="2009"><?php echo date("Y"); ?></option>
					<option value="2010"><?php $dm= date("Y")+1; echo $dm; ?></option>
                </select></td>
		<td height="22"></td>
	</tr>
	<tr>
		<td valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td height="19"></td>
	</tr>
	<tr>
		<td valign="top" width="110">&nbsp;</td>
		<td valign="top" width="256"><input type="submit" value="Issue book"></td>
		<td height="39"></td>
	</tr>
	<tr>
		<td valign="top" colspan="3">
					<hr color="#669900" size="1">
				
				</td>
		<td height="41" width="2"></td>
	</tr>
</table>
</form>	
</div>




<?php
	}
	elseif($service_code==md5(base64_encode("reserve")))
	{

	$issued_sql="INSERT INTO `$dbname`.`lib_reservation` (`Member_ID`, `Book_item_code`, `Reservation_date`, `Expected_date`) VALUES ('".$_SESSION["username"]."', '".$bokID."', '".date("Y-m-d")."', '".date("Y-m-d")."');";

	if(mysql_query($issued_sql,$conn))
	{
		$success="true";
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
		<font color="#333333"> <br> </font>
		<font size="5" color="#602778" face="Times New Roman">
		Reservation</font><font color="#333333"> </font>
				<hr color="#669900" size="1">
				
		<br>
				<div align="center">
				
				<font size="4"><font color="#602778">
				<?php 
				if($success=="true")
				{
					echo "Your request for book reservation has been successful";
				}
				else
				{
					echo "Your request for book reservation was unsuccessful!<br> This may happen if the book is unavailable in library<br>Please contact librarian.";
				}
				?>
				. 
				</font> <font color="#333333">
				
				<?php
				if($success=="true")
				{
				?>
					<br>
					</font> </font> 
					<font color="#333333">Book Title:: <?php echo $bdt_title; ?>. <br>ISBN::<?php echo $bdt_isbn; ?><br>Reservation date:: <?php echo date("Y-m-d"); ?><br>
					<br>
					note: We will send you notification (email) upon the book 
					available for issuing.
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
	elseif($service_code==md5(base64_encode("order")))
	{
?>
<?php



	$order_sql="INSERT INTO `$dbname`.`book_order_request` ( `Book_item_code`, `Member_ID`, `Order_date`, `Confirmation_date`, `Status`) VALUES ('".$bokID."', '".$_SESSION["username"]."', '".date("Y-m-d")."', '".date("Y-m-d")."', 'pending');";
	if(mysql_query($order_sql,$conn))
	{
		$success="true";
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
		<font color="#333333"> <br>Order Details: </font>
				<hr color="#669900" size="1">
				
		<br>
				<div align="center">
				
				<font size="4"><font color="#602778">
				<?php 
				if($success=="true")
				{
					echo "Your request for order book has been successful";
				}
				else
				{
					echo "Your request for order book was unsuccessful!<br> Please contact librarian.";
				}
				?>
				. 
				</font> <font color="#333333">
				
				<?php
				if($success=="true")
				{
				?>
					<br>
					</font> </font> 
					<font color="#333333">Book Title:: <?php echo $bdt_title; ?>. <br>ISBN::<?php echo $bdt_isbn; ?>
					<br>Order date:: <?php echo date("Y-m-d"); ?>
					<br>
					<br>
					note: Please pay the amount within 7 working days for 
					quicker service. Thank you.
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
}
else
{
	echo "# Please reload the browser!<br># This page cannot be viewed directly, please retype the URL."; 
}
?>