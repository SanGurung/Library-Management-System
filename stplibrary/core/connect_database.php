<?php
if(!$application_key='756f880c793fb40b5d00d71b46e95fd6'&& $corekey=="userverification")
{
die("Access not Granted.");
}

// my database connection file here we will change the host,password, username....
$conn =mysql_connect($host, $username, $password);
mysql_select_db($dbname,$conn); //or die ("Couldnot connect to the database");
?>