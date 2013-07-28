<?php
  if(isset($_POST['submit'])) {
		foreach($_POST as $key => $value) {
			$key = explode("-", $key);
			$key = end($key);
			$key = explode("submit", $key);
			$key = end($key);
		
			if($_POST['quantity-' .$key] == 0){
				unset($_SESSION['cart'][$key]);
				echo "unset session";
			}else {
				$_SESSION['cart'][$key]['quantity'] = $value;
				echo "update session";
			}
		}
	} 
?>
<h1> View Cart </h1>
<a href = "shoppingcart.php?page=products"> Go Back to Products Page!!</a>
	<form method="POST" action="shoppingcart.php?page=cart">
	
		<table>
			<tr>
				<th> Name </th>
				<th> Quantity </th>
				<th> Price </th>
				<th> Total </th>
			</tr>
			<?php
				mysql_select_db("c43711") or die(mysql_error());	
		
				$sql = "SELECT * FROM products_tbl WHERE id_product IN (";
					
					foreach($_SESSION['cart'] as $id => $value) {
						$sql .= $id. ",";
					}

					$sql = substr($sql, 0, -1).") ORDER BY id_name ASC";
					$query = mysql_query($sql) or die(mysql_error()) ;
					$totalprice = 0;
					if(!empty($query)){
						while ($row = mysql_fetch_array($query)) {
							$subtotal = $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'];
							$totalprice += $subtotal;
							?>
				
								<tr>
									<td> <?php echo $row['id_name']; ?> </td>
									<td> <input type="text" name="quantity-<?php echo $row['id_product'];?>" size="4" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity']; ?>" /> </td>
									<td> <?php echo "$" . $row['price']; ?> </td>
									<td> <?php echo "$" . $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'] . ".00"; ?> </td>
								</tr>
					
							<?php
						}
					}else {
						echo "<i>You need to add items for them to be vissible here.</i>";
					}
				?>
				<tr>
					<td></td>
					<td></td>
					<td></td> 
					<td> Total Price: <? php echo $totalprice ?> </td>
				</tr>

		
	</table>
	<br />
	<input type="Submit" name="Submit" value="Update Cart" />
</form>

<p> To remove an item, set quantity to 0! </p>
