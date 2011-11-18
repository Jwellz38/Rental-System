<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />


</head>
<?php
include 'auth.php'; //to change login, please authenticate 
   			$sql="SELECT * FROM `inventory` WHERE `req_cert` =  '' ORDER BY `id` asc;";
   			$sql2="SELECT * FROM `inventory` WHERE `req_cert` <>  '' ORDER BY `id` asc;";

   			$result=mysql_query($sql);
   			$result2=mysql_query($sql2);


?>
<script language="javascript">
function changeValue(textObject,delta, max){
var myVal = parseInt(textObject.value);
   if (myVal == NaN) {
      myVal = 0;
   } else {
   myVal = myVal + delta;
   }
/* check that value is not negative */
if (myVal < 0) {
   myVal = 0;
   }
 if(myVal > max){
 myVal = max;
 alert("You can't take more than "+ max +" of this item")
 }
textObject.value = myVal;
return;
}
</script>
<body>
<div id="container">
	<div id="top">
		<div id="header">
			<div id="title">
				<h1 class="font font-shadow"><span>Sacramento State </span>Aquatic <span> Center </span></h1>
			</div>

			<div id="nav">
				<ul class="font">
					<li class="navbox font-shadow"><a href="#">Cancel and Logout</a></li>
					<li class="navbox font-shadow"><a href="#">Get Help</a></li>
				</ul>
			</div>
		</div>

		<div id="descrip">
			<h2 class="font font-shadow">Welcome</h2>
		</div>
	</div>

	<div id="columns">
		<div id="main">
			
<form name="first">

			<div class="col box" align="center">
				<h3 class="font">Certified Equipment</h3>
<? while($rows = mysql_fetch_array($result2)){
echo '<div class="rowbox">'?>
<img class="alignleft" src="<? echo $rows["img_address"]?>" width="140px" height="100px" />
<? echo 	"<strong>".$rows["name"]."</strong>";?><div class="alignright">$<? echo $rows["regular_price"];?>/hr</div>
				<br/>
		<?	echo	$rows["description"];?> <br/>
<input type="button" value="-" onclick="javascript:changeValue(document.first.<? echo	str_replace(" ","",$rows["name"]);?>,-1,<? echo $rows[quantity]; ?>);return false;">
<input type="text" name="<? echo	str_replace(" ","",$rows["name"]);?>" value="0" size="2" maxlength="3">
<input type="button" value="+" onclick="javascript:changeValue(document.first.<? echo	str_replace(" ","",$rows["name"]);?>,1,<? echo $rows[quantity]; ?>);return false;">
			<? echo	'</div> <!-- the div that will loop -->';
						echo	'<br/>';
;}?>	

				</div>

			<div class="col box" align="center">
				<h3 class="font">Non Certified Equipment</h3>
				<div  align="left">
<? while($rows = mysql_fetch_array($result)){
echo '<div class="rowbox">'?>
<img class="alignleft" src="<? echo $rows["img_address"]?>" width="140px" height="100px" />
<? echo 	"<strong>".$rows["name"]."</strong>";?><div class="alignright">$<? echo $rows["regular_price"];?>/hr</div>
				<br/>
		<?	echo	$rows["description"];?> <br/>
<input type="button"  value="-" onclick="javascript:changeValue(document.first.<? echo	str_replace(" ","",$rows["name"]);?>,-1,0);return false;">
<input type="text" name="<? echo	str_replace(" ","",$rows["name"]);?>" value="0" size="2" maxlength="3">
<input type="button" value="+" onclick="javascript:changeValue(document.first.<? echo	str_replace(" ","",$rows["name"]);?>,1,<? echo $rows[quantity]; ?>);return false;">
			<? echo	'</div> <!-- the div that will loop -->';
						echo	'<br/>';
;}?>	
</div></div>
<center><input class="button" type="button" value="submit" align="left">
</center>
</form>
			</div>	
			
		</div>
	<div id="footer" >
		<div class="footerbox">
		<font color="red"></font>
		Sacramento State Aquatic Center
		</font>

		</div>
	</div>
</div>

</div>

</body>
</html>