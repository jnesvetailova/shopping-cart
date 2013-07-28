<?php
  	if(isset($_GET['action']) && $_GET['action'] == "add"){
		
			$id = intval($_GET['id']);

			if(isset($_SESSION['cart'][$id])) {
			
				$_SESSION['cart'][$id]['quantity']++;
		
			}else {
		 		mysql_select_db('c43711') or die("unable to connect");

				$sql_s = "SELECT * FROM products_tbl WHERE id_product={$id}";
				$query_s = mysql_query($sql_s);

				//debugging code
				if(!$query_s) {
					$message = 'Invalid query: ' . mysql_error();
					$message .= 'whole query : ' . $query_s;
					die($message);
				}
						
				if(mysql_num_rows($query_s) != 0){
					$row_s = mysql_fetch_array($query_s);
					$_SESSION['cart'][$row_s['id_product']] = array("quantity" => 1, "price" => $row_s['price']);

					
				} else{
					$message = "The product id is invalid!";
				}
			}
		}

?>


	<h1 > Product List </h1>
	<?php
		
		if(isset($message)){
			echo '<h2>' .$message. '</h2>';
		}
		echo print_r($_SESSION['cart']);
	?>
				
				<table>	
					<tr>
						<th> Name</th>
						<th> Description</th>
						<th> Price</th>
						<th> Action</th>
					</tr>

					<?php
						mysql_connect('localhost', 'c43711', '1db23', 'c43711');
						mysql_select_db('c43711');
						$sql = mysql_query('SELECT * FROM products_tbl ORDER BY id_name ASC');

					if(!$sql) {
						die('Invalid query: ' . mysql_error());
					}
					
					//while($row = mysql_fetch_array($sql)){


					while($row = mysql_fetch_assoc($sql)){
					
					?>

					<tr>
						<td> <?php echo $row['id_name']; ?> </td>
						<td> <?php echo $row['description']; ?> </td>
						<td> <?php echo "$" .$row['price']; ?> </td>
						<td> <a href="http://codd.cs.gsu.edu/~c43711/Final_Project/shoppingcart.php?page=products&action=add&id=<?php echo $row['id_product']; ?>">Add to cart</a> </td>
					</tr>
			
					<?php
					
					}

					?>
				</table>
			
