<?php
ob_start();
session_start();
$host="localhost"; // Host name
include 'auth.php';

$db_name="sac"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phonenum'];


// To protect MySQL injection (more detail about MySQL injection)
$fname = stripslashes($fname);
$fname = mysql_real_escape_string($fname);

$lname = stripslashes($lname);
$lname = mysql_real_escape_string($lname);

$phone = stripslashes($phone);
$phone = mysql_real_escape_string($phone);


$sql="SELECT * FROM $tbl_name WHERE FirstName='$fname' and LastName='$lname' and phone='$phone'";
echo $sql;
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count<111){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["lname"] = $lname;
$_SESSION["login"] = true;
$row = mysql_fetch_array($result);
$_SESSION["id"] = $row["id"];
header("location:http://ninjagen.com/test/Site%20and%20Code/product3.php");
}
else {
//header("location:wrongpass.php");
echo "Wrong credentials";
}

ob_end_flush();
?>