<?php
if(!$application_key='756f880c793fb40b5d00d71b46e95fd6' && $corekey=="userverification")
{
die("Access not Granted.");
}
// my database connection file here we will change the host,password, username....

$host = "localhost";
$username = "root";
$password = "";  
$dbname = "stp_online_libray_db";
$dbbooklib = 'lib_book_details';
$dbbookcategory='lib_book_categories';

?>