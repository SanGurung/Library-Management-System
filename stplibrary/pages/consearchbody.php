<div align="center">
	<form action="conkeywordsearch.php" method="get">
	    <Table border="0" width="406" height="418">
		<!-- MSTableType="layout" -->
		<tr>
		  <td colspan="3" height="48"><b>
			<font face="Times new Roman" size="6" color="#335577">Keyword</font></b><font face="Times new Roman" size="6"><b>
			<font color="#8C97A2">Search</font></b></font></td>
		</tr>
		<tr>
		  <td colspan="3" height="23"><hr color="#8C97A2" size="1"></td>
		</tr>
		<tr>
			<td valign="top">
			<p align="right"><font color="#444444">Search for:</font></td>
		  	<td valign="top" rowspan="4" width="9">&nbsp;</td>
		  	<td height="38" valign="top"><font color="#444444">
			<input type="text" name="keyword" size="20" id="textIn">
		  	<div id="xmlOut"></div>
            </font>
            </td>
		</tr>
		<tr>
			<td valign="top">
			<p align="right"><font color="#444444">Search in:</font></td>
			<td valign="top" height="28">
			<font color="#444444" size="-1" face="arial,helvetica,sans-serif" minmax_bound="true">
			<select name="searchin" minmax_bound="true" size="1" id="searchin">
			<option selected value="all" minmax_bound="true">All words</option>
			<option value="title" minmax_bound="true">Title</option>
			<option value="author" minmax_bound="true">Author</option>
			<option value="category" minmax_bound="true">Category</option>
			<option value="issn" minmax_bound="true">ISSN</option>
			<option value="isbn" minmax_bound="true">ISBN</option>
			<option value="booknum" minmax_bound="true">Book Number</option>
			</select></font></td>
		</tr>
		<tr>
			<td valign="top">&nbsp;</td>
 		  <td height="27"><a href="conadvsearch.php"><font color="#335577">
			Advance Search</font></a></td>
		</tr>
		<tr>
			<td valign="top" width="87">&nbsp;</td>
 		  <td height="34" width="296"><font color="#444444"><input type="submit" value="Send"> <input type="reset" value="Clear"></font></td>
		</tr>
		<tr>
		  <td colspan="3" height="24"><hr color="#8C97A2" size="1"></td>
		</tr>
		<tr>
			<td valign="top" colspan="3" height="21"><font color="#444444">
			Search Tips:-</font></td>
		</tr>
		<tr>
			<td valign="top" colspan="3" height="155">
			<ul>
				<li style="color: #808080">
				<p align="justify"><font color="#444444">If you know exact 
				title, author name, ISSN, ISBN please use the appropriate search 
				in option.</font></li>
				<li style="color: #808080">
				<p align="justify"><font color="#444444">If you not sure about 
				title, author name, ISSN, ISBN, please use less keywords and 
				choose 'All words' option.</font></li>
				<li style="color: #808080">
				<p align="justify"><font color="#444444">e.g If the book title 
				is 'A complete java reference' then use less keywords like 
				'java' and search in title. </font></li>
				<li style="color: #808080">
				<p align="justify"><font color="#444444">Enter the keyword 
				separately with spaces.</font></li>
				<li style="color: #808080">
				<p align="justify"><font color="#444444">Click </font>
				<a href="conadvsearch.php"><font color="#335577">Advance Search</font></a><font color="#444444"> 
				for an advance option to search.</font></li>
			</ul>
			</td>
		</tr>

		
	    </Table>	
	</form>
</div>
	