<?php
$host="localhost"; // address to the database
$username="root"; // Mysql username
$password="5t3v3j0b5Apple!@#"; // Mysql password
$db_name="sac"; // Database name

//check for authentication 
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

?>