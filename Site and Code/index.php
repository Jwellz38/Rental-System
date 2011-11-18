<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<div id="container">
	<div id="top">
		<div id="header">
			<div id="title">
				<h1 class="font font-shadow">Sacramento<span>Aquatic</span>Center</h1>
			</div>

			<div id="nav">
				<ul class="font">
					<li class="navbox font-shadow"><a href="#">home</a></li>
					<li class="navbox font-shadow"><a href="#">about</a></li>
					<li class="navbox font-shadow"><a href="#">contact</a></li>
				</ul>
			</div>
		</div>

		<div id="descrip">
			<h2 class="font font-shadow">Welcome</h2>
		</div>
	</div>

	<div id="columns">
		<div id="main">
<?php
include 'auth.php'; //to change login, please authenticate 

?>

			<div class="col box" align="center">
				<h3 class="font">Returning Customer</h3>
  <form method="post" ACTION="login.php">
  				First Name<br/><input type="text" id="fname" name="fname" />
  				<br/>
				Last Name<br/><input type="text" id="lname" name="lname" />
				<br/>
				Phone Number<br/><input type="text" id="phonenum" name="phonenum" />
				<br/>
				<br/>
				<INPUT TYPE="submit" VALUE="Go" />
				<input TYPE="button" VALUE="Password?"onclick="javascript:document.location='lostpass.php'; return false; "/>
	</form>	
	</div>

			<div class="col box" align="center">
				<h3 class="font">New Customer</h3>
				    <form method="post" action="Reg.php" name="register" id="register">
				    First Name <br/><input type="text" id="fname" name="fname" ><br/>
				   	Last Name <br/><input type="text" id="lname" name="lname" ><br/>
					Email <br/> <input type="text" id="email" name="email"><br/>
					Phone Number <br/> <input type="text" id="phonenum" name="phonenum"><br/>
					<input type="checkbox" id="b18">Check if 18
					<br/>
					<br/>
					<input class="button" type="submit" value="Submit">
					<input class="button" type="reset" value="Clear">
					</form>

			</div>
		</div>
		

	<div id="footer" >
		<div class="footerbox">
		<font color="red"></font>
		Sacramento Aquatic Center
		</font>

		</div>
	</div>
</div>



</body>
</html>