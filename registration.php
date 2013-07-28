<html>
  <head>
		<title> New User Registration </title>
		<link rel="stylesheet" href="http://codd.cs.gsu.edu/~c43711/Final_Project/css/mainregistration.css" />

		<script type = "text/javascript">
			function validateRegistration(){
				var a = document.forms["form1"]["newuserReg"].value;
				var b = document.forms["form1"]["newuserUserName"].value;
				var c = document.forms["form1"]["newuserEmail"].value;
				var d = document.forms["form1"]["newuserPass"].value;
				var e = document.forms["form1"]["newuserConPass"].value;

				if(d != e){
					alert("Passwords don't match!");
					return false;
				}
				
				if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
  				{
  					  alert("All Fields must be filled out");
					  return false;
				 }
				if (a==null || a=="")
  				{
  					alert("Name must be filled out");
  					return false;
  				}
				if (b==null || b=="")
  				{
					 alert("Username must be filled out");
					 return false;
				  }
				if (c==null || c=="")
				  {
					  alert("Email must be filled out");
					  return false;
				  }
				if (d==null || d=="")	  
				{
  					alert("Password must be filled out");
  					return false;
  				}
				if (e==null || e=="")
  				{
  				alert("Confirmation must be filled out");
 				 return false;
  				}	
				if(validateEmail() == false) {
					return false;
				}
		}

			function validateEmail(){
				var x = document.forms["form1"]["newuserEmail"].value;
				var atSymbol = x.indexOf("@");
				var dotSymbol = x.lastIndexOf(".");
				if (atSymbol<1 || dotSymbol<atSymbol+2 || dotSymbol+2>=x.length){
		  			alert("Not a valid e-mail address");
		  			return false;
  				}
			}	
				

					
		</script>

	</head>

	<body>
		<div id="heading">
			<h1> New User Registration </h1>
		</div>

			
		<div id="container">
			<div id="main">
				<form name="form1" id="form1" action="codeexec.php" method="POST" onsubmit="return validateRegistration()">
					<table>
						<tr>
							<th colspan="2">Create New Accouunt Now!!!</th>
						</tr>

						<tr>
							<td colspan="2">
								<div align="center">
									<?php
										$remarks = $_GET['remarks'];
										if( $remarks == null and $remarks == ""){
											echo "Register Here';
										} 
										if( $remarks == 'success'){
											echo "Registration Sucess!!!";
										} 

									?>
								</div>
							</td>

							
						</tr>
	
						<tr>
							<td>Please Enter Your Full Name: </td> 
							<td><input type="text" name="newuserReg"/></td> 
						</tr>
 
						<tr>
							<td>Please Enter a UserName: </td> 
							<td><input type="text" name="newuserUserName"/></td> 
						</tr>

						<tr>
							<td>Please Enter Email Address: </td> 
							<td><input type="text" name="newuserEmail"/></td> 
						</tr>

						<tr>
							<td>Please Enter a Password: </td> 
							<td><input type="password" name="newuserPass"/></td> 
						</tr>

						<tr>
							<td>Please Confirm your Password: </td> 
							<td><input type="password" name="newuserConPass"/></td> 
						</tr>	

						<tr>
							<td> </td> 
							<td> <input type="Submit" name="Submit1" value="Create New Account!!" /></td>
						</tr>
		
						<tr>
							<td colspan="2"> Already a User?????<a href="http://codd.cs.gsu.edu/~c43711/Final_Project/login.php"> Click Here to Login!!</a></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

		
			<div id="main1">
					<table>
						<tr><th>Customer Support!!!</th></tr>
						<tr><td><a href="">Home!</a></td></tr> 
						<tr><td><a href="">Product List!</a></td></tr>
						<tr><td><a href="">Contact Us!</a></td> </tr>
						<tr><td><a href="">Login!</a></td></tr>
						<tr><td><a href="">Find a Location Near You!</td></tr>
					</table>
			</div>
	</body>

</html>
