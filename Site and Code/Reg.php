<?php
ob_start();
session_start();
$host="localhost"; // Host name
include 'auth.php';

$db_name="sac"; // Database name
$tbl_name="users"; // Table name
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db($db_name)or die("cannot select DB");
// Define $myusername and $mypassword
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phonenum'];
$email = $_POST['email'];
$age = $_POST['b18'];

// To protect MySQL injection (more detail about MySQL injection)
$fname = stripslashes($fname);
$fname = mysql_real_escape_string($fname);

$lname = stripslashes($lname);
$lname = mysql_real_escape_string($lname);

$phone = stripslashes($phone);
$phone = mysql_real_escape_string($phone);

$email = stripslashes($email);
$email = mysql_real_escape_string($email);

$cert1 = 0;
$cert2 = 0;
$cert3 = 0;
$cert4 = 0;







// Connect to server and select database.
$sql="SELECT * FROM users WHERE FirstName='$fname' and LastName='$lname' and phone='$phone'";

$query  = "SELECT * FROM users WHERE FirstName='$fname' and LastName='$lname' and phone='$phone'";
$result = mysql_query($query);
$rows = mysql_num_rows($result);
	if ($email == "" || $rows > 0){
		//header("location:http://www.silentgen.com/exists.php");
		echo "sorry it exists, Try just logging in";
		die();
	}



$sql="INSERT INTO `sac`.`users` (`ID`, `FirstName`, `LastName`, `phone`, `email`, `cert1`, `cert2`, `cert3`, `cert4`, `clearance`, `is18`) VALUES (NULL, '$fname', '$lname', '$phone', '$email', '$cert1', '$cert1', '$cert1', '$cert1', '3', '$age')";
mysql_query($sql);
header("location:http://ninjagen.com/test/Site%20and%20Code/index.php");
ob_end_flush();
?>