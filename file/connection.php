<?php
$servername = "localhost";
$username = "root";
$password = "1304Shubham@";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>