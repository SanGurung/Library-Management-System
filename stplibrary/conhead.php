<!-- This website is a dedicated course Work of Santosh Kumar Gurung :: Student id:101172 ::2009-->
<html>
 <head>
	<meta http-equiv="Content-Language" content="en-gb">
	<title>St Patrick's College London</title>

	<meta name="keywords" content="Library">	
	<meta name="Coursework" content="Santosh Gurung :: 101172">
	<meta http-equiv="imagetoolbar" content="no">

 	<link rel="stylesheet" type="text/css" href="css/navcss.css">

 	<style>
<!--
.varybgnormal      { font-size: 10pt; color: #737373; background-color: #E7E7E7}
.varybgover  { color: #FFFFFF; font-size: 10pt; font-weight: bold; background-color: #77C12C }
-->
</style>

 </head>
   <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF" style="background-image: url('images/img_background.jpg'); background-repeat: repeat-x">
	<div align="center" >
	
  <table border="0" cellspacing="0" cellpadding="0" width="1347" height="1">
	<!-- MSTableType="layout" -->
	<tr>
		<td height="1" valign="top" bgcolor="#000000" width="1347"></td>
	</tr>
	</table>
	
  <table border="0" cellpadding="0" cellspacing="0" width="788" height="258">
	<!-- MSTableType="layout" --><tr>
		<th bgcolor="#AA60A8" colspan="4" valign="bottom" height="19">&nbsp;</th>
		</tr>
	<tr>
		<th bgcolor="#FFFFFF" colspan="4" valign="bottom" height="196">
		<img border="0" src="images/lib_banner_blue_theme.jpg" width="788" height="196"></th>
		</tr>
	<tr>
		<td valign="top" width="22">
		<img border="0" src="images/img_faded_grey_corner.jpg" align="right" width="11" height="43" ></td>
		<td bgcolor="#FFFFFF" background="images/img_faded_grey_center.jpg" width="583">
		<div class="navigation" style="width: 583px; height: 29px">
			<ul>
				<li><a href="index.php" title="Home"><font color="#4F4F4F">Home</font></a></li>
                <?php
				$word='login';
				$link='login';
				if(isset($_SESSION["status"]))
				{
					if($_SESSION["status"]=="loggedin")
					{
						$word='logout';
						$link='login/logout';
					}
				}
				?>
				<li><a title="Login" href="<?php echo "$link.php" ?>"><font color="#4F4F4F">
<?php echo "$word" ?></font></a></li>
				
<?php
if(isset($_SESSION["userlevel"]))
{
	if($_SESSION["userlevel"]=="superadmin")
	{
?>					
				<li><a title="Register" href="register.php">
				<font color="#4F4F4F">Register</font></a></li>
<?php
	}
}

?>
				<li><a title="Library Catalogue" href="consearch.php">
				<font color="#4F4F4F">Library Catalogue</font></a></li>
								<li><a href="libraryservices.php" title="Library Services"><font color="#4F4F4F">
				Library Services</font></a></li>
					<li><a href="contactus.php" title="Contact">
				<font color="#4F4F4F">Contact us</font></a></li>
				<li><a href="faq.php" title="FAQt"><font color="#4F4F4F">FAQ</font></a></li>
			</ul></div></td>
		<td width="169" background="images/img_faded_grey_center.jpg">
		<div align="right"><font color="#7B2828"> 
<?php
				if(isset($_SESSION["status"]) && isset($_SESSION["fullname"]))
				{
					if($_SESSION["status"]=="loggedin")
					{
						echo "<a href='viewdetails.php' title='View Details.'>". $_SESSION["fullname"]."</ a>";
					}
				}
?>		
		
		&nbsp;</font></div></td>
		<td valign="top" height="43" width="14">
		<img border="0" src="images/img_faded_grey_corner_right.jpg" width="11" height="43"></td>
		</tr>
	</table>