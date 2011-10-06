<?php
   $host="localhost"; // Host name
   $username="root"; // Mysql username
   $password="5t3v3j0b5Apple!@#"; // Mysql password
   $db_name="sac"; // Database name
   
   
   			// Connect to server and select databse.
   			mysql_connect("$host", "$username", "$password")or die("cannot connect");
   			mysql_select_db("$db_name")or die("cannot select DB");
   
   			$sql="SELECT * FROM `inventory` ORDER BY `id` DESC;";
   			$result=mysql_query($sql);

			while($rows = mysql_fetch_array($result)){				

			echo 	$rows["name"] . '<div class="alignright">' . $rows["regular_price"] .'</div>';

			}
?>