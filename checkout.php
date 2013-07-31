



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">






        <head> 
                <title>Member Login</title>
                <link rel="stylesheet" href="http://codd.cs.gsu.edu/~c43711/Final_Project/css/shop.css" />
        <head>

        <body>

<div id="wrapper">
  <div id="menu-wrapper">
  	<div id="menu" class="container">
			<ul>
				<li><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/main.php">Home</a></li>

				<li><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/login.php">Login</a></li>
				<li><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/registration.php">Register</a></li>
				<li><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/shoppingcart.php">Shopping Cart</a></li>
				<li><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/contact.php">Contact Us</a></li>
				<li><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/about.php">About Us</a></li>
		  <li><a href="http://codd.cs.gsu.edu/~c43711/Final_Project/logout.php">Log Out</a></li>

			</ul>
		</div>
	</div>


                

                <br />
                <form name="info" action="ordercomplete.php" method="POST">
                        <table border="0" align="center" width="50%" height="30%" >


<div id="logo" class="container">
		<h1>Check Out!</h1>
	</div>

                                




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
                                        <td colspan='2'><b>Please fill out all of the fields:</b></td>
                                </tr>

                                <tr>
                                        <td> Enter full name: </td>
                                        <td><input type="text" name="fullname" /></td>
                                </tr>

                                <tr>
                                        <td> Enter billing address: </td>
                                        <td><input type="text" name="billing" /></td>
                                </tr>


				 <tr>
                                        <td> Enter shipping address: </td>
                                        <td><input type="text" name="shipping" /></td>
                                </tr>


				 <tr>
                                        <td> Enter CC #: </td>
                                        <td><input type="text" name="card" /></td>
                                </tr>


				<tr>
                                        <td> Enter expiration date: </td>
                                        <td><input type="text" name="card2" /></td>
                                </tr>

				<tr>
                                        <td> Enter CVC: </td>
                                        <td><input type="text" name="security" /></td>
                                </tr>

                                <tr>
                                        <td> </td>
                                        <td><input type="Submit" class="button" name="button1" value="Submit Your Order!" /></td>
                                </tr>

                                                        </table>
                </form>


                <br />
                <br />

                <br />
             



        </body>


<html>
                                  
