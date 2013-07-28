<?php
  require_once('authentication.php');
	

	
?>

<html>
	<head> 
		<title> Trendy Women's Clothing, Juniors, Shoes & Dresses: Company Name </title>
		<link rel="stylesheet" href="http://codd.cs.gsu.edu/~c43711/Final_Project/css/main.css" />
		<link rel="stylesheet" href="http://codd.cs.gsu.edu/~c43711/Final_Project/css/main.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<style type="text/css">
			.style1{
				font-size: 18px;
				font-weight: bold;
			}
		</style>

	</head>

	<body>
		<h1 id="comName"> Company Name </h1>
		<p align="center" class="style1"> Login successful! Start Shopping! </p>

		<div class="topcorner"><?php echo "Welcome Back!!!!"; ?> <a href="registration.php"</a>Click Here to Open Your Profile</div>
		<div class="undertopcorner"><a href="shoppingcart.php">Shopping Cart</a></div>

		<div class="middle">
			<table border='1' align="center" width="100%">
				<tr>
					<th>Inventory!!!!</th>
					<th>Images!!!</th>
				</tr>
			
				<tr>
					<td><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/shoes.php">Shoes</a></td>
					<td><img src="http://codd.cs.gsu.edu/~c43711/Final_Project/images/chocolate_gift_shoes.jpg" height="100" width="100" /></td> 
				</tr>
		
				<tr>
					<td><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/shoes.php">Dresses</a></td>
					<td><img src="http://codd.cs.gsu.edu/~c43711/Final_Project/images/dresses.jpg" height="100" width="100" /></td>
				</tr>

		
				<tr>	
					<td><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/shoes.php">Accessories</a></td>
					<td><img src="http://codd.cs.gsu.edu/~c43711/Final_Project/images/accessories.jpg" height="100" width="100" /></td>
				</tr>

			</table>
		</div>
		<div>
			<p>



			</p>
</div>


		</div>
		<div class="maincontainer">
			<div id="container1">
				<table align="center">
					<tr><th>Customer Support!!</th></tr>
					<tr><td><a href="contact.php" >Contact Us</a></td></tr>
					<tr><td><a href="" >Shipping</a></td></tr>
					<tr><td><a href="" >Returns</a></td></tr>
					<tr><td><a href="aboutus.php" >About Us</a></td></tr>
					<tr><td><a href="main.php" >Home</a></td></tr>
				</table>
			</div>


			<div id="container2">
				<table align="center">
					<tr><th>Stores Near You!!</th></tr>
					<tr><td>Clothes Lane Mall</td></tr>
					<tr><td>International Blvd Outlet</td></tr>
					<tr><td>Lakeshore Mall</td></tr>
					<tr><td>Lenox Shopping Center</td></tr>
				</table>
			</div>
		</div>



	</body>

</html>
