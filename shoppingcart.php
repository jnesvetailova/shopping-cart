  </head

	<body>

		<div id="container">
			<div id="main">

				<?php require($_page . ".php"); ?>
			</div>

			<div id="sidebar">
				<h1> Cart </h1>

				<?php 
					//mysql_select_db("c43711");


				if(isset($_SESSION['cart'])) {
				
					$sql = "SELECT * FROM products_tbl WHERE id_product IN (";
				
					foreach($_SESSION['cart'] as $id => $value) {
						$sql .= $id . ",";
					}

					$sql = substr($sql, 0, -1). ") ORDER BY id_product ASC";
					$query = mysql_query($sql);

					if(!$query){
						die(mysql_error());
					}
					if (!empty($query)) {

						while ($row = mysql_fetch_assoc($query)){

						?>
							<p><?php echo $row['id_name']; ?><?php echo " x " .$_SESSION['cart'][$row['id_product']]['quantity']; ?></p>

						<?php
						}
					} else{
						echo "You need to add an item to your cart";
					}

					?>
					<a href="http://codd.cs.gsu.edu/~c43711/Final_Project/shoppingcart.php?page=cart"> Go to Cart!</a>
					<?php


					} else{
						echo "<p> Your Cart is Empty. </p>";
					}	
				?>
			</div>

		</div>
	</body>
</html>
