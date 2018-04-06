
<head>
<meta http-equiv="Content-Language" content="en-gb">
</head>

<?php
session_start();
$application_key='756f880c793fb40b5d00d71b46e95fd6';
$imagelocation="midbanner_images/lower_banner_library_services.jpg";

include('conhead.php');
include('conlowerbanner.php');
?>
<div align="center">
	<table border="0" cellspacing="0" cellpadding="0" width="477" height="82">
		<!-- MSTableType="layout" -->
		<tr>
			<td height="82" width="477">
			
				<font face="Times New Roman" size="5" color="#602778">Order Book</font><font color="#602778"><font size="5" face="Times New Roman">.</font><font size="4"> </font>
	</font>
			
				<hr color="#669900" size="1">
				
			<font color="#333333">
			Please search for 
			the book which you want to order..<br>
			note: Please pay the amount within 7 working days for 
					quicker service. Thank you. For further details contact us.<br>
			Thank you</font><hr color="#669900" size="1">
				
			</td>
		</tr>
	</table>
</div>
<?php
include('consearchbody.php');
include('conlower.php');
?>