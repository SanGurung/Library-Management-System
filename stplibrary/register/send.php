<?php
//This code is a work of Santosh K. Gurung
//key is 7sgdbc028feb879ce2902fcb6d38ef3
session_start(); 
//Now doing for the Captcha code verification
require_once('recaptchalib.php');
$publickey = "6LeVAgoAAAAAAAP2RQ_k0F36e9GeZZv2l0-16c63";
$privatekey = "6LeVAgoAAAAAAJJtn9kJ7_K1pcLqBgG2xWOdqKNA";
# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

$captchaVerify="Error";
if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                $captchaVerify="Verified!";
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
        }
}


// Now doing the verification for the registration
$application_key='756f880c793fb40b5d00d71b46e95fd6';
$corekey="userverification";

$title =$_POST['title'];
$firstname =$_POST['firstname'];
$familyname=$_POST['familyname'];
$dob=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
$gender=$_POST['sex'];
$houseno=$_POST['houseno'];
$streetname=$_POST['streetname'];
$country=$_POST['add1'];
$postcode=$_POST['postcode'];
$mobileno=$_POST['mobileno'];
$telephoneno=$_POST['telephoneno'];
$email =$_POST['email'];
$uname =$_POST['uname'];
$password1 =$_POST['password'];
$password2 =$_POST['rpassword'];
$doj=date("Y-m-d");
$ulevel=$_POST['ulevel'];
$err="false";
// Now checking if the field are blank or not
if($title=="" || $firstname=="" || $familyname=="" || $dob=="" || $gender=="" || $email=="" || $uname=="" || $password1=="" || $password2=="" || $password1!=$password2)
{
$_SESSION['errors']="fieldblank";
$err="true";
}
// Simple validations 
//if(is_numeric($houseno)==true)
//{
//$location="?houseno="
//}

if($application_key='756f880c793fb40b5d00d71b46e95fd6' && $_GET['account']=="new" && $uname==$_GET['user'] && $err!="true" && $captchaVerify=="Verified!")
{
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
	$conm=$conn;
    $csmm_sql="SELECT * FROM  member_details where username='" . $uname . "';";
    $csmm_result=mysql_query($csmm_sql,$conm);
    $csmm_total=mysql_num_rows($csmm_result);

	if($csmm_total==0)
	{
	if(register($title, $firstname,$familyname,$dob,$gender,$houseno,$streetname,$country,$postcode,$mobileno,$telephoneno,$email,$uname ,$password1, $doj, $ulevel, "member_details",$conm)==true)
	{
		$_SESSION['registered']="done";
		$_SESSION['realname']= $firstname;
		$_SESSION["regstatus"]="success";
		header ("Location:".$_SERVER['HTTP_REFERER']);
	}
	else
	{
	  die("Couldn't register!");
	}
	}
	else
	{
	   $_SESSION['userexist']="True";
        header ("Location:".$_SERVER['HTTP_REFERER']);
	}
}
else
{
	$_SESSION['captchainvalid']="True";
	header ("Location:".$_SERVER['HTTP_REFERER']);
}
?> 