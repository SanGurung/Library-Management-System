<?php
if($application_key=='756f880c793fb40b5d00d71b46e95fd6')
{
?>
<div align="center">
<form action="login/index.php?request=login&key=5c32dbc028feb879ce2902fcb6d38ef3" method='post'>
	<table width="283" height="191" border="0" cellspacing="0" cellpadding="0" >
            <!-- MSTableType="layout" -->
            <tr>
              <td colspan="2" height="38"><b>
				<font face="Times new Roman" size="4">Login</font></b>
				<hr color="#669900" size="1">
	</td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">User Name:</font></td>
              <td height="29"><input type="text" name="uname" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">Password:</font></td>
              <td height="30"><input type="password" name="password" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
				<td valign="top">&nbsp;</td>
              <td height="40"><input name="login" type="submit" value="Login"> 
                <input name="reset" type="reset" value="Reset"></td>
            </tr>
			<tr>
              <td colspan="2" height="53" valign="top">
				<hr color="#669900" size="1">
			  <?php
			  
			  if(isset($_SESSION['loginerr']))
			  {
			  if($_SESSION['loginerr']=="err")
			  {
			  ?>
			  <font color="#FF0000" size="2" face="Tahoma">Msg: Login failed! Please provide valid username or password!</font>
              <?php 
			  }
			  }
			  unset($_SESSION['loginerr']);
			  ?>              </td>
            </tr>
			<tr>
				<td width="104"></td>
				<td height="1" width="179"></td>
			</tr>
          </table>
         </form>
        </div>
<?php
}
else
{
	echo "# Please reload the browser!<br># This page cannot be viewed directly, please retype the URL."; 
}
?>