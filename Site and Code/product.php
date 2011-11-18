<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Equipments</title>
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
			<h2 class="font font-shadow">Rental Options</h2>
		</div>
	</div>

	<div id="columns">
		<div id="main">
			
<?php
include 'auth.php'; //to change login, please authenticate 
   			$sql="SELECT * FROM `inventory` ORDER BY `id` asc;";
   			$result=mysql_query($sql);

?>
			
			<div class="col2 box" align="center">
				<h3 class="font">Step 2) Take your pick</h3>
<? while($rows = mysql_fetch_array($result)){				
			echo	'<div id="row" ><div class="rowbox">'
				?><img class="alignleft" src="<? echo $rows["img_address"]?>" width="140px" height="100px" />
			<? echo 	$rows["name"];?><div class="alignright">$<? echo $rows["regular_price"];?>/hr</div>
				<br/>
		<?	echo	$rows["description"];
			echo	'<br/>';
			?>
					<input type="text" name="<? echo $rows["id"];  ?>" id="<?  ?>" placeholder="Who will go in here?" />
			
			<br/>
			<?
			echo	'</div></div> <!-- the div that will loop -->';
			 ;}?>	
	 			</div> <!-- this is the main div -->
				</div>
					</div>

	<div id="footer" >
		<div class="footerbox">
		<font ></font>
		Sacramento Aquatic Center
		</font>

		</div>
	</div>
</div>


<?
				ob_end_flush();

?>
</body>
</html>