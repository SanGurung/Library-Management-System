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

function isuggest(strx)
{
	document.searchform.keyword.value=strx;
}

function check()
{
str=document.searchform.keyword.value;	
if(str.length==0)
{
  document.getElementById("searchtitle").innerHTML="";
  document.getElementById("searchtitle2").innerHTML="";
}


}
</script>
<div align="center" onMouseOver="javascript:hidesuggest();">
	<form action="consearchresult.php" method="get" name="searchform">
	    <Table border="0" width="406" height="266">
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
		  	<div style="border:1px solid #808080; position: absolute; background-color: #B3CBFF; visibility:hidden" id="flyword" onMouseOver="javascript:showsuggest();check();">
<span id="searchtitle"></span></div>
</font>
            </font>            </td>
		  	<td height="43" valign="top">&nbsp;		  	</td>
		</tr>
		<tr>
			<td valign="top">
			<p align="right"><font color="#444444">Search in:</font></td>
			<td valign="top"><font color="#444444" size="-1" face="arial,helvetica,sans-serif" minmax_bound="true">
			  <select name="searchin" minmax_bound="true" size="1" id="searchin">
                <option value="title" minmax_bound="true">Title</option>
                <option value="author" minmax_bound="true">Author</option>
                <option value="category" minmax_bound="true">Category</option>
                <option value="issn" minmax_bound="true">ISSN</option>
                <option value="isbn" minmax_bound="true">ISBN</option>
                            </select>
			</font></td>
		  <td valign="top" height="28">&nbsp;			</td>
		</tr>
		<tr>
			<td valign="top">&nbsp;</td>
 		  <td><a href="conadvsearch.php"><font color="#335577">
			Advance Search</font></a></td>
 		  <td height="27" valign="top">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" width="87">&nbsp;</td>
 		  <td width="155"><font color="#444444">
			<input type="submit" value="Search"> <input type="reset" value="Clear"></font></td>
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

	<table width="735" height="166">
		<!-- MSTableType="layout" -->
		<tr>
			<td valign="top" height="21">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" height="21"><font color="#444444">
			Search Tips:-</font></td>
		</tr>
		<tr>
			<td valign="top" height="116" width="729">
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
				<a href="pages/conadvsearch.php"><font color="#335577">Advance Search</font></a><font color="#444444"> 
				for an advance option to search.</font></li>
			</ul>
			</td>
		</tr>
		</table>
  </form>
</div>
