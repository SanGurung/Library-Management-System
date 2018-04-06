
	<table width="788" height="88" border="0" align="center" cellpadding="0" cellspacing="0">
		<!-- MSTableType="layout" -->
		<tr>
		<td bgcolor="#494949" height="88" width="788">
		<p align="center"><font face="Arial Narrow" color="#FFFFFF">
		<a href="index.php"><font color="#F7FBFD">Home</font></a></font>&nbsp;
		<font color="#C9CED3">|</font>&nbsp;
		<font face="Arial Narrow" color="#FFFFFF"><a href="consearch.php">
		<font color="#F7FBFD">Online Catalogue</font></a></font>&nbsp;
		<font color="#C9CED3">|</font>&nbsp;
<?php
if(isset($_SESSION["userlevel"]))
{
	if($_SESSION["userlevel"]=="superadmin")
	{
?>		
		<font face="Arial Narrow" color="#FFFFFF"><a href="register.php">
		<font color="#F7FBFD">Register</font></a>&nbsp; |&nbsp;
<?php
	}
}

?>
		<a href="tos.php"><font color="#F7FBFD">Terms and Conditions</font></a></font>&nbsp;
		<font color="#C9CED3">|</font>&nbsp;
		<font face="Arial Narrow" color="#FFFFFF"><a href="aboutus.php">
		<font color="#F7FBFD">About us</font></a></font>&nbsp;
		<font color="#C9CED3">|</font>&nbsp;
		<font face="Arial Narrow" color="#FFFFFF"><a href="contactus.php">
		<font color="#F7FBFD">Contact us</font></a><font color="#F7FBFD"> |&nbsp;
		<a href="faq.php"><font color="#FFFFFF">Faq</font></a></font><br>
		&nbsp;<font size="2">Copyright 
		© 2009 St. Patrick's College London, All Rights Reserved.</font></font></td>
		</tr>
</table>

</div>
   </body>
</html>