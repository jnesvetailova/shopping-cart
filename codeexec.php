<?php
  session_start();
	include('connection.php');
	$fullname = $_POST['newuserReg'];
	$username1 = $_POST['newuserUserName'];
	$email = $_POST['newuserEmail'];
	$password1 = $_POST['newuserPass'];

	mysql_query("INSERT INTO usertbl_fp(name, username, email, password) VALUES('$fullname', '$username1', '$email', '$password1')");
	header("location: main1.php?remarks=sucess");
	mysql_close($con);



?>
