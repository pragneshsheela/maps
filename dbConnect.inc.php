<?php 

$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "amul";
 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "amul";

 
 
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Some error occurred during connection " . mysqli_error($con));  
 
// Write query
 

?>