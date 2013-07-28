  <?php
		//Start Session
		session_start();
	
		$conn = mysql_connect("localhost", "c43711", "1db23", "c43711");
		
		//connect to mysql
		if (! $conn){
			die('Could not connect to mysql' .mysql_error());
		}

		echo 'Connected successfully <br />';


		unset($_SESSION['SESS_MEMBER_ID']);
		unset($_SESSION['SESS_USER_NAME']);
		unset($_SESSION['SESS_USER_PASSWORD']);
		

	?>


<html>
	<head> 
		<title> Member Login </title>
		<link rel="stylesheet" href="http://codd.cs.gsu.edu/~c43711/Final_Project/css/main.css" />
	<head>

	<body bgcolor="#CCFFCC">
		<div id="heading">
			<h1> Sign In!!!!! </h1>
		</div>


		<br />
		<form name="loginform1" action="loginexec.php" method="POST">
			<table border="0" align="center" width="50%" height="30%" >
				<h2 align='center'> Welcome back!!!!!! If you have an account, go ahead and sign in!!!! </h2>

				<tr>
					<td colspan='2'>
						<?php
							if(isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0) {
								echo '<ul class = "err">';
								foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
									echo '<li>', $msg, '</li>';
								}
							echo '</ul>';
							unset($_SESSION['ERRMSG_ARR']);
							}
						?>
				<tr>
					<td colspan='2'> Please enter username and password!! </td>
				</tr>
		
				<tr>
					<td> Enter Username: </td> 
					<td><input type="text" name="loginName" /></td>
				</tr>
	
				<tr>
					<td> Enter Password: </td> 
					<td><input type="password" name="loginPassword" /></td>
				</tr>
	
				<tr>
					<td> </td>
					<td><input type="Submit" name="button1" value="Sign In Now!" /></td>
				</tr>
	
				<tr>
					<td colspan="2"> Not a User! <a href="http://codd.cs.gsu.edu/~c43711/Final_Project/registration.php"> Click here to create an account!</a> </td>
				</tr>

			</table>
		</form>


		<br />
		<br />

		<br />
		<div class="maincontainer">
			<table border="0">
				<p>Customer Support!!</p>
				<tr><td><a href="contact.php" >Contact Us</a></td><td></td></tr>
				<tr><td><a href="" >Shipping</a></td></tr>
				<tr><td><a href="" >Returns</a></td></tr>
				<tr><td><a href="aboutus.php" >About Us</a></td></tr>
				<tr><td><a href="main.php" >Home</a></td></tr>
			</table>
		</div>
	

	
	</body>


<html>
