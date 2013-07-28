<?php

  //start session	
	session_start();
	
	//connect to database
	require_once('connection.php');

	//store validation errors
	$errmsg_arr = array();
	$errflag = false;

	//clean the post values
	$username = $_POST['loginName'];
	$password = $_POST['loginPassword'];

	//validate user input
	if($username == ''){
		$errmsg_arr[] = 'Username left blank!!';
		$errflag = true;

	}

	if($password == ''){
		$errmsg_arr[] = 'Password left blank!!';
		$errflag = true;

	}

	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}

	//create a query
	$query = "SELECT * FROM usertbl_fp WHERE username = '$username' AND password = '$password'";
	$result = mysql_query($query);


	if($result){

		if(mysql_num_rows($result) > 0){

			//login was succcesful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_USER_NAME'] = $member['username'];
			$_SESSION['SESS_USER_PASSWORD'] = $member['password'];
			session_write_close();
			header("location: main1.php");
			exit();
		}else{
			//login wasn't successful
			$errmsg_arr[] = 'User name and Password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: login.php");
				exit();

			}
		

		}
	}else {
		die("Query failed");
	}


?>
