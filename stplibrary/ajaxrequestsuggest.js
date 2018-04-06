var xmlhttp

function showsuggestion(str)
{
if (str.length==0)
  {
  document.getElementById("searchtitle").innerHTML="";
  document.getElementById("searchtitle2").innerHTML="";
  return;
  }
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Please ugrade your browser!");
  return;
  }
var criteria="";
criteria=document.searchform.searchin.value;
var url="pages/genkeywrd.php";
url=url+"?keyword="+str;
url=url+"&lookin="+criteria;
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function stateChanged()
{
if (xmlhttp.readyState==4)
  {
  document.getElementById("searchtitle").innerHTML=xmlhttp.responseText;
  document.getElementById("searchtitle2").innerHTML=xmlhttp.responseText;
  }
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}