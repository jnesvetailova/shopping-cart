<?php

  $mysql_hostname ="localhost";
	$user = "c43711";
	$pass = "1db23";
	$db="c43711";
	$bd = mysql_connect($mysql_hostname, $user, $pass) or die("Could not connect to database");
	mysql_select_db($db, $bd) or die("Could not select database!!");


?>
