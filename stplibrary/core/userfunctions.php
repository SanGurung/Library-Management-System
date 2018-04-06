<?php
if(!$application_key='756f880c793fb40b5d00d71b46e95fd6' && $corekey=="userverification")
{
die("Access not Granted. Accessmode::usf1.0");
}

//************************Functions Name**********************************************//
//login($username,$password,$tablename,$connection)
//countmember($tablename, $connection);
//customerinfo($username,$tablename,$connection);
//savecontactus($fstname,$lstname,$emailid,$address,$comments)
//changepassword($usrname,$pword,$tablename,$connection)
//************************Functions starts now**********************************************//

function login($username,$password,$tablename,$connection)
{
$lg_sql="SELECT * FROM `" . $tablename ."` WHERE ((`username`='" . $username . "') AND (`password`='". $password ."'))";
$lg_result=mysql_query($lg_sql,$connection);
$lg_total=mysql_num_rows($lg_result);
return $lg_total;
}
//************************************************************************************//
function changepassword($usrname,$pword,$tablename,$connection)
{
$encrpted_newpassword=md5(base64_encode($pword));
$cg_sql="UPDATE `" . $tablename . "` SET `password` = '" . $encrpted_newpassword ."' where `username` = '" . $usrname ."';";
$cg_result=mysql_query($cg_sql,$connection);
return $cg_result;

}
//************************************************************************************//
function countmember($tablename, $connection)
{
$cm_sql="SELECT * FROM " . $tablename .";";
$cm_result=mysql_query($cm_sql,$connection);
$cm_total=mysql_num_rows($cm_result);
return $cm_total;
}
//
function showallusernames($tablename,$connection)
{
$color="#000000";
$mio_sql="SELECT *  FROM  " . $tablename ." ORDER BY `familyname` , `firstname`;";
$mio_result=mysql_query($mio_sql,$connection);
while ($mio_showdata=mysql_fetch_array($mio_result))
{
echo "<tr>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mio_showdata['id'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mio_showdata['username'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mio_showdata['title'] . "</td>";
echo "<td valign='top'  style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mio_showdata['firstname'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mio_showdata['familyname'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mio_showdata['dob'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mio_showdata['email'] . "</td>";

echo "<td  valign='top' align='center' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'><a href='viewuserdetails.php?id=" . $mio_showdata['id'] . "'><font style='text-decoration: none'><font color='#669900'>view</font></font></a></td>";
echo "</tr>";
	if($color=="#000000")
	{
	    $color="#1F1F1F";
	}
	else
	{
	    $color="#000000";
	}
}
}
//************************************************************************************//
function membersinfo($username1,$tablename,$connection)
{
global $cs_id,$cs_title,$cs_firstname,$cs_familyname,$cs_dob, $cs_gender;
global $cs_houseno,$cs_streetname,$cs_country,$cs_postcode,$cs_mobileno;
global $cs_telephone,$cs_email,$cs_username,$cs_password,$cs_userlevel;
$cs_sql="SELECT * FROM `" . $tablename ."` WHERE `username`='" . $username1 . "'";
$cs_result=mysql_query($cs_sql,$connection);
$cs_showdata=mysql_fetch_array($cs_result);

 $cs_id=$cs_showdata['id'];
 $cs_title=$cs_showdata['title'];
 $cs_firstname=$cs_showdata['firstname'];
 $cs_familyname=$cs_showdata['familyname'];
 $cs_dob=$cs_showdata['dob'];
 $cs_gender=$cs_showdata['gender'];
 $cs_houseno=$cs_showdata['houseno'];
 $cs_streetname=$cs_showdata['streetname'];
 $cs_country=$cs_showdata['country'];
 $cs_postcode=$cs_showdata['postcode'];
 $cs_mobileno=$cs_showdata['mobileno'];
 $cs_telephone=$cs_showdata['telephone'];
 $cs_email=$cs_showdata['email'];
 $cs_username=$cs_showdata['username'];
 $cs_userlevel=$cs_showdata['user_level_code'];
 $cs_datejoined=$cs_showdata['date_joined'];


}
//************************************************************************************//
function savecontactus($fstname,$lstname,$emailid,$address,$comments,$tablename,$connection)
{
$sc_sql="INSERT INTO ". $tablename . "(`Firstname` ,`Lastname` ,`Email` ,`Address` ,`Message` )VALUES ('" . $fstname . "','" . $lstname . "','" . $emailid . "','" . $address . "','" . $comments. "');";
return mysql_query($sc_sql,$connection);
}
//************************************************************************************//
function register($title, $firstname,$familyname,$dob,$gender,$houseno,$streetname,$country,$postcode,$mobileno,$telephoneno,$email,$uname ,$password1,$doj,$ulevel ,$tablename,$connection)
{
$encrypted_password=md5(base64_encode($password1));
$rg_sql="INSERT INTO `" . $tablename ."` (`title` ,`firstname` ,`familyname` ,`dob` ,`gender` ,`houseno` ,`streetname` ,`country` ,`postcode` ,`mobileno` ,`telephone` ,`email` ,`username` ,`password` , `date_joined`, `user_level_code` ) VALUES (" . "'" . $title . "','" . $firstname . "','" . $familyname . "','" . $dob . "','" . $gender . "','" . $houseno . "','" . $streetname . "','" . $country . "','" . $postcode . "','" . $mobileno . "','" . $telephoneno . "','" . $email . "','" . $uname  . "','" . $encrypted_password ."','".$doj."','".$ulevel."');";
echo $rg_sql;
return mysql_query($rg_sql,$connection);
}
//************************************************************************************//
function showmsgintable($tablename,$connection)
{
$color="#000000";
$mg_sql="SELECT * FROM `" . $tablename ."`;";
$mg_result=mysql_query($mg_sql,$connection);
while ($mg_showdata=mysql_fetch_array($mg_result))
{
echo "<tr>";
echo "<td  valign='top' style='border-left-width: 1px; border-right: 1px solid #3A3A3A; border-top-width: 1px; border-bottom: 1px solid #3A3A3A' bgcolor='" . $color . "'  >&nbsp;" .  $mg_showdata['id'] . "</td>";
echo "<td valign='top'  style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mg_showdata['Firstname'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mg_showdata['Lastname'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mg_showdata['Email'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mg_showdata['Address'] . "</td>";
echo "<td  valign='top' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'>&nbsp;" . $mg_showdata['Message'] . "</td>";
echo "<td  valign='top' align='center' style='border-right: 1px solid #333333; border-bottom: 1px solid #333333' bgcolor='" . $color . "'><a href='deletemessage.php?id=" . $mg_showdata['id'] . "'><font style='text-decoration: none'><font color='#669900'>delete</font></font></a></td>";
echo "</tr>";
	if($color=="#000000")
	{
	    $color="#1F1F1F";
	}
	else
	{
	    $color="#000000";
	}
}
}
//************************************************************************************//
function givemeuserid($userm,$connection)
{
$uid_sql="SELECT * FROM `memberinfo` where username='" . $userm . "';";
$uid_result=mysql_query($uid_sql,$connection);
$uid_showdata=mysql_fetch_array($uid_result);
echo $uid_showdata['id'];
}
//************************************************************************************//
?>