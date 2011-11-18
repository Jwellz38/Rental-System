<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<?php
error_reporting(0);
session_start();
if(!$_SESSION["login"]){
print '<script type="text/javascript">';
print 'alert("You need to login first")';
print '</script>';  echo '<meta http-equiv="REFRESH" content="0;url=index.php">';
die();
}
?>
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
			<h2 class="font font-shadow">Contract</h2>
		</div>
	</div>

	<div id="columns">
		<div id="main">
<?php
include 'auth.php'; //to change login, please authenticate 

?>

			<div class="col box" align="center">
				<h3 class="font">Side 2</h3>
			<blockquote>
<ul>I. the undersigned, contract to utilize equipment provided by or associated with the Sacramento State Aquatic Center. I UNDERSTAND THAT SUCH USE OF EQUIPMENT CAN INCLUDE HAZARDOUS ACTIVITIES WHICH MAY EXPOSE ME TO CERTAIN RISKS OF INJURY SUCH AS LACERATIONS, PULLS, STRAINS, FRACTURES, CONCUSSIONS, LOSS OF LIMB, DROWNING AND EVEN DEA TH. I AM FREEL Y AND VOLUNT ARIL Y P ARTICIP A TING IN THE USE OF EQUIPMENT FOR THESE ACTIVITIES</ul>
<ul>WITH THE KNOWLEDGE OF THE DANGER INVOLVED AND HEREBY AGREE TO ASSUME AND ACCEPT ANY AND ALL RISK OF INJURY OR DEATH.</ul>
<ul>I agree to indemnify, defend, and save harmless the State, the Trustees of the California State University, Chancellor, and California State University Sacramento, their officers, agents and employees of each of them (all of which are hereinafter referred to as "State"), and Associated Students, Inc. from any and all loss, damage, or liability that may be suffered or incurred by State or other said parties, caused by, arising out of, or in any way connected with my participation in the activities utilizing equipment provided by or associated with the Sacramento State Aquatic Center. This includes, without limitation, damage to or destruction of any property or injury or death to any person.</ul>
<ul>I HA VE CAREFULL Y READ THESE TERMS AND FULL Y UNDERSTAND THEIR CONTENT. I AM AWARE THAT THIS IS A RELEASE OF LIABILITY AND A CONTRACT BETWEEN MYSELF AND THE RELEASEES AND SIGN IT OF MY OWN FREE WILL. A PARENT OR LEGAL GUARDIAN MUST SIGN FOR PERSONS UNDER 18 YEARS OF AGE.</ul>
			</blockquote>
	Name<input type="text">18?<input type="checkbox"><br/>
	Name<input type="text">18?<input type="checkbox"><br/>
	Name<input type="text">18?<input type="checkbox"><br/>
	Name<input type="text">18?<input type="checkbox"><br/>

		</div>

			<div class="col box" align="center">
				<h3 class="font">Side 1</h3>
				    <blockquote>
				  <ul>I understand that it is my responsibility to wear a life vest at all times when operating Sacramento State Aquatic Center equipment on the water.</ul>
<ul>I understand that it is my responsibility, as a user of the Sacramento State Aquatic Center, to check the equipment listed below to make sure that the equipment 1 am using is in safe and working condition prior to, during and after the period of loan.</ul>
<ul>I assume full responsibility for any and all damage or injury resulting from the equipment or use of the equipment. The Sacramento State Aquatic Center does not assume liability for such damage and/or injury.</ul>
<ul>I assume full responsibility for the equipment listed below and agree to reimburse the Sacramento State Aquatic Center for repair or replacement of all lost or damaged items.</ul>
<ul>I understand that it is my responsibility to return and put away the equipment on time and to be sure it is clean and still in proper working order.</ul>
<ul>I understand that penalty fees may be assessed against me for failure to meet the standards as specified above. This includes a late fee or $20.00 for each half hour past the specified closing time
<ul>I have read and understand the terms and conditions on both sides of this contract.</ul>
				   <? echo $_SESSION["id"]?>
				   
				    </blockquote>
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