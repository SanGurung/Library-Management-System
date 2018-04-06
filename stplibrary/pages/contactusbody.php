	  <!--
function validateit()
{
var err;
var msg;
var incode="false";
var returntype=true;
err="false";
//now check that if the values are blank or not//
	if(document.contactus.fname.value=="")
		{
		  document.contactus.fname.style.backgroundColor="#DEE9F3";
		  err="true";
		}
	if(document.contactus.lname.value=="")
		{
			document.contactus.lname.style.backgroundColor="#DEE9F3";
			err="true";
		}
	if(document.contactus.comments.value=="")
		{
			document.contactus.comments.style.backgroundColor="#DEE9F3"
			err="true";
		}
	if(document.contactus.email.value=="")
		{
			document.contactus.email.style.backgroundColor="#DEE9F3"
			err="true";
		}
	if(document.contactus.address.value=="")
		{
			document.contactus.address.style.backgroundColor="#DEE9F3";
			incode="true";
		}
//now validating email//


//now checking all things and letting it to be send if there is no error.
			if(err=="true")
			{
	    		msg="Please correctly fill the highlighted box.";
	    		alert(msg);
				returntype=false;
			 }
			 if(err=="false" && incode=="true")
			 {
			    msg="Are you sure you dont want to give your address details." + "\nIt will be easier for us to help you more easier if you give us details.";
			    returntype=confirm(msg);
			 }
			  return returntype;
}
//-->
        <div align="center">
        <form name="contactus" action="contactus/send.php" onSubmit="return validateit()" method="POST" style="border-style: solid; border-width: 0px">
	    <Table border="0" width="442" height="740">
		<!-- MSTableType="layout" -->
		<tr>
		  <td colspan="2" height="38"><font face="Times new Roman" size="6"><b>
			<font color="#335577">Contact</font> <font color="#8C97A2">us</font></b></font></td>
		</tr>
		<tr>
		  <td colspan="2" height="18"><hr color="#8C97A2" size="1"></td>
		</tr>
		<tr>
		  <td colspan="2" height="250" valign="top">
			<p align="justify"><font color="#4F4F4F">&nbsp;&nbsp;&nbsp; 
			<font face="Tahoma" size="2">Dear user if you have an non 
			urgent message then please do send us your queries, feedback, 
			suggestions, any thing by filling the <label for="firstname">contact us online</label> form 
			below. Please ensure that you fill all the 
requirements correctly so that we can contact you. We ensure you that any kind of 
			your details will not be shared with any third party.<br>&nbsp;&nbsp;&nbsp;&nbsp; If you prefer to write to us then here is our 
			address,<br>&nbsp;London's Day Out, IT Manager ::<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			Mr. Someone, 
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 28 Great Chapel 
			Street,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Central London,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; United Kingdom</font></font></p>
			<hr color="#8C97A2" size="1">
			<font face="Tahoma" style="font-size: 9pt">
			<b>Contact us</b><font color="#4F4F4F"> by telephone</font></font><font color="#4F4F4F">&nbsp;
			</font> </td>
		</tr>
		<tr>
		  <td colspan="2" height="30">
				<font face="Times new Roman" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> 
				<font face="Tahoma" style="font-size: 9pt">Telephone no:
				<font color="#4F4F4F">020000000 </font></font>				</td>
		</tr>
		<tr>
		  <td colspan="2" height="18"><hr color="#8C97A2" size="1"></td>
		</tr>
		<tr>
		        <td colspan="2" height="21"><font face="Tahoma"><b> <span style="font-size: 9pt">Contact 
                  us</span></b><span style="font-size: 9pt"><font color="#4F4F4F"> 
                  online 
                  <?php 
if(isset($_SESSION['error']) && $_SESSION['error']=="fieldblank")
{ 
$_SESSION['error']="";
?>
				  <font color="#FF0000">&nbsp;&nbsp;|| * Please fill the form properly.</font>
<?php } ?>
				  </font></span></font></td>
		</tr>
		<tr>
		  <td>
		  <font face="Tahoma" color="#4F4F4F" style="font-size: 9pt">First Name*</font></td><td height="24"><input type="text" name="fname" class="mytextbox" onfocus="this.style.backgroundColor='#ffffff'" value='<?php 
		  if(isset($_SESSION["membername"]))
		  {
		  echo $_SESSION["membername"]; 
		  }
		  ?>'></td>
		</tr>
		<tr>
		  <td><font face="Tahoma" style="font-size: 9pt" color="#4F4F4F">Last Name*</font></td>
		  <td height="24"><input type="text" name="lname"  class="mytextbox" onfocus="this.style.backgroundColor='#ffffff'" value="<?php 
		  if(isset($_SESSION["familyname"]))
		  {
		  echo $_SESSION["familyname"];
		  }
		  ?>" /></td>
		</tr>
		<tr>
		  <td><font face="Tahoma" style="font-size: 9pt" color="#4F4F4F">Email*</font></td><td height="24"><input type="text" name="email"  class="mytextbox"  onfocus="this.style.backgroundColor='#ffffff'" value="<?php 
		  if(isset($_SESSION["email"]))
		  {
		  echo $_SESSION["email"];
		  }
		  ?>"></td>
		</tr>
		<tr>
		  <td>
			<font color="#4F4F4F" face="Tahoma" style="font-size: 9pt">Address:</font></td>
			<td height="24"><input type="text" name="address"  class="mytextbox"  onfocus="this.style.backgroundColor='#ffffff'" ></td>
		</tr>
		<tr>
		  <td colspan="2" height="21"><span style="font-size: 9pt">Comments/ 
			Feedback/ Message</span></td>
		</tr>
		<tr>
		  <td colspan="2" height="147">

			<textarea name="comments" align="left" cols="50" rows="8"  class="mytextbox" style="font-family: Tahoma; font-size: 9pt; color: #4F4F4F"  onfocus="this.style.backgroundColor='#ffffff'" ></textarea>
			</td>
		</tr>
		<tr>
		  <td colspan="2" height="18"><hr color="#8C97A2" size="1"></td>
		</tr>
		<tr>
 		  <td colspan="2" height="29"><input type="submit" value="Send"> <input type="reset" value="Clear"></td>
		</tr>
		<tr>
			<td width="110"></td>
			<td height="2" width="322"></td>
		</tr>
		<tr>
		  <td colspan="2" height="18"><hr color="#8C97A2" size="1"></td>
		</tr>
	    </Table>	
        </form>
		</div>
	